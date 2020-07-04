@extends('admin.backendtemplate')
@section('content')
<h1 class="text-center"><strong>Student Account</strong></h1>

<section class="membercard">
    <div class="container">
        <div class="row">
    @foreach($students as $student)
            <div class="col-md-3 col-sm-6">
                <div class="left-widget-sidebar">
                    <div class="card-widget bg-white user-card">
                        <div class="u-content">
                            <div class="avatar box-80 my-2">
                                <img width="100" height="100" class="img-circle img-100 shadow-white" src="{{asset($student->image)}}">
                                
                            </div>
                            
                            <i class="fa fa-user-circle-o"> {{$student->name}}</i>
                            <p class="text-muted">
                                
                                <span class="company-location">
                                    <i class="fa fa-phone"></i> 
                                    {{$student->phonenumber}}
                                </span><hr>
                                <span class="package">
                                    <i class="fa fa-map-marker"></i>
                                    {{$student->address}}
                                </span><hr>
                                <span class="package">
                                    <i class="fa fa-envelope"></i>
                                    {{$student->gmail}}

                                    
                                </span><hr>
                                <a href="{{('sendemail')}}" class="btn  btn-outline-primary btn-sm">Send To</a>

                                <a href="{{route('admin.std.edit',$student->id)}}" class="btn btn-outline-warning btn-auto  my-2">Edit</a><br>

                                <form action="{{route('admin.std.destroy',$student->id)}}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <input type="submit" name="btnsubmit" value="Remove User" class="btn btn-sm btn-outline-danger" onclick="return confirm('Are You Sure?');">   
                                </form>
                            
                            </p>
                        </div>
                        </a>
                    </div>
                </div>
            </div>

            <div class="my-5"></div>
            @endforeach
            <div class="my-5"></div>
</div>
</div>
</section>
{{  $students->links()  }}
@endsection