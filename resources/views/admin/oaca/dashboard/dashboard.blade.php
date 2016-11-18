@extends('admin.layouts.default')
@section('title',trans('admin.createOaca'))
@section('content')

<div class="content-wrapper">
	@if (Session::has('flash_message'))
	<div class="alert alert-success alert-dismissible">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		<p>{{Session::get('flash_message')}}</p>
	</div>
	@endif

	<section class="content-header">
		<h1>{{trans('admin.dashboard')}}</h1>
		<ol class="breadcrumb">
			<li>
				<a href="#">
					<i class="fa fa-dashboard"></i>
					Inicio
				</a>
			</li>
			<li class="active">
				Dashboard
			</li>
		</ol>
	</section>
	<section class="content">
		<div class="row">
			<div class="col-xs-12 col-md-4">
				<a href={{url('/admin/oaca/registry/create/')}}>
					<div class="small-box bg-aqua">
						<div class="inner">
							<h3>OACA</h3>
							<p>Crear Nuevo</p>
						</div>
						<div class="icon">

							<i class="ion ion-plus-round"></i>

						</div>

					</div>
				</a>
			</div>
			<div class="col-xs-12 col-md-4">
				<a href={{url('/admin/oaca/registry/registrys')}}>
					<div class="small-box bg-yellow">
						<div class="inner">
							<h3>MIS OACAS</h3>
							<p>Listar mis Oacas</p>
						</div>
						<div class="icon">

							<i class="ion ion-plus-round"></i>

						</div>

					</div>
				</a>
			</div>

			<div class="col-xs-12 col-md-4">
				<a href={{url('/admin/oaca/objetos/oaca-shared')}}>
					<div class="small-box bg-green">
						<div class="inner">
							<h3>OACAS Compartidos</h3>
							<p>Listar OACAS Compartidos</p>
						</div>
						<div class="icon">

							<i class="ion ion-plus-round"></i>

						</div>

					</div>
				</a>
			</div>

		</div>

	</section>


</div>

@endsection

@push('styles')
<style>
	.btn-dashboard{
		color: white;
	}
</style>

@endpush
