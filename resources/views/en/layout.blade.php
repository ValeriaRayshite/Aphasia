<!DOCTYPE html>
<html lang="en">
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
                <li><a href="{{ URL::route('section', array('lang'=>'en', 'unit'=>$rootOfSection->section)) }}">{{ $rootOfSection->title_en }}</a></li>
            @endforeach
           

	    @if ($unit == "For-professionals-and-students" || $unit == "For-patients-and-their-families") 
            	@foreach ($items_en as $item_en) 
            		<li id='active'><a href="{{ URL::route('article', array('lang'=>'en', 'unit'=>$item_en->section, 'slug'=>$item_en->slug)) }}">{{ $item_en->title_en }}</a></li>
            	@endforeach
	    @endif
            
            <li><a href="{{ URL::route('contact', array('lang'=>'en', 'unit'=>$unit)) }}">Contact us</a></li>
	    
	    @if ($url == true)
            	<li><a href="{{ $url }}">Русская версия</a></li>
	    @endif	    

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
