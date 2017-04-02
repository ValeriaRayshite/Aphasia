<!DOCTYPE html>
<html lang="ru">
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
                <li><a href="{{ URL::route('section', array('lang'=>'ru', 'unit'=>$rootOfSection->slug)) }}">{{ $rootOfSection->section_ru }}</a></li>
            @endforeach
            @else
                <li><a href="{{ URL::route('section', array('lang'=>'ru', 'unit'=>$unit)) }}">{{ $rootOfSections }}</a></li>
            @endif
            

            @foreach ($items as $item) 
            <li id='active'><a href="{{ URL::route('article', array('lang'=>'ru', 'unit'=>$item->section, 'slug'=>$item->slug)) }}">{{ $item->title_ru }}</a></li>
            @endforeach

            <li><a href="{{ URL::route('article', array('lang'=>'ru', 'unit'=>$item->section, 'slug'=>'contact')) }}"">Связаться с нами</a></li>

            <li><a href="{{ $url }}">English version</a></li>
        </ul>
    </nav>
    {{ HTML::image("img/logo-min.png", "Logo", array('id' => 'logo', 'onclick' => 'openNav()')) }}

    <div id="content">
      @yield('content')
    </div>
   
    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="{{ URL::route('section', array('lang'=>'ru', 'unit'=>'About-the-problem-of-aphasia')) }}">О ПРОБЛЕМЕ<br> АФАЗИИ</a>
        <a href="{{ URL::route('section', array('lang'=>'ru', 'unit'=>'For-professionals-and-students')) }}">СПЕЦИАЛИСТАМ<br>И СТУДЕНТАМ</a>
        <a href="{{ URL::route('section', array('lang'=>'ru', 'unit'=>'For-patients-and-their-families')) }}">ПАЦИЕНТАМ И<br>ИХ БЛИЗКИМ</a>
        <a href="{{ URL::route('section', array('lang'=>'ru', 'unit'=>'About-the-project')) }}">О ПРОЕКТЕ</a>
    </div>
    <footer><div>2017 &copy; all rights reserved.</div></footer>
    {{ HTML::script('js/right-menu.js') }}
</body>

</html>