@extends('backtemplate')
@section('content')





<div class="container register">
                <div class="row">
                    <div class="col-md-3 register-left">
                        <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
                        <h3>Welcome</h3>
                       
                       
                    </div>
                    <div class="col-md-9 register-right">
                        
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <h3 class="register-heading">Add New Head Dealer</h3>
                                <form action="{{route('userdetail.store')}}" method="post" >
                                	@csrf
	                                <div class="row register-form">
	                                    <div class="col-md-6">
	                                        
	                                        <div class="form-group">
	                                            <input type="text" class="form-control" placeholder="Enter Username" value="" name="name" />
	                                        </div>
	                                        
	                                        <div class="form-group">
	                                            <input type="password" class="form-control" placeholder="Password *" value="" name="password" />
	                                        </div>

	                                        <div class="form-group">
	                                            <input type="text" class="form-control"  placeholder="Enter NRC Number" value="" name="nrc" />
	                                        </div>

	                                        
	                                        

	                                        <div class="form-group">
	                                            <div class="maxl">
	                                                <label class="radio inline"> 
	                                                    <input type="radio" name="gender" value="male" checked>
	                                                    <span> Male </span> 
	                                                </label>
	                                                <label class="radio inline"> 
	                                                    <input type="radio" name="gender" value="female">
	                                                    <span>Female </span> 
	                                                </label>
	                                            </div>
	                                        </div>
	                                         @if(Auth::check() && Auth::user()->role=='head')
	                                        <div class="form-group">
	                                        	<input type="checkbox" class="custom-control-input" id="customCheck1" name="agent">
  												<label class="custom-control-label" for="customCheck1">Agent?</label>
	                                        </div>
	                                        @endif
	                                    </div>
	                                    <div class="col-md-6">
	                                        <div class="form-group">
	                                            <input type="email" class="form-control" placeholder="Your Email *" value="" name="email" />
	                                        </div>
	                                        <div class="form-group">
	                                            <input type="text" minlength="10" maxlength="10" name="phone" class="form-control" placeholder="Your Phone *" value=""  />
	                                        </div>
	                                        <div class="form-group">
	                                            <textarea   class="form-control" placeholder="Enter Address" value="" name="address"></textarea>
	                                        </div>
	                                        <input type="hidden" name="access" value="2" >
	                                        
	                                        <input type="submit" class="btnRegister"  value="Add"/>
	                                    </div>
	                                </div>
	                            </form>    
                            </div>
                            
                        </div>
                    </div>
                </div>

            </div>


@endsection