@extends('posts.layout')
@section('content')
<div class="row">

    <div class="col-lg-12 margin-tb">

        <div class="pull-left">

            <h2>create new post</h2>

        </div>

        <div class="pull-right">
<a class=''
        </div>

    </div>

</div>



@if ($errors->any())

    <div class="alert alert-danger">

        <strong>Whoops!</strong> There were some problems with your input.<br><br>

        <ul>

            @foreach ($errors->all() as $error)

                <li>{{ $error }}</li>

            @endforeach

        </ul>

    </div>

@endif



<form action="{{ route('posts.store') }}" method="post">

    @csrf



     <div class="row">

        <div class="col-lg-6 form-group">
          <input name="title" placeholder="Post Title"onfocus="this.placeholder = 'Post Title'" onblur="this.placeholder='Post Title'"
          class="common-input mb-20 form-control"required=""type="text">


                <!-- <strong>Title:</strong>

                <input type="text" name="tilte" class="form-control" placeholder="title" required=""> -->

            </div>

        </div>

        <div class="col-lg-6 form-group">

            <!-- <div class="form-group"> -->

                <strong>body:</strong>
                <textarea class="common-textarea form-control"name="body" placeholder"make your post" oncfocus="this.placeholder=''"
                onblur="this.placeholder = "required=""

                <textarea class="" style="height:150px" name="body" placeholder="body"></textarea>

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">

                <button type="submit" class="btn btn-primary">Submit</button>

        </div>

    </div>



</form>
@endsection
