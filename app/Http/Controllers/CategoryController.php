<?php

namespace App\Http\Controllers;

use App\Model\Category;

// use Illuminate\Http\Request;

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
}
