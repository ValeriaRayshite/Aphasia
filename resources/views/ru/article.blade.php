@extends('ru.layout')


@section('content')

	@foreach ($article as $article) 
    	<p>{!!  $article->content_ru !!}</p>
	@endforeach
    
@endsection 