@extends('backtemplate')
@section('content')
   <div class="card mb-3">
          <div class="card-header">
            
            <h3 class="d-inline-block">Product List</h3>
            <div class="col-lg-2 col-md-2 col-sm-2 float-right">
              <a href="{{ route('product.create')}}" class="btn btn-outline-primary "> 
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
                    <th>Product Name</th>
                    <th>Price</th>
                    <th>Image</th>
                    <th>Type Name</th>
                    <th>Description</th>
                    <th colspan="2">Action</th>
                    
                  </tr>
                </thead>
                <tbody>
            
                @foreach ($products as $product)
                  
                  <tr>
                    <td>{{$product->product_name}}</td>
                    <td>{{$product->price}}</td>
                    <td><img src=" {{$product->image}}" class="img-fluid h-25 "></img></td>
                    <td>{{$product->category->name}}</td>
                    <td>{{$product->product_desc}}</td>
                     <td><a href="{{route('product.edit',$product->id)}}" class="btn bg-success" value="Edit">Edit</a></td>
                     <td>
                      <form action="{{route('product.destroy',$product->id)}}" method="post">
                        @method('Delete')
                        @csrf
                        <input type="submit" name="btnsubmit" value="Delete" class="btn btn-danger">
                      </form>
                  </td>
                    
                  </tr>
                   
                </tbody>
                @endforeach
              </table>
            </div>
          </div>
          
       </div>
@endsection