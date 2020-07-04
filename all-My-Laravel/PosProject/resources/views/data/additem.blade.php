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
						@error('name')
                            <span class="invalid-feedback" role="alert">
               	                 <strong>{{$message}}</strong>
                            </span>
		 	            @enderror
			</div>
			
			<div class="col-lg-4">
				<label>Price</label>
				**This price will show on your item!**
				<input type="text" required="Please fill the price!!" name="price" class="form-control">
			</div>
		</div>
		<div class="row">
			<div class="col-lg-2"></div>
			<div class="col-lg-4">
				<br>
				<label>Cost</label>
				**The original cost**
				<input type="text" required="Please fill the cost!!" name="cost" class="form-control">
			</div>
			<div class="col-lg-4">
				<br>
				<label>Qty</label>
				<input type="text" required="required" name="qty" class="form-control">
			</div>
		</div>
		<div class="row">
		    <div class="col-lg-2"></div>
			<div class="col-lg-4">
			<div class="form-group" >
				<br>
				<label>Image</label><input type="file" name="image">
			</div>
			</div>
	    </div>
		<div class="row">
		<div class="col-lg-6"></div>
		<div class="col-lg-4">
			<div class="form-group">
				<input type="submit" value="save" name="btnsave" class="btn btn-primary">
			</div>
		</div>
	    </div>
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

