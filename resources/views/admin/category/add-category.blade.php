@extends('admin.master')

@section('title' , 'Add Category - Furnicom - Administration')
@section('style')

@endsection
@section('content')
@if($errors->any())
<div class="alert alert-danger">
	<ul>
		@foreach($errors->all() as $error)
		<li>{{$error}}</li>
		@endforeach
	</ul>
</div>
@endif
<form action="{{route('adcategories.create-category')}}" method="post">
	@csrf
	<div class="form-group">
		<label>Category Name</label>
		<input type="text" name="name" class="form-control">
	</div>

	<div class="form-group">
		<label>Short Desc</label>
		<textarea class="form-control" name="short_desc">
			
		</textarea>
	</div>
	<button class="form-control btn btn-danger" type="submit" style="width: 100px;">Submit</button>
</form>
@endsection