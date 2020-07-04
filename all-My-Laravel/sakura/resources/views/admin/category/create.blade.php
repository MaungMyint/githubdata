@extends('backtemplate')
@section('content')
   <div class="card mb-3">
    
            
          <div class="card-body">
            <div class="table-responsive">
              <div class="col-lg-12 col-sm-12">
                <form action="{{ route('category.store')}}" method="post" enctype="multipart/form-data">
       
                          
                  
                    @csrf
                    <div class="form-group">
                          <div class="row">
                            <label class="col-lg-4 col-sm-6" > Product Name</label>

                            <div class="col-lg-8 col-sm-6">
                              <input type="text" class="form-control"  placeholder="Enter Item name" name="category_name" >
                              
                            </div>
                          </div>          
                    </div>

                   


                    <div class="form-group row">
                        <div class="col-sm-10">
                            <input type="submit" value="Save" name="btnsubmit" class="btn btn-success">
                           
                        </div>
                    </div>

                </form>
              </div>
            </div>  
          </div>
    </div>
         
       

@endsection