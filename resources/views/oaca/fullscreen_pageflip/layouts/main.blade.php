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
	<link rel="stylesheet" type="text/css" href="/themes/FullscreenBookBlock/css/jquery.jscrollpane.custom.css" />
	<link rel="stylesheet" type="text/css" href="/themes/FullscreenBookBlock/css/bookblock.css" />
	<link rel="stylesheet" type="text/css" href="/themes/FullscreenBookBlock/css/custom.css" />
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	<script src="/themes/FullscreenBookBlock/js/modernizr.custom.79639.js"></script>

	<script src="/themes/FullscreenBookBlock/js/jquery.mousewheel.js"></script>
	@stack('styles')
</head>
<body>
	<div id="container" class="container">

		@include('oaca.fullscreen_pageflip.partials.sidebar')
		@include('oaca.fullscreen_pageflip.pages.front')



	</div><!-- /container -->
	<script src="/vendor/jquery/dist/jquery.min.js"></script>
	<script src="/themes/FullscreenBookBlock/js/jquery.mousewheel.js"></script>
	<script src="/themes/FullscreenBookBlock/js/jquery.jscrollpane.min.js"></script>
	<script src="/themes/FullscreenBookBlock/js/jquerypp.custom.js"></script>
	<script src="/themes/FullscreenBookBlock/js/jquery.bookblock.js"></script>
	<script src="/themes/FullscreenBookBlock/js/page.js"></script>
	<script>
	$(function() {

		Page.init();

	});
	</script>
	@stack('scripts')
</body>
</html>
