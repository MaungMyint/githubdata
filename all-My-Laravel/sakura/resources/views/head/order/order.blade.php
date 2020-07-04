@extends('backtemplate')
@section('content')

	<div class="card mb-3">
          <div class="card-header">
            
            <h3 class="d-inline-block">Order List</h3>
            <div class="col-lg-2 col-md-2 col-sm-2 float-right">
              <a href="{{route('order.create')}}" class="btn btn-outline-primary "> 
              <i class="fas fa-plus"></i>
              Add New 
              </a>
            </div>
          </div>  
            
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Head Id</th>
                    <th>Product name</th>
                    <th>Quantity</th>   
                    <th>Order Date</th>  
                     <th>Total Price</th>       
                    <th>Action</th>
                               
                  </tr>
                </thead>
               
                <tbody>
                  @foreach($orders as $order)
                  <tr>
                	<td>{{$order->head_id}}</td>
                	<td>{{$order->product->product_name}}</td>
                	<td>{{$order->qty}}</td>
                	<td>{{$order->order_date}}</td>
                  <td>{{$order->total_price}}</td>
                  <td

                  @if($order->orderReturn)
                    @php 
                      $count = 0;
                    @endphp
                    @foreach($order->orderReturn as $return)
                      @php
                        $count += $return->qty;
                      @endphp
                    @endforeach
                  @endif

                  @if($count == 0)
                  <td><a href="#" class="btn btn-success">Pending</a></td>
                  @elseif($count < $order->qty)
                  <td><a href="#" class="btn btn-warning process" data-id="{{$order->id}}">Process</a></td>
                  @else
                  <td><a href="#" class="btn btn-primary complete" data-id="{{$order->id}}">Complete</a></td>
                  @endif
                </tr>
                @endforeach
                </tbody>
            
              </table>
            </div>
          </div>
          
       </div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Order Return Information</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="returnDetail">
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>



@endsection

@section('script')
  <script type="text/javascript">
    $(document).ready(function () {
      // body...
     
      $('.process').click(function () {
        
        var id = $(this).data('id');
        returnDetail(id);


      });

       $('.complete').click(function () {
         var id = $(this).data('id');
        returnDetail(id);
      });

       $.ajaxSetup({
        headers:{
          'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
        }
      });

      function returnDetail(id) {
         $.post('/head/returnDetail',{id:id},function(response){
           

          if(response){
         
          var html=''; var total=0;

          $.each(response,function(i,v){
           
            var id = v.id;
            //alert(v.id);
            
           
            var quantity = v.qty;
            var date = v.return_date;
           
            
            html+='<label>Quantity: </label>'+quantity+'<br>'+
                  '<label>Return Date:</label>'+date+'<br>';

          })
        
        $("#returnDetail").html(html);
        $('#exampleModal').modal('show');

        }
         })
       }
    })
  </script>
@endsection