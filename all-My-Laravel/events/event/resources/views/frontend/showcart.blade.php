@extends('maintemplate')
@section('content')
<script src="{{asset('frontend/js/jquery.min.js')}}"></script>
<script type="text/javascript">
		$(document).ready(function(){
			showtable();

			$("tbody").on('click','.btndel',function()
			{
					var id=$(this).data('id');
					var ans=confirm('Are you sure?');
					if (ans)
					{		
						deleterecord(id);
					}
			})

			$("body").on('click','.btnincrease',function(){
				var id=$(this).data('id');
				var mycart=localStorage.getItem('mycart');
				if(mycart){
					var mycartobj=JSON.parse(mycart);
					$.each(mycartobj.itemlist,function(i,v){

						if(i==id)
						{
							var quantity=v.quantity++;
						}
						showtable();
						$("quan").html(quantity);
					})
				}
				console.log(id);
				localStorage.setItem('mycart',JSON.stringify(mycartobj));
				showtable();
			})

			$("body").on('click','.btndecrease',function(){
				var id=$(this).data('id');
				var mycart=localStorage.getItem('mycart');
				if(mycart){
					var mycartobj=JSON.parse(mycart);
					$.each(mycartobj.itemlist,function(i,v){

						if(i==id)
						{
							var quantity=v.quantity--;
						}
						if(quantity<=1)
						{
							var mycartarray=mycartobj.itemlist;
							mycartarray.splice(id,1);
						}
						showtable();
						$("quan").html(quantity);
					})
				}
				console.log(id);
				localStorage.setItem('mycart',JSON.stringify(mycartobj));
				showtable();
			})

			function showtable()
			{
				var mycart=localStorage.getItem('mycart');
				
				// console.log(mycart);

				if(mycart)
				{
					var mycartobj=JSON.parse(mycart);
					var html='';var total=0;var j=1;
					$.each(mycartobj.itemlist,function(i,v)
					{
						var id=v.id;
						var name=v.name;
						var image=v.image;
						var price=v.price;
						var quantity=v.quantity;
						var subtotal=quantity*price;
					//console.log(price);
						total+=parseInt(subtotal);
						html+='<tr><td>'+j+'</td><td><img src="'+image+'" width=100 height=100></td><td>'+name+'</td><td>'+price+'</td><td><p id="quan"><button class="btnincrease btn btn-primary" data-id='+i+'>+</button>'+quantity+'<button class="btn btn-primary btndecrease" data-id='+i+'>-</button></p></td><td id="subtotal">'+subtotal+'</td><td><button class="btn btn-danger btndel" data-id='+i+'>Delete</button></td></tr>';
						j++;
					
					})
					$("tbody").html(html);
					$("#tdsubtotal").html(total);
				}
			}
					
			
			function deleterecord(id)
			{
				var mycart=localStorage.getItem('mycart');
				var mycartobj=JSON.parse(mycart);
				var mycartarray=mycartobj.itemlist;
				mycartarray.splice(id,1);
				//console.log(mycartobj.itemlist);
				mycartobj.itemlist=mycartarray;
				localStorage.setItem('mycart',JSON.stringify(mycartobj));
				showtable();
			}

			$('table').on("click",".btncheckout", function(event){
				event.preventDefault();
    			var date=$('#date').val();
      			var time=$('#time').val();
      			var username=$('#username').val();
      			var number=$('#number').val();
      			var useremail=$('#useremail').val();


      			var speicalrequest =$('#speical_request').val();

      			var mycart=localStorage.getItem('mycart');

      			//console.log(mycart);
      			


      			$.ajaxSetup({
            	headers: {
                	'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            	}
        		});
                        //key:value
    			$.post('/eventpackage',{mycart:mycart,date:date,time:time,username:username, number:number, useremail:useremail,speicalrequest:speicalrequest});

    			localStorage.clear();
      			alert('Order Successfully!');
      			window.location.href="/";
    		})
			
		})
	</script>
<section class="ftco-section">
<div class="container">
	<div class="cartdiv">
		<h3>Your Cart </h3>
		<div class="row justify-content-center">
			<table border="0" cellpadding="10" cellspacing="10" class="table">
				<thead>
				<tr>
					<th>NO</th>
					<th>Photo</th>
					<th>Name</th>
					<th>Price</th>
					<th>Quantity</th>
					<th>Subtotal</th>
					<th>Delete</th>
				</tr>
				</thead>
				<tbody>
				
				</tbody>
				<tfoot>
				<tr>
					<td colspan="5" style="text-align: center;">Total</td>
					<td id="tdsubtotal" colspan="2">
						
					</td>
				</tr>
				<tr>
					<td colspan="5"> Date </td>
					<td colspan="2"> 
						<input type="date" name="" class="form-control" id="date">
					</td>
				</tr>
				<tr>
					<td colspan="5"> Time </td>
					<td colspan="2"> 
						<input type="time" name="" class="form-control" id="time">
					</td>
				</tr>
				<tr>
					<td colspan="5"> Booking User - Name </td>
					<td colspan="2"> 
						<input type="text" name="" class="form-control" id="username">
					</td>
				</tr>
				<tr>
					<td colspan="5"> Booking User - Phone Number </td>
					<td colspan="2"> 
						<input type="number" name="" class="form-control" id="number">
					</td>
				</tr>
				<tr>
					<td colspan="5"> Booking User - Email </td>
					<td colspan="2"> 
						<input type="email" name="" class="form-control" id="useremail">
					</td>
				</tr>
				<tr>
					<td colspan="5"> Special Request </td>
					<td colspan="2"> 
						<textarea class="form-control" id="speical_request"></textarea>
					</td>
				</tr>
				<tr>
					<td colspan="6">
						<a href="#userdata" data-toggle="modal" class="btn btn-primary btncheckout">Check Out</a>
					</td>
				</tr>
			</tfoot>
			</table>
		</div>
	</div>
</div>




</section>

@endsection




<!-- <div class="modal fade" tabindex="-1" role="dialog"  id="userdata">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Event Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label>Potential-cost</label>
          <input type="text" name="username" id="potential-cost" class="form-control">
        </div>
        <div class="form-group">
          <label>Amount-paid</label>
          <input type="text" name="phoneno" id="amount-paid" class="form-control">
        </div>
        <div class="form-group">
          <label>Extra-cost:</label>
          <input type="text" name="phoneno" id="extra-cost" class="form-control">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="order btn btn-primary" >Order</button>
      </div>
    </div>
  </div>
</div> -->