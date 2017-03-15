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

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="{{url('/themes/FullscreenBookBlock/modal-bootstrap/css/bootstrap.min.css')}}" >

	<!-- Optional theme -->
	<link rel="stylesheet" href="{{url('/themes/FullscreenBookBlock/modal-bootstrap/css/bootstrap-theme.css')}}" >


	@stack('styles')
</head>
<body>
	<div id="container" class="container">

		@include('oaca.fullscreen_pageflip.partials.sidebar')
		@include('oaca.fullscreen_pageflip.pages.front')

		<!--Boton flotante de opciones de accesibilidad-->
		@include('oaca.fullscreen_pageflip.partials.button_floating')



		<!--ELEMENTOS MODALES---------------------------------------------------------------->
		<!-- Modal Estilo de Colores -->
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="myModalLabel">Combinación de colores</h4>
					</div>
					<div class="modal-body">

					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						<button type="button" class="btn btn-primary">Save changes</button>
					</div>
				</div>
			</div>
		</div>

		<!-------------------------------------------------------------------------------->

@include('oaca.fullscreen_pageflip.partials.footer')

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

	.container{
		height: 81%;
		min-height: calc(100vh - 87px);
	}

	.footer{
		height: 100%;
		background: black;
		padding: 11px 15px 0 15px;
	}

	.col-5{
		width: 50%;
		float:left;
		height:auto;
		-webkit-box-sizing: border-box;
		-moz-box-sizing: border-box;
		box-sizing: border-box;
	}

.img-logos-institution{
	width: 22px;
	height: auto;
}
.post-thumb{
	float: left;
	margin-left: 20px;
}
.post-thumb img{
	display: block;
	width: 74px;
	float: left;
}
.post-thumb img.ciencias{
width: 59px;
height: 59px;
margin-top: 7px;
}

.post-thumb img.licence{
width: 135px;
margin-top: 9px;
}

.post-thumb img.ucv{
width: 80px;
margin-top: 3px;
margin-left: 12px;
}

.post-content{
	float: left;
}

.post-thumb.content-right{
	float: right;
	margin-right: 200px;
}
.post-thumb.content-right img{
	float: right !important;
}


.post-content h4{
	font-size: 14px;
	line-height: 0.7;
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
	<script src="{{url('/themes/FullscreenBookBlock/js/main.js')}}"></script> <!--archivo js propio del sistema-->

	<!-- Latest compiled and minified JavaScript -->
	<script src="{{url('/themes/FullscreenBookBlock/modal-bootstrap/js/bootstrap.min.js')}}" ></script>


	<!--Inicializa las accciones del theme de la pagina para mostrar el oaca-->
	<script>
	$(function() {

		Page.init();

	});
	</script>
	@stack('scripts')
</body>
</html>
