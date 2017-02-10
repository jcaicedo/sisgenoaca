
//btn to clear inputs of images and inputs html

$(".btn-clear-input-image").click(function(e){
	e.preventDefault();
	var id_image_input = $(this).data('content');
	$(id_image_input).val('');
	// clear input image
	var id_prev_image = $(id_image_input).data('image-content');
	// clear img preview to image
	$(id_prev_image).attr('src','http://placehold.it/900x400');




});

// function to delete element
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



// function to delete div content of elements
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


//FUNCTION TO PREVIEW IMAGE IN CONTENTS ELEMENTS IMAGES ON EDIT AND NEW ELEMENTS

$("#form-create-oaca-motivation").on('change',".content-image-prev",function(){

	var id_content_image = $(this).data("image-content");

	readURL(this,id_content_image);

});

function readURL(input,id_content_image) {

	if (input.files && input.files[0]) {
		var reader = new FileReader();

		reader.onload = function (e) {
			// $('#blah').attr('src', e.target.result);
			console.log(id_content_image);
			$(id_content_image).attr('src',e.target.result);

		}

		reader.readAsDataURL(input.files[0]);
	}
}


//FUNCTION INIT TABS MOMENTS
function initRootWizard(){
	$('#rootwizard').bootstrapWizard({'tabClass': 'nav nav-tabs',onTabShow: function(tab, navigation, index) {
		var $total = navigation.find('li').length;
		var $current = index+1;
		var $percent = ($current/$total) * 100;
		$('#rootwizard .progress-bar').css({width:$percent+'%'});
	}});
}


//FUNCTION TO summernote

function initTexareasSummernote(){
	$('div#content-form .edit-textarea').each(function(index, element){
		var textarea_id = $(this).attr('id');

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
}


//SUBMIT TO GET TEXT OF THE ALL TEXAREAS SUMMERNOTE

$('#form-create-oaca-motivation').submit(function(event) {

	$("#form-create-oaca-motivation [name='textarea']").each(function(index) {
		var idcontent = $(this).data('content');

		var content = $(this).summernote('code');

		$('#'+idcontent).val(content);
	});

});

	var array_elements_delete = [];

$(document).ready(function(){
console.log('iniciando aqui');
	//Inicialización de tab de momentos
	initRootWizard();
	//Inicialización de los texareas con summernote
	initTexareasSummernote();

	//Variables
	var count= $('input[name=count_elements_old]').val();  //variable de contador de los elementos para la creacion y continuación de los nuevos elementos


	//Se obtienen la cantidad de elementos existentes en la base de datos.
	$('input[name=count_elements_old]').val($('#content-form .old').size()+1);

	//JQuery UI para el Drag and Drop

	$( "#title, #textarea, #uploadimage, #contenedor, #uploadhotpotatoes" ).draggable({
		appendTo: "body",
		helper: "clone"
	});

	$(".contentchildfirst").droppable({
		accept:'.option',
		drop:function(event, ui){
			var type = ui.draggable.data('element-option');
			var id_content = $(this).attr('id');
			newElement(type,id_content);
		}
	});

	$(".content-principal").droppable({
		accept:'.content-child',
		drop:function(event, ui){
			count++;

			var content = $(".contentfather-clone").clone().removeClass('contentfather-clone')
			.removeClass('nomostrar')
			.addClass('contentchild')
			.attr({
				'id':'contentchild'+count,
				'data-pattern':$(this).data('pattern')
			});

			content.find('button').attr({
				"data-content":"#contentchild"+count
			});

			$(content).appendTo('#'+$(this).attr('id'));

			$(".contentchild").droppable({
				accept:'.option',
				drop:function(event, ui){
					var type = ui.draggable.data('element-option');
					var id_content = $(this).attr('id');
					newElement(type,id_content);
				}
			});

			$( ".sortable:not(div.box-footer)" ).sortable({
				axis: 'y',
				opacity: 0.5,
				tolerance: 'pointer',
				handle: ".box-header"

			});

		}

	});

	var newElement = function(type, id_content){
		if(type!='contenedor'){
			switch(type){
				case 'title':
				var title = $(".titulo-clone").clone().removeClass('titulo-clone');
				$(title).removeClass("nomostrar").addClass("remove-div-"+count).addClass("title").appendTo('#'+id_content);
				$(".remove-div-"+count).find('input').attr({"data-element":"title","id":"title-"+count,"name":"data["+count+"][content]"}).addClass("myinput");
				$(".remove-div-"+count).find('button').attr({"data-parent":"remove-div-"+count}).addClass('remove-div');
				$("#title-"+count).after("<input type='hidden' name='data["+count+"][type]' value='title'>");
				$("#title-"+count).after("<input type='hidden' name='data["+count+"][id]' value=''>");
				$("#title-"+count).after("<input type='hidden' name='data["+count+"][pattern]' value='"+$('#'+id_content).data('pattern')+"'>");
				$("#title-"+count).after("<input type='hidden' name='data["+count+"][contentchild]' value='"+id_content+"'>");



				count ++;

				break;

				case 'textarea':
				var textarea = $(".textareaclone").clone();
				$(textarea).removeClass("nomostrar").removeClass("textareaclone").addClass("remove-div-"+count).addClass("textarea").appendTo('#'+id_content);
				$(".remove-div-"+count).find('.edit-textarea').attr({"data-element":"textarea",'data-content':'content-textarea'+count,'id':'textarea'+count,"name":"textarea"}).addClass("myinput");
				$(".remove-div-"+count).find("input#input-textarea"+count).addClass('componente');
				$(".remove-div-"+count).find('button').attr({"data-parent":"remove-div-"+count}).addClass('remove-div');
				$("#textarea"+count).after("<input type='hidden' name='data["+count+"][content]' id='content-textarea"+count+"' value='pruab'>");
				$("#textarea"+count).after("<input type='hidden' name='data["+count+"][type]'  value='textarea'>");
				$("#textarea"+count).after("<input type='hidden' name='data["+count+"][id]' value=''>");
				$("#textarea"+count).after("<input type='hidden' name='data["+count+"][pattern]' value='"+$('#'+id_content).data('pattern')+"'>");
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
				$(uploadimage).removeClass("nomostrar").removeClass("uploadimage-clone").addClass("remove-div-"+count).appendTo('#'+id_content);
				$(".remove-div-"+count).find('img').attr({"id":"imagecontent"+count});
				$(".remove-div-"+count).find('input').attr({"data-element":"image","data-position":count,"data-image-content":"#imagecontent"+count,'value':'image-'+count,"name":"image"+count,"id":'imagep-'+count}).addClass("myinput");
				$(".remove-div-"+count).find('button').attr({"data-parent":"remove-div-"+count}).addClass('remove-div');

				$("#imagep-"+count).addClass("componente");
				$("#imagep-"+count).after("<input type='hidden' name='data["+count+"][content]' value='image"+count+"'>");
				$("#imagep-"+count).after("<input type='hidden' name='data["+count+"][type]' value='image'>");
				$("#imagep-"+count).after("<input type='hidden' name='data["+count+"][id]' value=''>");
				$("#imagep-"+count).after("<input type='hidden' name='data["+count+"][pattern]' value='"+$('#'+id_content).data('pattern')+"'>");
				$("#imagep-"+count).after("<input type='hidden' name='data["+count+"][contentchild]' value='"+id_content+"'>");

				count ++;

				break;

				case 'uploadhotpotatoes':
				var uploadhotpotatoes = $("div.uploadhotpotatoes-clone").clone();
				$(uploadhotpotatoes).removeClass("nomostrar").removeClass("uploadhotpotatoes-clone").addClass("remove-div-"+count).appendTo("#"+id_content);
				$(".remove-div-"+count).find('input').attr({"data-element":"filehtml","data-position":count,'value':'filehtml-'+count,"name":"filehtml"+count,"id":'filehtmlp-'+count}).addClass("myinput");
				$(".remove-div-"+count).find('button').attr({"data-parent":"remove-div-"+count}).addClass('remove-div');
				$("#filehtmlp-"+count).addClass("componente");
				$("#filehtmlp-"+count).after("<input type='hidden' name='data["+count+"][content]' value='filehtml"+count+"'>");
				$("#filehtmlp-"+count).after("<input type='hidden' name='data["+count+"][type]' value='filehtml'>");
				$("#filehtmlp-"+count).after("<input type='hidden' name='data["+count+"][id]' value=''>");
				$("#filehtmlp-"+count).after("<input type='hidden' name='data["+count+"][pattern]' value='"+$('#'+id_content).data('pattern')+"'>");
				$("#filehtmlp-"+count).after("<input type='hidden' name='data["+count+"][contentchild]' value='"+id_content+"'>");
				count ++;
				break;


			}
		}
	};

	$( ".sortable:not(div.box-footer)" ).sortable({
		axis: 'y',
		opacity: 0.5,
		tolerance: 'pointer',
		handle: ".box-header"

	});

});
