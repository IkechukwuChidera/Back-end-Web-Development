<html>
	<head>
		<title>IKECHUKWU by TEMPLATED</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:700italic,400,300,700' rel='stylesheet' type='text/css'>
		<!--[if lte IE 8]><script src="js/html5shiv.js" type="text/javascript"></script><![endif]-->


    <link rel="stylesheet" href="{{asset('css/skel-noscript.css')}}" />
    <link rel="stylesheet" href="{{asset('css/style.css')}}" />
    <link rel="stylesheet" href="{{asset('css/style-desktop.css')}}" />

	</head>
<body>
@include('layout.navbar')
@yield('content') 
@include('layout.footer')

  <script type="text/javascript" src="{{asset('js/skel.min.js')}}"> </script>
  <script type="text/javascript" src="{{asset('js/skel-panels.min.js')}}"> </script>
  <script type="text/javascript" src="{{asset('js/init.js')}}"> </script>


</body>

</html>
