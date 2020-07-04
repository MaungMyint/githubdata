@extends('main')
@section('content')
		<div class="container-fluid">
			<div class=" card shadow mb-4">
				<div class="card-header">
					<div class="card-title">Edit_Category</div>
					<div class="card-body">

					<form action="{{route('admin.item.update',$item->id)}}" method="post" enctype="multipart/form-data" class="form-group">
							<h2>Post Edit Form</h2>
							@method('PATCH')
							@csrf
							<label>Category</label>
							<input type="type" name="name" class="form-control" value="{{$item->name}}">
							<div class="form-group">
								<input type="submit" name="" value="Submit" class="form-control">
						</div>
					</form>
			</div>
		</div>
			
	</div>
@endsection