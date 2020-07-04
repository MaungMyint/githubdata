@extends('backtemplate')
@section('content')

@php

$role = Auth::user()->role;

@endphp
	<div class="card mb-3">
          <div class="card-header">
            
            <h3 class="d-inline-block">Order Request</h3>
            <!-- <div class="col-lg-2 col-md-2 col-sm-2 float-right">
              <a href="{{route('order.create')}}" class="btn btn-outline-primary "> 
              <i class="fas fa-plus"></i>
              Add New 
              </a>
            </div> -->
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
                    
                    <th>Action</th>
                               
                  </tr>
                </thead>
                 @if(Auth::check() && Auth::user()->role=='admin')
                <tbody>

                  @foreach($orders as $order)
                  <tr>
                  <td>{{$order->head_id}}</td>
                  <td>{{$order->product->product_name}}</td>
                  <td>{{$order->qty}}</td>
                  <td>{{$order->order_date}}</td>
                  @php
                      $totalreturn =0;
                    @endphp
                  @foreach($order->orderReturn as $return)
                    @php
                      $totalreturn += $return->qty;
                    @endphp
                  @endforeach


                  <td><a href="#" data-id="{{$order->id}}" data-qty="{{$order->qty}}" data-date="{{$order->order_date}}" data-returnqty="{{$totalreturn}}" class="btn btn-primary pay" data-role="{{$role}}">Submit</a></td>
                  </tr>

                  @endforeach
                </tbody>
               @endif
                @if(Auth::check() && Auth::user()->role=='head')
                 <tbody>

                  @foreach($orders as $order)
                  <tr>
                  <td>{{$order->head_id}}</td>
                  <td>{{$order->product->product_name}}</td>
                  <td>{{$order->qty}}</td>
                  <td>{{$order->order_date}}</td>

                   @php
                      $totalreturn =0;
                    @endphp
                  @foreach($order->orderReturn as $return)
                    @php
                      $totalreturn += $return->qty;
                    @endphp
                  @endforeach

                  
                  
                  <td><a href="#" data-id="{{$order->id}}" data-productid="{{$order->product_id}}" data-qty="{{$order->qty}}" data-date="{{$order->order_date}}" data-totalreturn="{{$totalreturn}}"class="btn btn-primary pay_head" data-role="{{$role}}">Submit</a></td>
                  </tr>

                  @endforeach
                </tbody>

                @endif

                        
              </table>
            </div>
          </div>
          
       </div>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Order Return Information</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="#" method="POST" id="returnForm"> 
       @method('PATCH') 
       @csrf 
      <label>Quantity:</label>
      <input type="text" name="qty" value="" id="qty" class="form-control">
      <input type="hidden" name="totalreturn" value="" id="totalreturn">
      <input type="hidden" name="totalrequest" value="" id="totalrequest">
      <div class="row my-1" ></div>
      <label>On-Hand Item</label>
      <input type="text" name="inhand_qty" value=""  id="inhand_qty" class="form-control mt-">
      <p class="error_msg"></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="Submit" name="Save" class="btn btn-success save" value="Save">
      </div>
      </form> 
    </div>
  </div>
</div>

@endsection

@section('script')

<script type="text/javascript">
  $(document).ready(function () {
    // body...
    $('.pay').click(function () {
      var id = $(this).data('id');
      var qty = $(this).data('qty');
      var totalreturn = $(this).data('returnqty');


      $('#returnForm').attr('action','/head/orderRequest/'+id);
      $('#qty').val(qty-totalreturn);
      $('#totalreturn').val(totalreturn);
      $('#totalrequest').val(qty);
      $('#exampleModal').modal('show');
    })

    $('.pay_head').click(function () {
      var id = $(this).data('id');
      var pid = $(this).data('productid');
      var qty = $(this).data('qty');
      var totalreturn = $(this).data('totalreturn');

      // alert(pid);

      $.ajaxSetup({
        headers:{
          'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
        }
      });


      $.post('/head/getItemCount',{pid:pid},function(response){

          console.log(response.length);
          if(response.length == 0) {
              alert('Hello');
          } else if(response.length > 0 && response < qty)
          {
            // alert(response);
            $('#inhand_qty').val(response);
            $('#returnForm').attr('action','/head/orderRequest/'+id);
            $('#qty').val(qty-totalreturn);
            $('#totalreturn').val(totalreturn);
            $('#totalrequest').val(qty);
            $('#exampleModal').modal('show');
          }else (response.length > 0) 
          {
            $('#qty').val(response);
            $('#inhand_qty').val(response);
            $('#returnForm').attr('action','/head/orderRequest/'+id);
            $('#qty').val(qty-totalreturn);
            $('#totalreturn').val(totalreturn);
            $('#totalrequest').val(qty);
            $('#exampleModal').modal('show');
          }
      })

    })

    

    $('#qty').keyup(function () {
      // body...
      var qty = parseInt($(this).val());
      var totalrequest = $('#totalrequest').val();
      var totalreturn = $('#totalreturn').val();
      var inhand_qty = $('#inhand_qty').val();
      var role = $('.pay').data('role');
      // alert(role);

      if(role != null && role == 'admin'){
          if(qty > (totalrequest-totalreturn)){
            $('.error_msg').html('Return over');
            $('.save').prop('disabled',true);
          }
          else{
             $('.error_msg').html('');
            $('.save').prop('disabled',false);
          }
      }else{
          if(qty > (totalrequest-totalreturn)){
            $('.error_msg').html('Return over');
            $('.save').prop('disabled',true);
          } else if(inhand_qty < qty){
            // alert(qty +'>'+ inhand_qty);
            $('.error_msg').html('Not Enough Item '+inhand_qty);
            $('.save').prop('disabled',true);
          }else{
            $('.error_msg').html('');
            $('.save').prop('disabled',false);
          }
      }

      
    })
  })
</script>
@endsection