@extends('backend.backend')
@section('mytable')
<table class="table">
          <thead><tr>
            <th>No</th>
            <th>Name</th>
            <th>Email</th>
            <th>Post Count</th>
            </tr>
          </thead>
          <tbody>
            @php
            $i=1;
            @endphp
          	@foreach($users as $user )
          	<tr>
             
              <td>{{$i}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{count($user->posts)}}</td>
            
          </tr>
          @php
          $i++;
          @endphp
          @endforeach
          </tbody>
        </table>

@endsection