@extends('en.layout')


@section('content')

	@foreach ($rootOfSections as $rootOfSection) 
    	<p>{!!  $rootOfSection->content_en !!}</p>
	@endforeach
    
@endsection 
