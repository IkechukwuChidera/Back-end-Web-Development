<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CLASS POST</title>
</head>
<body>

       
   
	         
          <!-- <form method="post"> -->

					<!-- <form>
				 {{csrf_field()}} -->
				
					<div class="col-lg-8">


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


					<form class="form-area " action = "/posts" id="myForm"  method="post" class="contact-form text-right">
					{{csrf_field()}}
						<div class="row">
							<div class="col-lg-6 form-group">
								<input name="title" placeholder="Post Title" onfocus="this.placeholder = 'Post Title'" onblur="this.placeholder = 'Post Title'"
								 class="common-input mb-20 form-control" required="" type="text">


								
							</div>
							<div class="col-lg-6 form-group">
								<textarea class="common-textarea form-control" name="body" placeholder="Make your post" onfocus="this.placeholder = ''"
								 onblur="this.placeholder = 'Make your post'" required=""style="width: 300.017px;height: 200px;"></textarea></div>
							</div>
							<div class="col-lg-12 d-flex justify-content-between">
								<div class="alert-msg" style="text-align: left;"></div>
								<button class="genric-btn primary circle text-uppercase" style="float: left;" type = 'Submit'>Send Message</button>
							</div>
						</div>
				<!-- <input type="text" name="title"><br>
				<textarea name="body"></textarea><br>
				<input type="submit" value="submit">
        </form> -->
				</form>
				</form>
</body>
</html>