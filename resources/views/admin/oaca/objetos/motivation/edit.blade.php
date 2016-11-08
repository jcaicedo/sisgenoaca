@extends('admin.layouts.menuoaca')
@section('title',trans('admin.motivation'))
	@section('content')


		<div class="content-wrapper">
			<div class="row">

				<h1 class="text-center">EDICIÓN DE OACA</h1>

			</div>

			@include('admin.oaca.objetos.includes.wizard')

			<div class="box-header">
				<h1 class="text-center">{{trans('admin.motivation')}}
					<div class="box-tool pull-right">
						{{-- <a id="preview-oaca" class="btn btn-warning">
						<i class="fa fa-eye"></i>
						Visualizar
					</a> --}}
				</div>
			</h1>
		</div>

		<form action="{{url('/admin/oaca/objetos/motivation')}}" method="post"  role="form" id="form-create-oaca-motivation" enctype="multipart/form-data" >
			<input type="hidden" name="_token" value="{{ csrf_token() }}">


			<input type="hidden" name="register_id" value="{{$register_id}}">

			<input type="hidden" name="count_elements_old" value="0" id="count_elements_old">
			<input type="hidden" name="task_moment" value="{{$task_moment}}">
			<input type="hidden" name="elementos-delete" value="" id="elementos-delete">

			<div id="rootwizard" class="tabbable tabs-left">

				<ul class="nav bav-tabs">
					<li><a href="#tab1" data-toggle="tab">{{trans('admin.mental_images')}}</a></li>
					<li><a href="#tab2" data-toggle="tab">{{trans('admin.attention')}}</a></li>
				</ul>
				{{-- <div id="bar" class="progress progress-info progress-striped">
				<div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 57.1429%;"></div>
			</div> --}}

			<div class="tab-content" id="content-form">

				<?php $count=0;$count_element=0;?>

				@for($i=1;$i<3;$i++)

					<div class="tab-pane" id="tab{{$i}}">
						{{-- botones de preview --}}
						<div  class="box-header box-header-principal box-btn-header-principal{{$i}}">
							<a  class="btn btn-warning preview-oaca" data-prev="#prev{{$i}}" data-content="#content-form{{$i}}" data-btn=".box-btn-header-principal{{$i}}" data-contentprev="#content-prev{{$i}}">
								<i class="fa fa-eye fa-3x"></i>
								<h3>Preview</h3>
							</a>
					</div>


					<div class="content content-principal" id="content-form{{$i}}" data-pattern='{{$pattern_array[$i-1]}}'>

							@include('admin.oaca.objetos.includes.edit.motivation_edit')

					</div>

					{{-- botones de preview --}}
					<div  class="box-header box-header-principal box-btn-header-principal{{$i}}">

						<button type="submit" class="btn btn-success text-center" id="processit" >
							<h3>{{trans('admin.development')}}</h3>
							<i class="fa fa-hand-o-right fa-3x"></i>

						</button>
					</div>

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
								<button type="submit" class="btn btn-success" id="processit" >
									<h3>{{trans('admin.development')}}</h3>
									<i class="fa fa-hand-o-right fa-3x"></i>
								</button>
							</div>
						</div>
					</div>
				</div>

			@endfor



			<ul class="pager wizard">
				<li class="previous first" style="display:none;"><a href="#">First</a></li>
				<li class="previous"><a href="#">Previous</a></li>
				{{-- <button type="submit" class="btn btn-success">
				<i class="fa fa-cogs"></i>
				Procesar
			</button> --}}
			<li class="next last" style="display:none;"><a href="#">Last</a></li>
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


@endsection


<!--Styles-->
@push('styles')


	<link href="/vendor/summernote/dist/summernote.css" rel="stylesheet">
	<link href="/assets/css/style_steps.css" rel="stylesheet">
	<link href="/vendor/slick-carousel/slick/slick.css" rel="stylesheet">
	<link href="/vendor/slick-carousel/slick/slick-theme.css" rel="stylesheet">
	<link rel="stylesheet" href="/assets/css/oaca/motivation/edit/master.css" media="screen" title="no title">


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
	var array_elements_delete = [];

	$('#form-create-oaca-motivation').submit(function(event) {

		$("#form-create-oaca-motivation [name='textarea']").each(function(index) {
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

	$("#form-create-oaca-motivation").on('click','button.remove-div',function (e){

		e.preventDefault();


		var divDelete = $(this).data('parent');

		if($(this).data('idelement')){
			array_elements_delete.push($(this).data('idelement'));
			$('#elementos-delete').val(array_elements_delete);
			console.log($('#elementos-delete').val());
		}


		$("."+divDelete).remove();

	});

	$("#form-create-oaca-motivation").on('click','button.remove-content',function (e){

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
