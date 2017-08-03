<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Aphasia</title>
	<link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="css/home.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</head>

<body>
<div id="lang-switch"><a href='{{ route('en') }}'>en</a> | <a href='{{ route('ru') }}'>ru</a></div>
<figure>
	{{ HTML::image("img/logo.png", "Logo", array( 'id' => "logo")) }}
	{{ HTML::image("img/one.png", "", array( 'id' => "one")) }}
	{{ HTML::image("img/two.png", "", array( 'id' => "two")) }}
	{{ HTML::image("img/three.png", "", array( 'id' => "three")) }}
</figure>

<div>
	<ul class="nav">
	 
		<li><a href="{{ URL::route('section', array('lang'=>'en', 'unit'=>'About-the-problem-of-aphasia')) }}">ABOUT THE PROBLEM<br>OF APHASIA</a></li>
		<li><a href="{{ URL::route('section', array('lang'=>'en', 'unit'=>'For-professionals-and-students')) }}">FOR PROFESSIONALS<br>AND STUDENTS</a></li>
		<li><a href="{{ URL::route('section', array('lang'=>'en', 'unit'=>'For-patients-and-their-families')) }}">FOR PATIENTS<br>AND THEIR FAMILIES</a></li>
		<li><a href="{{ URL::route('section', array('lang'=>'en', 'unit'=>'About-the-project')) }}">ABOUT<br>THE PROJECT</a></li>
	</ul>
</div>

	
</body>
</html>
