
//Boton captura evento para mostrar los preview
var countImage = 0;
var count_childrenpreview =0;

$('.preview-oaca').click(function(e){
	e.preventDefault();
	
	var preview = $(this).data('prev');
	var content_data = $(this).data('content');
	var content_btn = $(this).data('btn');
	var content_preview = $(this).data('contentprev');

	console.log(preview);

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
		count_childrenpreview++;
		var id_contentpreview = $(childrencontent_preview).attr('id');
		$(childrencontent_preview).appendTo(content_preview);

		$(".myinput",el).each(function(index, el){
			console.log(id_contentpreview);
			console.log(el);
			var element = $(el).data('element');

			switch(element){

				case 'title':
				console.log(id_contentpreview);
				$('<h2>'+$(el).val()+'</h2>').appendTo('#'+id_contentpreview);
				/*$(content_preview).append('<h2>'+$(this).val()+'</h2>');*/
				console.log('<h2>'+$(el).val()+'</h2>');
				break;

				case 'textarea':
				console.log(id_contentpreview);

				var content_textarea = $('#'+$(el).attr('id')).summernote('code');
				$('<br>'+content_textarea+'<br>').appendTo('#'+id_contentpreview);
				var idContent = $(el).data('content');
				$("#"+idContent).val(content_textarea);
				/*$(content_preview).append('<br>'+content_textarea+'<br>');
				var idContent = $(el).data('content');
				$("#"+idContent).val(content_textarea);*/
				console.log(content_textarea);
				break;

				case 'image':
				console.log(id_contentpreview);
				console.log('image');
				if($(el).val()!=''){

					$('<div class="image-preview-content"><img src="" alt="'+$(el).attr('id')+'" id="loadimage'+countImage+'" height="100" width="100"><div>').appendTo('#'+id_contentpreview);

					$("#"+$(el).attr('id')).html(function(){
						readImage(el,countImage);
						countImage ++;
						/*$(content_preview).append('<div class="image-preview-content"><img src="" alt="'+$(this).attr('id')+'" id="loadimage'+countImage+'" height="100" width="100"><div>');

						$("#"+$(this).attr('id')).html(function(){

							readImage(this,countImage);
							countImage ++;*/
						});
				}else{

					var id_image = $(el).attr('id')+'-original';
					var image = $('#'+id_image).clone();
					$('#'+id_contentpreview).append(image);
				}
				break;

			}

		});

	});


	/*$(content_data+" .myinput").each(function(index){

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
			if($(this).val()!=''){

				$(content_preview).append('<div class="image-preview-content"><img src="" alt="'+$(this).attr('id')+'" id="loadimage'+countImage+'" height="100" width="100"><div>');

				$("#"+$(this).attr('id')).html(function(){

					readImage(this,countImage);
					countImage ++;
				});
			}else{

				var id_image = $(this).attr('id')+'-original';
				var image = $('#'+id_image).clone();
				$(content_preview).append(image);
			}
			break;

		}



	});*/

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
	count_childrenpreview = 0;


	



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
	console.log(count);

	$( "#title, #textarea, #uploadimage, #contenedor" ).draggable({
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
			console.log(count);
			var content = $(".contentfather-clone").clone().removeClass('contentfather-clone')
			.removeClass('nomostrar')
			.addClass('contentchild')
			.attr({
				'id':'contentchild'+count,
				'data-pattern':$(this).data('pattern')
			});

			$(content).appendTo('#'+$(this).attr('id'));
			//console.log(content);
			//console.log('content_principal: '+$(this).attr('id')+' contentchild: '+$(content).attr('id'));

			$(".contentchild").droppable({
				accept:'.option',
				drop:function(event, ui){
					console.log(ui.draggable.data('element-option'));
					console.log($(this).attr('id'));
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
			console.log($(id_content));
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
				$(uploadimage).removeClass("nomostrar").removeClass("uploadimage-clone").addClass("remove-div-"+count).appendTo('#'+id_content)

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