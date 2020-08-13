<?php

namespace App\Http\Controllers;

use App\Model\Article;
use App\Model\Category;
use App\Model\User;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function __construct()
    {
        $this->model = new Article();
    }
    public function index()
    {
        $articles = $this->model->all();
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
        $this->model->create($request->all());
        return redirect(route('admin.articles.index'));
    }
    public function edit($id)
    {
        $articles = $this->model->find($id);
        return view(('admin.articles.edit'), compact('articles'));
    }
    public function update(Request $request, $id)
    {
        $articles = $this->model->find($id)->update($request->all());
        return redirect(route('admin.articles.index'));
    }
    public function delete($id)
    {
        $this->model->find($id)->delete();
        return redirect(route('admin.articles.index'));
    }
}
