@extends('maintemplate')
@section('content')
<div class="col-lg-8">
        <!-- Title -->
        <h1 class="mt-4">{{$post->title}}</h1>
        <!-- Author -->
        <p class="lead">
          by <a href="/?user_id={{$post->user_id}}">{{$post->user->name}}</a>
            <br>
          @if (Auth::check() && Auth::user()->id == $post->user_id) 
            <a href="{{route('post.edit',$post->id)}}" class="btn btn-warning">Edit</a>
            <form action="{{route('post.destroy',$post->id)}}" method="post">
                @method('DELETE')
                @csrf
                <button type="submit" class="btn btn-md btn-danger">Delete</button>
              </form>
          @endif
        </p>

        <hr>

        <!-- Date/Time -->
        <p>Posted on {{$post->created_at->ToDayDateTimeString()}}<span class="float-right">Category:{{$post->category->name}}</span></p>

        <hr>

        <!-- Preview Image -->
        <img class="img-fluid rounded" src="{{$post->image}}" alt="">

        <hr>
<p>{{$post->body}}</p>

        <hr>
         @if(!Auth::check())
            <div class="alert alert-danger">
              <strong>
                Please Login First!
              </strong>
            </div>
            @endif
        <!-- Comments Form -->
        <div class="card my-4">
          <h5 class="card-header">Leave a Comment:</h5>
          <div class="card-body"><!-- 
            <form action="{{route('comment.store')}}" method="post" >@csrf -->
              
              <div class="form-group">
                <textarea class="form-control @error('body') is-invalid @enderror" rows="3" name="body" id="body">{{old('body')}}</textarea>
                @error('body')
                <span class="invalid-feedback" role="alert"></span>
                @enderror
                <input type="hidden" name="post_id" value="{{$post->id}}" id="post_id">
              </div>
              <button type="submit" class="btn btn-primary cmtbtn">Submit</button>
          <!--   </form> -->
          </div>
        </div>

        <!-- Single Comment has many so  -->

           

        @foreach($post->comments as $comment) 
        <div class="media mb-4">
          <img class="d-flex mr-3 rounded-circle" src="{{asset($comment->user->avatar)}}" width="50" height="50" alt="my photo">
          <div class="media-body">
            <h5 class="mt-0">{{$comment->user->name}}</h5>
            <div class="float-right"><span>{{$comment->created_at->diffForHumans()}}</span>
            </div>
              {{$comment->body}}
             </div>
        </div>        
        @endforeach
      </div>
@endsection

@section('script')
<script type="text/javascript">
$(document).ready(function(){
  $('.cmtbtn').click(function(){
    var body=$('#body').val();
    var post_id=$('#post_id').val();
   // alert(body+post_id);

   $.ajaxSetup({
    headers: {

      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }

   });


$.post('/comment',{body:body,post_id:post_id},function(reponse){
  console.log(reponse); //for ajax
})


  })
})  

</script>
@endsection