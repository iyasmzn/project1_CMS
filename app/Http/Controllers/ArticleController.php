<?php

namespace App\Http\Controllers;

use App\Model\Article;

// use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function __construct()
    {
        $this->model = new Article();
    }
    public function index()
    {
        $articles = $this->model->get();
        return view('admin.articles.index', compact('articles'));
    }
    public function create()
    {
        return view('admin.articles.create');
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
