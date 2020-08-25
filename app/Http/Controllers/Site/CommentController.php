<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Comment;

class CommentController extends Controller
{
    public function addComment(Request $request, $id)
    {
    	$request->merge([
    		'article_id' => $id,
    	]);
    	Comment::create($request->all());
    	return back();
    }
}
