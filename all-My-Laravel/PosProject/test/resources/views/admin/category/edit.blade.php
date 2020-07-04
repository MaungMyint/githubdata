@extends('main')
@section('content')
			<div class="shadow mb-4"><br>
					<form action="{{route('admin.category.update',$category->id)}}" method="post"enctype="multipart/	form-data" class="form-group">
							<h2 class="text-center">Category Edit Form</h2>
							@method('PATCH')
							@csrf 
							<label class="text-center text-info">Category</label><br>
							<input type="type" name="name"  value="{{$category->name}}" class="form-control"><br>
							<center><br>
								<input type="submit" name="" value="Update" class="btn btn-info">
							</center>	
					</form>
			
			</div>
@endsection