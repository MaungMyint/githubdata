@extends('maintemplate')
@section('content')

<div class="col-md-8">
	@if($errors->any())
	<div class="alert alert-warning">
		<ul>
			@foreach($errors->all() as $error) 
			<li>{{$error}}</li>
			@endforeach
		</ul>

	</div>
	@endif

	<form action="{{route('post.store')}}" method="post" enctype="multipart/form-data" class="form-group">
		<h2>Post Form</h2>
		@csrf
		<label>Title</label>
		<input type="text" name="title" class="form-control">
		<label>Body</label>
		<textarea name="body" class="form-control" ></textarea><br>
		<label>Image</label>
		<input type="file" name="image" class="form-control"><br>
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