<aside class="main-sidebar" style="position: fixed;">
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
			

			<li class="header">{{trans('menu.optionspanel')}}</li>

			<li id="title" data-element-option="title"  class="option" value="title" >
				<a href="#">
				<i class="fa fa-edit"></i>
				<span >{{trans('menu.title')}}</span>

				</a>

					
			</li>

			<li id="textarea"  data-element-option="textarea" class="option">
				<a href="#">
				<i class="fa fa-file-text-o"></i>
				<span>{{trans('menu.textarea')}}</span>
				</a>

			</li>
			<li id="uploadimage" data-element-option="uploadimage" class="option">
				<a href="#">
					<i class="fa fa-file-image-o"></i>
					<span>{{trans('menu.uploadimage')}}</span>
				</a>
			</li>


		</ul>



	</section>
</aside>