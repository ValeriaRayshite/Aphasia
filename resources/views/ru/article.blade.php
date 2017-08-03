@extends('ru.layout')


@section('content')

	@foreach ($article as $article) 
    		{!!  $article->content_ru !!}
	@endforeach
    
@endsection 
