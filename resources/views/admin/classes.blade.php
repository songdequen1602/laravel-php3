@extends('admin.master')

@section('title', 'Class Page')

@section('content')
<table border=1>
	<thead>
		<th>ID</th>
		<th>NAME</th>
		<th>email</th>
	</thead>
	<tbody>
<!-- 		<tr>
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
		</tr> -->
		@foreach($classes as $key => $value)
		<tr>
			<td> {{$value->id}}</td>
			<td> {{$value->name}}</td>
			<td> {{$value->teacher_name}}</td>
			<td> {{$value->major}}</td>
			<td> {{$value->max_student}}</td>
			<!-- <td><a href="@include('admin.class_detail' , {{$value->id}})">Detail</a></td> -->
		</tr>
		@endforeach
	</tbody>
</table>
<!-- @include('admin.class_detail') -->
@endsection