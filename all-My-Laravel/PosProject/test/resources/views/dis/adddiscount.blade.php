@extends('main')
@section('content')
<center><h1>Please Fill the Discount Item</h1></center><br><br>
<form method="post" action="{{route('discount.store')}}" enctype="multipart/form-data" class="form-group my-5">
		@csrf 

	<div class="row">
		<div class="col-lg-4"></div>
			<div class="col-lg-3">
				<div class="form-group">
					<label>Item_codeno</label>
					<input type="text" name="Icode_no" class="form-control">
				</div>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-4"></div>
		<div class="col-lg-3">
			<div class="form-group">
				<label>Discount Percentage</label>
				<input type="text" name="percent" class="form-control">
			</div>
		</div>
	</div>
		<center>			
			<input type="submit" value="Save" class="btn btn-success">
		</center>


	

		
@endsection
