
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>SISGEOACA - Descripción</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />

	<!--
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE
	DESIGNED & DEVELOPED by FREEHTML5.CO

	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
-->

<!-- Facebook and Twitter integration -->
<meta property="og:title" content=""/>
<meta property="og:image" content=""/>
<meta property="og:url" content=""/>
<meta property="og:site_name" content=""/>
<meta property="og:description" content=""/>
<meta name="twitter:title" content="" />
<meta name="twitter:image" content="" />
<meta name="twitter:url" content="" />
<meta name="twitter:card" content="" />

<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
<link rel="shortcut icon" href="favicon.ico">

<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,300' rel='stylesheet' type='text/css'>

<!-- Animate.css -->
<link rel="stylesheet" href="themes/pentagon/css/animate.css">
<!-- Icomoon Icon Fonts-->
<link rel="stylesheet" href="themes/pentagon/css/icomoon.css">
<!-- Bootstrap  -->
<link rel="stylesheet" href="themes/pentagon/css/bootstrap.css">
<!-- Superfish -->
<link rel="stylesheet" href="themes/pentagon/css/superfish.css">

<link rel="stylesheet" href="themes/pentagon/css/style.css">

@stack('styles')
<!-- Modernizr JS -->
<script src="themes/pentagon/js/modernizr-2.6.2.min.js"></script>
<!-- FOR IE9 below -->
<!--[if lt IE 9]>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>
<body>
	<div id="fh5co-wrapper">
		<div id="fh5co-page">

			@include('front.partials.menu')

			<div class="fh5co-hero fh5co-hero-2">
				<div class="fh5co-overlay"></div>
				<div class="fh5co-cover fh5co-cover_2 text-center" data-stellar-background-ratio="0.5" style="background-image: url(assets/imgs/home/banner-principal.png);">
					<div class="desc animate-box">
						<h2><strong>Descripción de SISGEOACA</strong></h2>

					</div>
				</div>
			</div>
			<!-- end:header-top -->

			@include('front.description.includes.problem')


	@include('front.partials.footer')


		</div>
		<!-- END fh5co-page -->

	</div>
	<!-- END fh5co-wrapper -->

	<!-- jQuery -->


	<script src="themes/pentagon/js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="themes/pentagon/js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="themes/pentagon/js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="themes/pentagon/js/jquery.waypoints.min.js"></script>
	<!-- Stellar -->
	<script src="themes/pentagon/js/jquery.stellar.min.js"></script>
	<!-- Superfish -->
	<script src="themes/pentagon/js/hoverIntent.js"></script>
	<script src="themes/pentagon/js/superfish.js"></script>

	<!-- Main JS (Do not remove) -->
	<script src="themes/pentagon/js/main.js"></script>
	@stack('scripts')
</body>
</html>
