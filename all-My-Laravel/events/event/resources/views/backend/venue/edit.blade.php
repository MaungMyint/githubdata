@extends('backendtemplate')
@section('content')
	<div class="container-fluid">
		<div class="card shadow mb-4">
		<div class="card-header">
			<h4 class="card-title">Edit Venues</h4>
			
		</div>
		<div class="card-body">
			<form action="{{route('admin.venue.update',$venues->id)}}" method="post" enctype="multipart/form-data">
			
				@csrf
				@method('PATCH')
			<div class="form-group">
        		<label>Name</label>
        		<input type="text" name="vname" class="form-control" value="{{$venues->name}}">
      		</div>  
      		<div class="form-group">
       			<label>Photo</label>
				<input type="file" name="image">
				<img src="{{$venues->image}}"  width="100px" height="100px">
				<input type="hidden" name="oldimage" value="{{$venues->image}}">
			</div>
     
      		<div class="form-group">
        		<label>Amount</label>
        		<input type="text" name="vamount" class="form-control" value="{{$venues->amount}}">
      		</div>
      		<div class="form-group">
        		<label>Price</label>
        		<input type="text" name="vprice" class="form-control" value="{{$venues->price}}">
      			</div>
      <div class="form-group">
        <input type="submit" name="submit" class="btn btn-success" value="update">
      </div>
		
	</form>
		</div>
		</div>
		
	</div>


@endsection