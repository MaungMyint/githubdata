@extends('backendtemplate')
@section('content')
<h1>Venue Lists</h1>
<!-- <a href="#add" title="" class="btn btn-success" data-toggle="modal">Add New</a> -->

<nav>
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <a class="btn btn-success active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Not Confirm</a>&nbsp;
    <a class="btn btn-success" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Confirm</a>
  </div>
</nav>
<div class="tab-content" id="nav-tabContent">
  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab"><table class="table">
  <thead class="thead-dark">
    <tr>
      <th>No</th>
      <th>Code No</th>
      <th> Account User </th>
      <th> Booking User </th>
      <th>Amount</th>
      <th>Date</th>
      <th> Time </th>
      <th> Phone </th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    @php $i=1;
    @endphp
@foreach($events as $event) 

<?php 
  $packagenameString = $event->packagename;
  $packageArray = explode(',', $packagenameString);

  $amountString = $event->amount;
  $amountArray = explode(',', $amountString);

  $package = array_combine($amountArray, $packageArray);

  $amountTotal = 0;
  foreach ($amountArray as $value) 
  {
    $amountTotal += $value;
  }
?>

<tr>
      <td>{{$i}}</td>
       <td>
        <a href="/backend/event/show" style="text-decoration: none;">{{$event->codeno}}</a></td>
       <td>{{$event->username}}</td>
       <td>{{$event->bookinguser}}</td>
       <td>{{$amountTotal}}</td>
       <td>{{$event->date}}</td>
       <td>{{$event->time}}</td>
       <td>{{$event->bookingph}}</td>


      <td>
        <a href="{{route('admin.event.edit',$event->codeno)}}" class="btn btn-primary confirmbtn">
          Confirm
        </a>
      </td>
      @php $i++;
      @endphp
    </tr>
    @endforeach

  </tbody>
</table></div>
  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th>No</th>
      <th>Code No</th>
      <th>Organizer</th>
      <th>Venues</th>
      <th>Service</th>
      <th>Amount</th>
      <th>Special Request</th>
    </tr>
  </thead>
  <tbody>
    @php $i=1;
    @endphp
@foreach($eventscoms as $eventscom)   
<tr>
      <td>{{$i}}</td>
       <td><a href="/backend/eventshow" style="text-decoration: none;">{{$eventscom->codeno}}</a></td>
       <td>{{$eventscom->organizer->name}}</td>
       <td>{{$eventscom->venues->name}}</td>
       <td>{{$eventscom->service->name}}</td>
       <td>{{$eventscom->amount}}</td>
       <td>{{$eventscom->specialrequest}}</td>
      @php $i++;
      @endphp
    </tr>
    @endforeach

  </tbody>
</table>
  </div>
</div>
@endsection