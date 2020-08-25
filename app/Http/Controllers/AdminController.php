<?php

namespace App\Http\Controllers;

use App\Model\Article;
use App\Model\Category;
use App\Model\User;
use App\Model\Tag;

// use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $articles   = Article::all();
        $users      = User::all();
        $tags      = Tag::all();
        return view('admin.index', compact('categories', 'articles', 'users','tags'));
    }
}
