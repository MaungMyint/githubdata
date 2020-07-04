@extends('backendtemplate')
@section('content')
<h1 class="text-center"><strong>Service Lists</strong></h1>
<a href="/backend/service/create" class="btn btn-info" class="form-control">Add New</a>
<table class="table mt-5">
            <thead class="thead-dark">
              <tr>
                <th>No</th>
      <th>Name</th>
      <th>Photo</th>
      <th>Description</th>
      <th>Price</th>
      <th>Organizer_id</th>
      <th colspan="2">Action</th>
              </tr>
            </thead>
            <tbody>
              @php $i=1;
              @endphp
              @foreach($services as $service)
              <tr>
                <td>{{$i}}</td>
      <td>{{$service->name}}</td>
      <td><img src="{{asset($service->image)}}" width="50px" height="50px"></td>
      <td>{{$service->description}}</td>
      <td>{{$service->price}}</td>
      <td>{{$service->organizer->name}}</td>
                <td>
                  <p class="d-inline">
                  <a href="{{route('admin.service.edit',$service->id)}}" class="edit btn btn-warning">
                  Edit</a>
                  <form action="{{route('admin.service.destroy',$service->id)}}" method="post" style="display: inline;">
                  @method('DELETE')
                  @csrf
                  <input type="submit" name="btnsubmit" value="Delete" class="btn btn-danger" onclick="return confirm('Are You Sure?');">
                </form>
                  </p>
                </td>              
               @php $i++;
              @endphp
              </tr>
              @endforeach
            </tbody>
          </table>

@endsection