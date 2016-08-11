
//Boton captura evento para mostrar los preview

$('.preview-oaca').click(function(e){
	e.preventDefault();
	var countImage = 0;
	var preview = $(this).data('prev');
	var content_data = $(this).data('content');
	var content_btn = $(this).data('btn');
	var content_preview = $(this).data('contentprev');


	$(content_data+" .myinput").each(function(index){

		var element = $(this).data('element');
		switch(element){

			case 'title':
			$(content_preview).append('<h2>'+$(this).val()+'</h2>');
			break;

			case 'textarea':

			var content_textarea = $('#'+$(this).attr('id')).summernote('code');
			$(content_preview).append('<br>'+content_textarea+'<br>');
			var idContent = $(this).data('content');
			$("#"+idContent).val(content_textarea);
			break;

			case 'image':
			$(this);

			$(content_preview).append('<br><img src="" alt="'+$(this).attr('id')+'" id="loadimage'+countImage+'" height="100" width="100"><br>');

			$("#"+$(this).attr('id')).html(function(){
				readImage(this,countImage);
				countImage ++;
			});
			break;

		}



	});

	$(content_data).hide();
	$(preview).show();
	$(content_btn).hide();

});

//Boton captura evento para retornar a la edicion de contenido.

$('.btn-return-edit').click(function(e){
	e.preventDefault();

	var preview = $(this).data('prev');
	var content_data = $(this).data('content');
	var content_btn = $(this).data('btn');
	var content_preview = $(this).data('contentprev');
	console.log(content_preview);

	$(content_preview).html("");
	$(content_data).show();
	$(content_btn).show();
	$(preview).hide();
	


	



});


function readImage (input, id) {

	if(input.files && input.files[0]) {
		var reader = new FileReader();

		reader.onload = function (e){
			$('#loadimage'+id).attr('src', e.target.result);

		}
		reader.readAsDataURL(input.files[0]);
	}
}


$(document).ready(function(){
	$('#rootwizard').bootstrapWizard({'tabClass': 'nav nav-tabs',onTabShow: function(tab, navigation, index) {
		var $total = navigation.find('li').length;
		var $current = index+1;
		var $percent = ($current/$total) * 100;
		$('#rootwizard .progress-bar').css({width:$percent+'%'});
	}});


	var count=0;

	$( "#title, #textarea, #uploadimage" ).draggable({
		appendTo: "body",
		helper: "clone"
	});


	$(".content").droppable({
		accept: '.option',
		drop:function(event,ui){

			var opt = ui.draggable.data('element-option');


			switch(opt){
				case 'title':
				var title = $(".titulo-clone").clone().removeClass('titulo-clone');
				$(title).removeClass("nomostrar").addClass("remove-div-"+count).addClass("title").appendTo(this);
				$(".remove-div-"+count).find('input').attr({"data-element":"title","id":"title-"+count,"name":"data["+count+"][content]"}).addClass("myinput");
				$(".remove-div-"+count).find('button').attr({"data-parent":"remove-div-"+count}).addClass('remove-div');
				$("#title-"+count).after("<input type='hidden' name='data["+count+"][type]' value='title'>");
				$("#title-"+count).after("<input type='hidden' name='data["+count+"][id]' value=''>");
				$("#title-"+count).after("<input type='hidden' name='data["+count+"][pattern]' value='"+$(this).data('pattern')+"'>");



				count ++;

				break;

				case 'textarea':
				var textarea = $(".textareaclone").clone();
				$(textarea).removeClass("nomostrar").removeClass("textareaclone").addClass("remove-div-"+count).addClass("textarea").appendTo( this );
				$(".remove-div-"+count).find('.edit-textarea').attr({"data-element":"textarea",'data-content':'content-textarea'+count,'id':'textarea'+count,"name":"textarea"}).addClass("myinput");
				$(".remove-div-"+count).find("input#input-textarea"+count).addClass('componente');
				$(".remove-div-"+count).find('button').attr({"data-parent":"remove-div-"+count}).addClass('remove-div');
				$("#textarea"+count).after("<input type='hidden' name='data["+count+"][content]' id='content-textarea"+count+"' value='pruab'>");
				$("#textarea"+count).after("<input type='hidden' name='data["+count+"][type]'  value='textarea'>");
				$("#textarea"+count).after("<input type='hidden' name='data["+count+"][id]' value=''>");
				$("#textarea"+count).after("<input type='hidden' name='data["+count+"][pattern]' value='"+$(this).data('pattern')+"'>");


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

				$(".remove-div-"+count).find('input').attr({"data-element":"image","data-position":count,'value':'image-'+count,"name":"image"+count,"id":'imagep-'+count}).addClass("myinput");
				$(".remove-div-"+count).find('button').attr({"data-parent":"remove-div-"+count}).addClass('remove-div');
				$("#image-"+count).addClass("componente");
				$(".remove-div-"+count).after("<input type='hidden' name='data["+count+"][content]' value='image"+count+"'>");
				$(".remove-div-"+count).after("<input type='hidden' name='data["+count+"][type]' value='image'>");
				$(".remove-div-"+count).after("<input type='hidden' name='data["+count+"][id]' value=''>");
				$(".remove-div-"+count).after("<input type='hidden' name='data["+count+"][pattern]' value='"+$(this).data('pattern')+"'>");

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