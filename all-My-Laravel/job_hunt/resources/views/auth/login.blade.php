@extends('index')

@section('middle')
<section class="login-wrapper features">
<div class="container">
    
        
                <div class="col-md-6 col-sm-8 col-md-offset-3 col-sm-offset-2 features-content">

                    
                    <span>JOBS HUNT</span>
                        
                   
                    <form method="POST" action="{{ route('login') }}">
                        <i class="fas fa-2x text-primary">Log In Form</i><hr>
                        @csrf
                        
                        <div class="form-group row">
                            <div class="col-md-1 col-sm-1">
                                <i class="fas fa-envelope fa-2x text-primary"></i>
                            </div>

                            <div class="col-md-11 col-sm-11">
                                <input id="email" placeholder="Enter Your Email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-1 col-sm-1">
                                <i class="fas fa-lock fa-2x text-primary"></i>
                            </div>

                            <div class="col-md-11 col-sm-11">
                                <input id="password" placeholder="Ener your Password" type="password" class="form-control input-lg{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-4 col-sm-4">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <i class="fa-1x text-primary" for="remember">
                                        {{ __('Remember Me') }}
                            </i>
                            </div>
                        </div>
                        <div class="form-group row">
                            <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                            </button>
                        </div>
                            @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                            @endif
                        
                    </form>
                </div>
            
    
</div>
@endsection

