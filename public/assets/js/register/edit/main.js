$(document).ready(function(){

var count = $('div.box-colaborator').size()+1;
console.log(count);

  $(".ui-state-default").each(function(){
    //console.log($(this).data('value'));
    if($(this).data('value') == $("#number_plantilla").val()){
      $(this).addClass('ui-selected');
    //  console.log({{$registro->plantilla}});
    }
  });

//  var count = {{count($content_register->words_key)}};
  var count_words_key=2;


  /*add Words Key*/

  $('.btn-wordskey-plus').click(function(e){
    e.preventDefault();

    var input_wordKey = $('.box-wordkey-clone').clone().addClass('box-wordkey').removeClass('box-wordkey-clone').removeClass('nomostrar').attr({'id':'divwordkey'+count_words_key});
    input_wordKey.find('button.btn-remove').data('parent','divwordkey'+count_words_key);
    input_wordKey.find('input').attr({'name':'words_key[]','id':'words_key'+count_words_key});
    count_words_key++;
    $('.box-wordskeys').append(input_wordKey);

  })

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
    colaboratorbox.find("input[id='image_organization']").attr({'id':'image_organization'+count,'name':'colaborator['+count+'][image_organization_content][image]'});
    colaboratorbox.find("input[id='image_organization_content_id']").attr({'id':'image_organization_content'+count,'name':'colaborator['+count+'][image_organization_content][id]'});
    colaboratorbox.find("input[id='image_organization_content_name']").attr({'id':'image_organization_content'+count,'name':'colaborator['+count+'][image_organization_content][name]'});

    count ++;

    $('.content-box-colaborators').append(colaboratorbox);
    //console.log(colaboratorbox.html());

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




});

///////////////////////////////////////////////////
//////Botones de nex y back///////////////////////
///////////////////////////////////////////////////

  /*Buttom Next*/
  $('.btn-next').click(function(e){
    e.preventDefault();


    var content_body = $('.btn-next').data('body');

    switch(content_body){

      case 'select-pattern':
  		$('.btn-next').data('body','general-features');
  		$('#'+content_body).hide();
  		$('#general-features').show();
  		$('.btn-back').data('body','general-features').show();
  		break;

      case 'general-features':
      $('.btn-next').data('body','lifecycle');
      $('#'+content_body).hide();
      $('#lifecycle').show();
      $('.btn-back').data('body','lifecycle').show();
      break;

      case 'lifecycle':
      $('.btn-next').data('body','educational');
      $('#'+content_body).hide();
      $('#educational').show();
      $('.btn-back').data('body','educational');
      break;

      case 'educational':
  		$('.btn-next').data('body','references');
  		$('#'+content_body).hide();
  		$('#references').show();
  		$('.btn-back').data('body','references');
  		break;

      case 'references':
      $('.btn-next').data('body','copyright');
      $('#'+content_body).hide();
      $('#copyright').show();
      $('.btn-back').data('body','copyright');
      break;

      case 'copyright':
      $('.btn-next').data('body','selectable_plantilla');
      $('#'+content_body).hide();
      $('#selectable_plantilla').show();
      $(this).hide();
      $('.btn-back').data('body','selectable_plantilla');
      $('.btn-save').show();
    }

  });

  /*Button Back*/

  $(".btn-back").click(function(e) {
    // body...
    e.preventDefault();

    var content_body = $('.btn-back').data('body');

    switch(content_body){

      case 'general-features':
      $(this).hide();
      $('#'+content_body).hide();
      $('#select-pattern').show();
      $('.btn-next').data('body','select-pattern');
      break;

      case 'lifecycle':
      $(this).data('body','general-features');
      $('#'+content_body).hide();
      $('#general-features').show();
      $('.btn-next').data('body','general-features');
      break;

      case 'educational':
      $(this).data('body','lifecycle');
      $('#'+content_body).hide();
      $('#lifecycle').show();
      $('.btn-next').data('body','lifecycle');
      break;

      case 'references':
      $(this).data('body','educational');
      $('#'+content_body).hide();
      $('#educational').show();
      $('.btn-next').data('body','educational');
      break;

      case 'copyright':
      $(this).data('body','references');
      $('#'+content_body).hide();
      $('#references').show();
      $('.btn-next').data('body','references');
      break;

      case 'selectable_plantilla':
      $(this).data('body','copyright');
      $('#'+content_body).hide();
      $('#copyright').show();
      $('.btn-next').data('body','copyright').show();
      $('.btn-save').hide();
      break;

    }


  });


  	$('#form_register').submit(function(event) {

  //	$("input[name='colaborator[0][image_organization_colaborator]']").val($("#image_organization0").val().split('\\').pop());

  	$('input.image_colaborator_file').each(function(el){
  		var name_image = $(this).val().split('\\').pop();
  		$(this).siblings('.image_organization_colaborator_name').val(name_image);
  	});

  	});
