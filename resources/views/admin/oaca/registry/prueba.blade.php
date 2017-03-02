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

						<select class="image-picker show-html" name="">

							<option  data-img-src="/assets/imgs/licencias_creative_commons/by-nc-nd.png" value="1"></option>

							<option  data-img-src="/assets/imgs/licencias_creative_commons/by-nc-sa.png"  value="2"></option>

							<option  data-img-src="/assets/imgs/licencias_creative_commons/by-nc.png"  value="3"></option>


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

			var titulos_licencias = [],
			descripciones_licencias =[],
			count_licencias = 1;

			titulos_licencias[1]="Reconocimiento-NoComercial CC BY-NC";
			titulos_licencias[2]="Reconocimiento-NoComercial-CompartirIgual CC BY-NC-SA";
			titulos_licencias[3]="Reconocimiento-NoComercial-SinObraDerivada CC BY-NC-ND";

			descripciones_licencias[1]="Esta licencia permite a otros entremezclar, ajustar y construir a partir de su obra con fines no comerciales, y aunque en sus nuevas creaciones deban reconocerle su autoría y no puedan ser utilizadas de manera comercial, no tienen que estar bajo una licencia con los mismos términos.";
			descripciones_licencias[2]="Esta licencia permite a otros entremezclar, ajustar y construir a partir de su obra con fines no comerciales, siempre y cuando le reconozcan la autoría y sus nuevas creaciones estén bajo una licencia con los mismos términos.";
			descripciones_licencias[3]="Esta licencia es la más restrictiva de las seis licencias principales, sólo permite que otros puedan descargar las obras y compartirlas con otras personas, siempre que se reconozca su autoría, pero no se pueden cambiar de ninguna manera ni se pueden utilizar comercialmente.";



			$("select").imagepicker({
				show_label  : true
			});

			$("div.thumbnail").each(function(){
				$(this).find('img').before('<h3>'+titulos_licencias[count_licencias]+'</h3>');
				$(this).append('<p>'+	descripciones_licencias[count_licencias]+'</p>');
				count_licencias++;
			});

		});

		</script>
