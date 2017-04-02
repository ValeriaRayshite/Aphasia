@extends('dashboard.layout')


@section('content')
    {!! Form::open(['save']) !!}
		{!! Form::label('email', 'E-Mail Address') !!}
		{!! Form::text('username') !!}
    
	{!! Form::close() !!}






@endsection