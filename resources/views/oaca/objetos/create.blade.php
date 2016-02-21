@extends('layouts.head_dev')

@section('title','Create Objeto')
@section('content')



<div class="container">
	<div class="row">
		<div class="col-md-6" style="left: 10px">
			<div class="box box-primary">
				<div class="box-header with-border">
					<h2 class="box-title">Contenido</h2> <button type="button"> Agregar Título</button>
				</div>

				<form action="#" method="post" class="form-vertical" id="form_temario">
		
		



					<div class="box box-body">
						<div class="form-group">
							<label for="form_temario">Agregar Titulo</label>
							
						<div>
									<div class="col-sm-11">
										<input type="text" class="form-control" name="title" id="title">
									</div>
							{{----/.col-sm-11----}}
									<div class="col-sm-1">
										<div class="box-tools pull-right">
											<button type="button" class="btn btn-box-tool" id="btn-add-title">
												<i class="fa fa-plus">
												</i>
												{{----/.fa fa-plus----}}
											</button>
											{{----/.btn btn-box-tool----}}
										</div>
										{{----/.box-tools pull-right----}}
									</div>
							{{----/.col-sm-1----}}
							</div>
							{{----/.div--/--}}
						</div>
						{{----./form-group----}}
					</div>
				{{----/.box box-body----}}
						</form>

						{{-- /.form --}}

				<div class="box box-body">

					<div class="contenido">
						<div class="wrap">
							<ul class="contenido" id="contenido">
								<li><a href="#">1 Lorem ipsum dolor sit amet.</a></li>
								<li><a href="#">2 Lorem ipsum dolor sit amet.</a></li>
							</ul>
						</div>
					</div>

				</div>

			</div>
			{{----/.box box-primary----}}
		</div>
		{{----/.col-sm-4----}}


	</div>
	{{----/.row----}}
</div>
{{----/.container-fluid----}}

@endsection