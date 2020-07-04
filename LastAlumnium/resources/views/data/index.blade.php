@extends('admin.backendtemplate')
@section('content')
<h1 class="text-center"><strong>My Student Information</strong></h1>
{{-- <center>
  <a href="{{ ('import') }}" class="btn btn-info" class="form-control">Add New</a>

</center> --}}


<div class="table-responsive">
<table class="table table-striped table-bordered table-hover table-active " id="example" style="width: 100%">


  <thead  class="thead-dark">
    <tr>
      <th>No</th>
      <th>Myanmar Name</th>
      <th>Name</th>
      <th>NRC</th>
      <th>Degree</th>
      <th>Major</th>
      <th>Training</th>
      <th>Course</th>
      <th>PhoneNo.</th>
      <th>Email</th>
      <th>address</th>
      <th>University</th>
      <th>Goverment Staff/Student</th>
      <th>Division/State</th>
      <th>Job Position</th>
      <th>Job Location</th>
      <th>Slary</th>


    </tr>
  </thead>

  <tbody>
    @foreach($data as $c)
    <tr>
      <td>{{ $c->no }}</td>
      <td>{{ $c->mname }}</td>
      <td>{{ $c->name }}</td>
      <td>{{ $c->nrc }}</td>
      <td>{{ $c->degree }}</td>
      <td>{{ $c->major }}</td>
      <td>{{ $c->training }}</td>
      <td>{{ $c->course }}</td>
      <td>{{ $c->phonenumber }}</td>
      <td>{{ $c->gmail }}</td>
      <td>{{ $c->address }}</td>
      <td>{{ $c->university }}</td>
      <td>{{ $c->staff }}</td>
      <td>{{ $c->state}}</td>
      <td>{{ $c->jobposition}}</td>
      <td>{{ $c->joblocation }}</td>
      <td>{{ $c->slary }}</td>


    </tr>
    @endforeach
  </tbody>

  <tfoot>
    <tr>
      <th>No</th>
      <th>Myanmar Name</th>
      <th>Name</th>
      <th>NRC</th>
      <th>Degree</th>
      <th>Major</th>
      <th>Training</th>
      <th>Course</th>
      <th>PhoneNo.</th>
      <th>Email</th>
      <th>address</th>
      <th>University</th>
      <th>Goverment Staff/Student</th>
      <th>Division/State</th>
      <th>Job Position</th>
      <th>Job Location</th>
      <th>Slary</th>
    </tr>
  </tfoot>
          </table>



      </div>

@endsection

