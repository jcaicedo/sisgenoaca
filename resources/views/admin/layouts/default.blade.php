<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>SISGENOACA | @yield('title')</title>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<link rel="icon" type="image/x-icon" href="/favicon.ico" />
	<link rel="stylesheet" href="/vendor/AdminLTE/bootstrap/css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="/assets/css/style_form_register.css">
		<!--<link rel="stylesheet" href="/vendor/font-awesome/css/font-awesome.min.css" />
		<link rel="stylesheet" href="/vendor/Ionicons/css/ionicons.min.css" />-->
		<link rel="stylesheet" href="/vendor/AdminLTE/dist/css/AdminLTE.min.css" />
		<link rel="stylesheet" href="/vendor/AdminLTE/dist/css/skins/_all-skins.min.css" />
		<!-- Font Awesome -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
		<!-- Ionicons -->
		<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
		@stack('styles')
	</head>
	<body class="hold-transition skin-blue sidebar-mini">

		<div class="wrapper">


			@include('admin.partials.header')
		
			@include('admin.partials.sidebar')


			@yield('content')


			@include('admin.partials.footer')

		</div>



		<script src="/vendor/AdminLTE/plugins/jQuery/jQuery-2.2.0.min.js"></script>
		<!-- <script   src="https://code.jquery.com/jquery-2.2.2.min.js"   integrity="sha256-36cp2Co+/62rEAAYHLmRCPIych47CvdM+uTBJwSzWjI="   crossorigin="anonymous"></script> -->
		<script src="/vendor/AdminLTE/bootstrap/js/bootstrap.min.js"></script>
		<script src="/vendor/AdminLTE/plugins/slimScroll/jquery.slimscroll.min.js"></script>
		<script src="/vendor/AdminLTE/plugins/fastclick/fastclick.js"></script>
		<script src="/vendor/AdminLTE/dist/js/app.min.js"></script>
		<script src="/vendor/AdminLTE/dist/js/demo.js"></script>
		<script src="/assets/js/registro.js" ></script>
		<script src="/vendor/jquery-validation/dist/jquery.validate.min.js"></script>
		<script src="/vendor/jquery-validation/src/additional/lettersonly.js"></script>
		<script src="/vendor/jQuery.serializeObject/jquery.serializeObject.js" ></script>

		@stack('scripts')

	</body>
	</html>
