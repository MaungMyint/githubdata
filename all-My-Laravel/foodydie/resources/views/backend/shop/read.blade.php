@extends('backendtemplate')
@section('content')
<h1 class="text-center"><strong>Artists Lists</strong></h1>
<a href="/backend/shop/create" class="btn btn-info" class="form-control">Add New</a>
<table class="table mt-5">
            <thead class="thead-dark">
              <tr>
                <th>No</th>
      <th>Photo</th>
      <th>Name</th>
      <th>Category</th>
      <th>Phone No</th>
      <th>Open Time</th>
      <th>Close Time</th>
      <th>Open Date</th>
      <th colspan="2">Action</th>
              </tr>
            </thead>
            <tbody>
              @php $i=1;
              @endphp
              @foreach($shops as $shop)
              <tr>
                <td>{{$i}}</td>
      <td><img src="{{asset($shop->image)}}" width="50px" height="50px"></td>
      <td>{{$shop->name}}</td>
      <td>{{$shop->category->name}}</td>
       <td>{{$shop->phone}}</td>
      <td>{{$shop->open}}</td>
      <td>{{$shop->close}}</td>
      <td>{{$shop->odate}}</td>
     
                <td>
                  <p class="d-inline">
                  <a href="{{route('admin.shop.edit',$shop->id)}}" class="edit btn btn-warning">Edit</a>
                  <form action="{{route('admin.shop.destroy',$shop->id)}}" method="post" style="display: inline;">
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