@extends('layouts.head_dev')

@section('title','Create Objeto')
@section('content')



<div class="container-fluid">
	<div class="row">
		<div class="col-md-6" style="left: 10px">
			<div class="box box-primary">
				<div class="box-header with-border">
					<h2 class="box-title">Contenido</h2> <button type="button" id="add-title"> Agregar Título</button>
				</div>

				<form action="#" method="post" class="form-vertical" id="form_temario" enctype='application/json'>
					
					<div class="form-group  box box-body">
						<div class="title-content" id="subtcontentplus1">
						<div class="col-sm-11">
							<input type="text" class="form-control" id="titulo" name="titulo">
						</div>

						<div class="col-sm-1">
							<button type="button" class="btn btn-box-tool btn-add-subtitle" id="plus1">
                    <i class="fa fa-plus"></i>
                </button>
						</div>
						<div class="col-md-7 sub-title-content" id="subinputplus1" style="left: 16%;">
						


						<br>
						</div>
				</div>

					</div>
 <button type="button" id="fin_obj" class="btn btn-primary" style="margin: 0 auto; width: 200px;" >Finalizar</button>

				</form>

						{{-- /.form --}}

				
			</div>
			{{----/.box box-primary----}}
		</div>
		{{----/.col-sm-4----}}


	</div>
	{{----/.row----}}
</div>
{{----/.container-fluid----}}

@endsection