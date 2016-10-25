@extends('admin.layouts.default')
@section('title','Registro OACA')
@section('content')

<div class="content-wrapper">
	<section class="content-header">
		<h1>{{trans('admin.newOaca')}}</h1>
		<ol class="breadcrumb">
			<li>
				<a href="/admin">
					<i class="fa fa-dashboard"></i>
					Incio
				</a>
			</li>
			<li class="active">
				Registro OACA
			</li>
		</ol>
	</section>

	<section class="content">
		<div class="row">
			<div class="col-md-12">
				<div class="box box-primary">
					<div class="box-header with-border">
						<h3 class="box-title">Registro Nuevo Oaca</h3>
					</div>
					<!--/-box-header-->
					<!-- form start-->

					<form  method="post" id="form_register" role="form" enctype="multipart/form-data" >

						<input type="hidden" name="user_id" value="{{ Auth::user()->id}}">
						{!! csrf_field() !!}


					@include('admin.oaca.registry.create.pattern')
					@include('admin.oaca.registry.create.general_features')
					@include('admin.oaca.registry.create.lifecycle')
					@include('admin.oaca.registry.create.educational')
					@include('admin.oaca.registry.create.referencias')
					@include('admin.oaca.registry.create.copyright')
					@include('admin.oaca.registry.create.selectable_plantilla')




					<div class="box-footer">
						<button class="btn btn-danger btn-back nomostrar" data-body="general-features" >
							<i class="fa fa-hand-o-left"></i>
							&nbsp;{{trans('admin.back')}}
						</button>
						<button type="button" class="btn btn-primary btn-next pull-right" data-body="select-pattern">
							<i class="fa fa-hand-o-right"></i>
							&nbsp;{{trans('admin.next')}}
						</button>
						<button type="submit" class="btn btn-success btn-save  pull-right nomostrar">
							<i class="fa fa-save"></i>
							Guardar
						</button>
					</div>


				</form>
			</div>
		</div>
	</div>
</section>



</div>
		@include('admin.oaca.registry.create.elements_hide')



@endsection

@push('styles')
<link rel="stylesheet" href="/vendor/bootstrapvalidator/dist/css/bootstrapValidator.min.css">
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.0/themes/smoothness/jquery-ui.css">
<style>
	.nomostrar{display: none;}

	#feedback { font-size: 1.4em; }
	#selectable .ui-selecting { background: #FECA40; }
	#selectable .ui-selected { background: #F39814; color: white; }
	#selectable {  margin: 0 auto; list-style-type: none; padding: 0; width: 1050px; }
	#selectable li { padding: 15px; float: left; width: 500px; height: auto; font-size: 4em; text-align: center; margin:10px; }

	#selectable-copyright .ui-selecting { background: #FECA40; }
	#selectable-copyright .ui-selected { background: #F39814; color: white; }
	#selectable-copyright { list-style-type: none; margin: 0; padding: 0; width: 60%; }
	#selectable-copyright li { margin: 3px; padding: 0.4em; font-size: 1.4em; height: 241px; }
	#selectable-copyright li img{ height: auto; width:180px; }
	.content-img-copyright{ overflow: hidden; line-height: 200px; }

</style>
<link rel="stylesheet" href="/vendor/AdminLTE/plugins/iCheck/all.css">

@endpush

@push('scripts')
<script src="/vendor/bootstrapvalidator/dist/js/bootstrapValidator.min.js"></script>
<script type="text/javascript"  src="/assets/js/register/main.js" ></script>
<script type="text/javascript"  src="/assets/js/register/create/main.js" ></script>
<script src="//code.jquery.com/ui/1.11.0/jquery-ui.js"></script>

<!-- iCheck 1.0.1 -->
<script src="/vendor/AdminLTE/plugins/iCheck/icheck.min.js"></script>

	<script>
		$( function() {
			$( "#selectable-copyright" ).selectable({
				selected: function(event, ui){
					console.log( $(ui.selected).data('licencia'));
					$("#licencia").val($(ui.selected).data('licencia'));
				}
			});
		} );
	</script>
	@endpush
