@extends('main')
@section('content')
	<h2>Category List</h2>
	<a href="{{route('admin.category.create')}}" class="btn btn-success">Add Category</a>
	<table class="table">
		<thead>
			<tr>
				<th>NO</th>
				<th>Name</th>
				<th colspan="2">Action</th>
			</tr>
		</thead>
		<tbody>
			@php
			$i=1;
			@endphp
			@foreach($categories as $category)
			<tr>
				<td>{{$i}}</td>
				<td>{{$category->name}}</td>
				<td>

					 <a href="{{route('admin.category.edit',$category->id)}}" class="btn btn-warning">Edit</a>
				</td>
			<td>		 
            <form action="{{route('admin.category.destroy',$category->id)}}" method="post">
                @method('DELETE')
                @csrf
                <button type="submit" class="btn btn-md btn-danger">Delete</button>
              </form>
				</td>
			</tr>
			@php
			$i++;
			@endphp
			@endforeach
			
		</tbody>
	</table>
@endsection