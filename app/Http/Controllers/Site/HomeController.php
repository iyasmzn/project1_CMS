<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\DB;
use App\Model\Article;
use App\Model\Comment;

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
        $articles = Article::latest()->paginate(12);
        $categories   = DB::table('categories')->get();
        return view('site.index', compact('categories', 'articles'));
    }
    public function showArticle($slug)
    {
        // $articles   = DB::table('articles')->find($id);
        // $articless = Article::paginate(8);
        $article = Article::where('slug', '=', $slug)->first();
        // $article = Article::find(); 
        $articles   = Article::paginate(8);
        $comments   = Comment::where('article_id', '=', $article->id)->latest()->paginate(5);
        $categories   = DB::table('categories')->get();
        return view('site.showArticle', compact('categories', 'article','articles', 'comments'));
    }
}
