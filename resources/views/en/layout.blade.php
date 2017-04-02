<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    {{ HTML::style('css/right-menu.css') }}
    {{ HTML::style('css/page.css') }}
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Open+Sans+Condensed:300|Playfair+Display" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    {{ HTML::script('js/left-menu.js') }}
</head>
<body>
    <nav>
        <ul>
        
            @if ($unit != 'For-patients-and-their-families') 
                @foreach ($rootOfSections as $rootOfSection)
                <li><a href="{{ URL::route('section', array('lang'=>'en', 'unit'=>$rootOfSection->slug)) }}">{{ $rootOfSection->section }}</a></li>
            @endforeach
            @else
                <li><a href="{{ URL::route('section', array('lang'=>'en', 'unit'=>$unit)) }}">{{ $rootOfSections }}</a></li>
            @endif

            @foreach ($items as $item) 
            <li id='active'><a href="{{ URL::route('article', array('lang'=>'en', 'unit'=>$item->section, 'slug'=>$item->slug)) }}">{{ $item->title }}</a></li>
            @endforeach
            
            <li><a href="{{ URL::route('article', array('lang'=>'ru', 'unit'=>$item->section, 'slug'=>'contact')) }}"">Contact us</a></li>

            <li><a href="{{ $url }}">Русская версия</a></li>
        </ul>
    </nav>
    {{ HTML::image("img/logo-min.png", "Logo", array('id' => 'logo', 'onclick' => 'openNav()')) }}

    <div id="content">
      @yield('content')
    </div>
  
    
    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="{{ URL::route('section', array('lang'=>'en', 'unit'=>'About-the-problem-of-aphasia')) }}">ABOUT THE PROBLEM<br>OF APHASIA</a>
        <a href="{{ URL::route('section', array('lang'=>'en', 'unit'=>'For-professionals-and-students')) }}">FOR PROFESSIONALS<br>AND STUDENTS</a>
        <a href="{{ URL::route('section', array('lang'=>'en', 'unit'=>'For-patients-and-their-families')) }}">FOR PATIENTS<br>AND THEIR FAMILIES</a>
        <a href="{{ URL::route('section', array('lang'=>'en', 'unit'=>'About-the-project')) }}">ABOUT<br>THE PROJECT</a>
    </div>
    <footer><p>2017 &copy; all rights reserved.</p></footer>
    {{ HTML::script('js/right-menu.js') }}
</body>
</html>
