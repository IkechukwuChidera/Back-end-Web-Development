@extends('posts.layout')


@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div >
                <h2><center> Show Post</center></h2>

            </div>


        </div>

    </div>

   

    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

              <center>  <strong>  Title:</strong>

                {{ $post->title }} </center>

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

               <center> <strong>Body:</strong>

                {{ $post->body }} <center>

                <div class="center">

<a class="btn btn-primary" href="{{ route('posts.index') }}"> Back</a>

</div>

            </div>



            

        </div>

           

    </div>

@endsection