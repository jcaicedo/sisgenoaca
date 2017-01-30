<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Fullscreen Pageflip Layout with BookBlock</title>
	<meta name="description" content="Fullscreen Pageflip Layout with BookBlock" />
	<meta name="keywords" content="fullscreen pageflip, booklet, layout, bookblock, jquery plugin, flipboard layout, sidebar menu" />
	<meta name="author" content="Codrops" />
	<link rel="shortcut icon" href="../favicon.ico">
	<link rel="stylesheet" type="text/css" href="{{url('/themes/FullscreenBookBlock/css/jquery.jscrollpane.custom.css')}}" />
	<link rel="stylesheet" type="text/css" href="{{url('/themes/FullscreenBookBlock/css/bookblock.css')}}" />
	<link rel="stylesheet" type="text/css" href="{{url('/themes/FullscreenBookBlock/css/custom.css')}}" />
	<link rel="stylesheet" type="text/css" href="{{url('/themes/FullscreenBookBlock/css/style_contents.css')}}" />
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	<!--Import Google Icon Font-->
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!--Import materialize.css-->
	<link type="text/css" rel="stylesheet" href="/assets/css/oaca/materialize.css"  media="screen,projection"/>


	{{-- <link rel="stylesheet" href="/assets/css/oaca/oaca_style.css"> --}}
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">


	<script src="{{url('/themes/FullscreenBookBlock/js/modernizr.custom.79639.js')}}"></script>

	<script src="{{url('/themes/FullscreenBookBlock/js/jquery.mousewheel.js')}}"></script>
	@stack('styles')
</head>
<body>
	<div id="container" class="container">

		@include('oaca.fullscreen_pageflip.partials.sidebar')
		@include('oaca.fullscreen_pageflip.pages.front')



		<div class="fixed-action-btn horizontal" style="bottom: 45px; right: 24px;">
			<a class="btn-floating btn-large blue">
				<i style="font-size:4.6rem" class="fa fa-universal-access fa-5x"></i>
			</a>
			<ul>
				<li><a class="btn-floating red btn-floating-universal-access" tabindex="0" type="button" href="#" data-toggle="modal" data-target="#myModal2"><i class="fa fa-universal-access"></i></a></li>
				<li><a class="btn-floating brown lighten-1 btn-floating-universal-access" tabindex="0" type="button" href="#" data-toggle="modal" data-target="#myModal"><i class="material-icons">invert_colors</i></a></li>
				<li><a class="btn-minus-font btn-floating green btn-floating-universal-access"><i class="fa fa-minus"></i></a></li>
				<li><a class="btn-floating blue btn-plus-font btn-floating-universal-access"><i class="fa fa-plus"></i></a></li>
			</ul>
		</div>
	</div><!-- /container -->
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
		font-size: 1.6rem;
		line-height: 39px;
	}
	.btn-floating-universal-access{
		transform: scaleY(1.2) scaleX(1.2) translateY(1px) translateX(1px) !important;
	}
	/*.blue{
	background-color: #054c5f !important;
	}*/
	</style>
	<script src="{{url('/vendor/jquery/dist/jquery.min.js')}}"></script>
	<script type="text/javascript" src="/vendor/materialize/dist/js/materialize.min.js"></script>
	<script src="{{url('/themes/FullscreenBookBlock/js/jquery.mousewheel.js')}}"></script>
	<script src="{{url('/themes/FullscreenBookBlock/js/jquery.jscrollpane.min.js')}}"></script>
	<script src="{{url('/themes/FullscreenBookBlock/js/jquerypp.custom.js')}}"></script>
	<script src="{{url('/themes/FullscreenBookBlock/js/jquery.bookblock.js')}}"></script>
	<script src="{{url('/themes/FullscreenBookBlock/js/page.js')}}"></script>
	<script>
	$(function() {

		Page.init();

	});
	</script>
	@stack('scripts')
</body>
</html>
