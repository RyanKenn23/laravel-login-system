<!DOCTYPE HTML>
<!--
	Projection by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Projection by TEMPLATED</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="/assets/css/main.css" />
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

		
    </head>
    
    <!-- Header -->
			<header id="header">
				
						<a href="/">Home</a>
						<a href="{{route('articles.index')}}">Articles</a>
						<a href="{{route('articles.create')}}">Create an Article</a>
						<a href="{{route('reply.create')}}">Reply to an  Article</a>
						@if (Route::has('login'))
                     
                    @auth
					{{ __('You are logged in,') }} {{auth()->user()->name}} 
                    @else
                        <a href="{{route('login') }}" >Login</a>

                        @if (Route::has('register'))
                            <a href="{{route('register') }}" >Register</a>
                        @endif
                    @endif
                 @endif
					
                    
                 
                
                        
                   
                      
                   
                

					
					
				</div>
			</header>
			
	
 <body>
 
 @yield('content')

		 
</body>
<footer id="footer">
				<div class="inner">

					<h3>Get in touch</h3>

					

					<div class="copyright">
						&copy; Untitled. Design: <a href="https://templated.co">TEMPLATED</a>. Images: <a href="https://unsplash.com">Unsplash</a>.
					</div>

				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
</html>