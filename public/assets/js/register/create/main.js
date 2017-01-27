jQuery(document).ready(function($) {
	var count = 1;
	var count_words_key=2;


	/*add Words Key*/

	$('.btn-wordskey-plus').click(function(e){
		e.preventDefault();

		var input_wordKey = $('.box-wordkey-clone').clone().addClass('box-wordkey').removeClass('box-wordkey-clone').removeClass('nomostrar').attr({'id':'divwordkey'+count_words_key});
		input_wordKey.find('button.btn-remove').data('parent','divwordkey'+count_words_key);
		input_wordKey.find('input').attr({'name':'words_key[]','id':'words_key'+count_words_key});
		count_words_key++;
		$('.box-wordskeys').append(input_wordKey);

	});


	/*Add Colaborators*/

	$('.btn-colaborators').click(function(e){
		e.preventDefault();

		var colaboratorbox = $('.box-colaborator-clone').clone().removeClass('box-colaborator-clone').removeClass('nomostrar').addClass('box-colaborator').attr('id','divcolaborator'+count);
		colaboratorbox.find('.box-title').text('Colaborador '+count);
		colaboratorbox.find('button.btn-remove').data('parent','divcolaborator'+count);
		colaboratorbox.find("input[id='name']").attr({'id':'name'+count,'name':'colaborator['+count+'][name]'});
		colaboratorbox.find("input[id='lastname']").attr({'id':'lastname'+count,'name':'colaborator['+count+'][lastname]'});
		colaboratorbox.find("input[id='email']").attr({'id':'email'+count,'name':'colaborator['+count+'][email]'});
		colaboratorbox.find("input[id='organization']").attr({'id':'organization'+count,'name':'colaborator['+count+'][organization]'});
		colaboratorbox.find("select[id='typecontribution']").attr({'id':'typecontribution'+count,'name':'colaborator['+count+'][typecontribution]'});
		colaboratorbox.find("input[id='image_organization']").attr({'id':'image_organization'+count,'name':'colaborator['+count+'][image_organization]'});
		colaboratorbox.find("input[id='id_colaborator']").attr({'id':'id_colaborator'+count,'name':'colaborator['+count+'][id]'});


		count ++;

		$('.content-box-colaborators').append(colaboratorbox);
		console.log(colaboratorbox.html());

	});

	$( "#selectable-copyright" ).selectable({
		selected: function(event, ui){
			console.log( $(ui.selected).data('licencia'));
			$("#licencia").val($(ui.selected).data('licencia'));
		}
	});

	$('#form_register').on('click','button.btn-remove',function(e) {
					// body...
					e.preventDefault();

					$('#'+$(this).data('parent')).remove();
				});


		 //iCheck for checkbox and radio inputs
		 $('input[type="radio"].minimal').iCheck({
		 	checkboxClass: 'icheckbox_minimal-blue',
		 	radioClass: 'iradio_minimal-blue'
		 });


		 $('ol').selectable({
		 	selected: function( event, ui ) {
		 		$('.input_plantilla').each(function(){
		 			$(this).remove();
		 		});
		 		var idPlantilla = $( ".ui-selected", this ).find('img').attr('name');
		 		$( ".ui-selected", this ).find('img').after("<input type='hidden' class='input_plantilla' name='plantilla' value='"+idPlantilla+"'>");

		 	},
		 	stop: function(event, ui){
		 		$(".ui-selected:first",this).each(function(){
		 			$(this).siblings().removeClass("ui-selected");

		 		});
		 	}
		 });

		 $(".next-step").click(function (e) {
			 console.log('hola');
			 var $active = $('.wizard .form-wizard li.active');
			 console.log($active);
			 $active.next().removeClass('disabled');
			 nextTab($active);

		 });
		 $(".prev-step").click(function (e) {

			 var $active = $('.wizard .form-wizard li.active');
			 prevTab($active);

		 });

		});

		///////////////////////////////////////////////////
		//////Botones de nex y back///////////////////////
		///////////////////////////////////////////////////

		function nextTab(elem) {
			$(elem).next().find('a[data-toggle="tab"]').click();
		}
		function prevTab(elem) {
			$(elem).prev().find('a[data-toggle="tab"]').click();
		}
