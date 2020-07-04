@extends('backtemplate')
@section('content')
   <div class="card mb-3">
    
            
          <div class="card-body">
            <div class="table-responsive">
              <div class="col-lg-12 col-sm-12">
                <form action="{{route('price.store')}}" method="post" enctype="multipart/form-data">
					         @csrf
                       
                     
                    <div class="form-group">
                        <div class="row">
                          <label class="col-lg-4 col-sm-12">Product:</label>

                          <div class="col-lg-8 col-sm-12">
                            <select name="product" class="form-control">
                        
                              @foreach($products as $product)
                              <option value=" {{ $product->id }}">
                              {{ $product->product_name }} </option>
                              @endforeach
                            </select>
                          </div>  
                        </div>
                    </div>

                    <div class="form-group">
                          <div class="row">
                            <label class="col-lg-4 col-sm-6"> Price </label>

                            <div class="col-lg-8 col-sm-6">
                              <input type="text" name="price" class="form-control"  placeholder="Enter the Price">
                            </div>
                          </div>          
                    </div>
                    
                     <div class="form-group">
                          <div class="row">
                            <label class="col-lg-4 col-sm-6"> Qty </label>

                            <div class="col-lg-8 col-sm-6">
                              <input type="number" name="qty" class="form-control"  placeholder="Enter qty">
                            </div>
                          </div>          
                    </div>
                    

                    <div class="form-group row">
                        <div class="col-sm-10">
                            <input type="submit" value="Update" name="btnsubmit" class="btn btn-success">
                           
                        </div>
                    </div>

                </form>
              </div>
            </div>  
          </div>
    </div>
         
       

@endsection	