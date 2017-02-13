@extends('admin.layouts.menuoaca')
@section('title',trans('admin.development'))
	@section('content')

		<div class="content-wrapper">
			<div class="row">
				<h1 class="text-center">CREACIÓN DE OACA</h1>
			</div>

			@include('admin.oaca.objetos.includes.wizard')

			<div class="box-header">
				<h1 class="text-center">{{trans('admin.development')}}
					<button type="button" class="btn btn-info btn-circle btn-lg" data-toggle="modal" data-target="#myModal"><i class="fa fa-info"></i></button>
				</h1>
			</div>

			<form action="{{url('/admin/oaca/objetos/development')}}" method="post"  role="form" id="form-create-oaca-develop" enctype="multipart/form-data" >

				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<input type="hidden" name="register_id" value="{{$register_id}}">
				<input type="hidden" name="task_moment" value="{{$task_moment}}">
				<input type="hidden" name="count_elements_old" value="8" id="count_elements_old">

				<div id="rootwizard" class="tabbable tabs-left">

					<ul class="nav bav-tabs">
						<li><a href="#tab1" data-toggle="tab">{{trans('admin.explanation')}}</a></li>
						<li><a href="#tab2" data-toggle="tab">{{trans('admin.exemplification')}}</a></li>
						<li><a href="#tab3" data-toggle="tab">{{trans('admin.application')}}</a></li>
						<li><a href="#tab4" data-toggle="tab">{{trans('admin.justification')}}</a></li>
						<li><a href="#tab5" data-toggle="tab">{{trans('admin.compare')}}</a></li>
						<li><a href="#tab6" data-toggle="tab">{{trans('admin.contrast')}}</a></li>
						<li><a href="#tab7" data-toggle="tab">{{trans('admin.contextualization')}}</a></li>
						<li><a href="#tab8" data-toggle="tab">{{trans('admin.generalization')}}</a></li>
					</ul>


					<div class="tab-content">

						@for($i=1;$i<9;$i++)

							<div class="tab-pane" id="tab{{$i}}">

								{{-- bontones de preview content principal --}}
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

								{{-- bontones de preview content principal --}}
								<div class="box-header box-header-principal box-btn-header-principal{{$i}}">

									<a href="{{url('/admin/oaca/objetos/back-oaca/'.$register_id.'/motivation')}}" class="btn btn-default text-center back-momento" >
										<i class="fa  fa-hand-o-left fa-3x"></i>
										<h3>{{trans('admin.motivation')}}</h3>
									</a>
									<button type="submit" class="btn btn-success text-center processit">
										<h3>{{trans('admin.close')}}</h3>
										<i class="fa fa-hand-o-right fa-3x"></i>
									</button>
								</div>

								{{-- CONTENEDOR PREVIEW --}}

								<div class="preview" id="prev{{$i}}">

									{{-- bontones de preview --}}
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
											<a href="{{url('/admin/oaca/objetos/back-oaca/'.$register_id.'/motivation')}}" class="btn btn-default text-center back-momento" >
												<i class="fa  fa-hand-o-left fa-3x "></i>
												<h3>{{trans('admin.motivation')}}</h3>
											</a>
											<button type="submit" class="btn btn-success processit" >
												<h3>{{trans('admin.close')}}</h3>
												<i class="fa fa-hand-o-right fa-3x"></i>
											</button>
										</div>
									</div>

								</div> {{--./Contenedor preview--}}
							</div> {{--./Contenedor Tab--}}

						@endfor

						<div class="footer">
							<ul class="pager wizard">
								<li class="previous"><a href="#">Previous</a></li>
								<li class="next"><a href="#">Next</a></li>
							</ul>
						</div>
					</div>
				</div>
			</form>
		</div>  {{--./content-wrapper--}}



		<!-------------------------------------------------------------------------------->

		{{-- Modulos de elementos ocultos para clonar --}}
		@include('admin.oaca.objetos.includes.clone_elements')

		<!-- Modal -->
		@include('admin.oaca.objetos.includes.modals.development.info_momento')

	@endsection


	<!--Styles-->
	@push('styles')
		<link href="/vendor/summernote/dist/summernote.css" rel="stylesheet">
		<link href="/vendor/slick-carousel/slick/slick.css" rel="stylesheet">
		<link href="/vendor/slick-carousel/slick/slick-theme.css" rel="stylesheet">
		<link rel="stylesheet" href="/assets/css/oaca/development/add/master.css" media="screen" title="no title">
	@endpush

	<!--Scripts-->
	@push('scripts')
		<script src="/vendor/summernote/dist/summernote.js"></script>
		<script type="text/javascript" src="/vendor/jqueryte/dist/jquery-te-1.4.0.min.js" charset="utf-8"></script>
		<script type="text/javascript" src="/vendor/twitter-bootstrap-wizard/jquery.bootstrap.wizard.min.js" ></script>
		<script type="text/javascript" src="/assets/js/objetos/develop/main.js" ></script>
		<script src="/vendor/jQuery.serializeObject/jquery.serializeObject.js" ></script>
		<script src="/vendor/slick-carousel/slick/slick.min.js"></script>

		{{-- <script>
		$('#form-create-oaca-develop').submit(function(event) {

			$("#form-create-oaca-develop [name='textarea']").each(function(index) {
				var idcontent = $(this).data('content');

				var content = $(this).summernote('code');

				$('#'+idcontent).val(content);
			});

		});

		$("#form-create-oaca-develop").on('click','button.remove-div',function (e){

			var divDelete = $(this).data('parent');

			$("."+divDelete).remove();

		});

		$("#form-create-oaca-develop").on('click','button.remove-content',function (e){

			var divDelete = $(this).data('content');

			$(divDelete).remove();

		});

		</script> --}}
	@endpush
