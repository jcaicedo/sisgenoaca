@extends('admin.layouts.menuoaca')
@section('title',trans('admin.development'))
@section('content')


<div class="content-wrapper">
{{-- 	<section class="content-header">
		<h1>{{trans('admin.development')}}</h1>
	</section> --}}

	<div class="box-header">
		<h1 >{{trans('admin.development')}}
			<div class="box-tool pull-right">
				{{-- <a id="preview-oaca" class="btn btn-warning">
					<i class="fa fa-eye"></i>
					Visualizar
				</a> --}}
			</div>
		</h1>
	</div>

	<form action="{{url('/admin/oaca/objetos/development')}}" method="post"  role="form" id="form-create-oaca-develop" enctype="multipart/form-data" >
		<input type="hidden" name="_token" value="{{ csrf_token() }}">


		<input type="hidden" name="register_id" value="{{$register_id}}">

		<input type="hidden" name="count_elements_old" value="0" id="count_elements_old">
		<input type="hidden" name="task_moment" value="{{$task_moment}}">
		<input type="hidden" name="elementos-delete" value="" id="elementos-delete">

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

			<div class="tab-content" id="content-form">

				<?php $count=0;$count_element=0;?>

				@for($i=1;$i<9;$i++)

				<div class="tab-pane" id="tab{{$i}}">
					{{-- botones de preview --}}
					<div id="btn-prev{{$i}}"  class="box-header box-header-principal">
						<a  class="btn btn-warning preview-oaca" data-prev="#prev{{$i}}" data-content="#content-form{{$i}}" data-btn="#btn-prev{{$i}}" data-contentprev="#content-prev{{$i}}">
							<i class="fa fa-eye"></i>
							Visualizar
						</a>
					</div>

					
					<div class="content content-principal" id="content-form{{$i}}" data-pattern='{{$pattern_array[$i-1]}}'>
						
						@if(isset($content_davelop[$pattern_array[$i-1]]))


						@foreach($content2[$pattern_array[$i-1]] as $key=>$data)
						<div class="content contentchild contentchildfirst sortable" id="contentchild{{$count_element}}" data-pattern='{{$pattern_array[$i-1]}}'>
							@foreach($data as $key=> $element)

							@if($element->type_element == 'title')
							<div class="title remove-div-{{$count}}  old">
								<div class="box">
									<div class="box-header with-border">
										<h3 class="box-title">{{trans('admin.title')}}</h3>
										<div class="box-tools pull-right">
											<button  class="btn btn-box-tool remove-div" data-parent="remove-div-{{$count}}" data-idelement="{{$element->id}}">
												<i class="fa fa-close"></i>
											</button>
										</div>
									</div>
									<div class="box-body">
										<input type="text" class="form-control componente myinput" data-element="title" data-position={{$count}} id="title-{{$count}}" name="data[{{$count}}][content]" value="{{$element->content}}">
										<input type="hidden" name="data[{{$count}}][type]" value='title'>
										<input type="hidden" name="data[{{$count}}][id]" value="{{$element->id}}">
										<input type="hidden" name="data[{{$count}}][pattern]" value="{{$element->pattern_pedagogicaltechno}}" >
										<input type='hidden' name='data[{{$count}}][contentchild]' value="contentchild{{$count_element}}">
									</div>
								</div>
							</div>			
							<?php $count++;?>
							@endif

							@if($element->type_element == 'textarea')

							<div class="textarea remove-div-{{$count}} old">

								<div class="box">
									<div class="box-header with-border">
										<h3 class="box-title">Textarea</h3>
										<div class="box-tools pull-right">
											<button type="button" class="btn btn-box-tool remove-div" data-parent="remove-div-{{$count}}" data-idelement="{{$element->id}}" >
												<i class="fa  fa-close"></i>
											</button>
											<button  type="button" class="btn btn-box-tool">
												<i class="fa  fa-paint-brush"></i>
											</button>
										</div>
									</div>
									<div class="box-body edit-textarea myinput" data-element="textarea" data-position={{$count}} id="textarea{{$count}}" name="textarea" data-content="content-textarea{{$count}}">

									</div>

									<input type="hidden" name="textarea" id="input-textarea{{$count}}" value="{{$element->content}}" class="componente" >
									<input type="hidden" name="data[{{$count}}][content]" id="content-textarea{{$count}}" value="pruab">
									<input type="hidden" name="data[{{$count}}][type]" value="textarea">
									<input type="hidden" name="data[{{$count}}][id]" value="{{$element->id}}">
									<input type="hidden" name="data[{{$count}}][pattern]" value="{{$element->pattern_pedagogicaltechno}}" >
									<input type='hidden' name='data[{{$count}}][contentchild]' value="contentchild{{$count_element}}">

								</div>

							</div>
							<?php $count++;?>
							@endif



							@if($element->type_element == 'image')
							<div class="uploadimage remove-div-{{$count}} old" >
								<div class="box">
									<div class="box-header with-border">
										<h3 class="box-title">Image</h3>
										<div class="image-preview-content" id="imagep-{{$count}}-original">
											<img src="{{$element->content}}" alt=""  >
										</div>

										<div class="box-tools pull-right">
											<button type="button" class="btn btn-box-tool remove-div" data-parent="remove-div-{{$count}}" data-idelement="{{$element->id}}">
												<i class="fa fa-close"></i>
											</button>
										</div>
									</div>
									<div class=" box-body">
										<div class="col-md-6">
											<input class="form-control myinput image-upload" type="file" data-element="image" data-position="{{$count}}" value="image-{{$count}}" name="image{{$count}}" id="imagep-{{$count}}" />


											<input type="hidden" id="image-{{$count}}" name="image" value="imagep-{{$count}}" class="componente">

											<input type="hidden" name="data[{{$count}}][content]" value="image{{$count}}" >
											<input type="hidden" name="data[{{$count}}][type]" value='image' >
											<input type="hidden" name="data[{{$count}}][id]" value='{{$element->id}}' >
											<input type="hidden" name="data[{{$count}}][pattern]" value="{{$element->pattern_pedagogicaltechno}}" >
											<input type='hidden' name='data[{{$count}}][contentchild]' value="contentchild{{$count_element}}">

										</div>
										<buttton type="button" class="btn btn-info btn-sm btn-clear-input-image" data-content ='#imagep-{{$count}}'>{{trans('admin.btn-clear')}}</buttton>
									</div>
								</div>
							</div>
							<?php $count++;?>
							@endif




							@endforeach
							<?php $count_element++; ?>
						</div>
						@endforeach
						@endif

					</div>


					<div class="preview" id="prev{{$i}}">
						<div class="box-header">
							<div class="content-btn-preview">

								<a class="btn btn-warning btn-return-edit" id="preview" data-prev="#prev{{$i}}" data-content="#content-form{{$i}}" data-btn="#btn-prev{{$i}}" data-contentprev="#content-prev{{$i}}">
									<i class="fa fa-edit"></i>
									Seguir Editando
								</a>

								{{-- <button type="submit" class="btn btn-success">
									<i class="fa fa-cogs"></i>
									Procesar
								</button> --}}
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
					<button type="submit" class="btn btn-success">
						<i class="fa fa-cogs"></i>
						Procesar
					</button>
					<li class="next last" style="display:none;"><a href="#">Last</a></li>
					<li class="next"><a href="#">Next</a></li>
				</ul>
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
	.preview{display: none;min-height:304px;}
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
	.content-header{margin-bottom: 14px;}
	.content-btn-preview{text-align: center;}
	.box-header-principal{text-align: center;}
	.image-preview-content{text-align: center;}
	.image-preview-content img{width: 50%; height: auto;}

	.contentchild{
		border-radius: 25px;
		border:2px solid #C8DAF0;
		margin: 33px 3px;
		background:#C8DAF0;
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
	var array_elements_delete = [];

	$('#form-create-oaca-develop').submit(function(event) {

		$("#form-create-oaca-develop [name='textarea']").each(function(index) {
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

	$("#form-create-oaca-develop").on('click','button.remove-div',function (e){

		e.preventDefault();


		var divDelete = $(this).data('parent');

		if($(this).data('idelement')){
			array_elements_delete.push($(this).data('idelement'));
			$('#elementos-delete').val(array_elements_delete);
			console.log($('#elementos-delete').val());
		}


		$("."+divDelete).remove();

	});


	$('input[name=count_elements_old]').val($('#content-form .old').size()+1);





</script>
@endpush