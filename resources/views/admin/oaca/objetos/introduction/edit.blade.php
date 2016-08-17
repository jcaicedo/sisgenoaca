@extends('admin.layouts.menuoaca')
@section('title',trans('admin.introduction'))
@section('content')

<div class="content-wrapper">



	<div class="box-header box-header-btn">
		<h1 class="box-title">{{trans('admin.introduction')}}</h1>
		<div style="margin:0;background-color:transparent;text-align:center;">
			{{-- <button type="submit" class="btn btn-primary btn-proccess" id="preview-oaca">Pre-Visualizar</button> --}}
			<a id="preview-oaca" class="btn btn-warning">
				<i class="fa fa-eye"></i>
				Visualizar
			</a>
		</div>
	</div>
	<form action="{{url('/admin/oaca/objetos/introduction')}}" method="post"  role="form" id="form-create-oaca" enctype="multipart/form-data" >
		<input type="hidden" name="_token" value="{{ csrf_token() }}">

		<div class="content sortable" id="content-form">
			
			<input type="hidden" name="register_id" value="{{$register_id}}">
			<input type="hidden" name="elementos" value="" id="hidden_elementos">


			@foreach($contentIntroduction as $key=>$element)


			@if(($element->type_element) == 'title')
			<div class="title remove-div-{{$key}} tilte old">
				<div class="box">
					<div class="box-header with-border">
						<h3 class="box-title">{{trans('admin.title')}}</h3>
						<div class="box-tools pull-right">
							<button class="btn btn-box-tool remove-div" data-parent="remove-div-{{$key}}">
								<i class="fa fa-close"></i>
							</button>
						</div>
					</div>
					<div class="box-body">
						<input type="text" class="form-control componente myinput" data-element="title" data-position={{$key}} id="title-{{$key}}" name="data[{{$key}}][content]" value="{{$element->content}}">
						<input type="hidden" name="data[{{$key}}][type]" value='title'>
						<input type="hidden" name="data[{{$key}}][id]" value="{{$element->id}}">
					</div>
				</div>
			</div>
			@endif

			@if(($element->type_element) == 'textarea')

			<div class="textarea remove-div-{{$key}} old">

				<div class="box">
					<div class="box-header with-border">
						<h3 class="box-title">Textarea</h3>
						<div class="box-tools pull-right">
							<button type="button" class="btn btn-box-tool remove-div" data-parent="remove-div-{{$key}}" >
								<i class="fa  fa-close"></i>
							</button>
							<button  type="button" class="btn btn-box-tool">
								<i class="fa  fa-paint-brush"></i>
							</button>
						</div>
					</div>
					<div class="box-body edit-textarea myinput" data-element="textarea" data-position={{$key}} id="textarea{{$key}}" name="textarea" >
						
					</div>

					<input type="hidden" name="textarea" id="input-textarea{{$key}}" value="{{$element->content}}" class="componente" >
					<input type="hidden" name="data[{{$key}}][content]" id="content-textarea"{{$key}} value="pruab">
					<input type="hidden" name="data[{{$key}}][type]" value="textarea">
					<input type="hidden" name="data[{{$key}}][id]" value="">
				</div>

			</div>
			@endif

			@if(($element->type_element) == 'image')
			
			<div class="uploadimage remove-div-{{$key}} old" >
				<div class="box">
					<div class="box-header with-border">
						<h3 class="box-title">Image</h3>
						<div>
							<img src="{{$element->content}}" alt="" height="100%" width="20%" id="imagep-{{$key}}-original">
						</div>
						
						<div class="box-tools pull-right">
							<button type="button" class="btn btn-box-tool remove-div" data-parent="remove-div-{{$key}}">
								<i class="fa fa-close"></i>
							</button>
						</div>
					</div>
					<div class=" box-body">
						<div class="col-md-6">
							<input class="form-control myinput image-upload" type="file" data-element="image" data-position={{$key}} value="image-{{$key}}" name="image-{{$key}}" id="imagep-{{$key}}" />


							<input type="hidden" id="image-{{$key}}" name="image" value="imagep-{{$key}}" class="componente">
						</div>
						<buttton type="button" class="btn btn-info btn-sm btn-clear-input-image" data-content ='#imagep-{{$key}}'>{{trans('admin.btn-clear')}}</buttton>
					</div>
				</div>
			</div>


			@endif



			@endforeach

		</div>


		<div class="preview">
			<div class="box-footer box-footer-preview" style="margin-bottom:35px;">
				<div style="margin:0;background-color:transparent;text-align:center;">

					<a class="btn btn-warning" id="preview">
						<i class="fa fa-edit"></i>
						Seguir Editando</a>

						<button type="submit" class="btn btn-success" id="processit">
							<i class="fa fa-cogs"></i>
							Procesar</button>
						</div>
					</div>



					<div class="content-preview">

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


		
		@endsection


		<!--Styles-->
		@push('styles')


		<link href="/vendor/summernote/dist/summernote.css" rel="stylesheet">

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
		<script type="text/javascript"  src="/assets/js/objetos/preview.js" ></script>
		<script type="text/javascript"  src="/assets/js/objetos/introduction/main_edit.js" ></script>
		<script type="text/javascript"  src="/assets/js/objetos/options-textarea.js" ></script>
		<script type="text/javascript" src="/vendor/jqueryte/dist/jquery-te-1.4.0.min.js" charset="utf-8"></script>


		<script>
			$('div#content-form .edit-textarea').each( function(index, element){

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


			var count=$('#content-form .old').size();


		</script>
		<script src="/vendor/jQuery.serializeObject/jquery.serializeObject.js" >
		</script>
		@endpush