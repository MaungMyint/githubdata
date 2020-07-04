@extends('main')
@section('content')
<h2>Disscount Item</h2>
<a href="{{route('discount.create')}}" class="btn btn-success">Discount Item +</a>
		</div>
		<form method="post" enctype="multipart/form-data" class="form-group my-5">
		@csrf 

		<table class="table table-responsive my-5"><br><br>
			<thead>
				<tr>
					<th>No</th>
					<th>Item_codeno</th>
					<th>Discount_percent</th>
					<th colspan="2">Action</th>
				</tr>
			</thead>
			<tbody>
				@php $i=1;
				@endphp
				@foreach($discounts as $discount)
				<tr>
					<td>{{$i}}</td>
					<td>{{$discount->Item_codeno}}</td>
					<td>{{$discount->discount_percetnt}} %</td>
					<td>
						<a href="{{route('discount.edit',$discount->id)}}" class="btn btn-primary">Edit</a>
					</td>
					<td>
						<form method="post" action="{{route('discount.destroy',$discount->id)}}" class="d-inline-block">
							@method('DELETE')
							@csrf
							<input type="submit" name="btnsubmit" class="btn btn-danger" value="Delete">
						</form>
					</td>
				</tr>
				@php $i++;
				@endphp
				

				@endforeach

			</tbody>
		</table>
	</form>@endsection