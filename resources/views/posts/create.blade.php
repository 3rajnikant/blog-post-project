@extends('layouts.master')

@section('content')

	<div class="col-sm-9 blog-main col-offset-sm-0 ">

		<h1>publish a post</h1>

		<form method="POST" action="{{ asset('/posts') }}">
			{{csrf_field()}}
			<div class="form-group">
			    <label for="title"> Title</label>
			    <input type="text" class="form-control" id="title" name="title">
			</div>


			<div class="form-group">
			    <label for="body">Body</label>
			    <textarea id="body" name="body" class="form-control"></textarea>
			</div>

			<div class="form-group">
			  	<button type="submit" class="btn btn-primary">Publish</button>
			</div>
		</form>

		@include('layouts.errors')
		
	</div>
@endsection
