@extends('index')

@section('middle')
<section class="login-wrapper features">
            <div class="container">
                <div class="col-md-6 col-sm-6 col-md-offset-3 col-sm-offset-3 features-content">
                    
        
                    <span>JOBS</span>
                    <i><img src="{{ asset('template/img/hunt.png')}}" width="130" class="logo" alt=""></i>
                

                
                    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                        <i class="fas fa-2x text-primary">Register Form</i><hr>
                        @csrf
                        
                        <div class="form-group row">
                            <div class="col-md-1">
                            <i class="fas fa-user-circle fa-2x text-primary"></i>
                            </div>
                            <div class="col-md-11">
                                <input id="name" placeholder="User Name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-1">
                                <i class="fas fa-envelope fa-2x text-primary"></i>
                            </div>

                            <div class="col-md-11">
                                <input id="email" placeholder="User Email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-1">
                                <i class="fas fa-lock fa-2x text-primary"></i>
                            </div>

                            <div class="col-md-11">
                                <input id="password" placeholder="User Password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>                       

                         <div class="form-group row">
                            <div class="col-md-1">
                                <i class="fas fa-unlock-alt fa-2x text-primary"></i>
                            </div>

                            <div class="col-md-11">
                                <input id="password-confirm" placeholder="Confirm Password" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                         <div class="form-group row">
                           
                            <div class="col-md-6">
                                <input  type="radio"  name="userrole" id="seeker" value="Seeker" required><i for="seeker" class="fa-1x text-primary">Seeker</i>
                            </div>
                            <div class="col-md-6">
                                <input  type="radio" id="employee"  name="userrole" value="Employee" required><i for="employee" class="fa-1x text-primary"> Employee</i>
                            </div>
                        </div>                       


                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                
            
        
    </div>
</div>
</section>
@endsection
