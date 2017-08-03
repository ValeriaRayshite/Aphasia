@extends('en.layout')


@section('content')

	
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


{!! Form::open (['route' => 'surveyEn', 'method' => 'POST']) !!}

	{{ csrf_field() }}


	{{ Form::label('name', 'Name') }}
	{{ Form::text('name') }}
	

	{{ Form::label('you', 'You are') }}
	{{ Form::radio('you', 'Patient') }} Patient<br>
        {{ Form::radio('you', 'Relative or close person') }} Relative or close person<br>



	{{ Form::label('email', 'E-Mail') }}
	{{ Form::text('email') }}


	{{ Form::label('age', 'Age of patient') }}
	{{ Form::text('age') }}


	{{ Form::label('diagnosis', 'Diagnosis') }}
	{{ Form::text('diagnosis') }}
     

    {{ Form::label('handedness', 'Dominant hand') }}
    {{ Form::radio('handedness', 'Right') }} Right<br>
    {{ Form::radio('handedness', 'Left') }} Left<br>
    {{ Form::radio('handedness', 'Ambidexterity (able to use both hands)') }} Ambidexterity (able to use both hands)<br>
	

	{{ Form::label('education', 'Education') }}
	{{ Form::checkbox('education[0]', 'High-school') }} High-school<br>
	{{ Form::checkbox('education[1]', 'Trade | vocational | further') }} Trade | vocational | further<br>
	{{ Form::checkbox('education[2]', 'Graduate') }} Graduate<br>
	{{ Form::checkbox('education[3]', ' ', null, array('id' => 'other', 'onclick' => 'showInputNamedEducation()')) }} Other<br>
	{{ Form::text('education[3]', null, array('id' => 'hidden', 'style' => 'display: none')) }}


	{{ Form::label('profession', 'Profession') }}
	{{ Form::text('profession') }}
	

	{{ Form::label('native', 'Native language') }}
	{{ Form::text('native') }}
	

	{{ Form::label('languages', 'Ability of speaking foreign languages') }}
	{{ Form::text('languages') }}


	{{ Form::label('disorders[]', 'Does person suffer from any other speech or language disorders?') }}
	{{ Form::checkbox('disorders[0]', 'Stuttering') }} Stuttering<br>
	{{ Form::checkbox('disorders[1]', 'Disorder of pronunciation (speech sound disorders, articulation problems)') }} Disorder of pronunciation (speech sound disorders, articulation problems)<br>
	{{ Form::checkbox('disorders[2]', ' ', null, array('id' => 'other1', 'onclick' => 'showInputNamedSpeech()')) }} Other<br>
	{{ Form::text('disorders[2]', null, array('id' => 'hidden1', 'style' => 'display: none')) }}


	{{ Form::label('comorbidities', 'Concomitant diseases (diabetes, epilepsy, deafness, mental illness, other disorders that predated to the disease leading to speech impairment)') }}
	{{ Form::text('comorbidities') }}


	{{ Form::label('behavior', 'Behavior in general') }}
	{{ Form::radio('behavior', 'Most of the time lying and sleeping') }} Most of the time lying and sleeping<br>
	{{ Form::radio('behavior', 'Most of the time spending in the bed, watching TV, read, doing something') }} Most of the time spending in the bed, watching TV, read, doing something<br>
	{{ Form::radio('behavior', 'Sometimes stands up, walks with help') }} Sometimes stands up, walks with help<br>
	{{ Form::radio('behavior', 'Gets up, walks without help, sits at the table') }} Gets up, walks without help, sits at the table<br>
	{{ Form::radio('behavior', 'Leads a normal life, goes to work, to shop, etc.') }} Leads a normal life, goes to work, to shop, etc.<br>

	{{ Form::checkbox('behavior1', ' ', null, array('id' => 'other2', 'onclick' => 'showInputNamedBehavior()')) }} More information<br>
	{{ Form::text('behavior1', null, array('id' => 'hidden2', 'style' => 'display: none')) }}

	

	{{ Form::label('understanding', 'Does the person understands simple request or question («Give me your hand», «What are you doing?»)') }}
	{{ Form::radio('understanding', 'Understands the first time') }} Understands the first time<br>
	{{ Form::radio('understanding', 'Understands partially and/or does not understand the first time, a hint is needed') }} Understands partially and/or does not understand the first time, a hint is needed<br>
	{{ Form::radio('understanding', 'Does not understand') }} Does not understand<br>
	

	{{ Form::label('understandable', 'Do other can understand speech of person?') }}
	{{ Form::radio('understandable', 'Сompletely or almost completely understand') }} Сompletely or almost completely understand<br>
	{{ Form::radio('understandable', 'Partially understand') }} Partially understand<br>
	{{ Form::radio('understandable', 'Almost completely do not understand') }} Almost completely do not understand<br>
	{{ Form::radio('understandable', 'Fully do not understand') }} Fully do not understand<br>
	{{ Form::radio('understandable', 'The person is silent') }} The person is silent<br>
	

	{{ Form::label('reading', 'Does the person can read?') }}
	{{ Form::radio('reading', 'Yes, uderstands all or almost all') }} Yes, uderstands all or almost all<br>
	{{ Form::radio('reading', 'Yes, but with considerable difficulty') }} Yes, but with considerable difficulty<br>
	{{ Form::radio('reading', 'No') }} No<br>


	{{ Form::label('writing', 'Does the person can write?') }}
	{{ Form::radio('writing', 'Yes') }} Yes<br>
	{{ Form::radio('writing', 'Yes, but with considerable difficulty, mistakes') }} Yes, but with considerable difficulty, mistakes<br>
	{{ Form::radio('writing', 'Writes, but anything is unclear') }} Writes, but anything is unclear<br>
	{{ Form::radio('writing', 'No') }} No<br>


	{{ Form::label('reaction', 'Is there strange thing in behavior (inappropriate laughter, crying, inappropriate reactions, etc.)?') }}
	{{ Form::radio('reaction', 'No', 'null', array('onclick' => 'hideInputNamedReaction()')) }} No<br>
	{{ Form::radio('reaction', 'Yes', null, array('onclick' => 'showInputNamedReaction()')) }} Yes,<br>
	{{ Form::text('reaction1', null, array('id' => 'hidden3', 'style' => 'display: none')) }}


	{{ Form::label('information', 'More information and/or your questions') }}
	{{ Form::textarea('information', null, array('rows' => '10', 'cols' => '30')) }}
	
	
	{{ Form::submit('Send') }}
	
{{ Form::close() }}


@endsection 



    
	
	

	


	

