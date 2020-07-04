@extends('backtemplate')
@section('content')
   <div class="card mb-3">
    
            
          <div class="card-body">
            <div class="table-responsive">
              <div class="col-lg-12 col-sm-12">
                <form action="{{route('user.update',$member->id)}}" method="POST" enctype="multipart/form-data">
       				                          
                 	 @method('PATCH')
					         @csrf
                    <div class="form-group">
                          <div class="row">
                            <label class="col-lg-4 col-sm-6" > MemberName</label>

                            <div class="col-lg-8 col-sm-6">
                              <input type="text" class="form-control"  placeholder="Enter member name" name="name" value="{{$member->user->name}}">
                              
                            </div>
                          </div>          
                    </div>

                    <div class="form-group">
                          <div class="row">
                            <label class="col-lg-4 col-sm-6"> Email </label>

                            <div class="col-lg-8 col-sm-6">
                              <input type="text" name="email" class="form-control"   value="{{$member->user->email}}">
                            </div>
                          </div>          
                    </div>

                                       
                   

                    <div class="form-group">
                          <div class="row">
                            <label class="col-lg-4 col-sm-6" > NRC Number </label>

                            <div class="col-lg-8 col-sm-6">
                              <input name="nrc" class="form-control"  placeholder="" size="30" value=" {{$member->nrc}}">
                             
                            </div>
                          </div>          
                    </div>

                      <div class="form-group">
                          <div class="row">
                            <label class="col-lg-4 col-sm-6" > Phone Number </label>

                            <div class="col-lg-8 col-sm-6">
                              <input name="phone" class="form-control"  placeholder="" size="30" value=" {{$member->phone}}">
                             
                            </div>
                          </div>          
                    </div>

                      <div class="form-group">
                          <div class="row">
                            <label class="col-lg-4 col-sm-6" > Address </label>

                            <div class="col-lg-8 col-sm-6">
                              <input name="address" class="form-control"  placeholder="" size="30" value=" {{$member->address}}" >
                             
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