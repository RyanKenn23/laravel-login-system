@extends('layout')










@section('content')
<section id="banner">

</section>

 

	
		
    <div class="container">
    @forelse($articles as $article)
    <hr>      
        <h2 >Article Title: <a href="">{{$article->title}}</a></h2> 
   
       
				
            
			

            <h3>Article Excerpt:{{$article->excerpt}}</h3>

			<h3>Article Body:{{$article->body}}</h3>

            <h3>Article Author:{{$article->author}}</h3>

            <h3>Author id :{{$article->user_id}}</h3>
          
            <h1 style="text-decoration:underline;">Replys</h1>
             

             @foreach($article->reply as $reply)
             

            <h3>{{$reply->Content}}</h3>
            @endforeach
            
           
           

            <hr>

		
		
        @empty
        <div class="inner">
        <h2>No relevant articles yet</h2>
        </div>
       
		
		
        @endforelse
        
        </div>








@endsection