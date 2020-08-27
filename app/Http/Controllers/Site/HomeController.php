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
        $popular = Article::orderBy('counter', 'desc')->take(10)->get();
        $mostPopular = Article::orderBy('counter', 'desc')->take(5)->get();
        $categories   = DB::table('categories')->take(4)->get();
        $tags   = DB::table('tags')->take(6)->get();
        return view('site.index', compact('categories', 'articles', 'popular', 'mostPopular', 'tags'));
    }
    public function showArticle($slug)
    {
        // $articles   = DB::table('articles')->find($id);
        // $articless = Article::paginate(8);        
        $article = Article::where('slug', '=', $slug)->first();
        $article->increment('counter');
        // $article = Article::find(); 
        // $articles   = Article::paginate(8);
        $comments   = Comment::where('article_id', $article->id)->latest()->paginate(5);
        $categories   = DB::table('categories')->take(4)->get();
        $populars = Article::orderBy('counter', 'desc')->take(8)->get();
        $relatedArticles = Article::where([['category_id', '=', $article->category_id], ['id', '!=', $article->id]])->paginate(8);
        $tags   = DB::table('tags')->take(6)->get();
        return view('site.showArticle', compact('categories', 'article','populars', 'comments', 'tags', 'relatedArticles'));
    }
}
