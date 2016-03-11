@extends('layouts.head_dev')
@section('title','Create User')
@section('content')
<section class="content">
	<div class="container">
		<div class="row">
			<div class="box box-primary">
				<div class="box-header with-border">
					<h1 class="box-title">Registro de Usuario</h1>
				</div>
				<!-- /.box-header -->
				<form action="#" method="post" class="form-horizontal" id="registro_usuario">
					
					<div class="box box-body">
						
						<div class="form-group">
							<label for="registro_usuario" class="col-sm-2 control-label">Nombre</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="name" placeholder="Nombre Completo">
							</div>

						</div>

						<div class="form-group">
							<label for="registro_usuario" class="col-sm-2 control-label">Apellidos</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="last_name" placeholder="Apellidos">
							</div>
						</div>

						<div class="form-group">
							<label for="registro_usuario" class="col-sm-2 control-label">Correo</label>
							<div class="col-sm-10">
								<input type="email" class="form-control" id="email" placeholder="dd'@'dddd.com">
							</div>
						</div>

						<div class="form-group">
							<label for="registro_usuario" class="col-sm-2 control-label">Institución</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="institucion">
							</div>
						</div>

					</div>



				</form>



			</div>
			<!--/.box-primary -->
		</div>
	</div>
</section>
@endsection