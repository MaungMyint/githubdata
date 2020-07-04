@extends('main')
@section('content')
	<h2>Unit List</h2>
	<a href="{{route('admin.unit.create')}}" class="btn btn-success">Add</a>
	<table class="table">
		<thead>
			<tr>
				<th>NO</th>
				<th>Name</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach($units as $unit)
			<tr>
				<td>{{$unit->id}}</td>
				<td>{{$unit->name}}</td>
				<td>
					<a href="" class="btn btn-warning">Edit</a>
					<a href="" class="btn btn-danger">Delete</a>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
@endsection