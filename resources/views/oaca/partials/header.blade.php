<header class="main-header">
	<a href="../../index2.html" class="logo">
		<!-- mini logo for sidebar mini 50x50 pixels -->
		<span class="logo-mini"><b>SISGEOACA</b></span>
		<!-- logo for regular state and mobile devices -->
		<span class="logo-lg"><b>SISGEOACA</b></span>
	</a>
	<nav class="navbar navbar-static-top">
		<a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</a>

		<div class="navbar-custom-menu">
			<ul class="nav navbar-nav dropdown">
				<li>
					<a class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown"><i class="fa fa-gears"></i></a>
					<ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
						<li role="presentation"><a role="menuitem" tabindex="0" type="button" href="#" data-toggle="modal" data-target="#myModal">Estilo Colores</a></li>
						<li role="presentation">
							<div>
								<button class="btn btn-default btn-skin" data-skin="skin-blue">Blue</button>
								<button class="btn btn-default btn-skin" data-skin="skin-default">Default</button>
							</div>
						</li>
						<li role="presentation"><a role="menuitem" tabindex="-1" href="#">JavaScript</a></li>
						<li role="presentation" class="divider"></li>
						<li role="presentation"><a role="menuitem" tabindex="-1" href="#">About Us</a></li>
					</ul>
				</li>
				
			</ul>
		</div>
	</nav>
		{{-- <nav class="navbar navbar-inverse navbar-principal">
			<div class="container-fluid">
				<a href="#" class="navbar-brand">Sisgeoaca</a>
			</div>
		</nav> --}}
		<div class="image-principal" style="background-image: url('/assets/imgs/contents-img/plantillas/banner_principal1.png')">
			<h1 class="title-oaca" >{{$oaca->title_oaca}}</h1>
			<h2 class="title-moment">Motivación</h2>
			<h3 class="title-pattern"></h3>
		</div>
	</header>

	<!-- Modal Estilo de Colores -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel">Combinación de colores</h4>
				</div>
				<div class="modal-body">
					<button class="btn btn-default btn-skin" data-skin="skin-blue">Blue</button>
					<button class="btn btn-default btn-skin" data-skin="skin-default">Default</button>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary">Save changes</button>
				</div>
			</div>
		</div>
	</div>


	@push('scripts')
	<script>
		$(document).ready(function(e){
			e.preventDefault;
			setup();
		});
	</script>

	<script>
		var my_skins = [
		"skin-blue",
		"skin-default"
		];


		function change_skin(cls){
			$.each(my_skins, function(i){
				$("body").removeClass(my_skins[i]);
			});
			$("body").addClass(cls);
			store('skin-plantilla', cls);
			return false;
		};
		function store(name, val) {
			if (typeof (Storage) !== "undefined") {
				localStorage.setItem(name, val);
			} else {
				window.alert('Please use a modern browser to properly view this template!');
			}
		};

		function get(name) {
			if (typeof (Storage) !== "undefined") {
				return localStorage.getItem(name);
			} else {
				window.alert('Please use a modern browser to properly view this template!');
			}
		};

		function setup(){
			var tmp = get('skin-plantilla');
			if (tmp){
				change_skin(tmp);
			}
		};




		$('.btn-skin').click(function(e){
			e.preventDefault();
			change_skin($(this).data('skin'));

		});
	</script>
	@endpush