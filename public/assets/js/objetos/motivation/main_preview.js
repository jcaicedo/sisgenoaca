

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
	// $(content_preview).slick({
	// 	dots: true,
	// 	infinite: true,
	// 	slidesToShow: 1,
	// 	slidesToScroll: 1,
	// 	adaptiveHeight: true,
	// 	arrows: false,
	// });

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

	// $(content_preview).slick('unslick');
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
