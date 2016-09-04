<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>SISGEOACA</title>

	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<link rel="icon" type="image/x-icon" href="/favicon.ico" />
	<link rel="stylesheet" href="/vendor/AdminLTE/bootstrap/css/bootstrap.min.css" />
	<link rel="stylesheet" href="/vendor/jquery-ui-1.11.4.custom/jquery-ui.css">
	<link rel="stylesheet" href="/vendor/AdminLTE/dist/css/AdminLTE.min.css" />

	<link rel="stylesheet" href="/assets/css/oaca/skins/skin_all.css">


	{{-- <link rel="stylesheet" href="/assets/css/oaca/oaca_style.css"> --}}
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	@stack('styles')
</head>
<body class="skin-blue sidebar-mini">

	<div class="wrapper">
		
		@include('oaca.partials.header')

		@include('oaca.partials.sidebar')
		@yield('content')




	</div>
	<script src="/vendor/AdminLTE/plugins/jQuery/jQuery-2.2.0.min.js"></script>
	<!-- <script   src="https://code.jquery.com/jquery-2.2.2.min.js"   integrity="sha256-36cp2Co+/62rEAAYHLmRCPIych47CvdM+uTBJwSzWjI="   crossorigin="anonymous"></script> -->
	<script src="/vendor/AdminLTE/bootstrap/js/bootstrap.min.js"></script>
	<script src="/vendor/AdminLTE/plugins/slimScroll/jquery.slimscroll.min.js"></script>
	<script src="/vendor/AdminLTE/plugins/fastclick/fastclick.js"></script>
	<script src="/vendor/AdminLTE/dist/js/app.min.js"></script>
	<script src="/vendor/AdminLTE/dist/js/demo.js"></script>
	@stack('scripts')
</body>
</html>