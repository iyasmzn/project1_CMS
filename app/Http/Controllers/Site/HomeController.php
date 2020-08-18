<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Model\Article;
use App\Model\Category;

// use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->article  = new Article();
        $this->category = new Category();
    }
    public function showData()
    {
        $categories = $this->category->all();
        $articles   = $this->article->all();
        return view('site.index', compact('categories', 'articles'));
    }
}
