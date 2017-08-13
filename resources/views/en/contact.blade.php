@extends('en.layout')


@section('content')


@if (count($errors) > 0)
  
  <div class="alert alert-danger">
  	<ul>
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
@endif

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

    
@endsection 

