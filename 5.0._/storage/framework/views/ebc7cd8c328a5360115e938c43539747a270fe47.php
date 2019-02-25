<!DOCTYPE html>
<html lang="en">
<head>
	<title>Unica - University Template</title>
	<meta charset="UTF-8">
	<meta name="description" content="Unica University Template">
	<meta name="keywords" content="event, unica, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->   
	<link href="img/favicon.ico" rel="shortcut icon"/>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="<?php echo e(asset('/css/bootstrap.min.css')); ?>"/>
	<link rel="stylesheet" href="<?php echo e(asset('/css/font-awesome.min.css')); ?>"/>
	<link rel="stylesheet" href="<?php echo e(asset('/css/themify-icons.css')); ?>"/>
	<link rel="stylesheet" href="<?php echo e(asset('/css/magnific-popup.css')); ?>"/>
	<link rel="stylesheet" href="<?php echo e(asset('/css/animate.css')); ?>"/>
	<link rel="stylesheet" href="<?php echo e(asset('/css/owl.carousel.css')); ?>"/>
	<link rel="stylesheet" href="<?php echo e(asset('/css/style.css')); ?>"/>


	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>

<body>

<?php echo $__env->make('Brytlayout.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php echo $__env->yieldContent('content'); ?>



	<!--====== Javascripts & Jquery ======-->
	<script src="<?php echo e(asset('/js/jquery-3.2.1.min.js')); ?>"></script>
	<script src="<?php echo e(asset('/js/owl.carousel.min.js')); ?>"></script>
	<script src="<?php echo e(asset('/js/jquery.countdown.js')); ?>"></script>
	<script src="<?php echo e(asset('/js/masonry.pkgd.min.js')); ?>"></script>
	<script src="<?php echo e(asset('/js/magnific-popup.min.js')); ?>"></script>
	<script src="<?php echo e(asset('/js/main.js')); ?>"></script>
	
    <?php echo $__env->make('Brytlayout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>  
</body>
</html>