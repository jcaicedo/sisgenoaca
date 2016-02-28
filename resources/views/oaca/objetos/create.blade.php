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

				<form action="#" method="post" class="form-vertical" id="form_temario">
					
					<div class="form-group  box box-body">
						<div class="title-content">
						<div class="col-sm-11">
							<input class="form-control">
						</div>

						<div class="col-sm-1">
							<button type="button" class="btn btn-box-tool btn-add-subtitle" id="plus1">
                    <i class="fa fa-plus"></i>
                </button>
						</div>
						<div class="col-md-7 sub-title-content" style="left: 16%;">
						<br>
							<input type="text" class="form-control">
							<input type="text" class="form-control">
							<input type="text" class="form-control">
						</div>
				</div>
				
					</div>

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