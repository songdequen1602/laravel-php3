
@extends('site.master')

@section('title', 'Furnicom - Responsive Furniture & Interior HTML Template')

@section('content')
<div class="container">
<form action="{{route('user-register-post')}}" method="post">
	@csrf
	<div class="form-group">
		<label>Name</label>
		<input type="text" name="name" class="form-control">
	</div>

	<div class="form-group">
		<label>Email</label>
		<input type="text" name="email" class="form-control">
	</div>

	<div class="form-group">
		<label>password</label>
		<input type="password" name="password" class="form-control">
	</div>


	<div class="form-group">
		<label>Address</label>
		<textarea class="form-control" name="address">
			
		</textarea>
	</div>
	<div class="form-group">
		<label>Phone number</label>
		<input type="text" name="phone_number" class="form-control">
		
	</div>


	<button class="form-control btn btn-danger" type="submit">Submit</button>
</form>
</div>
@endsection