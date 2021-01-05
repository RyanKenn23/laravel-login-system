<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Reply;

class ReplyController extends Controller
{
    public function create()
    {
      $article = Article::all();
      return view ('reply.create' ,['articles' => $article]);
    }

    public function store()
    {
        
       $reply = new Reply();
       if (request('article'))
       foreach(request('article')as $article)
       {
        $reply = new Reply();
      
        $reply->article_id = $article;
        
 
        $reply->Content = request('reply');
        $reply->save();
       }
      
       
       
      
       
   
       return redirect()->route('articles.index');
    }
}
