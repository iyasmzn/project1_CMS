<?php

namespace App\Http\Controllers;

use App\Model\Article;
use App\Model\Category;
use App\Model\User;
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
        $articles = $this->model->get();
        return view('admin.articles.index', compact('articles'));
    }
    public function create()
    {
        $users      = User::all();
        $categories = Category::all();
        return view('admin.articles.create', compact('users', 'categories'));
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
        return redirect(route('admin.articles.index'));
    }
    public function edit($id)
    {
        $articles   = Article::all();
        $categories = Category::all();
        $users      = User::all();
        $article    = $this->model->find($id);
        return view(('admin.articles.edit'), compact('articles', 'article', 'categories', 'users'));
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
