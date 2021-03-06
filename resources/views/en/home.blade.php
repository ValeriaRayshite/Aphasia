
<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width">
	<meta charset="UTF-8">
	<title>Aphasia</title>
	<link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="css/home.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

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
<div id="lang-switch"><a href='{{ route('en') }}'>en</a> | <a href='{{ route('ru') }}'>ru</a></div>


<figure>
	{{ HTML::image("img/logo.png", "Logo", array( 'id' => "logo")) }}
	{{ HTML::image("img/one.png", "", array( 'id' => "one")) }}
	{{ HTML::image("img/two.png", "", array( 'id' => "two")) }}
	{{ HTML::image("img/three.png", "", array( 'id' => "three")) }}
</figure>

<nav>
	<ul>
	 
		<li><a href="{{ URL::route('section', array('lang'=>'en', 'unit'=>'About-the-problem-of-aphasia')) }}">ABOUT THE PROBLEM<br>OF APHASIA</a></li>
		<li><a href="{{ URL::route('section', array('lang'=>'en', 'unit'=>'For-professionals-and-students')) }}">FOR PROFESSIONALS<br>AND STUDENTS</a></li>
		<li><a href="{{ URL::route('section', array('lang'=>'en', 'unit'=>'For-patients-and-their-families')) }}">FOR PATIENTS<br>AND THEIR FAMILIES</a></li>
		<li><a href="{{ URL::route('section', array('lang'=>'en', 'unit'=>'About-the-project')) }}">ABOUT<br>THE PROJECT</a></li>
	</ul>
</nav>

	
</body>
</html>
