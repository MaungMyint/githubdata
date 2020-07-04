@extends('main')
@section('content')
	<h2>ItemList List</h2>
	<a href="{{route('admin.item.create')}}" class="btn btn-success">Add Item</a>
	<table class="table table-responsive">
		<thead>
			<tr>
				<th>No</th>
				<th>barcode</th>
				<th>Name</th>
				<th>price</th>
				<th>image</th>
				<th>cost</th>
				<th>price</th>
				<th>Category</th>
				<th colspan="2">Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach($items as $item)
			<tr> 
				<td>{{$item->id}}</td>
				<td>{{$item->codeno}}</td>
				<td>{{$item->name}}</td>
				<td>{{$item->price}}</td>
				<td><img src="{{$item->image}}" width="40" height="40"></td>
				<td>{{$item->cost}}</td>
				<td>{{$item->qty}}</td>
				<td>{{$item->category_id}}</td>
				<td>
					<a href="{{route('admin.item.edit',$item->id)}}" class="btn btn-warning">Edit</a>
				</td>
				<td>
            		<form action="{{route('admin.item.destroy',$item->id)}}" method="post">
                	@method('DELETE')
                	@csrf
                	<button type="submit" class="btn btn-md btn-danger">Delete</button>
              		</form>	
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
@endsection