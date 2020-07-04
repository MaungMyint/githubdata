@extends('backend.backend')
@section('mytable')
		<div class="container-fluid">
			<div class=" card shadow mb-4">
				<div class="card-header">
					<div class="card-title">Edit Post</div>
					<div class="card-body">

					<form action="{{route('admin.post.update',$post->id)}}" method="post" enctype="multipart/	form-data" class="form-group">
							<h2>Post Edit Form</h2>
							@method('PATCH')
							@csrf
							<label>Title</label>
							<input type="type" name="title" class="form-control" value="{{$post->title}}">
							<label>Body</label>
							<textarea name="body" class="form-control" >{{$post->body}}</textarea><br>
							<label>Image</label>
							<input type="file" name="image" class="form-control_file">
							<img src="{{$post->image}}" class="img-fluid">
							<input type="hidden" name="oldimage" value="{{$post->image}}"><br>
							<div class="form-group">
								<label> Choose category</label>
								<select class="form-control" name="category">
									@foreach($categories as $category)
									<option value="{{$category->id}}"
										@php 
										if($post->category_id==$category->id) echo"selected";

										 @endphp
										>{{$category->name}}
									</option>
									@endforeach
								</select>

							</div>
							<div class="form-group">
								<input type="submit" name="" value="Submit" class="form-control">
							</div>
	</form>


					 </div>
			</div>
			
		</div>
@endsection