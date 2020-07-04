@extends('main')
@section('content')
	<h2 class="text-center">ITEMS</h2>
		
		<a href="{{route('item.create')}}" class="btn btn-success">Add Item</a>



		<table class="table my-5"><br><br>
			<thead>
				<tr>
					<th>No</th>
					<th>BarCode</th>
					<th>Name</th>
					<th>Price</th>
					<th>Image</th>
					<th>Cost</th>
					<th>Quantity</th>
					<th colspan="2">Action</th>
				</tr>
			</thead>
			<tbody>
				@php $i=1;
				@endphp
				@foreach($items as $item)
				<tr>
					<td>{{$i}}</td>
					<td>{{$item->codeno}}</td>
					<td>{{$item->name}}</td>
					<td>{{$item->price}}</td>
					<td><img src="{{$item->image}}" width="50" height="50"></td>
					<td>{{$item->cost}}</td>
					<td>{{$item->qty}}</td>
					<td>
						<a href="{{route('item.edit',$item->id)}}" class="btn btn-warning btn-sm">EDIT</a>
					</td>
					<td>	
						<form action="{{route('item.destroy',$item->id)}}" method="POST" id="deleteform">
							@method('DELETE')
                			@csrf
							<button type="submit" class="btn btn-md btn-danger ">Delete</button>
						</form>
					</td>
				</tr>
				@php $i++;
				@endphp
				@endforeach	
			</tbody>
		</table>
@endsection<!-- 
@section('script')
	<script type="text/javascript">
		$(document).ready(function () {
			$('.delete').click(function (e) {
				e.preventDefault();
				$('#deleteform').submit();
				alert('ok');
			})
		})
	</script>
@endsection -->