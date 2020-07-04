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
                  <td><a href="#exampleModal" data-toggle="modal" class="btn btn-primary">Submit</a></td>
                  </tr>

                  @endforeach
                </tbody>
               
                        
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
      <form action="{{route('admin.order.update',$order->id)}}" method="post" enctype="multipart/form-data">
                                        
                   @method('PATCH')
                   @csrf
                    
                    <div class="form-group">
                          <div class="row">
                            <label class="col-lg-4 col-sm-6"> Price </label>

                            <div class="col-lg-8 col-sm-6">
                              <input type="text" name="price" class="form-control"  placeholder="Enter the Price" value="{{$order->qty}}">
                            </div>
                          </div>          
                    </div>

                    

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="Submit" name="Save" class="btn btn-success">
       
      </div>
      </form> 
    </div>
  </div>
</div>

@endsection

