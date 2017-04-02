<!DOCTYPE html>
<html lang="ru">
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
		<td>Имя</td>
		<td>{{ $input['name'] }}</td>
	</tr>
	<tr>
		<td>Вы являетесь</td>
		<td>{{ $input['you'] }}</td>
	</tr>
	<tr>
		<td>Email</td>
		<td>{{ $input['email'] }}</td>
	</tr>
	<tr>
		<td>Возраст пациента</td>
		<td>{{ $input['age'] }}</td>
	</tr>
	<tr>
		<td>Диагноз</td>
		<td>{{ $input['diagnosis'] }}</td>
	</tr>
	<tr>
		<td>Ведущая рука</td>
		<td>{{ $input['handedness'] }}</td>
	</tr>
	<tr>
		<td>Образование</td>
		<td>
			@foreach ( $input['education'] as $education )
				{{ $education }}<br>
			@endforeach
		</td>
	</tr>
	<tr>
		<td>Профессия</td>
		<td>{{ $input['profession'] }}</td>
	</tr>
	<tr>
		<td>Родной язык</td>
		<td>{{ $input['native'] }}</td>
	</tr>
	<tr>
		<td>Знание других языков</td>
		<td>{{ $input['languages'] }}</td>
	</tr>
	<tr>
		<td>Страдал ли другими нарушениями речи?</td>
		<td>
			@foreach ( $input['disorders'] as $disorder )
				{{ $disorder }}<br>
			@endforeach
		</td>
	</tr>
	<tr>
		<td>Сопутствующие заболевания (диабет, эпилепсия, глухота, психические заболевания, другие заболевания, которыми человек страдал до заболевания, приведшего к нарушению речи)</td>
		<td>{{ $input['comorbidities'] }}</td>
	</tr>
	<tr>
		<td>Общее поведение человека</td>
		<td>
			@if (array_key_exists('behavior1', $input))
				{{ $input['behavior'] }} <br> {{ $input['behavior1'] }}
			@else 
				{{ $input['behavior'] }}
			@endif
		</td>
	</tr>
	<tr>
		<td>Понимает ли человек обращенную к нему простую инструкцию или вопрос («Дай  руку», «Что делаешь?»)</td>
		<td>{{ $input['understanding'] }}</td>
	</tr>
	<tr>
		<td>Понятна ли речь человека окружающим?</td>
		<td>{{ $input['understandable'] }}</td>
	</tr>
	<tr>
		<td>Может ли человек читать?</td>
		<td>{{ $input['reading'] }}</td>
	</tr>
	<tr>
		<td>Может ли человек писать?</td>
		<td>{{ $input['writing'] }}</td>
	</tr>
	<tr>
		<td>Есть ли странности в поведении (неадекватный смех, плач, неадекватные реакции и т.д.)?</td>
		<td>
			@if (array_key_exists('reaction1', $input))
				{{ $input['reaction1'] }}
			@else 
				{{ $input['reaction'] }}
			@endif
		</td>
	</tr>
	<tr>
		<td>Дополнительные сведения</td>
		<td>{{ $input['information'] }}</td>
	</tr>
	
</table>
	
</form>

</body>
</html>