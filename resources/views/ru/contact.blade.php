@extends('en.layout')


@section('content')


{!! Form::open (['route' => 'contactrusend', 'method' => 'POST']) !!}

	{{ Form::label('name', 'Имя') }}
	{{ Form::text('name') }}


	{{ Form::label('email', 'E-Mail') }}
	{{ Form::text('email') }}


	{{ Form::label('message', 'Сообщение') }}
	{{ Form::textarea('message', null, array('rows' => '10', 'cols' => '30')) }}


	{{ csrf_field() }}
	
	
	{{ Form::submit('Отправить') }}
	
{{ Form::close() }}
    
@endsection 

