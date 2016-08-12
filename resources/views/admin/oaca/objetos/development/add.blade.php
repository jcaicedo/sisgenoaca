@extends('admin.layouts.menuoaca')
@section('title',trans('admin.development'))
@section('content')

<div class="content-wrapper">
	<div class="box-header box-header-btn">

		<h1 class="box-title">{{trans('admin.development')}}</h1>

	</div>
	<form action="{{url('/admin/oaca/objetos/development')}}" method="post"  role="form" id="form-create-oaca-develop" enctype="multipart/form-data" >
		<input type="hidden" name="_token" value="{{ csrf_token() }}">

		<input type="hidden" name="register_id" value="{{$register_id}}">

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
			<div id="bar" class="progress progress-info progress-striped">
				<div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 57.1429%;"></div>
			</div>

			<div class="tab-content">

				@for($i=1;$i<9;$i++)

				<div class="tab-pane" id="tab{{$i}}">
					<div id="btn-prev{{$i}}" style="margin:0;background-color:transparent;text-align:center;">
						<a  class="btn btn-warning preview-oaca" data-prev="#prev{{$i}}" data-content="#content-form{{$i}}" data-btn="#btn-prev{{$i}}" data-contentprev="#content-prev{{$i}}">
							<i class="fa fa-eye"></i>
							Visualizar
						</a>
					</div>

					<!--EXPLANATION-->
					<div class="content sortable" id="content-form{{$i}}" data-pattern='{{$pattern_array[$i-1]}}'>



					</div>


					<div class="preview" id="prev{{$i}}">
						<div class="box-footer box-footer-preview" style="margin-bottom:35px;">
							<div style="margin:0;background-color:transparent;text-align:center;">

								<a class="btn btn-warning btn-return-edit" id="preview" data-prev="#prev{{$i}}" data-content="#content-form{{$i}}" data-btn="#btn-prev{{$i}}" data-contentprev="#content-prev{{$i}}">
									<i class="fa fa-edit"></i>
									Seguir Editando
								</a>

								<button type="submit" class="btn btn-success">
									<i class="fa fa-cogs"></i>
									Procesar</button>
								</div>
							</div>



							<div class="content-preview" id="content-prev{{$i}}">

							</div>
						</div>
					</div>

					@endfor


					
					<ul class="pager wizard">
						<li class="previous first" style="display:none;"><a href="#">First</a></li>
						<li class="previous"><a href="#">Previous</a></li>
						<li class="next last" style="display:none;"><a href="#">Last</a></li>
						<li class="next"><a href="#">Next</a></li>
					</ul>
				</div>
			</div>
		</form>


	</div>




	<!-------------------------------------------------------------------------------->

	{{-- Modulos de elementos ocultos para clonar --}}

	{{-- Modulo Title --}}

	<div class="titulo-clone nomostrar">
		<div class="box">
			<div class="box-header with-border">
				<h3 class="box-title">Titulo</h3>
				<div class="box-tools pull-right">
					<button type="button" class="btn btn-box-tool">
						<i class="fa fa-close"></i>
					</button>
				</div>
			</div>
			<div class="box-body">
				<input type="text" class="form-control componente"> 
			</div>
		</div>
	</div>

	{{-- Modulo Textarea --}}
	<div class="textareaclone nomostrar  ">

		<div class="box">
			<div class="box-header with-border">
				<h3 class="box-title">Textarea</h3>
				<div class="box-tools pull-right">
					<button type="button" class="btn btn-box-tool">
						<i class="fa  fa-close"></i>
					</button>
					<button  type="button" class="btn btn-box-tool">
						<i class="fa  fa-paint-brush"></i>
					</button>
				</div>
			</div>
			<div class="box-body edit-textarea">

			</div>
		</div>

	</div>


	<!--modulo image-->


	<div class="uploadimage uploadimage-clone nomostrar">
		<div class="box">
			<div class="box-header with-border">
				<h3 class="box-title">Image</h3>
				<div class="box-tools pull-right">
					<button type="button" class="btn btn-box-tool">
						<i class="fa fa-close"></i>
					</button>
				</div>
			</div>
			<div class=" box-body">
				<input class="form-control" type="file" />
			</div>
		</div>
	</div>


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


	<style>
		.nomostrar{display:none;}
		.mostrar{display: block;}
		.btn-proccess{margin:0 auto; width: 200px;align:left;}
		.preview{display: none;}
		.mark_background{background: #88AAAA}
		.content-preview{padding-left: 5%; padding-right: 5%;padding-bottom: 5%;}
		.content-preview h2{
			color: blue;
			text-align: center;
		}
		.callout{margin: 0 !important; min-height:0;}

		.options-textarea{
			padding-bottom: 10px;
		}
		.box-header-btn{
			background: #CCCBCB;
		}

	</style>
	@endpush

	<!--Scripts-->


	@push('scripts')
	<script src="/vendor/summernote/dist/summernote.js"></script>
	<!--<script type="text/javascript"  src="/assets/js/objetos/preview.js" ></script>-->
	<script type="text/javascript" src="/vendor/jqueryte/dist/jquery-te-1.4.0.min.js" charset="utf-8"></script>
	<script type="text/javascript" src="/vendor/twitter-bootstrap-wizard/jquery.bootstrap.wizard.min.js" ></script>
	<script type="text/javascript" src="/assets/js/objetos/develop/main.js" ></script>
	<script src="/vendor/jQuery.serializeObject/jquery.serializeObject.js" >
	</script>

	<script>
		$('#form-create-oaca-develop').submit(function(event) {

				$("#form-create-oaca-develop [name='textarea']").each(function(index) {
					var idcontent = $(this).data('content');

					var content = $(this).summernote('code');

					$('#'+idcontent).val(content);
				});

		});

	</script>
	@endpush