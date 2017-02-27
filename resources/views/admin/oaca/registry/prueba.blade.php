@extends('admin.layouts.default')
@section('title',trans('admin.plantilla'))
@section('content')

	<div class="content-wrapper">


		<section class="content-header">
			<h1>{{trans('admin.select_plantilla')}}</h1>
			<ol class="breadcrumb">
				<li>
					<a href="#">
						<i class="fa fa-dashboard"></i>Dashboard
					</a>
				</li>
				<li class="active">
					Plantilla
				</li>
			</ol>
		</section>

		<section class="content">
			<div class="row">
				<div class="box box-primary">

					<div class="box-header with-border">
						<h3 class="box-title">
							{{trans('admin.create_plantilla')}}
						</h3>
					</div>
					<form  method="post" id="form_select_plantilla" role="form">
						{!! csrf_field() !!}
						<div class="box-body">
							<h4>{{trans('admin.select_plantilla')}}</h4>
							<br>
							{{-- <ol id="selectable">
							<li class="ui-widget-content">Item 1</li>
							<li class="ui-widget-content">Item 2</li>
							<li class="ui-widget-content">Item 3</li>
							<li class="ui-widget-content">Item 4</li>
							<li class="ui-widget-content">Item 5</li>
							<li class="ui-widget-content">Item 6</li>
							<li class="ui-widget-content">Item 7</li>
						</ol> --}}

						<select class="image-picker  show-labels show-html" name="">

							<option data-img-label="Reconocimiento NoComercial" data-img-src="/assets/imgs/licencias_creative_commons/by-nc-nd.png" data-img-class="first" data-img-alt="Page 1" value="1">  Page 1  </option>

							<option data-img-label="Reconocimiento NoComercial-CompartirIgual" data-img-src="/assets/imgs/licencias_creative_commons/by-nc-sa.png" data-img-alt="Page 2" value="2">  Page 2  </option>

							<option data-img-label="Reconocimiento NoComercial SinObraDerivada" data-img-src="/assets/imgs/licencias_creative_commons/by-nc.png" data-img-alt="Page 3" value="3">  Page 3  </option>


						</select>

					</div>

					<div class="box-footer">
						<button type="submit" class="btn btn-primary">Submit</button>
					</div>

				</form>

			</div>
		</div>
	</section>


</div>

@endsection

@push('styles')
	<link rel="stylesheet" href="//code.jquery.com/ui/1.11.0/themes/smoothness/jquery-ui.css">
	<link rel="stylesheet" href="/assets/css/registry/image-picker-sisgeoaca.css">
	<style>
	ul.thumbnails.image_picker_selector li .thumbnail img {
		width: 300px;
	}

	</style>


	@push('scripts')
		<script src="//code.jquery.com/jquery-1.10.2.js"></script>
		<script src="//code.jquery.com/ui/1.11.0/jquery-ui.js"></script>
		<script type="text/javascript" src="/vendor/image-picker/image-picker/image-picker.js"></script>
		<script>

		$(document).ready(function ($) {
			$("select").imagepicker({
				show_label  : true
			});

			$("div.thumbnail").each(function(){
				$(this).find('img').before('<h3>Titulo TituloTitulo TituloTitulo TituloTitulo TituloTitulo TituloTitulo Titulo</h3>');
				$(this).append('<p>dsdadsdadaadadsdaddadad  dodpaskdpjps  pfspfjspfjf fpsfjspdjfpfsd fsdopfjsdpfjspof fposdfjpsdjfpojfs jshfhhfaiha  fhaoidhfa oaihf aso</p>');
			});

		});

		</script>
