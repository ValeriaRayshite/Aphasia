<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	{{ HTML::style('css/dashboard.css') }} 
	{{ HTML::script('js/tinymce/tinymce.min.js') }}
	{{ HTML::script('js/tinymce.js') }}
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script type="text/javascript" src="js/add-form-field.js"></script>
	
</head>
<body>
	<header>
		<nav>
    			
			<a href='{{ route('all') }}'>All articles</a>
			<a href='{{ route('published') }}'>Published</a>
			<a href='{{ route('unpublished') }}'>Unpublished</a>
			<a href='{{ route('add') }}'>Add new</a>
		</nav>
	</header>
	<div id="content">
      @yield('content')
    </div>
</body>
</html>



