@extends('layouts.master')
@section('content')
	{{-- expr --}}
	<div class="col-sm-8 blog-main">
		<form action="/login" method="POST" ">
			{{csrf_field()}}
			<legend><h2>Login </h2></legend>
			<fieldset class="form-group">
				<label for="email">Email</label>
				<input type="email" class="form-control" name="email" id="email" placeholder="Email" required="">
			</fieldset>
			<fieldset class="form-group">
				<label for="email">Password</label>
				<input type="password" class="form-control" name="password" id="password" placeholder="Password" required="">
			</fieldset>
			<fieldset>
				<input type="submit" name="submit" class="btn btn-primary" value="Register" placeholder="">
			</fieldset>
		</form>

		{{-- displaying errors --}}
		@include('partials.errors')
	</div>
@endsection