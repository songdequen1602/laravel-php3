<?php 
dd($products); die;
 ?>
@foreach($products as $val)
@foreach($val->connectComments as $comment)
<p>{{$comment->title}}</p>
@endforeach
@endforeach
@extends('admin.master')

@section('title' , 'Products - Furnicom - Administration')
@section('style')

@endsection
@section('content') 
<div class="table-responsive">
	<table class="table table-bordered">
		<thead>
			<tr>
				<th scope="col">ID</th>
				<th scope="col">Name</th>
				<th scope="col">Price Old</th>
				<th scope="col">Price New</th>
				<th scope="col">Cate Name</th>
				<th scope="col">Short Desc</th>
				<th scope="col">Detail</th>
				<th scope="col">Image</th>
				<th scope="col">Tags</th>
				<th scope="col">Rating</th>
				<th scope="col">Sells</th>
				<th scope="col">Status</th>
				<th scope="col">Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach($products as $val)
			<tr>
				<th scope="row">{{$val->id}}</th>
				<td>{{$val->name}}</td>
				<td>{{$val->price_old}}</td>
				<td>{{$val->price_new}}</td>
				<td>{{$val->cate_id}}</td>
				<td><p class="text2line">{{$val->short_desc}}</p></td>
				<td><p class="text2line">{{$val->detail}}</p></td>
				<td><img src="{{ asset($val->image) }}" style="width: 80px; height: 80px; object-fit: contain;"></td>
				<td>{{$val->tags}}</td>
				<td>{{$val->rating}}</td>
				<td>{{$val->sells}}</td>
				<td>
					@if($val->active == 1)
					Active
					@else 
					None Active
					@endif
				</td>  
				<td>
					<a href="{{route('adproducts.edit' , $val->id)}}">Edit</a>
					<a data-toggle="modal" data-target="#exampleModal" href="{{route('adproducts.remove' , $val->id)}}">Delete</a>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Are you want to delete this product?</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				Click Continue to delete. <br>
				Click Close to cancel.
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<a type="button" class="btn btn-primary" href="{{route('adproducts.remove', ['id' => $val->id])}}">Continue</a>
			</div>
		</div>
	</div>
</div>
@endsection