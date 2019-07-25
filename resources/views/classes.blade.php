<!DOCTYPE html>
<html>
<head>
	<title>classses</title>
</head>
<body>
	<table border=1>
		<thead>
			<th>ID</th>
			<th>NAME</th>
			<th>teacher name</th>
			<th>najor</th>
			<th>max student</th>
		</thead>
		<tbody>
			@foreach($classes as $key => $value)
			<tr style="background: {{$value->id % 2 ? 'yellow' : 'green' }}">
				<td> {{$value->id}}</td>
				<td> {{$value->name}}</td>
				<td> {{$value->teacher_name}}</td>
				<td> {{$value->major}}</td>
				<td> {{$value->max_student}}</td>
			</tr>
			@endforeach

		</tbody>
	</table>
</body>
</html>