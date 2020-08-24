<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\DB;
use App\Model\Article;

// use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        Paginator::useTailwind();
    }
    public function showData()
    {
        // $articles   = DB::table('articles')->paginate(12);
        $articles = Article::paginate(12);
        $categories   = DB::table('categories')->get();
        return view('site.index', compact('categories', 'articles'));
    }
    public function showArticle($id)
    {
        // $articles   = DB::table('articles')->find($id);
        // $articless = Article::paginate(8);
        $article = Article::find($id);
        $articles   = Article::paginate(8);
        $categories   = DB::table('categories')->get();
        return view('site.showArticle', compact('categories', 'article','articles'));
    }
}
