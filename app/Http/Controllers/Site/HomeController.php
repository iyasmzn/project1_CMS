<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
// use App\Model\Article;
use App\Model\Category;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\DB;

// use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        // $this->article  = new Article();
        $this->category = new Category();
        Paginator::useTailwind();
    }
    public function showData()
    {
        $categories = $this->category->all();
        $articles   = DB::table('articles')->paginate(9);
        return view('site.index', compact('categories', 'articles'));
    }
}
