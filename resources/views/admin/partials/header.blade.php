<header class="main-header">
	
	<a class="logo" href="">
		<span class="logo-mini"> <b>SIS</b> </span>
		<span class="logo-lg"> <b>SISGENOACA</b> </span>
	</a>
	<nav class="navbar navbar-static-top" role="navigation">
		
		<!--boton para esconder menu lateral izquierdo-->
		<a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
			<span class="sr-only">Toggle nvigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</a>
		<div class="navbar-custom-menu">
			<ul class="nav navbar-nav">
				<li class="dropdown messages-menu">
					<a class="dropdown-toggle" data-toggle="dropdown">
						<i class="fa fa-envelope-o"></i>
						<span class="label label-success">4</span>
					</a>
					<ul class="dropdown-menu">
						<li class="header">Tienes 4 mensajes</li>
						<li>
							
							<ul class="menu">
								<li>
									<a href="#">
										<div class="pull-left">
											<img src="http://sisgenoaca.app/assets/imgs/image_profile.jpg" alt="User Image" class="img-circle">
										</div>
										<h4>
											Support Team
											<small> <i class="fa fa-clock-o"></i> 5 mins </small>
										</h4>
										<p>Why not buy a new awesome theme?</p>
									</a>
								</li>
								<!-- end message -->
							</ul>
						</li>
						<li class="footer"> <a href="#"> See All Message </a> </li>
					</ul>
				</li>
				
				<!-- Notificaciones  -->
				<li class="dropdown notifications-menu">
					
					<a class="dropdown-toggle" data-toggle="dropdown" href="#">
						<i class="fa fa-bell-o"></i>
						<span class="label label-warning">10</span>
					</a>
					<ul class="dropdown-menu">
						
						<li class="header">You have 10 notifications</li>
						<li>
							
							<ul class="menu">
								<li>
									<a href="#">
										<i class="fa fa-users text-aqua"></i> 5 new members joined today
									</a>
								</li>
							</ul>
						</li>
						<li class="footer"> <a href="#"> View All </a> </li>
					</ul>
				</li>
				
				<!--Tareas-->
				<li class="dropdown tasks-menu">
					
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						
						<i class="fa fa-flag-o"></i>
						<span class="label label-danger">9</span>
					</a>
					<ul class="dropdown-menu">
						<li class="header">You have 9 tasks</li>
						<li>
							<ul class="menu">
								
								<li>
									<a href="#">
										
										<h3>
											
											Design some buttons
											<small class="pull-right">20%</small>
										</h3>
										<div class="progress xs">
											
											<div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" >
												<span class="sr-only">20% Complete</span>
											</div>
										</div>
									</a>
								</li>
								
							</ul>
						</li>
						
						<li class="footer">
							<a href="#"> View all tasks</a>
						</li>
					</ul>
				</li>
				<!--Cuenta de usuario-->
				<li class="dropdown use user-menu">
					
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<img src="http://sisgenoaca.app/assets/imgs/image_profile.jpg" class="user-image" alt="User Image">
						<span class="hidden-xs">Julio Caicedo</span>
					</a>
					
					<ul class="dropdown-menu">
						
						<li class="user-header">
							<img src="http://sisgenoaca.app/assets/imgs/image_profile.jpg" class="img-circle" alt="User Image">
							<p>
								Julio Caicedo - Administrator
								<small>Member since Jan. 2016</small>
							</p>
						</li>
						
						<li class="user-body">
							<div class="row">
								<div class="col-xs-4 text-center">
									<a href="#">Followers</a>
								</div>
								<div class="col-xs-4 text-center">
									<a href="#">Sales</a>
								</div>
								<div class="col-xs-4 text-center">
									<a href="#">Friends</a>
								</div>
							</div>
						</li>
						
						<li class="user-footer">
							<div class="pull-left">
								<a href="#" class="btn btn-default btn-flat">Profile</a>
							</div>
							<div class="pull-right">
								<a href="{{ url('/logout') }}" class="btn btn-default btn-flat">Sign out</a>
							</div>
						</li>
						
					</ul>
				</li>
				<!-- Control Sidebar Toggle Button -->
				<li>
					<a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
				</li>
				
			</ul>
			
		</div>
	</nav>
</header>