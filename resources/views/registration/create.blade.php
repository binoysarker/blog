@extends('layouts.master')
@section('content')
	{{-- expr --}}
	<div class="col-sm-8 blog-main">
		<form action="/register" method="POST" >
			{{csrf_field()}}
			<legend><h2>Registration </h2></legend>
			<fieldset class="form-group">
				<label for="name">Name</label>
				<input type="text" class="form-control" name="name" id="name" placeholder="Name" required="">
			</fieldset>
			<fieldset class="form-group">
				<label for="email">Email</label>
				<input type="email" class="form-control" name="email" id="email" placeholder="Email" required="">
			</fieldset>
			<fieldset class="form-group">
				<label for="email">Password</label>
				<input type="password" class="form-control" name="password" id="password" placeholder="Password" required="">
			</fieldset>
			<fieldset class="form-group">
				<label for="email">Confirmation Password</label>
				<input type="password" class="form-control" name="password_confirmation" id="password_confirmation" placeholder="Password" required="">
			</fieldset>
			<fieldset>
				<input type="submit" name="submit" class="btn btn-primary" value="Register" placeholder="">
			</fieldset>
		</form>

		{{-- displaying errors --}}
		@include('partials.errors')
	</div>
@endsection