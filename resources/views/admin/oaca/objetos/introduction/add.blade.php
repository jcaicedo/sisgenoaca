@extends('admin.layouts.menuoaca')
@section('title',trans('admin.introduction'))
@section('content')

<div class="content-wrapper">
	<div class="box-header">

		<h1 >{{trans('admin.introduction')}}
			<div class="box-tool pull-right">
			</div>
		</h1>
		

	</div>
	
	<form action="{{url('/admin/oaca/objetos/introduction')}}" method="post"  role="form" id="form-create-oaca" enctype="multipart/form-data" >
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<input type="hidden" name="register_id" value="{{$register_id}}">
		<input type="hidden" name="task_moment" value="{{$task_moment}}">
		<input type="hidden" name="elementos" value="" id="hidden_elementos">

		<div class="box-header box-header-principal">

			<a id="preview-oaca" class="btn btn-warning">
				<i class="fa fa-eye"></i>
				Visualizar
			</a>
			<button type="submit" class="btn btn-success" id="processit">
				<i class="fa fa-cogs"></i>
				Procesar
			</button>

		</div>
		<div class="content content-principal">
			<div class="content contentchild sortable" id="contentchild0">

			</div>
		</div>


	{{-- 	<div class="preview">

			<div class="box-header box-header-preview">
				<div class="content-btn-preview">
					<a class="btn btn-warning" id="preview">
						<i class="fa fa-edit"></i>
						Seguir Editando
					</a>
					<button type="submit" class="btn btn-success" id="processit">
						<i class="fa fa-cogs"></i>
						Procesar
					</button>
				</div>
			</div>

			<div class="content-preview">

			</div>
		</div> --}}
		


	</form>


</div>




<!-------------------------------------------------------------------------------->

{{-- Modulos de elementos ocultos para clonar --}}
<div class="content contentchild sortable contentfather-clone" id="contentchild1" style="display:none;">

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

<style>
	.nomostrar{display:none;}
	.mostrar{display: block;}
	.btn-proccess{margin:0 auto; width: 200px;align:left;}
	.preview{display: none;}
	.mark_background{background: #88AAAA}
	.content-preview{padding:5%;}
	.content-preview h2{
		color: blue;
		text-align: center;
	}
	#preview-oaca{margin-left: 44%;}
	.box-header-principal{padding-top: 0px;}
	.content-btn-preview{text-align: center;padding-top: 5px;}
	.image-preview-content{text-align: center;}
	.image-preview-content img{width: 50%; height: auto;}

	.contentchild{
		border-radius: 25px;
		border:2px solid #C8DAF0;
		margin: 33px 3px;
		background:#C8DAF0;
	}
	.box{
		border-radius:5px;
	}
	.box-header{
		text-align: center;}

	</style>
	@endpush

	<!--Scripts-->


	@push('scripts')
	<script src="/vendor/summernote/dist/summernote.js"></script>
	<script type="text/javascript"  src="/assets/js/objetos/preview.js" ></script>
	<script type="text/javascript" src="/vendor/jqueryte/dist/jquery-te-1.4.0.min.js" charset="utf-8"></script>


	<script>
		$(document).ready(function(){

			$("#myModal").modal('show'); /*Show Modal Automatic*/

			var count =1;
			$( "#title, #textarea, #uploadimage, #contenedor" ).draggable({
				appendTo: "body",
				helper: "clone"
			});
			
			$("#contentchild0").droppable({
				accept:'.option',
				drop: function(event, ui){

					console.log(ui.draggable.data('element-option'));
					var type = ui.draggable.data('element-option');
					var id_content =  '#'+$(this).attr('id');
					newElement(type,id_content);

				}
			});

			$(".content-principal").droppable({
				accept:'.content-child',
				drop:function(event, ui){
					count++;
					console.log(count);
					var content = $(".contentfather-clone").clone().removeClass('contentfather-clone')
					.css({
						display: 'inherit'
					})
					.attr({
						'id':'contentchild'+count
					});

					$(content).appendTo(".content-principal");

					$(".contentchild").droppable({
						accept:'.option',
						drop: function(event, ui){

							console.log(ui.draggable.data('element-option'));
							var type = ui.draggable.data('element-option');
							var id_content =  '#'+$(this).attr('id');
							newElement(type,id_content);

						}
					});

				}

				
			});

    // $(".contentchild").droppable({
    //   accept:'.option',
    //   drop: function(event, ui){
    //     console.log(this);
    //   }
    // });
    var newElement = function(type, id_content){
    	if(type!='contenedor'){

    		switch(type){
    			case 'title':
    			var title = $(".titulo-clone").clone().removeClass('titulo-clone');
    			$(title).removeClass("nomostrar").addClass("remove-div-"+count).addClass("title").appendTo(id_content);
    			$(".remove-div-"+count).find('input').attr({"data-element":"title","id":"title-"+count,"name":"data["+count+"][content]"}).addClass("myinput");
    			$(".remove-div-"+count).find('button').attr({"data-parent":"remove-div-"+count}).addClass('remove-div');
    			$("#title-"+count).after("<input type='hidden' name='data["+count+"][type]' value='title'>");
    			$("#title-"+count).after("<input type='hidden' name='data["+count+"][id]' value=''>");
    			$("#title-"+count).after("<input type='hidden' name='data["+count+"][contentchild]' value='"+id_content+"'>");


    			count ++;

    			break;

    			case 'textarea':
    			var textarea = $(".textareaclone").clone();
    			$(textarea).removeClass("nomostrar").removeClass("textareaclone").addClass("remove-div-"+count).addClass("textarea").appendTo( id_content );
    			$(".remove-div-"+count).find('.edit-textarea').attr({"data-element":"textarea",'data-content':'content-textarea'+count,'id':'textarea'+count,"name":"textarea"}).addClass("myinput");
    			$(".remove-div-"+count).find("input#input-textarea"+count).addClass('componente');
    			$(".remove-div-"+count).find('button').attr({"data-parent":"remove-div-"+count}).addClass('remove-div');
    			$("#textarea"+count).after("<input type='hidden' name='data["+count+"][content]' id='content-textarea"+count+"' value='pruab'>");
    			$("#textarea"+count).after("<input type='hidden' name='data["+count+"][type]'  value='textarea'>");
    			$("#textarea"+count).after("<input type='hidden' name='data["+count+"][id]' value=''>");
    			$("#textarea"+count).after("<input type='hidden' name='data["+count+"][contentchild]' value='"+id_content+"'>");


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
    			$(uploadimage).removeClass("nomostrar").removeClass("uploadimage-clone").addClass("remove-div-"+count).appendTo(id_content)

    			$(".remove-div-"+count).find('input').attr({"data-element":"image","data-position":count,'value':'image-'+count,"name":"image"+count,"id":'imagep-'+count}).addClass("myinput");
    			$(".remove-div-"+count).find('button').attr({"data-parent":"remove-div-"+count}).addClass('remove-div');
    			$("#imagep-"+count).addClass("componente");
    			$("#imagep-"+count).after("<input type='hidden' name='data["+count+"][content]' value='image"+count+"'>");
    			$("#imagep-"+count).after("<input type='hidden' name='data["+count+"][type]' value='image'>");
    			$("#imagep-"+count).after("<input type='hidden' name='data["+count+"][id]' value=''>");
    			$("#imagep-"+count).after("<input type='hidden' name='data["+count+"][contentchild]' value='"+id_content+"'>");

    			count ++;

    			break;


    		}}

    	};
    	


    	$("#form-create-oaca").on('click','button.remove-div',function (e){

    		var divDelete = $(this).data('parent');

    		$("."+divDelete).remove();

    	});

    });



</script>
<script src="/vendor/jQuery.serializeObject/jquery.serializeObject.js" >
</script>
@endpush