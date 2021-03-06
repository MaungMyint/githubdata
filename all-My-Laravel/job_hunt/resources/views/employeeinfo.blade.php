@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Welcome {{Auth::user()->name}}  Fill your detail information</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('employeeinfo.index') }}" enctype="multipart/form-data">
                        @csrf                  
                                                                     
                        <div class="form-group row">
                            <label for="image" class="col-md-4 col-form-label text-md-right">{{ __('Image') }}</label>

                            <div class="col-md-6">
                                <input id="image" type="file" class="form-control{{ $errors->has('image') ? ' is-invalid' : '' }}" name="image" required>

                                @if ($errors->has('image'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('image') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>                         
                                                                     

                        <div class="form-group row">
                            <label for="phoneno" class="col-md-4 col-form-label text-md-right">{{ __('Phoneno') }}</label>

                            <div class="col-md-6">
                                <input id="phoneno" type="text" class="form-control{{ $errors->has('phoneno') ? ' is-invalid' : '' }}" name="phoneno" value="{{ old('phoneno') }}" required>

                                @if ($errors->has('phoneno'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('phoneno') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                       

                        <div class="form-group row">
                            <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>

                            <div class="col-md-6">
                                <input id="address" type="text" class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" name="address" required>

                                @if ($errors->has('address'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        

                        <div class="form-group row">
                            <label for="detail" class="col-md-4 col-form-label text-md-right">{{ __('User Detail') }}</label>

                            <div class="col-md-6">
                                <input id="detail" type="text" class="form-control{{ $errors->has('detail') ? ' is-invalid' : '' }}" name="detail" required>

                                @if ($errors->has('detail'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('detail') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                       

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Save') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
