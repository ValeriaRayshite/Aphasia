@extends('dashboard.layout')


@section('content')
   {!! Form::open (['route' => 'store', 'method' => 'post']) !!}
   
    	<fieldset id="en">
		<h2>En</h2>
		 
		{!! Form::text('Title', null, array('placeholder'=>'Title')) !!} <br>

	
		{!! Form::text('First letter', null, array('placeholder'=>'First letter')) !!}<br>

	
		{!! Form::textarea('Content', null, array('placeholder'=>'Content', 'rows'=>'10')) !!}<br>
    	</fieldset>

    	<fieldset id="ru">
		<h2>Ru</h2>
		{!! Form::text('Title', null, array('placeholder'=>'Title')) !!}<br>

		
		{!! Form::text('First letter', null, array('placeholder'=>'First letter')) !!}<br>

		
		{!! Form::textarea('Content', null, array('placeholder'=>'Content', 'rows'=>'10')) !!}<br>
	
    	</fieldset>
  
   
	{{ Form::submit('Save') }}
   
	{!! Form::close() !!}







@endsection