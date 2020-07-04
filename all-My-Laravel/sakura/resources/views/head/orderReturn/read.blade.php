@extends('backtemplate')
@section('content')

	<div class="card mb-3">
          <!-- <div class="card-header">
            
            <h3 class="d-inline-block">Order List</h3>
            <div class="col-lg-2 col-md-2 col-sm-2 float-right">
              <a href="{{route('order.create')}}" class="btn btn-outline-primary "> 
              <i class="fas fa-plus"></i>
              Add New 
              </a>
            </div>
          </div>  --> 
            
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Order Id</th>
                    <th>Quantity</th>   
                    <th>return Date</th>
                    <th>Profit</th>
                            
                  </tr>
                </thead>
               
                <tbody>
                  @foreach($orders as $order)
                  
                  <tr>
                	
                	<td>{{$order->order_id}}</td>
                	<td>{{$order->qty}}</td>
                	<td>{{$order->return_date}}</td>


                </tr>
                @endforeach
                </tbody>
              
              </table>
            </div>
          </div>
          
       </div>

@endsection