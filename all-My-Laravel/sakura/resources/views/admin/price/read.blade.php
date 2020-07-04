@extends('backtemplate')
@section('content')
 <div class="card mb-3">
          <div class="card-header">
            
            <h3 class="d-inline-block">Price List</h3>
            <div class="col-lg-2 col-md-2 col-sm-2 float-right">
              <a href="{{ route('price.create')}}" class="btn btn-outline-primary "> 
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
                    <th>id</th>
                    <th>Product ID</th>
                    <th>Price</th>
                    <th>Qty</th>
                    <th colspan="2">Action</th>
                    
                    
                  </tr>
                </thead>

                <tbody>
                  @foreach($prices as $price)
                  <tr>
                  <td> {{$price->id}}</td>

                  <td> {{$price->product->product_name}}</td>
                  <td> {{$price->price}}</td>
                  <td>{{ $price->qty }}</td>
                  <td><a href="{{route('price.edit',$price->id)}}" class="btn bg-success" value="Edit">Edit</a></td>              
                     <td>
                      <form action="{{route('price.destroy',$price->id)}}" method="post">
                        @method('Delete')
                        @csrf
                        <input type="submit" name="btnsubmit" value="Delete" class="btn btn-danger">
                      </form>
                  </td>
                  </tr>
                  @endforeach

                 
                </tbody>

              </table>
               {{ $prices->links() }}
                  <ul class="pagination justify-content-center mb-4">
                    
                  </ul>
            </div>
          </div>
          <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>


@endsection