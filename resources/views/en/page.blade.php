@extends('en.layout')


@section('content')

	@foreach ($rootOfSections as $rootOfSection) 
    	<p>{!!  $rootOfSection->content !!}</p>
	@endforeach
    
@endsection 