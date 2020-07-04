@extends('backtemplate')
@section('content')
   <div class="card mb-3">
    
            
          <div class="card-body">
            <div class="table-responsive">
              <div class="col-lg-12 col-sm-12">
                <form action="{{route('userdetail.update',$user_details->id)}}" method="POST" enctype="multipart/form-data">
       				                          
                 	 @method('PATCH')
					         @csrf
                    <div class="form-group">
                          <div class="row">
                            <label class="col-lg-4 col-sm-6" > UserName</label>

                            <div class="col-lg-8 col-sm-6">
                              <input type="text" class="form-control"  placeholder="Enter User name" name="name" value="{{$user_details->user->name}}">
                              
                            </div>
                          </div>          
                    </div>

                    <div class="form-group">
                          <div class="row">
                            <label class="col-lg-4 col-sm-6"> Email </label>

                            <div class="col-lg-8 col-sm-6">
                              <input type="text" name="email" class="form-control"   value="{{$user_details->user->email}}">
                            </div>
                          </div>          
                    </div>

                                       
                   

                    <div class="form-group">
                          <div class="row">
                            <label class="col-lg-4 col-sm-6" > NRC Number </label>

                            <div class="col-lg-8 col-sm-6">
                              <input name="nrc" class="form-control"  placeholder="" size="30" value=" {{$user_details->nrc}}">
                             
                            </div>
                          </div>          
                    </div>

                      <div class="form-group">
                          <div class="row">
                            <label class="col-lg-4 col-sm-6" > Phone Number </label>

                            <div class="col-lg-8 col-sm-6">
                              <input name="phone" class="form-control"  placeholder="" size="30" value=" {{$user_details->phone}}">
                             
                            </div>
                          </div>          
                    </div>

                      <div class="form-group">
                          <div class="row">
                            <label class="col-lg-4 col-sm-6" > Address </label>

                            <div class="col-lg-8 col-sm-6">
                              <input name="address" class="form-control"  placeholder="" size="30" value=" {{$user_details->address}}" >
                             
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