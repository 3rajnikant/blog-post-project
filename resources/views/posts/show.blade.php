@extends('layouts.master')
@section('content')
 <div class="col-sm-9 blog-main">
	<div>
		<h1>
			{{$post->title}}
		</h1>
			<h3>{{$post->body}}</h3>
			<h6>{{$post->created_at->toFormattedDateString()}}</h6>

	 </div>
	 <hr>
	 <div class="comments">
		 <ul class="list-group">
		 	@foreach($post->comments as $comment)
			 	<article>
					<li class="list-group-item">
						<strong>
							{{$comment->created_at->diffForHumans()}}: &nbsp;
						</strong>
			 			{{$comment->body}}	
			 		</li>
			 	</article>
		 	@endforeach
		 </li>
	 </div>
	 <hr>
	<div class="card container">
	<hr>
		<div class="card-block">
			<form method="POST" action='{{asset("/posts/{$post->id}/comments")}}'>
			{{csrf_field()}}
				<div class="form-group">
					<textarea name="body" placeholder="your comments here " class="form-control">
						
					</textarea>
				</div>
				<div class="form-group">
			  	<button type="submit" class="btn btn-primary">Add Comments</button>
			</div>
			</form>
			@include('layouts.errors ')
		</div> 
	</div>


</div>
@endsection