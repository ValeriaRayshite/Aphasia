@extends('ru.layout')


@section('content')

	@foreach ($rootOfSections as $rootOfSection) 
    	<p>{!!  $rootOfSection->content_ru !!}</p>
	@endforeach
    
@endsection 

