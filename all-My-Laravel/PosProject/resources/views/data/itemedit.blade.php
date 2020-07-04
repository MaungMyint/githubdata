@extends('main')
@section('content')
		
		
	<h2 class="text-center">Edit Items</h2>
		
	<form method="post" action="{{route('item.update',$items->id)}}" enctype="multipart/form-data" class="form-group my-5">
		@method('PATCH')
		@csrf 
		<div class="row">
			<div class="col-lg-2"></div>
			<div class="col-lg-4">
				<div class="form-group">
								<label> Choose category</label>
								<select class="form-control" name="category">
									@foreach($categories as $category)
									<option value="{{$category->id}}"
										@php 
										if($items->category_id==$category->id) echo"selected";

										 @endphp
										>{{$category->name}}
									</option>
									@endforeach
								</select>

							</div>
			</div>
			<div class="col-lg-4">
				<label>BarCode</label>
				<input type="text" name="barcode" class="form-control" value="{{$items->codeno}}">
			</div>
		</div>
		<div class="row">
			<div class="col-lg-2"></div>
			<div class="col-lg-4">
				<label>Name</label>
				<input type="text" name="name" class="form-control" value="{{$items->name}}">
			</div>
			<div class="col-lg-4">
				<label>Price</label>
				<input type="text" name="price" class="form-control" value="{{$items->price}}">
			</div>
		</div>
		<div class="row">
			<div class="col-lg-2"></div>
			<div class="col-lg-4">
				<label>Cost</label>
				<input type="text" name="cost" class="form-control" value="{{$items->cost}}">
			</div>
			<div class="col-lg-4">
				<label>Qty</label>
				<input type="text" name="qty" class="form-control" value="{{$items->qty}}">
			</div>
		</div>
			<div class="row">
				<div class="col-lg-2"> </div>
					<div class="form-group col-lg-1">
						<br>
						Image: <input type="file" name="photo">
						<img src="{{$items->image}}" width="200" height="200">
						<input type="hidden" name="oldimg" value="{{$items->image}}">
					</div>
			</div>
		 <div class="row">
		 	<center>
				<div class="form-group">
					<input type="submit" value="Update" name="btnupdate" class="btn btn-primary">
				</div>
			</center>
		</div>
	</form>
@endsection