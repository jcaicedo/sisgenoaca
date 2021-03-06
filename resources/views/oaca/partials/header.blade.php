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

		{{-- <div class="navbar-custom-menu">
			<ul class="nav navbar-nav dropdown">
				<li>
					<a class="btn btn-default btn-default-gears dropdown-toggle" type="button" id="menu1" data-toggle="dropdown"><i class="fa fa-gears"></i></a>
					<ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
						<li role="presentation">
							<a role="menuitem" tabindex="0" type="button" href="#" data-toggle="modal" data-target="#myModal">Accesibilidad</a>
						</li>
						<li>
							<div>
								<a href="#" class="btn btn-font-icon btn-plus-font">
									<i class="fa fa-plus"></i>
								</a>
								<a href="#" class="btn btn-font-icon btn-minus-font">
									<i class="fa fa-minus"></i>
								</a>
							</div>
						</li>
					</ul>
				</li>
				
			</ul>
		</div> --}}
	</nav>
		{{-- <nav class="navbar navbar-inverse navbar-principal">
			<div class="container-fluid">
				<a href="#" class="navbar-brand">Sisgeoaca</a>
			</div>
		</nav> --}}
		<div class="image-principal" style="background-image: url('/assets/imgs/contents-img/plantillas/banner_principal1.png')">
			<h1 class="title-oaca content-oaca-font-size" >{{$oaca->title_oaca}}</h1>
			<h2 class="title-moment content-oaca-font-size">Motivación</h2>
			<h3 class="title-pattern content-oaca-font-size"></h3>
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
				<div class="modal-body" style="height:344px;">
					
					<div style="float: left; width: 32.3333%; padding: 5px; margin: 0 27px; ">
						<a data-skin="skin-default" style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)" class="clearfix full-opacity-hover btn-skin"  tabindex="0" type="button" href="#" data-toggle="modal" data-target="#myModal2" data-skincolor="color_skin_default">
							<div>
								<span style="display:block; width: 20%; float: left; height: 14px; background: #054c5f;">
								</span>
								<span style="display:block; width: 80%; float: left; height: 14px; background:#054c5f;" >
								</span>
								<span  style="display:block; width: 100%; float: right; height: 38px; background:#E08F8F; ">
								</span>
							</div>
							<div>
								<span style="display:block; width: 20%; float: left; height: 53px; background: #054c5f;">	
								</span>
								<span style="display:block; width: 80%; float: left; height: 53px; background: #f4f5f7;">							
								</span>
							</div>
						</a>
						<p class="text-center no-margin">Azul</p>
					</div>


					<div style="float: left; width:32.33333%;padding:5px; margin: 0 27px;">
						<a data-skin="skin-red" style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)" class="clearfix full-opacity-hover btn-skin" tabindex="0" type="button" href="#" data-toggle="modal" data-target="#myModal2" data-skincolor="color_skin_red">
							<div>
								<span style="display:block; width: 20%; float: left; height: 14px; background: #7d000c;">
								</span>
								<span  style="display:block; width: 80%; float: left; height: 14px;background:#7d000c;">
								</span>
								<span  style="display:block; width: 100%; float: right; height: 38px; background:#E08F8F; ">
								</span>
							</div>
							<div>
								<span style="display:block; width: 20%; float: left; height: 53px; background:#7d000c;"></span>
								<span style="display:block; width: 80%; float: left; height: 53px; background: #f4f5f7;"></span>
							</div>
						</a>
						<p class="text-center no-margin">Rojo</p>
					</div>
					
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary">Save changes</button>
				</div>
			</div>
		</div>
	</div>


	<!-- Modal Explicacion de Preview Daltonicos -->
	<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title content-oaca-font-size" id="myModalLabel">Visualización Personas Daltónicas</h4>
					<p class="content-oaca-font-size" >Asi verán esta plantilla las personas Daltónicas según su condición</p>
				</div>
				<div class="modal-body" style="height:344px;">
					

					<div style="float: left; width: 32.3333%; padding: 5px; margin: 0 27px;">
						{{-- 	<a data-skin="skin-default" style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)" class="clearfix full-opacity-hover btn-skin"> --}}
						<div>
							<span class="style-default-modal" style="display:block; width: 20%; float: left; height: 14px; background: #054c5f;">
							</span>
							<span class="style-default-modal" style="display:block; width: 80%; float: left; height: 14px; background:#054c5f;" >
							</span>
							<span  style="display:block; width: 100%; float: right; height: 38px; background:#E08F8F; ">
							</span>
						</div>
						<div>
							<span class="style-default-modal" style="display:block; width: 20%; float: left; height: 53px; background: #054c5f;">	
							</span>
							<span style="display:block; width: 80%; float: left; height: 53px; background: #f4f5f7;">							
							</span>
						</div>
						{{-- </a> --}}
						<p class="text-center no-margin">Default</p>
					</div>
					<div style="float: left; width: 32.3333%; padding: 5px; margin: 0 27px;">
						{{-- 	<a data-skin="skin-default" style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)" class="clearfix full-opacity-hover btn-skin"> --}}
						<div>
							<span class="style-deut-modal" style="display:block; width: 20%; float: left; height: 14px; background: #054c5f;">
							</span>
							<span class="style-deut-modal" style="display:block; width: 80%; float: left; height: 14px; background:#054c5f;" >
							</span>
							<span  style="display:block; width: 100%; float: right; height: 38px; background:#E08F8F; ">
							</span>
						</div>
						<div>
							<span class="style-deut-modal" style="display:block; width: 20%; float: left; height: 53px; background: #054c5f;">	
							</span>
							<span style="display:block; width: 80%; float: left; height: 53px; background: #f4f5f7;">							
							</span>
						</div>
						{{-- </a> --}}
						<p class="text-center no-margin">Deuteranopia</p>
					</div>
					<div style="float: left; width: 32.3333%; padding: 5px; margin: 0 27px;">
						{{-- 	<a data-skin="skin-default" style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)" class="clearfix full-opacity-hover btn-skin"> --}}
						<div>
							<span class="style-prota-modal" style="display:block; width: 20%; float: left; height: 14px; background: #054c5f;">
							</span>
							<span class="style-prota-modal" style="display:block; width: 80%; float: left; height: 14px; background:#054c5f;" >
							</span>
							<span  style="display:block; width: 100%; float: right; height: 38px; background:#E08F8F; ">
							</span>
						</div>
						<div>
							<span class="style-prota-modal" style="display:block; width: 20%; float: left; height: 53px; background: #054c5f;">	
							</span>
							<span style="display:block; width: 80%; float: left; height: 53px; background: #f4f5f7;">							
							</span>
						</div>
						{{-- </a> --}}
						<p class="text-center no-margin">Protanopia</p>
					</div>
					<div style="float: left; width: 32.3333%; padding: 5px; margin: 0 27px;">
						{{-- 	<a data-skin="skin-default" style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)" class="clearfix full-opacity-hover btn-skin"> --}}
						<div>
							<span class="style-trita-modal" style="display:block; width: 20%; float: left; height: 14px; background: #054c5f;">
							</span>
							<span class="style-trita-modal" style="display:block; width: 80%; float: left; height: 14px; background:#054c5f;" >
							</span>
							<span  style="display:block; width: 100%; float: right; height: 38px; background:#E08F8F; ">
							</span>
						</div>
						<div>
							<span class="style-trita-modal" style="display:block; width: 20%; float: left; height: 53px; background: #054c5f;">	
							</span>
							<span style="display:block; width: 80%; float: left; height: 53px; background: #f4f5f7;">							
							</span>
						</div>
						{{-- </a> --}}
						<p class="text-center no-margin">Tritanopía</p>
					</div>


				</div>

				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary">Save changes</button>
				</div>
			</div>
		</div>
	</div>



	@push('styles')
	<style>
		.btn-plus-font, .btn-minus-font{
			color: #fff;
			background-color: #3f729b;
			border-color: rgba(0,0,0,0.2);

		}

		.btn-font-icon {
			position: relative;
			padding-left: 44px;
			text-align: left;
			white-space: nowrap;
			overflow: hidden;
			text-overflow: ellipsis;
			height: 34px;
			width: 34px;
			padding: 0;
		}
		.btn-font-icon > :first-child {
			position: absolute;
			left: 0;
			top: 0;
			bottom: 0;
			width: 32px;
			line-height: 34px;
			font-size: 1.6em;
			text-align: center;
			border-right: 0px solid rgba(0, 0, 0, 0.2);
		}

		.image-principal{
			-webkit-background-size: cover;
			-moz-background-size: cover;
			-o-background-size: cover;
			background-size: cover;
		}

		.text-center{
			font-size: 30px;
		}

		.modal-title, #myModal2 div.modal-header p {text-align: center;}
	</style>
	
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
		"skin-red",
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

		var colors_skins = {
			color_skin_default:["#054c5f","#202b61","#323a5d","#064590"],
			color_skin_red:["#7d000c","#100f0a","#01030c","#780002"]

		};
		var array_daltonic_color =[".style-default-modal",".style-deut-modal",".style-prota-modal",".style-trita-modal"];


		$('.btn-skin').click(function(e){
			e.preventDefault();
			change_skin($(this).data('skin'));
			var skincolor = $(this).data('skincolor');
			$('#myModal2').on('show.bs.modal', function (e) {
				$.each(array_daltonic_color, function(key, value){
					$(value).each(function(){
						$(this).css('background',colors_skins[skincolor][key]);
					});
				});
				
			});

		});

		$('.btn-plus-font').click(function(event) {
			/* Act on the event */

			$('.content-oaca-font-size').each(function(index){
				$(this).css("font-size","+=1");
			});

			
		});

		$('.btn-minus-font').click(function(event) {
			/* Act on the event */
			$('.content-oaca-font-size').each(function(index){
				$(this).css("font-size","-=1");
			});
		});

		



		


	</script>
	@endpush