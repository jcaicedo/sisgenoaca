<!DOCTYPE html>
<html lang="en">
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
		<link rel="stylesheet" href="/vendor/jquery-ui-1.11.4.custom/jquery-ui.css">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<script src="//oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		<!-- Font Awesome -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
		<!-- Ionicons -->
		<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

		<!-- bootstrap wysihtml5 - text editor -->
		<link rel="stylesheet" href="/vendor/AdminLTE/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
		<!-- iCheck for checkboxes and radio inputs -->
		<link rel="stylesheet" href="/vendor/AdminLTE/plugins/iCheck/all.css">

		@stack('styles')

	</head>
	<body class="hold-transition skin-blue sidebar-mini">


		@include('admin.partials.header')

		@include('admin.partials.sidebar_oaca')


		@yield('content')


		@include('admin.partials.footer')


		<script src="/vendor/AdminLTE/plugins/jQuery/jquery-2.2.3.min.js"></script>
		<!-- <script   src="https://code.jquery.com/jquery-2.2.2.min.js"   integrity="sha256-36cp2Co+/62rEAAYHLmRCPIych47CvdM+uTBJwSzWjI="   crossorigin="anonymous"></script> -->
		<script src="/vendor/AdminLTE/bootstrap/js/bootstrap.min.js"></script>
		<script src="/vendor/AdminLTE/plugins/slimScroll/jquery.slimscroll.min.js"></script>
		<script src="/vendor/AdminLTE/plugins/fastclick/fastclick.js"></script>
		<script src="/vendor/AdminLTE/dist/js/app.min.js"></script>
		<script src="/vendor/AdminLTE/dist/js/demo.js"></script>
		<script src="/vendor/jquery-ui-1.11.4.custom/jquery-ui.js"></script>
		<!-- iCheck 1.0.1 -->
		<script src="/vendor/AdminLTE/plugins/iCheck/icheck.min.js"></script>

		@stack('scripts')
	</body>
	</html>
