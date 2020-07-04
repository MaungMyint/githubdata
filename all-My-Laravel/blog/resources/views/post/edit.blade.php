@extends('maintemplate')
@section('content')

<div class="col-md-8">
	<!-- @if($errors->any())
	<div class="alert alert-warning">
		<ul>
			@foreach($errors->all() as $error) 
			<li>{{$error}}</li>
			@endforeach
		</ul>

	</div>
	@endif -->

	<form action="{{route('post.update',$post->id)}}" method="post" enctype="multipart/form-data" class="form-group">
		<h2>Post Form</h2>
		@csrf
		@method('PATCH')
		<label>Title</label>
		<input type="text" name="title" class="form-control" value="{{$post->title}}">
		<label>Body</label>
		<textarea name="body" class="form-control">{{$post->body}}</textarea><br>
		<label>Image</label>
		<input type="file" name="image" class="form-control">
		<img src="{{$post->image}}" class="img-fluid">
		<input type="hidden" name="oldimage" value="{{$post->image}}"><br>
		<div class="form-group">
			<label>category</label>
			<select class="form-control" name="category">
				@foreach($categories as $category)
				<option value="{{$category->id}}">
					{{$category->name}}
				</option>
				@endforeach
			</select>

		</div>
		<div class="form-group">
			<input type="submit" name="" value="Submit" class="form-control">
		</div>
	</form>
</div>
@endsection