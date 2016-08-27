<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>SISGEOACA</title>

	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<link rel="icon" type="image/x-icon" href="/favicon.ico" />
	<link rel="stylesheet" href="/vendor/AdminLTE/bootstrap/css/bootstrap.min.css" />
	<link rel="stylesheet" href="/vendor/jquery-ui-1.11.4.custom/jquery-ui.css">
	<link rel="stylesheet" href="/assets/css/oaca/oaca_style.css">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
</head>
<body>

	<header>
		<nav class="navbar navbar-inverse navbar-principal">
			<div class="container-fluid">
				<a href="#" class="navbar-brand">Sisgeoaca</a>
			</div>
		</nav>
		<div class="image-principal">

		</div>
	</header>
	<div class="container-fluid">
		<div class="col-md-3">
			<nav class="navbar navbar-default sidebar" role="navigation">
				<div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li class="active"><a href="#">Introducción<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-home"></span></a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Usuarios <span class="caret"></span><span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-user"></span></a>
							<ul class="dropdown-menu forAnimate" role="menu">
								<li><a href="{{URL::to('createusuario')}}">Crear</a></li>
								<li><a href="#">Modificar</a></li>
								<li><a href="#">Reportar</a></li>
								<li class="divider"></li>
								<li><a href="#">Separated link</a></li>
								<li class="divider"></li>
								<li><a href="#">Informes</a></li>
							</ul>
						</li>          
						<li ><a href="#">Libros<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-th-list"></span></a></li>        
						<li ><a href="#">Tags<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-tags"></span></a></li>
					</ul>
				</div>
			</nav>
		</div>
		<div class="col-md-9">
			hola
		</div>
	</div>


	@push('styles')
	<style>
		.image-principal{min-height: 240px;background-color: #5A86A0;}
		.navbar-principal{margin-bottom: 0px !important; border-radius: 0px !important;}
	</style>


	<script src="/vendor/AdminLTE/plugins/jQuery/jQuery-2.2.0.min.js"></script>
	<script src="/vendor/AdminLTE/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>