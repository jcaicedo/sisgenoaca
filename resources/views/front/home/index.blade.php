
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SISGEOACA </title>
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

<!-- <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'> -->

<!-- Animate.css -->
<link rel="stylesheet" href="themes/pentagon/css/animate.css">
<!-- Icomoon Icon Fonts-->
<link rel="stylesheet" href="themes/pentagon/css/icomoon.css">
<!-- Bootstrap  -->
<link rel="stylesheet" href="themes/pentagon/css/bootstrap.css">
<!-- Superfish -->
<link rel="stylesheet" href="themes/pentagon/css/superfish.css">

<link rel="stylesheet" href="themes/pentagon/css/style.css">


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

      <!--Menu-->
      @include('front.partials.menu')

      <div class="fh5co-hero">
        <div class="fh5co-overlay"></div>
        <div class="fh5co-cover text-center" data-stellar-background-ratio="0.5" style="background-image: url(images/cover_bg_1.jpg);">
          <div class="desc animate-box" style="margin-top:-267px;">
            <span><img src="assets/imgs/home/logo.png" alt="" style="height:350px;" /></span>
            <h2> <strong>SISGEOACAA</strong></h2>
            <span>Sistema de Gestión de Objetos de Aprendizaje de Contenidos Abiertos Accesibles</span>
            <span><a class="btn btn-primary btn-lg" href="#fh5co-feature-product">Get Started</a></span>
          </div>
        </div>

      </div>
      <!-- end:header-top -->

      <!--  Welcome Oaca -->
      @include('front.home.includes.welcome')
      <!--Recents Oacas-->
      @include('front.home.includes.recents_oacas')

      <!--Recents Oacas-->
      @include('front.home.includes.aboutus')
      {{-- <!--Pilot Institutions-->
      @include('front.home.includes.pilot_institutions') --}}


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

  <!-- Main JS -->
  <script src="themes/pentagon/js/main.js"></script>

</body>
</html>
