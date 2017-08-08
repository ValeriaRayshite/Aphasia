@extends('ru.layout')


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

<script>
function showInputNamedEducation() {
    var other = document.getElementById("other");
    if (other.checked) {
       document.getElementById("hidden").style.display='block';
   } else {
       document.getElementById("hidden").style.display='none';
   } 
}

function showInputNamedSpeech() {
    var other = document.getElementById("other1");
    if (other.checked) {
       document.getElementById("hidden1").style.display='block';
   } else {
       document.getElementById("hidden1").style.display='none';
   } 
}

function showInputNamedBehavior() {
    var other = document.getElementById("other2");
    if (other.checked) {
       document.getElementById("hidden2").style.display='block';
   } else {
       document.getElementById("hidden2").style.display='none';
   } 
}

function showInputNamedReaction() {
       document.getElementById("hidden3").style.display='block';
}

function hideInputNamedReaction() {
	document.getElementById("hidden3").style.display='none';
}
</script>


{!! Form::open (['route' => 'surveyRu', 'method' => 'POST']) !!}

	{{ csrf_field() }}


	{{ Form::label('name', 'Имя') }}
	{{ Form::text('name') }}
	

	{{ Form::label('you', 'Вы являетесь') }}
	{{ Form::radio('you', 'Patient') }} Пациент<br>
        {{ Form::radio('you', 'Relative or close person') }} Родственник или близкий человек<br>

	{{ Form::label('email', 'E-Mail') }}
	{{ Form::text('email') }}


	{{ Form::label('age', 'Возраст пациента') }}
	{{ Form::text('age') }}


	{{ Form::label('diagnosis', 'Диагноз') }}
	{{ Form::text('diagnosis') }}
     

    {{ Form::label('handedness', 'Ведущая рука') }}
    {{ Form::radio('handedness', 'Правша') }} Правша<br>
    {{ Form::radio('handedness', 'Левша') }} Левша<br>
    {{ Form::radio('handedness', 'Амбидекстр (способен одинаково действовать обеими руками)') }} Амбидекстр (способен одинаково действовать обеими руками)<br>


	{{ Form::label('education', 'Образование') }}
	{{ Form::checkbox('education[0]', 'Среднее') }} Среднее<br>
	{{ Form::checkbox('education[1]', 'Начальное профессиональное |  Средне-специальное') }} Начальное профессиональное |  Средне-специальное<br>
	{{ Form::checkbox('education[2]', 'Высшее') }} Высшее<br>
	{{ Form::checkbox('education[3]', 'Кандидатская или докторская степень') }} Кандидатская или докторская степень<br>
	{{ Form::checkbox('education', ' ', null, array('id' => 'other', 'onclick' => 'showInputNamedEducation()')) }} Другое<br>
	{{ Form::text('education[3]', null, array('id' => 'hidden', 'style' => 'display: none')) }}


	{{ Form::label('profession', 'Профессия') }}
	{{ Form::text('profession') }}
	

	{{ Form::label('native', 'Родной язык') }}
	{{ Form::text('native') }}
	

	{{ Form::label('languages', 'Знание других языков') }}
	{{ Form::text('languages') }}


	{{ Form::label('disorders[]', 'Страдал ли другими нарушениями речи?') }}
	
	{{ Form::checkbox('disorders[0]', 'Заикание') }} Заикание<br>
	{{ Form::checkbox('disorders[1]', 'Нарушения произношения («косноязычие», «картавость», нечеткое произношение и т.д.)') }} Нарушения произношения («косноязычие», «картавость», нечеткое произношение и т.д.)<br>
	{{ Form::checkbox('disorders[2]', ' ', null, array('id' => 'other1', 'onclick' => 'showInputNamedSpeech()')) }} Другое<br>
	{{ Form::text('disorders[3]', null, array('id' => 'hidden1', 'style' => 'display: none')) }}

	{{ Form::label('comorbidities', 'Сопутствующие заболевания (диабет, эпилепсия, глухота, психические заболевания, другие заболевания, которыми человек страдал до заболевания, приведшего к нарушению речи)') }}
	{{ Form::text('comorbidities') }}


	{{ Form::label('behavior', 'Общее поведение человека') }}
	{{ Form::radio('behavior', 'Большую часть времени лежит и спит', null, array('onclick' => 'hideInputNamedBehavior()')) }} Большую часть времени лежит и спит<br>
	{{ Form::radio('behavior', 'Большую часть времени проводит в постели, смотрит телевизор, читает, делает что-либо', null, array('onclick' => 'hideInputNamedBehavior()')) }} Большую часть времени проводит в постели, смотрит телевизор, читает, делает что-либо<br>
	{{ Form::radio('behavior', 'Иногда встает, ходит с посторонней помощью', null, array('onclick' => 'hideInputNamedBehavior()')) }} Иногда встает, ходит с посторонней помощью<br>
	{{ Form::radio('behavior', 'Встает, ходит самостоятельно, садится за стол', null, array('onclick' => 'hideInputNamedBehavior()')) }} Встает, ходит самостоятельно, садится за стол<br>
	{{ Form::radio('behavior', 'Ведет обычный образ жизни, ходит на работу, в магазин и т.д.', null, array('onclick' => 'hideInputNamedBehavior()')) }} Ведет обычный образ жизни, ходит на работу, в магазин и т.д.<br>

	{{ Form::checkbox('behavior1', ' ', null, array('id' => 'other2', 'onclick' => 'showInputNamedBehavior()')) }} Дополнительные сведения<br>
	{{ Form::text('behavior', null, array('id' => 'hidden2', 'style' => 'display: none')) }}
	

	{{ Form::label('understanding', 'Понимает ли человек обращенную к нему простую инструкцию или вопрос («Дай  руку», «Что делаешь?»)') }}
	{{ Form::radio('understanding', 'Понимает с первого раза') }} Понимает с первого раза<br>
	{{ Form::radio('understanding', 'Понимает частично и/или не с первого раза, требуется подсказка') }} Понимает частично и/или не с первого раза, требуется подсказка<br>
	{{ Form::radio('understanding', 'Не понимает') }} Не понимает<br>
	

	{{ Form::label('understandable', 'Понятна ли речь человека окружающим?') }}
	{{ Form::radio('understandable', 'Понятна полностью или почти полностью') }} Понятна полностью или почти полностью<br>
	{{ Form::radio('understandable', 'Понятна частично') }} Понятна частично<br>
	{{ Form::radio('understandable', 'Почти полностью непонятна') }} Почти полностью непонятна<br>
	{{ Form::radio('understandable', 'Совсем непонятна') }} Совсем непонятна<br>
	{{ Form::radio('understandable', 'Человек молчит') }} Человек молчит<br>
	


	{{ Form::label('reading', 'Может ли человек читать?') }}
	{{ Form::radio('reading', 'Да, понимает всё или почти всё') }} Да, понимает всё или почти всё<br>
	{{ Form::radio('reading', 'Да, но со значительным трудом') }} Да, но со значительным трудом<br>
	{{ Form::radio('reading', 'Нет') }} Нет<br>


	{{ Form::label('writing', 'Может ли человек писать?') }}
	{{ Form::radio('writing', 'Да') }} Да<br>
	{{ Form::radio('writing', 'Да, но со значительными трудностями, ошибками') }} Да, но со значительными трудностями, ошибками<br>
	{{ Form::radio('writing', 'Пишет, но ничего непонятно') }} Пишет, но ничего непонятно<br>
	{{ Form::radio('writing', 'Нет') }} Нет<br>


	{{ Form::label('reaction', 'Есть ли странности в поведении (неадекватный смех, плач, неадекватные реакции и т.д.)?') }}
	{{ Form::radio('reaction', 'Нет', null, array('onclick' => 'hideInputNamedReaction()')) }} Нет<br>
	{{ Form::radio('reaction', 'Да, ', null, array('onclick' => 'showInputNamedReaction()')) }} Дa<br>
	{{ Form::text('reaction', null, array('id' => 'hidden3', 'style' => 'display: none')) }}


	{{ Form::label('information', 'Дополнительные сведения и/или ваши вопросы') }}
	{{ Form::textarea('information', null, array('rows' => '10', 'cols' => '30')) }}
	
	
	{{ Form::submit('Отправить') }}
	
{{ Form::close() }}
    
@endsection 
