@extends('admin.layouts.menuoaca')
@section('title',trans('admin.motivation'))
	@section('content')

		<div class="content-wrapper">
			<div class="row">
				<h1 class="text-center">CREACIÓN DE OACA</h1>
			</div>

			@include('admin.oaca.objetos.includes.wizard')

			<div class="box-header">
				<h1 class="text-center" >{{trans('admin.motivation')}}
					<button type="button" class="btn btn-info btn-circle btn-lg" data-toggle="modal" data-target="#myModal"><i class="fa fa-info"></i></button>
				</h1>
			</div>

			<form action="{{url('/admin/oaca/objetos/motivation')}}" method="post"  role="form" id="form-create-oaca-motivation" enctype="multipart/form-data" >

				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<input type="hidden" name="register_id" value="{{$register_id}}">
				<input type="hidden" name="task_moment" value="{{$task_moment}}">
				<input type="hidden" name="count_elements_old" value="8" id="count_elements_old">

				<div id="rootwizard" class="tabbable tabs-left">

					<ul class="nav bav-tabs">
						<li><a href="#tab1" data-toggle="tab">{{trans('admin.mental_images')}}</a></li>
						<li><a href="#tab2" data-toggle="tab">{{trans('admin.attention')}}</a></li>

					</ul>
					{{-- <div id="bar" class="progress progress-info progress-striped">
					<div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 57.1429%;"></div>
				</div> --}}

				<div class="tab-content">

					@for($i=1;$i<3;$i++)

						<div class="tab-pane" id="tab{{$i}}">
							{{-- bontones de preview --}}
							<div class="box-header box-header-principal box-btn-header-principal{{$i}}">
								<a  class="btn btn-warning preview-oaca" data-prev="#prev{{$i}}" data-content="#content-form{{$i}}" data-btn=".box-btn-header-principal{{$i}}" data-contentprev="#content-prev{{$i}}">
									<i class="fa fa-eye fa-3x"></i>
									<h3>Preview</h3>
								</a>
							</div>

							<!--CONTENEDOR PRINCIPAL-->
							<div class="content content-principal" id="content-form{{$i}}" data-pattern='{{$pattern_array[$i-1]}}'>

								<div class="content contentchild contentchildfirst sortable" id="contentchild{{$i}}" data-pattern='{{$pattern_array[$i-1]}}'>

								</div>

							</div>

							{{-- bontones de preview --}}
							<div  class="box-header box-header-principal box-btn-header-principal{{$i}}">
								<button type="submit" class="btn btn-success text-center" id="processit" >
									<h3>{{trans('admin.development')}}</h3>
									<i class="fa fa-hand-o-right fa-3x"></i>

								</button>
							</div>

							{{-- contenedor Preview --}}

							<div class="preview" id="prev{{$i}}">
								<div class="box-header">
									<div class="content-btn-preview">

										<a class="btn btn-warning btn-return-edit" id="preview" data-prev="#prev{{$i}}" data-content="#content-form{{$i}}" data-btn=".box-btn-header-principal{{$i}}" data-contentprev="#content-prev{{$i}}">
											<i class="fa fa-edit fa-3x"></i>
											<h3>Seguir Editando</h3>
										</a>

									</div>
								</div>
								<div class="content-preview" id="content-prev{{$i}}">
									<!--Contenedor del preview-->
								</div>

								{{-- bontones de preview --}}
								<div class="box-header">
									<div class="content-btn-preview">
										<button type="submit" class="btn btn-success" id="processit" >
											<h3>{{trans('admin.development')}}</h3>
											<i class="fa fa-hand-o-right fa-3x"></i>
										</button>
									</div>
								</div>

							</div>
						</div>

					@endfor

					<div class="footer">
						<ul class="pager wizard">
							{{-- <li class="previous first" style="display:none;"><a href="#">First</a></li> --}}
							<li class="previous"><a href="#">Previous</a></li>

							{{-- <button type="submit" class="btn btn-success">
							<i class="fa fa-cogs"></i>
							Procesar
						</button> --}}
						{{-- <li class="next last" style="display:none;"><a href="#">Last</a></li> --}}
						<li class="next"><a href="#">Next</a></li>
					</ul>
				</div>
			</div>
		</div>
	</form>


</div>



<!-------------------------------------------------------------------------------->

{{-- Modulos de elementos ocultos para clonar --}}
@include('admin.oaca.objetos.includes.clone_elements')
{{-- ------------------------------------------------ --}}

@include('admin.oaca.objetos.includes.modals.motivation.info_momento')



@endsection


<!--Styles-->
@push('styles')
	<link href="/vendor/summernote/dist/summernote.css" rel="stylesheet">
	<link href="/vendor/slick-carousel/slick/slick.css" rel="stylesheet">
	<link href="/vendor/slick-carousel/slick/slick-theme.css" rel="stylesheet">
	<link rel="stylesheet" href="/assets/css/oaca/motivation/add/master.css" media="screen" title="no title">

	<style media="screen">
	.btn-circle {
		width: 30px;
		height: 30px;
		text-align: center;
		padding: 6px 0;
		font-size: 12px;
		line-height: 1.428571429;
		border-radius: 15px;
	}

	.btn-circle.btn-lg {
		width: 38px;
		height: 38px;
		padding: 7px 14px;
		font-size: 25px;
		line-height: 0.33;
		border-radius: 25px;
	}
	.btn-circle.btn-xl {
		width: 70px;
		height: 70px;
		padding: 10px 16px;
		font-size: 24px;
		line-height: 1.33;
		border-radius: 35px;
	}

	.modal-dialog{
		width: 1200px !important;
	}
	</style>
@endpush

<!--Scripts-->


@push('scripts')
	<script src="/vendor/summernote/dist/summernote.js"></script>
	<script type="text/javascript" src="/vendor/jqueryte/dist/jquery-te-1.4.0.min.js" charset="utf-8"></script>
	<script type="text/javascript" src="/vendor/twitter-bootstrap-wizard/jquery.bootstrap.wizard.min.js" ></script>
	<script type="text/javascript" src="/assets/js/objetos/motivation/main.js" ></script>
	<script src="/vendor/jQuery.serializeObject/jquery.serializeObject.js"></script>
	<script src="/vendor/slick-carousel/slick/slick.min.js"></script>

	<script>
	$('#form-create-oaca-motivation').submit(function(event) {

		$("#form-create-oaca-motivation [name='textarea']").each(function(index) {
			var idcontent = $(this).data('content');

			var content = $(this).summernote('code');

			$('#'+idcontent).val(content);
		});

	});

	$("#form-create-oaca-motivation").on('click','button.remove-div',function (e){

		var divDelete = $(this).data('parent');

		$("."+divDelete).remove();

	});

	$("#form-create-oaca-motivation").on('click','button.remove-content',function (e){

		var divDelete = $(this).data('content');

		$(divDelete).remove();

	});

	</script>
@endpush
