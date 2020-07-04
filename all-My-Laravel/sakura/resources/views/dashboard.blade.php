@extends('backtemplate')
@section('content')

<div class="container">
	<div class="row">
		<div class="col-6">
			
			<table class="table">
				<thead>
					<th>Product</th>
					<th>Profit</th>
				</thead>

				<tbody>
					@foreach($products as $product)
					<tr>
					<td>{{$product->product_name}}</td>
					<td>00</td>
					</tr>
					@endforeach
					
				</tbody>
			</table>
		</div>
		<div class="col-6">
			
		</div>
	</div>
	
</div>


@endsection