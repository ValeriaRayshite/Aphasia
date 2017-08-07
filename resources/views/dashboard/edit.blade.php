@extends('dashboard.layout')


@section('content')

@if (count($errors) > 0)
  <!-- Список ошибок формы -->
  <div class="alert alert-danger">
  	<ul>
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
@endif


{!! Form::model($article, ['method' => 'PATCH','route' => ['update', $article->id]]) !!}
     

   


    	<fieldset id="en">
		<h2>En</h2>
		 
		{!! Form::text('title_en', null, array('placeholder'=>'Title', 'class'=>'content')) !!} <br>
		{!! Form::textarea('content_en', null, array('placeholder'=>'Content', 'rows'=>'10', 'class'=>'content')) !!}<br>
    	</fieldset>

    	<fieldset id="ru">
		<h2>Ru</h2>
		{!! Form::text('title_ru', null, array('placeholder'=>'Title', 'class'=>'content')) !!}
		{!! Form::textarea('content_ru', null, array('placeholder'=>'Content', 'rows'=>'10', 'class'=>'content')) !!}<br>
    	</fieldset>
  
   
    {!! Form::select('section', ['About-the-problem-of-aphasia'=>'About the problem of aphasia', 
									 'For-professionals-and-students'=>'For professionals and students',
									 'For-patients-and-their-families'=>'For patients and their families',
									 'About-the-project'=>'About the project']) !!}
	
	<div id="checkbox">
	<input type="checkbox" id="published" name="published" value="1"/>
	<label for="published">Published</label>
	</div>

	{{ Form::submit('Add') }}
   
	{!! Form::close() !!}






@endsection
