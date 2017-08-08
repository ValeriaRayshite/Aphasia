<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
		table {
			border-collapse: collapse;
		}
		td {
			border: 1px #000 solid;
			padding: 5px;
		}
	</style>
</head>
<body>

<table>
	<tr>
		<td>Name</td>
		<td>{{ $input['name'] }}</td>
	</tr>
	<tr>
		<td>You are</td>
		<td>{{ $input['you'] }}</td>
	</tr>
	<tr>
		<td>Email</td>
		<td>{{ $input['email'] }}</td>
	</tr>
	<tr>
		<td>Age of patient</td>
		<td>{{ $input['age'] }}</td>
	</tr>
	<tr>
		<td>Diagnosis</td>
		<td>{{ $input['diagnosis'] }}</td>
	</tr>
	<tr>
		<td>Dominant hand</td>
		<td>{{ $input['handedness'] }}</td>
	</tr>
	<tr>
		<td>Education</td>
		<td>
			@foreach ( $input['education'] as $educations )
				{{ $educations }}<br>
			@endforeach
		</td>
	</tr>
	<tr>
		<td>Profession</td>
		<td>{{ $input['profession'] }}</td>
	</tr>
	<tr>
		<td>Native language</td>
		<td>{{ $input['native'] }}</td>
	</tr>
	<tr>
		<td>Ability of speaking foreign languages</td>
		<td>{{ $input['languages'] }}</td>
	</tr>
	<tr>
		<td>Does person suffer from any other speech or language disorders?</td>
		<td>
			@foreach ( $input['disorders'] as $disorder )
				{{ $disorder }}<br>
			@endforeach
		</td>
	</tr>
	<tr>
		<td>Concomitant diseases (diabetes, epilepsy, deafness, mental illness, other disorders that predated to the disease leading to speech impairment)</td>
		<td>{{ $input['comorbidities'] }}</td>
	</tr>
	<tr>
		<td>Behavior in general</td>
		<td>
			@if (array_key_exists('behavior1', $input))
				{{ $input['behavior'] }} <br> {{ $input['behavior1'] }}
			@else 
				{{ $input['behavior'] }}
			@endif
		</td>
	</tr>
	<tr>
		<td>Does the person understands simple request or question («Give me your hand», «What are you doing?»)</td>
		<td>{{ $input['understanding'] }}</td>
	</tr>
	<tr>
		<td>Do other can understand speech of person?</td>
		<td>{{ $input['understandable'] }}</td>
	</tr>
	<tr>
		<td>Does the person can read?</td>
		<td>{{ $input['reading'] }}</td>
	</tr>
	<tr>
		<td>Does the person can write?</td>
		<td>{{ $input['writing'] }}</td>
	</tr>
	<tr>
		<td>Is there strange thing in behavior (inappropriate laughter, crying, inappropriate reactions, etc.)?</td>
		<td>
			@if (array_key_exists('reaction1', $input))
				{{ $input['reaction1'] }}
			@else 
				{{ $input['reaction'] }}
			@endif
		</td>
	</tr>
	<tr>
		<td>More information</td>
		<td>{{ $input['information'] }}</td>
	</tr>
	
</table>
	
</form>

</body>
</html>



     

