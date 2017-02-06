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
					<button type="button" class="btn btn-info btn-circle btn-lg" data-toggle="modal" data-target="#myModal"><i class="fa fa-info"></i></button>
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

					<div class="tab-content" id="content-form">


						@include('admin.oaca.objetos.includes.edit.motivation_edit')



						<ul class="pager wizard">
							<li class="previous"><a href="#">Previous</a></li>
							<li class="next"><a href="#">Next</a></li>
						</ul>
					</div>
				</div>
			</form>

		</div> {{--./content-wrapper--}}

		<!-------------------------------------------------------------------------------->

		{{-- Modulos de elementos ocultos para clonar --}}
		@include('admin.oaca.objetos.includes.clone_elements')
		{{-- ------------------------------------------------ --}}

		<!-- Modal -->
		@include('admin.oaca.objetos.includes.modals.motivation.info_momento')


	@endsection


	<!--Styles-->
	@push('styles')
		<link href="/vendor/summernote/dist/summernote.css" rel="stylesheet">
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



			$("#form-create-oaca-motivation").on('change',".content-image-prev",function(){
			console.log($(this).attr('id'));
			});

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
			console.log(textarea_id);
			console.log($(this));

			$( $(this)).summernote({
				height: 300,
				minHeight: null,
				maxHeight: null,
				focus: true,
				maximumImageFileSize: 512*1024
			});

			var content = $('#input-'+textarea_id).val();
			//$('#input-'+textarea_id).val(textarea_id);


			$( $(this)).summernote('code',content);



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
