@extends('admin.master')

@section('title' , 'Comments - Furnicom - Administration')
@section('style')

@endsection
@section('content') 
<div class="table-responsive">
	<table class="table table-bordered">
		<thead>
			<tr>
				<th scope="col">ID</th>
				<th scope="col">User Name</th>
				<th scope="col">Title</th>
				<th scope="col">Message</th>
				<th scope="col">Product Name</th>
				<th scope="col">Star Rate</th>
				<th scope="col">Status</th>
				<th scope="col">Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach($comments as $val)
			<tr>
				<th scope="row">{{$val->id}}</th>
				<td>{{$val->user_name}}</td>
				<td>{{$val->title}}</td>
				<td>{{$val->message}}</td>
				<td>{{$val->product_id}}</td>
				<td>{{$val->star_rate}}</td>
				<td>
					@if($val->active == 1)
					Active
					@else 
					None Active
					@endif
				</td>  
				<td>
					<a href="{{route('adcomments.edit' , $val->id)}}">Edit</a>
					<a data-toggle="modal" data-target="#exampleModal" href="{{route('adcomments.remove' , $val->id)}}">Delete</a>
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
				<a type="button" class="btn btn-primary" href="{{route('adcomments.remove', ['id' => $val->id])}}">Continue</a>
			</div>
		</div>
	</div>
</div>
@endsection