<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Aphasia.help</title>
    {{ HTML::style('css/right-menu.css') }}
    {{ HTML::style('css/page.css') }}
    <link href="https://fonts.googleapis.com/css?family=Old+Standard+TT|Open+Sans+Condensed:300&amp;subset=cyrillic" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    {{ HTML::script('js/left-menu.js') }}
    
    <!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter45577674 = new Ya.Metrika({
                    id:45577674,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/45577674" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

</head>
<body>
    <nav>
        <ul>
            
            @foreach ($rootOfSections as $rootOfSection)
                <li><a href="{{ URL::route('section', array('lang'=>'ru', 'unit'=>$rootOfSection->section)) }}">{{ $rootOfSection->title_ru }}</a></li>
            @endforeach
            

	    @if ($unit == "For-professionals-and-students" || $unit == "For-patients-and-their-families") 
	            @foreach ($items_ru as $item_ru) 
		            <li id='active'><a href="{{ URL::route('article', array('lang'=>'ru', 'unit'=>$item_ru->section, 'slug'=>$item_ru->slug)) }}">{{ $item_ru->title_ru }}</a></li>
            	    @endforeach
	    @endif

            <li><a href="{{ URL::route('contact', array('lang'=>'ru', 'unit'=>$unit)) }}"">Связаться с нами</a></li>

	    @if ($url == true)
	            <li><a href="{{ $url }}">English version</a></li>
	    @endif

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
