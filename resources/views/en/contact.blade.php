@extends('en.layout')


@section('content')


{!! Form::open (['route' => 'contactensend', 'method' => 'POST']) !!}

	{{ Form::label('name', 'Name') }}
	{{ Form::text('name') }}


	{{ Form::label('email', 'E-Mail') }}
	{{ Form::text('email') }}


	{{ Form::label('message', 'Message') }}
	{{ Form::textarea('message', null, array('rows' => '10', 'cols' => '30')) }}


	{{ csrf_field() }}
	
	
	{{ Form::submit('Send') }}
	
{{ Form::close() }}
    
<form action="/contact" method="post">

	<label for="name">Name</label>
	<input type="text" name="name">

	<label for="email">E-Mail</label>
	<input type="text" name="email">

	<label for="message">Message</label>
	<input type="textarea" name="message">

	<input type="hidden" name="_Token" value="{{ csrf_token() }}">

	<input type="submit" value="Send">
	
</form>