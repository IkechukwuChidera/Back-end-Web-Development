@extends('posts.layout')

@section('content')
    <h1>Edit Experience Post</h1>
    <hr>
     <form action="{{route('posts.update', [$post->id])}}" method="POST">
     <input type="hidden" name="_method" value="PUT">   
     {{ csrf_field() }}    
      <div class="form-group">
        <label for="title">Post Title</label>
        <input type="text" value="{{$post->title}}" class="form-control" id="PostTitle"  name="title" >
      </div>
      <div class="form-group">
        <label for="description">Post Body</label>
        <input type="text" value="{{$post->body}}" class="form-control" id="postbody" name="body" >
      </div>
      @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
      @endif
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection

<!-- //PUT works like Poat, is an updating method -->