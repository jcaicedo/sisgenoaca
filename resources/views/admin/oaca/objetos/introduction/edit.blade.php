@extends('admin.layouts.menuoaca')
@section('title',trans('admin.introduction'))
@section('content')

<div class="content-wrapper">

	<div class="box-header">

		<h1 >{{trans('admin.introduction')}}

			<div class="box-tool pull-right">
			{{-- 	<a id="preview-oaca" class="btn btn-warning">
					<i class="fa fa-eye"></i>
					Visualizar
				</a> --}}
			</div>
		</h1>
		

	</div>

	<form action="{{url('/admin/oaca/objetos/introduction')}}" method="post"  role="form" id="form-create-oaca" enctype="multipart/form-data" >
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<input type="hidden" name="register_id" value="{{$register_id}}">
		<input type="hidden" name="task_moment" value="{{$task_moment}}">
		<input type="hidden" name="count_elements_old" value="0" id="count_elements_old">
		<input type="hidden" name="elementos-delete" value="" id="elementos-delete">

		
		<div class="box-header box-header-principal">
			<a id="preview-oaca" class="btn btn-warning">
				<i class="fa fa-eye fa-3x"></i>
				<h3>Preview</h3>
			</a>
			<a class="btn btn-warning" id="preview">
				<i class="fa fa-edit fa-3x"></i>
				<h3>Seguir Editando</h3>
			</a>
			<button type="submit" class="btn btn-success" id="processit">
				<h3>{{trans('admin.development')}}</h3>
				<i class="fa fa-hand-o-right fa-3x"></i>
			</button>
		</div>

		<?php $count=0;$count_element=0;?>

		<div class="content content-principal">
			@foreach($collectChild as $key=>$collect)
			<div class="content contentchild sortable" id="contentchild{{$count}}">
				<div class="box-header with-border">

					<div class="box-tools box-tools-content pull-right">
						<button type="button" class="btn btn-box-tool remove-content" data-content = "#contentchild{{$count}}">
							<i class="fa fa-close"></i>
						</button>

					</div>
				</div>



				@foreach($collect as $key=>$element)

				@if(($element->type_element) == 'title')
				<div class="title remove-div-{{$count_element}} tilte old">
					<div class="box">
						<div class="box-header with-border">
							<h3 class="box-title">{{trans('admin.title')}}</h3>
							<div class="box-tools pull-right">
								<button class="btn btn-box-tool remove-div" data-parent="remove-div-{{$count_element}}" data-idelement="{{$element->id}}">
									<i class="fa fa-close"></i>
								</button>
							</div>
						</div>
						<div class="box-body">
							<input type="text" class="form-control componente myinput" data-element="title" data-position={{$count_element}} id="title-{{$count_element}}" name="data[{{$count_element}}][content]" value="{{$element->content}}">
							<input type="hidden" name="data[{{$count_element}}][type]" value='title'>
							<input type="hidden" name="data[{{$count_element}}][id]" value="{{$element->id}}">
							<input type='hidden' name='data[{{$count_element}}][contentchild]' value="contentchild{{$count}}">

						</div>
					</div>
				</div>
				<?php $count_element++;?>
				@endif

				@if(($element->type_element) == 'textarea')

				<div class="textarea remove-div-{{$count_element}} old">

					<div class="box">
						<div class="box-header with-border">
							<h3 class="box-title">Textarea</h3>
							<div class="box-tools pull-right">
								<button type="button" class="btn btn-box-tool remove-div" data-parent="remove-div-{{$count_element}}" data-idelement="{{$element->id}}" >
									<i class="fa  fa-close"></i>
								</button>
								<button  type="button" class="btn btn-box-tool">
									<i class="fa  fa-paint-brush"></i>
								</button>
							</div>
						</div>
						<div class="box-body edit-textarea myinput" data-element="textarea" data-position={{$count_element}} id="textarea{{$count_element}}" name="textarea" data-content="content-textarea{{$count_element}}">
							
						</div>

						<input type="hidden" name="textarea" id="input-textarea{{$count_element}}" value="{{$element->content}}" class="componente" >
						<input type="hidden" name="data[{{$count_element}}][content]" id="content-textarea{{$count_element}}" value="pruab">
						<input type="hidden" name="data[{{$count_element}}][type]" value="textarea">
						<input type="hidden" name="data[{{$count_element}}][id]" value="{{$element->id}}">
						<input type='hidden' name='data[{{$count_element}}][contentchild]' value="contentchild{{$count}}">
					</div>

				</div>

				<?php $count_element++;?>
				@endif

				@if(($element->type_element) == 'image')
				
				<div class="uploadimage remove-div-{{$count_element}} old" >
					<div class="box">
						<div class="box-header with-border">
							<h3 class="box-title">Image</h3>
							<div class="image-preview-content" id="imagep-{{$count_element}}-original">
								<img src="{{$element->content}}" alt=""  >
							</div>
							
							<div class="box-tools pull-right">
								<button type="button" class="btn btn-box-tool remove-div" data-parent="remove-div-{{$count_element}}" data-idelement="{{$element->id}}">
									<i class="fa fa-close"></i>
								</button>
							</div>
						</div>
						<div class=" box-body">
							<div class="col-md-6">
								<input class="form-control myinput image-upload" type="file" data-element="image" data-position="{{$count_element}}" value="image-{{$count_element}}" name="image{{$count_element}}" id="imagep-{{$count_element}}" />


								<input type="hidden" id="image-{{$count_element}}" name="image" value="imagep-{{$count_element}}" class="componente">

								<input type="hidden" name="data[{{$count_element}}][content]" value="image{{$count_element}}" >
								<input type="hidden" name="data[{{$count_element}}][type]" value='image' >
								<input type="hidden" name="data[{{$count_element}}][id]" value='{{$element->id}}' >
								<input type='hidden' name='data[{{$count_element}}][contentchild]' value="contentchild{{$count}}">
							</div>
							<buttton type="button" class="btn btn-info btn-sm btn-clear-input-image" data-content ='#imagep-{{$count_element}}'>{{trans('admin.btn-clear')}}</buttton>
						</div>
					</div>
				</div>
				<?php $count_element++;?>

				@endif
				@endforeach

			</div>
			<?php $count++;?>
			@endforeach
		</div>



		<div class="content preview">
			<div class="box-header box-header-preview">
				<a class="btn btn-primary" id="btn-slick-prev">
					<i class="fa fa-caret-square-o-left fa-3x"></i>

				</a>
				<a class="btn btn-primary" id="btn-slick-next">
					<i class="fa fa-caret-square-o-right fa-3x"></i>

				</a>
			</div>
			<div class="content-preview regular slider">
				
			</div>
		</div>



	</form>


</div>




<!-------------------------------------------------------------------------------->

{{-- Modulos de elementos ocultos para clonar --}}
<div class="content sortable contentfather-clone nomostrar" id="contentchild1">

</div>
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
<link href="/vendor/slick-carousel/slick/slick.css" rel="stylesheet">
<link href="/vendor/slick-carousel/slick/slick-theme.css" rel="stylesheet">

<style>
	.nomostrar{display:none;}
	.mostrar{display: block;}
	.btn-proccess{margin:0 auto; width: 200px;align:left;}
	.preview{display: none;}
	.mark_background{background: #88AAAA}
	/*.content-preview{padding:5%;}*/
	.content-preview h2{
		color: blue;
		text-align: center;
	}
	.box-header-principal{padding-top: 0px;text-align: center;}
	.content-btn-preview{text-align: center;padding-top: 5px;}
	.image-preview-content{text-align: center;}
	.image-preview-content img{width: 50%; height: auto;}

	#processit{float:right;}
	#processit h3{float: left;margin-top: 11px;}
	#processit .fa-3x{margin-left: 7px;}

	#preview-oaca h3, #preview h3{float: left; margin-top: 11px;margin-left: 7px;}
	#preview-oaca .fa-3x, #preview .fa-3x{float: left;}
	.box-header-preview{
		text-align: center;
	}

	
	.contentchild{
		border-radius: 25px;
		border:2px solid #C8DAF0;
		margin: 33px 3px;
		background:#C8DAF0;
	}
	.box{
		border-radius:5px;
	}

	* {
		box-sizing: border-box;
	}
	.slider {
		width: 90%;
		margin: 50px auto;
	}

	.slick-slide {
		margin: 0px 20px;
	}

	.slick-slide img {
		width: 100%;
	}

	.slick-prev:before,
	.slick-next:before {
		color: black;
	}

	.box-tools-content{
		top: -10px !important;
	}


</style>
@endpush

<!--Scripts-->


@push('scripts')
<script src="/vendor/summernote/dist/summernote.js"></script>
<!--<script type="text/javascript"  src="/assets/js/objetos/preview.js" ></script>-->
<script src="/vendor/slick-carousel/slick/slick.min.js"></script>
<script type="text/javascript"  src="/assets/js/objetos/introduction/main_edit.js" ></script>
<script type="text/javascript" src="/vendor/jqueryte/dist/jquery-te-1.4.0.min.js" charset="utf-8"></script>


<script>
	$('div.content-principal .edit-textarea').each( function(index, element){

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


	$('input[name=count_elements_old]').val($('.content-principal .old').size()+1);
	console.log($('.content-principal .old').size()+1);


</script>
<script src="/vendor/jQuery.serializeObject/jquery.serializeObject.js" >
</script>
@endpush