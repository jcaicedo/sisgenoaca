
//Boton captura evento para mostrar los preview
var countImage = 0;
var countHtml = 0;
var count_childrenpreview =0;

$('.preview-oaca').click(function(e){
	e.preventDefault();

	var preview = $(this).data('prev');
	var content_data = $(this).data('content');
	var content_btn = $(this).data('btn');
	var content_preview = $(this).data('contentprev');

	$(content_data + " .contentchild").each(function(index,el){

		var childrencontent_preview = $(".contentfather-clone").clone().removeClass('contentfather-clone')
		.addClass('contentchild')
		.removeClass('nomostrar')
		.css({
			'display':'inherit'
		})
		.attr({
			'id':'contentchild-preview'+count_childrenpreview
		});

		childrencontent_preview.find('div.box-header').remove();

		count_childrenpreview++;

		var id_contentpreview = $(childrencontent_preview).attr('id');
		$(childrencontent_preview).appendTo(content_preview);

		$(".myinput",el).each(function(index, el){

			var element = $(el).data('element');

			switch(element){

				case 'title':
				$('<h2>'+$(el).val()+'</h2>').appendTo('#'+id_contentpreview);
				break;

				case 'textarea':
				var content_textarea = $('#'+$(el).attr('id')).summernote('code');
				$('<br>'+content_textarea+'<br>').appendTo('#'+id_contentpreview);
				var idContent = $(el).data('content');
				$("#"+idContent).val(content_textarea);
				break;

				case 'image':
				if($(el).val()!=''){

					$('<div class="image-preview-content"><img src="" alt="'+$(el).attr('id')+'" id="loadimage'+countImage+'" height="100" width="100"><div>').appendTo('#'+id_contentpreview);

					$("#"+$(el).attr('id')).html(function(){
						readImage(el,countImage);
						countImage ++;
					});
				}else{

					var id_image = $(el).attr('id')+'-original';
					var image = $('#'+id_image).clone();
					$('#'+id_contentpreview).append(image);
				}
				break;

				case 'filehtml':
				if($(el).val()!=''){
					$('<div class="html-preview-content"><iframe class="iframe_hotpotato" src="" alt="'+$(el).attr('id')+'" id="loadhtml'+countHtml+'" height="100" width="100"></iframe><div>').appendTo('#'+id_contentpreview);

					$("#"+$(el).attr('id')).html(function(){
						readHtml(el,countHtml);
						countHtml ++;
					});
				}else{
					var id_html = $(el).attr('id')+'-original';
					var name_html = $('#'+id_html).data('content');
					var html = '<div class="html-preview-content"><iframe src="'+name_html+'" class="iframe_hotpotato" src="" alt="'+$(el).attr('id')+'" id="loadhtml'+countHtml+'" height="100" width="100"></iframe><div>'
					$('#'+id_contentpreview).append(html);
				}
				break;


			}

		});

	});


	$(content_data).hide();
	$(preview).show();
	//console.log(content_preview);
	// setTimeout(function(){
	$(content_preview).slick({
		dots: true,
		infinite: true,
		slidesToShow: 1,
		slidesToScroll: 1,
		adaptiveHeight: true,
		arrows: false,
	});

	// },2000);

	$(content_btn).hide();


});

//Boton captura evento para retornar a la edicion de contenido.

$('.btn-return-edit').click(function(e){
	e.preventDefault();

	var preview = $(this).data('prev');
	var content_data = $(this).data('content');
	var content_btn = $(this).data('btn');
	var content_preview = $(this).data('contentprev');

	$(content_preview).slick('unslick');
	$(content_preview).html("");
	$(content_data).show();
	$(content_btn).show();
	$(preview).hide();
	//	count_childrenpreview = 0;






});


function readImage (input, id) {

	if(input.files && input.files[0]) {
		var reader = new FileReader();

		reader.onload = function (e){
			$('#loadimage'+id).attr('src', e.target.result);
			// console.log(e.target.result);
		}

		reader.readAsDataURL(input.files[0]);
	}
}

function readHtml (input, id) {

	if(input.files && input.files[0]) {
		var reader = new FileReader();

		reader.onload = function (e){
			$('#loadhtml'+id).attr('src', e.target.result);
			// console.log(e.target.result);
		}

		reader.readAsDataURL(input.files[0]);
	}
}



$(".btn-clear-input-image").click(function(e){

	e.preventDefault();
	var id_image_input = $(this).data('content');
	$(id_image_input).val('');

});


$(document).ready(function(){



	$('#rootwizard').bootstrapWizard({'tabClass': 'nav nav-tabs',onTabShow: function(tab, navigation, index) {
		var $total = navigation.find('li').length;
		var $current = index+1;
		var $percent = ($current/$total) * 100;
		$('#rootwizard .progress-bar').css({width:$percent+'%'});
	}});


	var count= $('input[name=count_elements_old]').val();


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

				$(".remove-div-"+count).find('input').attr({"data-element":"image","data-position":count,'value':'image-'+count,"name":"image"+count,"id":'imagep-'+count}).addClass("myinput");
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
