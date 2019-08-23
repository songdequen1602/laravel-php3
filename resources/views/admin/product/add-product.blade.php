@extends('admin.master')

@section('title' , 'Add Products - Furnicom - Administration')
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
<form action="{{route('adproducts.create-post')}}" method="post">
	@csrf
	<div class="form-group">
		<label>Name</label>
		<input type="text" name="name" class="form-control">
	</div>

	<div class="form-group">
		<label>Old Price</label>
		<input type="text" name="price_old" class="form-control">
	</div>

	<div class="form-group">
		<label>New Price</label>
		<input type="text" name="price_new" class="form-control">
	</div>

	<div class="form-group">
		<label>CateGory</label>
		<select class="form-control" name="cate_id">
			@foreach($cate as $cate)
			<option value="{{$cate->id}}">{{$cate->name}}</option>
			@endforeach
		</select>
	</div>

	<div class="form-group">
		<label>Short Desc</label>
		<textarea class="form-control" name="short_desc">
			
		</textarea>
	</div>
	<div class="form-group">
		<label>Detail</label>
		<textarea class="form-control" name="detail">
			
		</textarea>
	</div>

	<input type="hidden" name="image" value="image/catalog/demo/products/product3.jpg">

	<button class="form-control btn btn-danger" type="submit">Submit</button>
</form>
@endsection