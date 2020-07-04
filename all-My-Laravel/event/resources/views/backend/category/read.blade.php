@extends('backendtemplate')
@section('content')
<h1 class="text-center"><strong>Category Lists</strong></h1>
<a href="/backend/category/create" class="btn btn-info" class="form-control">Add New</a>
<table class="table mt-5">
            <thead class="thead-dark">
              <tr>
                <th>No</th>
                <th>Name</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @php $i=1;
              @endphp
              @foreach($categories as $category)
              <tr>
                <td>{{$i}}</td>
                <td>{{$category->name}}</td>
                
                <td>
                  <p class="d-inline">
                  <a href="{{route('admin.category.edit',$category->id)}}" class="edit btn btn-warning">Edit</a>
                  <form action="{{route('admin.category.destroy',$category->id)}}" method="post" style="display: inline;">
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