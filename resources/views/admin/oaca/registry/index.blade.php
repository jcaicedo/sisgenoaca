@extends('admin.layouts.default')
@section('title',trans('admin.createOaca'))
@section('content')

<div class="content-wrapper">
	
	<section class="content-header">
		<h1>Mis Oaca</h1>
		<ol class="breadcrumb">
			<li>
				<a href="">
					<i class="fa fa-dashboard"></i>
				</a>
			</li>
			<li class="active">
				Mis OACA
			</li>
		</ol>
	</section>

	<div class="content">


		<div class="row">
			<div class="col-xs-12">
				<div class="box">
					{{-- <div class="box-header">
						<h3 class="box-title">Mis Oacas</h3>
					</div> --}}
					<div class="box-body table-responsive no-padding">
						
						<table class="table table-hover">
							<tbody>
								<th>ID</th>
								<th>Titulo</th>
								<th>Fecha Creación</th>
								<th>Última Actualización</th>
								<th>&nbsp;</th>
							</tbody>
						</table>

					</div>
				</div>
			</div>
		</div>
	</div>





</div>

@endsection