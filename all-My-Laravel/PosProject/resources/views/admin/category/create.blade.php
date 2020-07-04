@extends('main')
@section('content')	
<div class="site-blocks-cover overlay" style="background-image: url('images/cart.jpg');">
	<h2 class="text-center">Category form</h2>	
	
	<form action="{{route('admin.category.store')}}" method="post">
		 @csrf 
	<div class="row">
		<div class="form-group col-md-4 text-center">
		 	<label><h4>Name:</h4></label>
		</div>
		<div class="form-group col-md-5 ">
		 	<input type="type" name="name" placeholder="Category name" class="form-control">
		 	@error('name')
               <span class="invalid-feedback" role="alert">
               	   <strong>{{$message}}</strong>
               </span>
		 	@enderror
		</div>
	
	</div>
	<div class=" col-md-6">
		
	</div>
	<div class="row form-group align-right col-md-1"> 
		<center>	<input type="submit" class="btn btn-success btn-block" value="Save" ></center>
	</div>
	<div class=" col-md-5">
		
	</div>
	
	</form>
</div>
@endsection