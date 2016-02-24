@extends('layouts.head_dev')

@section('title','Create Objeto')
@section('content')


<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>



<div class="container-fluid">
	<div class="row">
		<div class="col-sm-4">
			<div class="box box-primary">
				<div class="box-header with-border">
					<h2 class="box-title">Contenido</h2>
				</div>

				{!! Form::open(['url'=>'app/oaca/objetos/create','method'=>'post','class'=>'form-vertical']) !!}

					<div class="box box-body">
						<div class="form-group">
							{!! Form::label(null,'Agregar Titulo') !!}
						<div>
									<div class="col-sm-11">
										{!! Form::text(null,null,['class'=>'form-control']) !!}
									</div>
							{{----/.col-sm-11----}}
									<div class="col-sm-1">
										<div class="box-tools pull-right">
											<button type="button" class="btn btn-box-tool">
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
				{!! Form::close() !!}

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