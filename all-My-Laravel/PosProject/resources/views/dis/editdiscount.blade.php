@extends('main')
@section('content')
<center><h1>Please Fill the Edit Discount Item</h1></center><br><br>
<form method="post" action="{{route('discount.update',$discount->id)}}" enctype="multipart/form-data" class="form-group my-5">
		@csrf 
		@method('PATCH')
	<div class="row">
		<div class="col-lg-4"></div>
			<div class="col-lg-3">
				<div class="form-group">
					<label>Item_codeno</label>
					<input type="text" name="Icode_no" class="form-control" value="{{$discount->Item_codeno}}">
				</div>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-4"></div>
		<div class="col-lg-3">
			<div class="form-group">
				<label>Discount Percentage %</label>
				<input type="text" name="percent" class="form-control" value="{{$discount->discount_percetnt}}">
			</div>
		</div>
	</div>
	<div class="row ">
		<div class="col-lg-5">
		<center>	<input type="submit" value="Save" class="btn btn-success "></center>
		</div>
	</div>

	

		
@endsection
