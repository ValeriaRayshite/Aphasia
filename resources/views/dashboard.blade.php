<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Document</title>
</head>
<body>
	@foreach($articles sa $article)
		<article>
			<h2>{{ $article->title }}</h2>
			<p>{{ $article->content }}</p>
		</article>
	@endforeach
</body>
</html>