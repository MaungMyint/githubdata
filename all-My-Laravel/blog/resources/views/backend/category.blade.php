@extends('backend.backend')
@section('mytable')
<table class="table">
          <thead>
            <th>Title</th>
            <th>body</th>
            <th colspan="2">Action</th>
          </thead>
          <tbody>
          	
          	@foreach($categories as $category )
          	<tr>
        
          	<td>{{$category->name}}</td>
          	
          	<td><a href=" {{route('admin.category.edit',$category->id)}}" class="btn btn-md btn-warning"> Edit
            </a>
          		<form action="{{route('admin.category.destroy',$category->id)}}" method="post">
                @method('DELETE')
                @csrf
                <button type="submit" class="btn btn-md btn-danger">Delete</button>
          		</form>
          	</td>
          	</tr>
          	
          	@endforeach
          	
          </tbody>
        </table>

@endsection