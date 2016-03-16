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
				<form action="http://sisgenoaca.app/usuario/registro/nuevo"  method="post" class="form-horizontal" id="registro_usuario">
					
					<div class="box-body">
						
						<div class="form-group">
							<label for="registro_usuario" class="col-sm-2 control-label">Nombre</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="first_name" id="first_name" placeholder="Nombre Completo">
							</div>

						</div>

						<div class="form-group">
							<label for="registro_usuario" class="col-sm-2 control-label">Apellidos</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="last_name" id="last_name" placeholder="Apellidos">
							</div>
						</div>

						<div class="form-group">
							<label for="registro_usuario" class="col-sm-2 control-label">Correo</label>
							<div class="col-sm-10">
								<input type="email" class="form-control" name="email" id="email" placeholder="dd'@'dddd.com">
							</div>
						</div>
						<div class="form-group">
								<label for="registro_usuario" class="col-sm-2 control-label">Contraseña</label>
								<div class="col-sm-10">
									<input type="password" class="form-control" id="password" placeholder="Introduzca Contraseña"></input>
								</div>
						</div>

							<div class="form-group">

								<label for="registro_usuario" class="col-sm-2 control-label">Tipo de Usuario</label>
								<div class="col-sm-10">
								<select class="form-control">
									<option name="rol" value="estudiante">Estudiante</option>
									<option name="rol" value="profesor">Profesor</option>
								</select>
								</div>
							</div>


						<div class="form-group">
							<label for="registro_usuario" class="col-sm-2 control-label">Institución</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="institucion" id="institucion" placeholder="Universidad Central">
							</div>
						</div>


					</div>

					<div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>

				</form>



			</div>
			<!--/.box-primary -->
		</div>
	</div>
</section>
@endsection