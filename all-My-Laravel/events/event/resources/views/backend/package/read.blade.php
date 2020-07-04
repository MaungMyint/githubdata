@extends('backendtemplate')
@section('content')
<h1 class="text-center"><strong>Package Lists</strong></h1>
<a href="/backend/package/create" class="btn btn-info" class="form-control">Add New</a>
<table class="table mt-5">
            <thead class="thead-dark">
              <tr>
                <th>No</th>
      <th>Name</th>
      <th>Photo</th>
      <th>Organizer_id</th>
      <th>Service_id</th>
      <th>Venues_id</th>
      <th>Category_id</th>
      <th>Price</th>
      <th colspan="2">Action</th>
              </tr>
            </thead>
            <tbody>
              @php $i=1;
              @endphp
              @foreach($packages as $package)
              <tr>
                <td>{{$i}}</td>
      <td>{{$package->name}}</td>
      <td><img src="{{asset($package->image)}}" width="50px" height="50px"></td>
       <td>{{$package->organizer->name}}</td>
      <td>{{$package->service->name}}</td>
      <td>{{$package->venues->name}}</td>
      <td>{{$package->category->name}}</td>
      <td>{{$package->price}}</td>
     
                <td>
                  <p class="d-inline">
                  <a href="{{route('admin.package.edit',$package->id)}}" class="edit btn btn-warning">Edit</a>
                  <form action="{{route('admin.package.destroy',$package->id)}}" method="post" style="display: inline;">
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