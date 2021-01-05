@extends('layout')





@section('content')
<section id="banner">
</section>




<h1>Reply to an Article</h1>

<form method="POST" action="/reply">

@csrf


     <div class="form-group">
    <label for="article">Select an article</label>
    
    <select  class="custom-select" name="article[]" id="article[]" multiple>
    @foreach ($articles as $article)
    <option  value="{{$article->id}}">{{$article->title}}</option>
    @endforeach
    </select>
   
 </div>
 <div class="form-group">
 <label for="reply">Whats your reply?</label>
 <input type="text" name="reply" class="input @error('reply') border border-danger @enderror">
 @error('reply')
               <p class = "text-danger">{{ $message}}</p>
               @enderror
 </div>
 <button type="submit" class="btn btn-primary">Submit</button>

</form>


@endsection

