@extends('main')
@section('content')
		
		
	<h2 class="text-center">ITEMS</h2>
		
	<form method="post" action="{{route('item.store')}}" enctype="multipart/form-data" class="form-group my-5">
		@csrf 
		<div class="row">
			<div class="col-lg-2"></div>
			<div class="col-lg-4">
				<div class="form-group">
					<label>Category</label>
					<select class="form-control" name="category" id="category">
						@foreach($categories as $category)
				<option value="{{$category->id}}">
					{{$category->name}}
				</option>
				@endforeach
					</select>
				</div>
			</div>
			<div class="col-lg-4">
				<label>BarCode</label>
				<input type="text" name="barcode" id="barcode" class="form-control" readonly="">
			</div>
		</div>
		<div class="row">
			<div class="col-lg-2"></div>
			<div class="col-lg-4">
				<label>Name</label>
				<input type="text" name="name" class="form-control">
			</div>
			
			<div class="col-lg-4">
				<label>Price</label>
				<input type="text" name="price" class="form-control">
			</div>
		</div>
		<div class="row">
			<div class="col-lg-2"></div>
			<div class="col-lg-4">
				<label>Cost</label>
				<input type="text" name="cost" class="form-control">
			</div>
			<div class="col-lg-4">
				<label>Qty</label>
				<input type="text" name="qty" class="form-control">
			</div>
		</div>
		<center>
			<div class="form-group" >
				<label>Image</label><input type="file" name="image">
			</div>
		</center>
		<center>
			<div class="form-group">
				<input type="submit" value="save" name="btnsave" class="btn btn-primary">
			</div>
		</center>
	</form>
@endsection
@section('script')
<script type="text/javascript">
 $(document).ready(function(){
 	$("#category").change(function(){
 		var category_id=$(this).val();
 		$.ajaxSetup({
          headers: {
            'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
          }
        });
 		 $.post('/getcode',{category_id:category_id},function(reponse)
                  {
                  	$('#barcode').val(reponse);
                  });
 	})
 })
	
</script>
@endsection

