@extends('main')
@section('content')
		
		
	<h2 class="text-center">Category</h2>
		
		
	<form action="{{route('category.store')}}" method="post" enctype="multipart/form-data" class="form-group my-5" name="name">
		 @csrf 
		<input type="type" name="name" placeholder="Category name" class="form-control"><br>
<div class="container col-md-9"> 
		<input type="submit" class="btn btn-success" value="Save" >
</div><!-- 
	<div>
		<input type="submit" class="btn btn-warning btn-sm" value="Edit" >
		<input type="submit" class="btn btn-danger btn-sm" value="Delete" >
	</div> -->
	</form>
@endsection