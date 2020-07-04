@extends('backendtemplate')
@section('content')
	<?php 
	  $packagenameString = $event->packagename;
	  $packageArray = explode(',', $packagenameString);
	  $packageArrayCount = count($packageArray);

	  $amountString = $event->amount;
	  $amountArray = explode(',', $amountString);
	  $amountArrayCount = count($amountArray);

	  $qtyString = $event->qty;
	  $qtyArray = explode(',', $qtyString);
	  $qtyArrayCount = count($qtyArray);

	  $packages = array_merge($amountArray, $packageArray, $qtyArray);

	  $amountTotal = 0;
	  foreach ($amountArray as $value) 
	  {
	    $amountTotal += $value;
	  }
	?>

	<form method="POST" action="{{url('send/email')}}">
        @csrf
		<input type="hidden" name="voucherno" value="{{ $event->codeno}}">
		<input type="hidden" name="package" value="{{ $packagenameString }}">
		<input type="hidden" name="amount" value="{{ $amountString }}">
		<input type="hidden" name="qty" value="{{ $qtyString }}">
		<input type="hidden" name="date" value="{{ $date }}">

		<input type="hidden" name="bookingusername" value="{{ $event->bookinguser }}">
		<input type="hidden" name="bookingph" value="{{ $event->bookingph }}">
		<input type="hidden" name="bookingemail" value="{{ $event->bookingemail }}">
		<input type="hidden" name="username" value="{{ $event->username}}">
		<input type="hidden" name="useremail" value="{{ $event->useremail }}">




		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-4 col-sm-4">
					<img src="{{ asset('frontend/images/logo.jpg') }}" class="img-fluid">
				</div>
				<div class="col-lg-8 col-md-8 col-sm-8 pt-4">
					<div class="float-right">
						<h1> Invoice No. {{ $event->codeno }} </h1>
						<h3> {{ $date }} </h3>
					</div>
				</div>
			</div>

			<div class="row mt-5">
				<div class="col-lg-12 col-md-12 col-sm-12">
					<p> Booking User Name : {{ $event->bookinguser}} </p>
					<p> Booking User Phone : {{ $event->bookingph}} </p>
					<p> Booking User Email : {{ $event->bookingemail}} </p>

				</div>

				<table class="table mt-5">
					<thead style="border-bottom: 2px solid #fa0978">
						<tr>
							<td> Description </td>
							<td> Unit Purchase </td>
							<td> Unit Price </td>
							<td> Amount </td>
						</tr>
					</thead>

					<tbody>
						<?php $subtotal = 0; $total = 0; ?> 
						@foreach($packageArray as $key=> $row)

						<?php 
							$amount = $amountArray[$key];
							$qty = $qtyArray[$key];

							$subtotal = $amount * $qty;
							
						?>

						<tr>
							<td> {{ $row }} </td>
							<td> {{ $amount }} </td>
							<td> {{ $qty }} </td>
							<td> {{ $subtotal }}  </td>
						</tr>
						@php $total += $subtotal++;
						@endphp
						@endforeach
						
						<tr>
							<td colspan="3"> Total </td>
							<td> {{ $total }} </td>
						</tr>

						<tr>
							<td colspan="2"> Potential Cost </td>
							<td colspan="2"> <input type="text" name="potientail" class="form-control" placeholder="Potential Cost"> </td>
						</tr>

						<tr>
							<td colspan="2"> Extra Paid </td>
							<td colspan="2"> <input type="text" name="extra" class="form-control" placeholder="Extra Paid"> </td>
						</tr>

						<tr>
							<td colspan="4">
								<div class="text-right">
									<button class="btn btn-primary">
										Send Mail
									</button>
								</div>
							</td>
						</tr>


					</tbody>
				</table>

			</div>
		</div>
	</form>
@endsection