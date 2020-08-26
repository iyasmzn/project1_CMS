<?php

namespace App\Http\Controllers;

use App\Model\Article;
use App\Model\Category;
use App\Model\User;
use App\Model\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class ArticleController extends Controller
{
    public function __construct()
    {
        $this->model     = new Article();
        $this->imagePath = public_path('img');
    }
    public function index()
    {
        $this->authorize('viewAny', $this->model);

        if (Auth::user()->role == 'author') {
            $articles = $this->model->where('user_id', Auth::user()->id)->get();
        } else {
            $articles = $this->model->get();
        }

        return view('admin.articles.index', compact('articles'));
    }
    public function create()
    {
        $users      = User::all();
        $categories = Category::all();
        $tags = Tag::all();
        return view('admin.articles.create', compact('users', 'categories', 'tags'));
    }
    public function store(Request $request)
    {
        if ($request->image_file) {
            $request = $this->uploadImage($request);
        }
        $slug = Str::of($request['title'])->slug('-');
        $request->merge([
            'slug' => $slug,
        ]);
        $this->model->create($request->all());
        // $artt = $this->model->create($request->all());
        // $taggs = collect([]);
        // foreach ($request->tags as $tag) {
        //     if ($searchTag = Tag::where('name', '=', $tag)->first()) {
        //         $targetTag = $searchTag->id;
        //     } else {

        //         $targetTag = Tag::create([
        //             'name' => $tag,
        //         ])->id;
        //     }
        //     $taggs->push($targetTag);
        // }
        // $artt->tag()->sync($taggs);

        return redirect(route('admin.articles.index'));
    }
    public function edit($id)
    {
        $articles   = Article::all();
        $categories = Category::all();
        $tags       = Tag::all();
        $article    = $this->model->find($id);
        $articlee   = $article;
        return view(('admin.articles.edit'), compact('articles', 'article', 'categories', 'tags', 'articlee'));
    }
    public function update(Request $request, $id)
    {
        $model = $this->model->find($id);
        if ($request->image_file) {
            $this->removeImage($model->image);
            $request = $this->uploadImage($request);
        }
        $slug = Str::of($request['title'])->slug('-');
        $request->merge([
            'slug' => $slug,
        ]);
        $model->update($request->all());
        // $taggs = collect([]);
        // foreach ($request->tags as $tag) {
        //     if ($searchTag = Tag::where('name', '=', $tag)->first()) {
        //         $targetTag = $searchTag->id;
        //     } else {

        //         $targetTag = Tag::create([
        //             'name' => $tag,
        //         ])->id;
        //     }
        //     $taggs->push($targetTag);
        // }
        // $model->tag()->sync($taggs);
        return redirect(route('admin.articles.index'));
    }
    public function delete($id)
    {
        $model = $this->model->find($id);
        $this->removeImage($model->image);
        $model->delete();

        return redirect(route('admin.articles.index'));
    }
    public function uploadImage($request)
    {
        $img     = $request->file('image_file');
        $newName = time() . '.' . $img->GetClientOriginalExtension();
        $img->move($this->imagePath, $newName);
        $request->merge([
            'image' => $newName,
        ]);
        return $request;
    }
    public function removeImage($img)
    {
        $fullpath = $this->imagePath . '/' . $img;
        if ($img && file_exists($fullpath)) {
            unlink($fullpath);
        }
    }
}
