@extends('main')
@section('content')	
	<h2 class="text-center">Unit form</h2>	
	<form action="{{route('admin.unit.store')}}" method="post">
		 @csrf 
		<div class="form-group">
		 	<label>Name:</label>
		 	<input type="type" name="name" placeholder="Unit name" class="form-control">
		</div>
		
		<div class="form-group"> 
			<input type="submit" class="btn btn-success" value="Save" >
		</div>
	</form>
@endsection