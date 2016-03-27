<aside class="main-sidebar">
	<section class="sidebar">
		
		<!--Panel izquierdo-->


		<!-- Sidebar user panel -->
		<div class="user-panel">
			<div class="pull-left image">
				<img src="http://sisgenoaca.app/assets/imgs/image_profile.jpg" class="img-circle" alt="User Image">
			</div>
			<div class="pull-left info">
				<p>Julio Caicedo</p>
				<a href="#"><i class="fa fa-circle text-success"></i> Online</a>
			</div>
		</div>

		<!-- search form -->
		<form action="#" method="get" class="sidebar-form">
			<div class="input-group">
				<input type="text" name="q" class="form-control" placeholder="Search...">
				<span class="input-group-btn">
					<button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
					</button>
				</span>
			</div>
		</form>
		<!-- /.search form -->

		<ul class="sidebar-menu">
			

			<li class="header">NAVEGACIÓN</li>

			<li class="active">
				<a href="{{url('admin')}}">
				<i class="fa fa-home"></i>
				<span>{{trans('menu.createoaca')}}</span>

				</a>

					
			</li>

			<li>
				<a href="{{url('admin')}}">
				<i class="fa fa-book"></i>
				<span>{{trans('menu.listaroaca')}}</span>
				</a>

			</li>
			<li>
				<a href="{{url('admin')}}">
				<i class="fa fa-book"></i>
				<span>{{trans('menu.configuracion')}}</span>
				</a>

			</li>


		</ul>



	</section>
</aside>