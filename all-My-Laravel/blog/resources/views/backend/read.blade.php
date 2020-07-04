@extends('backend.backend')
@section('mytable')
<table class="table">
          <thead>
            <th>Title</th>
            <th>body</th>
            <th colspan="2">Action</th>
          </thead>
          <tbody>
          	
          	@foreach($posts as $post )
          	<tr>
        
          	<td>{{$post->title}}</td>
          	<td>{{$post->body}}</td>
          	<td><a href=" {{route('admin.post.edit',$post->id)}}" class="btn btn-md btn-warning"> Edit
            </a>
          		<form action="{{route('admin.post.destroy',$post->id)}}" method="post">
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