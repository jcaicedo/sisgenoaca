@extends('admin.layouts.default')
@section('title',trans('admin.createOaca'))
@section('content')

<div class="content-wrapper">
	
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
			<div class="col-xs-12 col-sm-3">
				<div class="small-box bg-aqua">
					<div class="inner">
						<h3>OACA</h3>
						<p>Crear Nuevo</p>
					</div>
					<div class="icon">
						<a href={{url('/admin/oaca/registro/register/')}}>
							<i class="ion ion-plus-round"></i>
						</a>
					</div>

				</div>
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