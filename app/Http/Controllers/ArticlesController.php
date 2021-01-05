<?php

namespace App\Http\Controllers;
use App\Models\Article;
use App\Models\Reply;

use Illuminate\Http\Request;

class ArticlesController extends Controller
{
   public function index()
   {
       $articles = Article::all();
       $replies = Reply::all();
      

       return view('articles.index', compact('articles' ,'replies'));
   }

   public function create()
   {
    return view('articles.create');
   }

   public function store()
   {
       request()->validate([
         'title' => 'required',
        'excerpt' => 'required',
        'body' => 'required'
       ]);

       $article = new Article();
        $article->title = request('title');
       $article->excerpt = request('excerpt');
       $article->body = request('body');
       $article->author = request('author');
       $article->user_id = request('user_id');
       $article->save();

       return redirect('/articles');
   }
}
