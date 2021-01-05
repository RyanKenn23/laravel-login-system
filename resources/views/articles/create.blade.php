@extends('layout')





@section('content')
<section id="banner">
</section>




<h1> Create new article</h1>


<form method="POST" action="/articles">
@csrf

  <div class="form-group">
    <label for="Title">Article Title</label>
    <input type="text" class="input @error('title') border border-danger @enderror" class="form-control"  name="title" value = "{{old('title')}}">
    @error('title')
               <p class = "text-danger">{{ $message}}</p>
               @enderror
  </div>
  <div class="form-group">
    <label for="Excerpt">Article Excerpt</label>
    <textarea 
               class="textarea @error('excerpt') border border-danger @enderror" 
                name="excerpt"
                 id="excerpt"
                 > {{ old('excerpt') }}</textarea>
                 @error('excerpt')
               <p class = "text-danger">{{ $message}}</p>
               @enderror
    
    </div>

    <div class="form-group">
    <label for="Body">Article Body</label>
    <textarea 
               class="textarea @error('body') border border-danger  @enderror"  
               name="body" 
               id="body"
               >{{ old('body') }}</textarea>
               @error('body')
               <p class = "text-danger">{{ $message}}</p>
               @enderror
    
  </div>
  <div class="form-group">
  <label for ="Author">Author</label>
  <input type="text" name="author" value="{{auth()->user()->name}}">
  
  </div>

  <div class="form-group">
  <label for ="Authorid">Author id</label>
  <input type="text" name="user_id" value="{{auth()->user()->id}}">
  
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>


@endsection