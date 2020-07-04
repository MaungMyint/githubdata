@extends('main')
@section('content')
<div class="row">
	<h2 class="text-center">Sales Form</h2>
	<hr>
        <div class="col-md-7 mt-5">
        	<div class="row">
		        <div class="col-md-12">  
                    @foreach($items as $item)
                    <div class="col-md-4">
        	             <div class="card">
        		            <img src="{{$item->image}}" class="img-responsive" width="200" height="200" alt="my photo">
        		            <div class="card-body" style="padding: 10px;">
        		                <h5 class="card-text">{{$item->name}}</h5>
        		                <p>{{$item->price}}</p>
        		                <a href="#" class="cmdbtn" data-id="{{$item->id}}" data-name="{{$item->name}}"  data-price="{{$item->price}}" data-codeno="{{$item->codeno}}" >Add</a>
           		            </div>    		
        	              </div>
                    </div>
                    @endforeach      
                </div>	
            </div> 
        </div>   
	        <div class="col-md-5" id="shoppingcart">
            <div id="sliptContent"></div>
		        <table class="table"  border="0" cellpadding="5" cellspacing="5">
			      <thead>
				<tr>
					
					<th>Name</th>
					<th>Code No</th>
					<th>Unit Price</th>
					<th>Qty </th>
					<th> Price </th>
				</tr>
		           </thead>
		    <tbody>	   
          
			  </tbody>
		        </table>

            
            <button class="btn btn-primary printbtn"> Print </button>
            
          </div> 
        

    </div>
    
@endsection	

@section('script')
<script type="text/javascript">
 
		
	$(document).ready(function(){
    $('.printbtn').hide();

    showtable();
    var total;
		$('.cmdbtn').click(function(){
			
			var id=$(this).data('id');
			var name=$(this).data('name');
			var price=$(this).data('price');
      var codeno=$(this).data('codeno');
			//console.log(id,name,price);
			var itemdata={
				id:id,
				name:name,
				price:price,
        codeno:codeno,
				qty:1,
			}
           var mycart=localStorage.getItem('mycart');
           if(!mycart)
           {
           mycart='{"cart":[]}';

           }
           var mycartobj=JSON.parse(mycart);
           var hasid=false;
           var index='';
           $.each(mycartobj.cart,function(i,v){
           	if(v){
           		if(id==v.id){
           			hasid=true;
           			index=i;
           		}
           	}
           })
           if(!hasid){
           	mycartobj.cart.push(itemdata);

           }else{
           	mycartobj.cart[index].qty++;
           }
           localStorage.setItem('mycart',JSON.stringify(mycartobj));
           console.log(mycartobj);
           showtable();
		});

          function showtable(){
               var mycart=localStorage.getItem('mycart');
               if(mycart){
               	var mylistobj=JSON.parse(mycart);
               	var html='';
               	var j=1;
               	total=0;
               	$.each(mylistobj.cart,function(i,v){
               		if(v){
               			var id=v.id;
               			var name=v.name;
               			var price=v.price;
               			var qty=v.qty;
               			var subtotal=qty*price;
               			total+=parseInt(subtotal);
                    html=html+'<tr><td>'+j+'</td><td>'+name+'</td><td>'+price+'</td><td>'+qty+'</td><td>'+subtotal+'</td></tr>';
                        j++;
               		}
               	})
               	html=html+'<tr><td colspan="2">Total</td><td colspan="3">'+total+'</td></tr>';
                html=html+'<tr> <td colspan="2"> Discount  </td> <td colspan="3"> <input type="text" class="form-control" id="discount"> </td> </tr>';
                html=html+'<tr> <td colspan="2"> Paid Money  </td> <td colspan="3"> <input type="text" class="form-control" id="paidmoney"> </td> </tr>';
                html=html+'<tr> <td colspan="2"> Charge  </td> <td colspan="3"> <input type="text" class="form-control" id="charge"> </td> </tr>';
                html=html+'<tr> <td colspan="5"> <button class="btn btn-primary savebtn"> Check Out </button> </td> </tr>'
               	$('tbody').html(html);
               }
          }

          $('tbody').on("focus","#charge",function(event){
            event.preventDefault();

            var finaltotal = total;
            var discount =$('#discount').val();
            var paidmoney =$('#paidmoney').val();
            var charge =$('#charge').val();

            var discounttotal = parseInt(finaltotal) - parseInt(discount);
            var refund = paidmoney - discounttotal;

            $('#charge').val(refund);

          });

          //for reterive data from table to database
         
         $('tbody').on("click",".savebtn",function(event)
          {

            var mycart=localStorage.getItem('mycart');
            var finaltotal = total;
            var discount =$('#discount').val();
            var paidmoney =$('#paidmoney').val();
            var charge =$('#charge').val();

            if(mycart)
            {
              var mycarts=JSON.parse(mycart);
              var mycartarr=mycart.mycart;

              console.log(mycart);

                $.ajaxSetup({
                  headers: {

                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  }

                 });

                $.post('/sale',{mycartarr:mycart, finaltotal:finaltotal, discount:discount, paidmoney:paidmoney, charge:charge},function(reponse)
                  {
                    $('.table').hide();
                    $('#sliptContent').html(reponse.success);
                    $('.printbtn').show();

                  });
              }
          });


         $('#shoppingcart').on('click','.printbtn', function(event){
            var printContents = $('#receipt').html();
            // var originalContents = document.body.innerHTML;
            document.body.innerHTML = printContents;

            window.print();
            location.reload();
            localStorage.clear();

         })


    })
</script>
@endsection
