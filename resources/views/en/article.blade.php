@extends('en.layout')


@section('content')

	@foreach ($article as $article) 
    	{!! $article->content_en !!}
	@endforeach
    
@endsection 
