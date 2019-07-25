@extends('layout.master')
@section('title','admin page')
<h1>@section('table_name','Admins')</h1>
@section('content')
<table border=1>
	<thead>
		<th>ID</th>
		<th>NAME</th>
		<th>email</th>
	</thead>
	<tbody>
		<tr>
			<td>
				1
			</td>
			<td>
				Nv a
			</td>
			<td>
				example@gmail.com
			</td>
		</tr>
		<tr>
			<td>
				2
			</td>
			<td>
				Nv b
			</td>
			<td>
				example2@gmail.com
			</td>
		</tr>

	</tbody>
</table>
@endsection