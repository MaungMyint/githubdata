@extends('main')
@section('content')
	<h2 class="text-center">Receipts</h2>
	<div class="col-md-3"></div>
	<div class="col-md-6 border" id="receipt">
	 	<p class=" text-center">
	 		<span>Shop</span><br>
	 		<span> Shop Address </span><br>
	 		<span> Shop Phone NoS </span>
	 		</p>
	 		<p class="float-left"> Voucher No: <span> 0101 </span></p>
	 		<p class="float-right"> Sale Date: <span> Smth </span><br>
	 								Casher ID: <span> Smth </span></p>
	 		<br class="clear">
	 		<table class="table">
	 			<thead>
	 				<tr>
	 				 <th> &nbsp;&nbsp;&nbsp; Item </th>
	 				 <th colspan="4">  </th>
	 				 <th> Qty </th>
	 				 <th> Amount(MMK) </th>
	 				</tr>
	 			</thead>
	 			<tbody> 
	 				<tr>
	 					<td> &nbsp;&nbsp;&nbsp; ice stick </td>
	 					<td colspan="4">  </td>
	 					<td> 3pcs  </td>
	 					<td> 900 </td>
	 				</tr>
	 				<tr>
	 					<td> &nbsp;&nbsp;&nbsp; Jelly </td>
	 					<td colspan="4">  </td>
	 					<td> 2 bags </td>
	 					<td> 2000 </td>
	 				</tr>
	 				<tr>
	 					<td> &nbsp;&nbsp;&nbsp; Cheese Bread </td>
	 					<td colspan="4">  </td>
	 					<td> 2 bags </td>
	 					<td> 4000 </td>
	 				</tr>
	 				<tr>
	 					<td colspan="8" class="hr"> <hr></td>
	 				</tr>
	 				
	 				<tr>
	 					<td> &nbsp;&nbsp;&nbsp; Subtotal </td>
	 					<td colspan="4">  </td>
	 					<td> total pcs  </td>
	 					<td> 10000 </td>
	 				</tr>
	 				<tr>
	 					<td> &nbsp;&nbsp;&nbsp; Discount: </td>
	 					<td colspan="4">  </td>
	 					<td> &nbsp;  </td>
	 					<td> ae lout mMK </td>
	 				</tr>
	 				<tr>
	 					<td> &nbsp;&nbsp;&nbsp; Tax: </td>
	 					<td colspan="4">  </td>
	 					<td> &nbsp;  </td>
	 					<td> ae lout tax </td>
	 				</tr>
	 				<tr>
	 					<td colspan="8"><hr></td>
	 				</tr>
	 				<tr>
	 					<td> &nbsp;&nbsp;&nbsp; Net Amount: </td>
	 					<td colspan="4">  </td>
	 					<td> &nbsp;  </td>
	 					<td> ae lout tax </td>
	 				</tr>
	 				<tr>
	 					<td colspan="8"><hr></td>
	 				</tr>
	 				<tr>
	 					<td> &nbsp;&nbsp;&nbsp; Paid: </td>
	 					<td colspan="4">  </td>
	 					<td> &nbsp;  </td>
	 					<td> payy tae amount </td>
	 				</tr>
	 				<tr>
	 					<td> &nbsp;&nbsp;&nbsp; Change: </td>
	 					<td colspan="4">  </td>
	 					<td> &nbsp;  </td>
	 					<td> pyan ann amount </td>
	 				</tr>
	 				<tr>
	 					<td colspan="8"><hr></td>
	 				</tr>
				</tbody>
				<tfoot>
					<tr><td></td><td></td>
					<td>
					<center> Items Sold are not refundable. </center><br>
					<center> "Thank You and Please come again!"</center>
				    </td></tr>
				</tfoot>
	 		</table>
	    </div>
	<div class="col-md-3"></div>

@endsection