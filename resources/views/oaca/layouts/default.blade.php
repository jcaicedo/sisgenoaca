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

	<!--Import Google Icon Font-->
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!--Import materialize.css-->
	<link type="text/css" rel="stylesheet" href="/assets/css/oaca/materialize.css"  media="screen,projection"/>


	{{-- <link rel="stylesheet" href="/assets/css/oaca/oaca_style.css"> --}}
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	@stack('styles')
</head>
<body class="skin-default sidebar-mini">

	<div class="wrapper">
		
		@include('oaca.partials.header')

		@include('oaca.partials.sidebar')
		@yield('content')



		<div class="fixed-action-btn horizontal" style="bottom: 45px; right: 24px;">
			<a class="btn-floating btn-large blue">
				<i style="font-size:7.6rem" class="fa fa-universal-access fa-5x"></i>
			</a>
			<ul>
				{{-- <li><a class="btn-floating red btn-floating-universal-access"><i class="fa fa-universal-access"></i></a></li> --}}
				<li><a class="btn-floating brown lighten-1 btn-floating-universal-access" tabindex="0" type="button" href="#" data-toggle="modal" data-target="#myModal"><i class="material-icons">invert_colors</i></a></li>
				<li><a class="btn-minus-font btn-floating green btn-floating-universal-access"><i class="fa fa-minus"></i></a></li>
				<li><a class="btn-floating blue btn-plus-font btn-floating-universal-access"><i class="fa fa-plus"></i></a></li>
			</ul>
		</div>

	</div>
	<script src="/vendor/AdminLTE/plugins/jQuery/jQuery-2.2.0.min.js"></script>
	<!-- <script   src="https://code.jquery.com/jquery-2.2.2.min.js"   integrity="sha256-36cp2Co+/62rEAAYHLmRCPIych47CvdM+uTBJwSzWjI="   crossorigin="anonymous"></script>


-->
<style>
	.btn-floating.btn-large{
		width: 90.5px;
		height: 90.5px;
	}
	.btn-floating.btn-large i{
		line-height: 90.5px;
	}
	.fixed-action-btn.horizontal ul{
		right: 95px;
		top: 70%;
	}

	.btn-floating i{
		font-size: 2.6rem;
		line-height: 39px;
	}
	.btn-floating-universal-access{
		transform: scaleY(1.2) scaleX(1.2) translateY(1px) translateX(1px) !important;
	}
	/*.blue{
		background-color: #054c5f !important;
	}*/
</style>
<script type="text/javascript" src="/vendor/materialize/dist/js/materialize.min.js"></script>
<script src="/vendor/AdminLTE/bootstrap/js/bootstrap.min.js"></script>
<script src="/vendor/AdminLTE/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<script src="/vendor/AdminLTE/plugins/fastclick/fastclick.js"></script>
<script src="/vendor/AdminLTE/dist/js/app.min.js"></script>

@stack('scripts')
</body>
</html>