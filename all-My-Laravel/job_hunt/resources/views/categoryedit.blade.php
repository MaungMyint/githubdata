@extends('index')

@section('middle')


	<div id="category" class="container-fluid bg-grey ">
		
			<div class="row">
				<div class="col-lg-4"></div>
				<div class="col-lg-8">
					<h3>Create Category/Job Type</h3>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-4"></div>
				<div class="col-lg-8">
				<form action="{{route('category.update',$categories->id)}}" method="post" enctype="multipart/form-data">
				
        		<input type="hidden" name="_method" value="PUT">

				@csrf	
				<div class="col-sm-6 form-group">
					
					<input type="text" name="name" class="form-control" value="{{ $categories->name}}">
					<input type="submit" class="btn btn-lg btn-info" value="Update">				

				</div>
				</form>
			</div>
		</div>	
		
	</div>
@endsection
