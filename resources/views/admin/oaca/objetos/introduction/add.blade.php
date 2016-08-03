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
	<form action="{{url('/admin/oaca/objetos/introduction')}}" method="post" onSubmit="submitFormOaca()" role="form" id="form-create-oaca" enctype="multipart/form-data" >
		<input type="hidden" name="_token" value="{{ csrf_token() }}">

		<div class="content sortable" id="content-form">
			
			<input type="hidden" name="register_id" value="{{$register_id}}">
			

			<input type="hidden" name="elementos" value="" id="hidden_elementos">

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

		
		<div class="box-footer box-footer-home" style="position: fixed;" >

			<div style="margin:0;background-color:transparent;text-align:center;">
				{{-- <button type="submit" class="btn btn-primary btn-proccess" id="preview-oaca">Pre-Visualizar</button> --}}
				<a id="preview-oaca" class="btn btn-warning">
					<i class="fa fa-eye"></i>
					Visualizar
				</a>
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
		<script type="text/javascript"  src="/assets/js/objetos/options-textarea.js" ></script>
		<script type="text/javascript" src="/vendor/jqueryte/dist/jquery-te-1.4.0.min.js" charset="utf-8"></script>


		<script>
			$(document).ready(function(){

				$("#myModal").modal('show'); /*Show Modal Automatic*/

				/*var elements = new Array();*/ /*Array elementos creados */

				var count=0;

				$( "#title, #textarea, #uploadimage" ).draggable({
					appendTo: "body",
					helper: "clone"
				});


				$(".content").droppable({
					accept: '.option',
					drop:function(event,ui){

						var opt = ui.draggable.data('element-option');

            // console.log(ui.draggable.data('element-option'));

            switch(opt){
            	case 'title':
            	var title = $(".titulo-clone").clone().removeClass('titulo-clone');
            	$(title).removeClass("nomostrar").addClass("remove-div-"+count).addClass("title").appendTo(this);
            	$(".remove-div-"+count).find('input').attr({"data-element":"title","data-position":count,"id":"title-"+count,"name":"title"}).addClass("myinput");
            	$(".remove-div-"+count).find('button').attr({"data-parent":"remove-div-"+count}).addClass('remove-div');


            	count ++;

            	break;

            	case 'textarea':
            	var textarea = $(".textareaclone").clone();
            	$(textarea).removeClass("nomostrar").removeClass("textareaclone").addClass("remove-div-"+count).addClass("textarea").appendTo( this );
            	$(".remove-div-"+count).find('.edit-textarea').attr({"data-element":"textarea","data-position":count,'id':'textarea'+count,"name":"textarea"}).addClass("myinput").after("<input type='hidden' name='textarea' id='input-textarea"+count+"' value='textarea"+count+"'>");
            	$(".remove-div-"+count).find("input#input-textarea"+count).addClass('componente');
            	$(".remove-div-"+count).find('button').attr({"data-parent":"remove-div-"+count}).addClass('remove-div');


            	$('#textarea'+count).summernote({
            		height: 300,               
            		minHeight: null,             
            		maxHeight: null,             
            		focus: true,
            		maximumImageFileSize: 512*1024  
            	});


            	count ++;

            	break;

            	case 'uploadimage':
            	var uploadimage = $("div.uploadimage-clone").clone();
            	$(uploadimage).removeClass("nomostrar").removeClass("uploadimage-clone").addClass("remove-div-"+count).appendTo(this)

            	$(".remove-div-"+count).find('input').attr({"data-element":"image","data-position":count,'value':'image-'+count,"name":"image","id":'imagep-'+count}).addClass("myinput").after("<input type='hidden' id='image-"+count+"' name='image' value='imagep-"+count+"'>");
            	
            	$(".remove-div-"+count).find('button').attr({"data-parent":"remove-div-"+count}).addClass('remove-div');
            	$("#image-"+count).addClass("componente");

            	count ++;

            	break;


            }




        }

    });

				$("#form-create-oaca").on('click','button.remove-div',function (e){

					var divDelete = $(this).data('parent');

					$("."+divDelete).remove();

				});

				var textareaID;
				var content_element

				$( ".sortable:not(div.box-footer)" ).sortable({
					axis: 'y',
					opacity: 0.5,
					tolerance: 'pointer',
					handle: ".box-header"

				});

			});

			//funcion para establecer en los nombres de los input el orden en los que se crearon.
			function submitFormOaca(){
				var count=0;
				var inputElements=[];

				$('div#content-form input.componente').each( function(index, element){

					
					var type_element = $(this).attr('name');


					switch(type_element){

						case 'title':

						inputElements.push('title');
						$(this).attr({'name':'title-'+count});
						count ++;

						break;

						case 'textarea':

						inputElements.push('textarea');
						var summernoteid = $(this).val();
						var content_textarea = $('#'+summernoteid).summernote('code');
						$(this).val(content_textarea);
						$(this).attr({'name':'textarea-'+count});
						count ++;

						break;

						case 'image':

						inputElements.push('image');
						console.log($(this));
						$(this).attr({'name':'image-'+count});
						$('#'+$(this).val()).attr({'name':'image-'+count});
						console.log($(this));
						count ++;

						break;
					}

				});


				$('#hidden_elementos').val(inputElements);
			}



		</script>
		<script src="/vendor/jQuery.serializeObject/jquery.serializeObject.js" >
		</script>
		@endpush