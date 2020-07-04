@extends('main')
@section('content')
		
		
	<h2 class="text-center">ITEMS</h2>
		<!-- @csrf --> 
		<div class="container my-5">
		<div class="col-md-1">
		<a href="{{route('additem.store')}}" class="btn btn-success">Add Item</a>
		</div>
		<div class="col-md-3">
			
		<a href="{{route('category.store')}}" class="btn btn-success">Add Category</a>
		</div>
		</div>
	<form method="post" enctype="multipart/form-data" class="form-group my-5">
		<table class="table table-responsive my-5"><br><br>
			<thead>
				<tr>
					<th>No</th>
					<th>BarCode</th>
					<th>Name</th>
					<th>Image</th>
					<th>Price</th>
					<th>Qty</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>1</td>
					<td>2001</td>
					<td>pen</td>
					<td>jpg</td>
					<td>300</td>
					<td>100</td>
					<td colspan="2">
						<a href="" class="btn btn-warning btn-sm">EDIT</a>
						<a href="" class="btn btn-danger btn-sm">DELETE</a>
					</td>
					
				</tr>
			</tbody>
		</table>
	</form>
@endsection