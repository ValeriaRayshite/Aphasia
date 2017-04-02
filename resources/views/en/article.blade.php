@extends('en.layout')


@section('content')

	@foreach ($article as $article) 
    	{!! $article->content !!}
	@endforeach
    
@endsection 