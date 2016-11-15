@extends('admin.layouts.menuoaca')
@section('title',trans('admin.close'))
	@section('content')

		<div class="content-wrapper">

			<div class="row">

				<h1 class="text-center">EDICIÓN DE OACA</h1>

			</div>

			@include('admin.oaca.objetos.includes.wizard')

			<div class="box-header box-header-principal">
				<h1 class="text-center">{{trans('admin.close')}}
					<button type="button" class="btn btn-info btn-circle btn-lg" data-toggle="modal" data-target="#myModal"><i class="fa fa-info"></i></button>
			</h1>
		</div>

		<form action="{{url('/admin/oaca/objetos/close')}}" method="post"  role="form" id="form-create-oaca-close" enctype="multipart/form-data" >
			<input type="hidden" name="_token" value="{{ csrf_token() }}">


			<input type="hidden" name="register_id" value="{{$register_id}}">
			<input type="hidden" name="task_moment" value="{{$task_moment}}">
			<input type="hidden" name="count_elements_old" value="0" id="count_elements_old">
			<input type="hidden" name="elementos-delete" value="" id="elementos-delete">

			<div id="rootwizard" class="tabbable tabs-left">

				<ul class="nav bav-tabs">
					<li><a href="#tab1" data-toggle="tab">{{trans('admin.systematization')}}</a></li>
					<li><a href="#tab2" data-toggle="tab">{{trans('admin.investigation')}}</a></li>
					<li><a href="#tab3" data-toggle="tab">{{trans('admin.evaluation')}}</a></li>
				</ul>
				{{-- <div id="bar" class="progress progress-info progress-striped">
				<div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 57.1429%;"></div>
			</div> --}}

			<div class="tab-content" id="content-form">

				<?php $count=0;$count_element=0;?>

				@for($i=1;$i<4;$i++)

					<div class="tab-pane" id="tab{{$i}}">
						{{-- botones de preview --}}
						<div class="box-header box-header-principal box-btn-header-principal{{$i}}">
							<a  class="btn btn-warning preview-oaca" data-prev="#prev{{$i}}" data-content="#content-form{{$i}}" data-btn=".box-btn-header-principal{{$i}}" data-contentprev="#content-prev{{$i}}">
								<i class="fa fa-eye fa-3x"></i>
								<h3>Preview</h3>
							</a>
						</div>


						<div class="content content-principal" id="content-form{{$i}}" data-pattern='{{$pattern_array[$i-1]}}'>

							@include('admin.oaca.objetos.includes.edit.close_edit')

						</div>

						{{-- botones de preview --}}
						<div  class="box-header box-header-principal box-btn-header-principal{{$i}}">
							<a href="#" class="btn btn-default text-center back-momento" >
								<i class="fa  fa-hand-o-left fa-3x"></i>
								<h3>{{trans('admin.motivation')}}</h3>
							</a>
							<button type="submit" class="btn btn-success text-center processit" >
								<h3>TERMINAR</h3>
								<i class="fa fa-hand-o-right fa-3x"></i>

							</button>
						</div>

						<!---------------------------------------------------------------->

						<div class="preview" id="prev{{$i}}">

							<div class="box-header">
								<div class="content-btn-preview">
									<a class="btn btn-warning btn-return-edit" id="preview" data-prev="#prev{{$i}}" data-content="#content-form{{$i}}" data-btn=".box-btn-header-principal{{$i}}" data-contentprev="#content-prev{{$i}}">
										<i class="fa fa-edit fa-3x"></i>
										<h3>Seguir Editando</h3>
									</a>
								</div>
							</div>

							<div class="content content-preview" id="content-prev{{$i}}">
								<!--Contenedor del preview-->
							</div>

							{{-- bontones de preview --}}
							<div class="box-header">
								<div class="content-btn-preview">
									<a href="#" class="btn btn-default text-center back-momento" >
										<i class="fa  fa-hand-o-left fa-3x left"></i>
										<h3>{{trans('admin.motivation')}}</h3>
									</a>
									<button type="submit" class="btn btn-success" id="processit" >
										<h3>FINALIZAR</h3>
										<i class="fa fa-hand-o-right fa-3x"></i>
									</button>
								</div>
							</div>

						</div>
					</div>

				@endfor



				<ul class="pager wizard">
					<li class="previous"><a href="#">Previous</a></li>
					<li class="next"><a href="#">Next</a></li>
				</ul>
			</div>
		</div>
	</form>


</div>




<!-------------------------------------------------------------------------------->

{{-- Modulos de elementos ocultos para clonar --}}
@include('admin.oaca.objetos.includes.clone_elements')
{{-- ------------------------------------------------ --}}

<!-- Modal -->
@include('admin.oaca.objetos.includes.modals.close.info_momento')


@endsection


<!--Styles-->
@push('styles')


	<link href="/vendor/summernote/dist/summernote.css" rel="stylesheet">
	<link href="/vendor/slick-carousel/slick/slick.css" rel="stylesheet">
	<link href="/vendor/slick-carousel/slick/slick-theme.css" rel="stylesheet">
	<link rel="stylesheet" href="/assets/css/oaca/close/edit/master.css" media="screen" title="no title">

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
	<script type="text/javascript" src="/assets/js/objetos/close/main.js" ></script>
	<script src="/vendor/jQuery.serializeObject/jquery.serializeObject.js"></script>
	<script src="/vendor/slick-carousel/slick/slick.min.js"></script>

	<script>
	var array_elements_delete = [];

	$('#form-create-oaca-close').submit(function(event) {

		$("#form-create-oaca-close [name='textarea']").each(function(index) {
			var idcontent = $(this).data('content');

			var content = $(this).summernote('code');

			$('#'+idcontent).val(content);
		});

	});

	$('div#content-form .edit-textarea').each(function(index, element){
		var textarea_id = $(this).attr('id');


		$('#'+textarea_id).summernote({
			height: 300,
			minHeight: null,
			maxHeight: null,
			focus: true,
			maximumImageFileSize: 512*1024
		});

		var content = $('#input-'+textarea_id).val();
		$('#input-'+textarea_id).val(textarea_id);


		$('#'+textarea_id).summernote('code',content);



	});

	$("#form-create-oaca-close").on('click','button.remove-div',function (e){

		e.preventDefault();


		var divDelete = $(this).data('parent');

		if($(this).data('idelement')){
			array_elements_delete.push($(this).data('idelement'));
			$('#elementos-delete').val(array_elements_delete);
			console.log($('#elementos-delete').val());
		}


		$("."+divDelete).remove();

	});

	$("#form-create-oaca-close").on('click','button.remove-content',function (e){

		var divDelete = $(this).data('content');

		$(divDelete+' button.remove-div').each(function(index, el){

			if($(el).data('idelement')){
				array_elements_delete.push($(el).data('idelement'));
				$('#elementos-delete').val(array_elements_delete);
				console.log($('#elementos-delete').val());
			}
		});

		$(divDelete).remove();

	});


	$('input[name=count_elements_old]').val($('#content-form .old').size()+1);





	</script>
@endpush
