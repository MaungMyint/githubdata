@extends('main')
@section('content')	
	<h2 class="text-center">Items form</h2>	
	<form action="{{route('admin.item.store')}}" method="post" enctype="multipart/form-data">
		 @csrf 
		<div class="form-group">
		 	<label>CodeNo.</label>
		 	<input type="type" name="code" placeholder="CodeNo." class="form-control">
		 	<label>Name:</label>
		 	<input type="type" name="name" placeholder="Items name" class="form-control">
		 	<label>Price</label>
		 	<input type="type" name="price" placeholder="Item_price" class="form-control">
		 	<label>Image</label>
		 	<input type="file" name="image" placeholder="Image" class="form-control">
		 	<label>Cost</label>
		 	<input type="type" name="cost" placeholder="Items_Cost" class="form-control">
		 	<label>Qty</label>
		 	<input type="type" name="qty" placeholder="Qty" class="form-control">
		 	<label>Category</label>
			<select class="form-control" name="category">
				@foreach($categories as $category)
				<option value="{{$category->id}}">
					{{$category->name}}
				</option>
				@endforeach
			</select>
		</div>
		
		<div class="form-group"> 
			<input type="submit" class="btn btn-success" value="Save" >
		</div>
	</form>
@endsection