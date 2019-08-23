
@extends('admin.master')

@section('title' , 'Edit - Administration')
@section('style')
<style type="text/css">
.form-check.form-check-inline{
	display: inline-block;
}

</style>
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
<form class="reviews-form" action="{{route('adcomments.update')}}" method="post">
	@csrf
	<input type="hidden" name="id" value="{{$comment->id}}">
	<div class="form-group">
		<label>User Name</label>
		<input type="text" name="user_name" placeholder="Your Name" class="form-control" value="{{$comment->user_name}}">
	</div>
	<div class="form-group">
		<label>Title</label>
		<input type="text" name="title" placeholder="Your Title" class="form-control" value="{{$comment->title}}">
	</div>
	<div class="form-group">
		<label style="display: block;">Your Review</label>
		<textarea placeholder="Your Review" name="message" style="width: 100%;">{{$comment->message}}</textarea>
	</div>
	<div class="form-check form-check-inline">
		<label class="form-check-label" for="inlineRadio1">
			Bad
		</label>
		<input class="form-check-input" type="radio" name="star_rate" value="1" 
		@if($comment->star_rate == 1)
		<?php echo "checked"; ?>
		@endif
		/>
	</div>
	<div class="form-check form-check-inline">
		<input class="form-check-input" type="radio" name="star_rate" id="inlineRadio2" value="2"
		@if($comment->star_rate == 2)
		<?php echo "checked"; ?>
		@endif
		/>
	</div>
	<div class="form-check form-check-inline">
		<input class="form-check-input" type="radio" name="star_rate" id="inlineRadio2" value="3"
		@if($comment->star_rate == 3)
		<?php echo "checked"; ?>
		@endif
		/>
	</div>
	<div class="form-check form-check-inline">
		<input class="form-check-input" type="radio" name="star_rate" id="inlineRadio2" value="4"
		@if($comment->star_rate == 4) 
		<?php echo "checked"; ?>
		@endif
		/>
	</div>

	<div class="form-check form-check-inline">
		<input class="form-check-input" type="radio" name="star_rate" id="inlineRadio3" value="5"
		@if($comment->star_rate == 5)
		<?php echo "checked"; ?>
		@endif
		/>
		<label class="form-check-label" for="inlineRadio3">Good</label>
	</div>
	<button class="form-control btn btn-danger" type="submit" style="width: 100px; display: block;">Submit</button>
</form>

@endsection
