@extends('main')
@section('content')
		
		
	<h2 class="text-center">ITEMS</h2>
		<!-- @csrf --> 
		
	<form method="post" enctype="multipart/form-data" class="form-group my-5">
		<input type="type" name="name" placeholder="name"><br>
		<a href="" type="submit" class="btn-success">Save</a>

	</form>
@endsection