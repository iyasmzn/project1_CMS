<?php

namespace App\Http\Controllers;

use App\Model\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->model = new Category();
    }
    public function index()
    {
        $categories = $this->model->get();
        return view('admin.categories.index', compact('categories'));
    }
    public function create()
    {
        return view('admin.categories.create');
    }
    public function store(Request $request)
    {
        $this->model->create($request->all());
        return redirect(route('admin.categories.index'));
    }
    public function edit($id)
    {
        $category = $this->model->find($id);
        return view(('admin.categories.edit'), compact('category'));
    }
    public function update(Request $request, $id)
    {
        $category = $this->model->find($id)->update($request->all());
        return redirect(route('admin.categories.index'));
    }
}
