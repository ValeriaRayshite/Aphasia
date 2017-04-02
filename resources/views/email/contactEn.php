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
		<td>Email</td>
		<td>{{ $input['email'] }}</td>
	</tr>

	<tr>
		<td>Message</td>
		<td>{{ $input['message'] }}</td>
	</tr>
	
</table>
	
</form>

</body>
</html>