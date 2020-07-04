@extends('backtemplate')
@section('content')
   <div class="card mb-3">
    
            
          <div class="card-body">
            <div class="table-responsive">
              <div class="col-lg-12 col-sm-12">
                <form action="{{route('product.update',$products->id)}}" method="post" enctype="multipart/form-data">
       				                          
                 	 @method('PATCH')
					         @csrf
                    <div class="form-group">
                          <div class="row">
                            <label class="col-lg-4 col-sm-6" > Product Name</label>

                            <div class="col-lg-8 col-sm-6">
                              <input type="text" class="form-control"  placeholder="Enter Item name" name="product_name" value="{{$products->product_name}}">
                              
                            </div>
                          </div>          
                    </div>

                    <div class="form-group">
                          <div class="row">
                            <label class="col-lg-4 col-sm-6"> Price </label>

                            <div class="col-lg-8 col-sm-6">
                              <input type="text" name="price" class="form-control"  placeholder="Enter the Price" value="{{$products->price}}">
                            </div>
                          </div>          
                    </div>

                    <div class="form-group">
                          <div class="row">
                            <label class="col-lg-4 col-sm-6" > Image </label>


                            <div class="col-lg-8 col-sm-6">
                              <input type="file" name="image"  class="form-control-file" >
                              <img src="{{$products->image}}" class="img-fluid h-25">
                              <input type="hidden" name="oldimg" value="{{$products->image}}">
                            </div>
                          </div>          
                    </div>

                       
                    <div class="form-group">
                        <div class="row">
                          <label class="col-lg-4 col-sm-12">Category:</label>

                          <div class="col-lg-8 col-sm-12">
                            <select name="category" class="form-control">
              								<option value="">Choose Category</option>
              								@foreach($categories as $category)
              								<option value=" {{ $category->id }}" @php 
              								if($products->category_id == $category->id) echo "selected";
              								@endphp
              								>
              								{{ $category->name }} </option>
              								@endforeach
              							</select>
                          </div>  
                        </div>
                    </div>

                    <div class="form-group">
                          <div class="row">
                            <label class="col-lg-4 col-sm-6" >Description </label>

                            <div class="col-lg-8 col-sm-6">
                              <textarea name="product_desc" class="form-control"  placeholder="" size="30" >{{$products->product_desc}}</textarea>
                             
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