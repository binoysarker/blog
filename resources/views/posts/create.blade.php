@extends('layouts.master')
@section('content')
	{{-- expr --}}
	<div class="col-sm-8 blog-main">
		<form action="/posts" method="POST" ">
			{{csrf_field()}}
			<legend><h2>Create Post</h2></legend>
			<fieldset class="form-group">
				<label for="title">Title</label>
				<input type="text" class="form-control" name="title" id="title" placeholder="Title" required="">
			</fieldset>
			<fieldset class="form-group">
				<label for="body">Body</label>
				<textarea name="body" class="form-control" rows="5" id="body" required=""></textarea>
			</fieldset>
			<fieldset>
				<input type="submit" name="submit" class="btn btn-primary" value="Publish" placeholder="">
			</fieldset>
		</form>

		{{-- displaying errors --}}
		@include('partials.errors')
	</div>
@endsection