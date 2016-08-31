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
	<link rel="stylesheet" href="/vendor/AdminLTE/dist/css/skins/_all-skins.min.css" />


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

	
	<style>

		body{
			font-family: 'Source Sans Pro','Helvetica Neue',Helvetica,Arial,sans-serif;
		}
		.image-principal{min-height: 240px;background-color: #A9AEB1; padding-top: 20px;padding-bottom: 10px; text-align: center;}
		.navbar-principal{margin-bottom: 0px !important; background-color: #222d32 !important;}
		.main-sidebar{top:auto !important; padding-top: 0px;}
		.navbar{border-radius:0px;}
		.title-oaca{text-align: center;}
		.main-header{ max-height: none !important; }

		.skin-blue .main-header .navbar{
			background-color: #222d32 !important;
		}
		.skin-blue .main-header .logo{ background-color: #222d32 }




	</style>


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