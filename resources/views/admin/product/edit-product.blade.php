@extends('admin.master')

@section('title' , 'Edit - Administration')
@section('style')

@endsection
@section('content')
<form action="{{route('adproducts.update')}}" method="post">
	@csrf
	<input type="hidden" name="id" value="{{$product->id}}">
	<div class="form-group">
		<label>Name</label>
		<input type="text" name="name" class="form-control" value="{{$product->name}}">
	</div>

	<div class="form-group">
		<label>Old Price</label>
		<input type="text" name="price_old" class="form-control" value="{{$product->price_old}}">
	</div>

	<div class="form-group">
		<label>New Price</label>
		<input type="text" name="price_new" class="form-control" value="{{$product->price_new}}">
	</div>

	<div class="form-group">
		<label>CateGory</label>
		<select class="form-control" name="cate_id">
			@foreach($cate as $cate)
			<option value="{{$cate->id}}"
				@if($cate->id == $product->cate_id)
				<?php echo "selected" ?>
				@endif 
				>{{$cate->name}}</option>
				@endforeach
			</select>
		</div>

		<div class="form-group">
			<label>Short Desc</label>
			<textarea class="form-control" name="short_desc" value="">
				{{$product->short_desc}}
			</textarea>
		</div>
		<div class="form-group">
			<label>Detail</label>
			<textarea class="form-control" name="detail" value="{{$product->detail}}">
				{{$product->detail}}
			</textarea>
		</div>

		<input type="hidden" name="image" value="image/catalog/demo/products/product3.jpg">

		<button class="form-control btn btn-danger" type="submit">Submit</button>
	</form>
	@endsection