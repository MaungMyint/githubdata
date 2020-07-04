@extends('maintemplate')

@section('content')
<!-- <div class="container">
    <div class="row justify-content-center"> -->
        <div class="container">
            <div class="row my-5 justify-content-center" style="padding-top: 50px; ">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-primary">My Test Email</div>

                <div class="card-body">
                    <form method="POST" action="{{url('send/email')}}">
                        @csrf

                        <div class="form-group row">
                            <label for="subject" class="col-md-4 col-form-label text-md-right">Subject</label>

                            <div class="col-md-6">
                                <input id="subject" type="text" class="form-control @error('subject') is-invalid @enderror" name="subject" value="{{ old('subject') }}"  autofocus>
                            </div>
                        </div>

                       <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Email</label>

                            <div class="col-md-6">
                                <input id="email" type="subject" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"   autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Message</label>
                             <div class="col-md-6">
                            <textarea name="message" class="form-control  @error('message') is-invalid @enderror"></textarea>
                            </div>
                        </div>
                <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">Send Email</button>
                            </div>
                        </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        </div>
        </div>
    <!-- </div>
</div> -->
@endsection
