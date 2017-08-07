@extends('dashboard.layout')

@section('content')
<?php $i=1 ?>
<table>
    @foreach ($articles as $article)
			
			<tr>
				<td id="1">{{ $i++ }}</td>
				<td id="title">{{ $article->title_en}}</td>
				<td id="category">{{ $article->section }}</td>
				
				@if (URL::current() == 'http://aphasia.help/all')
				<td id="published">
					@if ($article->published == true)
					<img src="img/success1.png">
					@endif
				</td>
				@endif
				<td id="buttons"><a href="{{route('edit',$article->id)}}">Edit</a>

				{!! Form::open(['method' => 'DELETE', 'route' => ['delete', $article->id]]) !!}
            	{!! Form::submit('Delete', ['id' => 'delete']) !!}
        		{!! Form::close() !!}

				</td>
		
			</tr>

	
	@endforeach
	</table>
@endsection


