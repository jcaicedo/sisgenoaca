$(document).ready(function () {


addColaboratorImage();

selectCopyring();



  var count = $('div.box-colaborator').size() + 1;

  $(".ui-state-default").each(function () {
    //console.log($(this).data('value'));
    if ($(this).data('value') == $("#number_plantilla").val()) {
      $(this).addClass('ui-selected');
      //  console.log({{$registro->plantilla}});
    }
  });

  //  var count = {{count($content_register->words_key)}};
  var count_words_key = $(".box-wordkey").length;



  /*add Words Key*/

  $('.btn-wordskey-plus').click(function (e) {
    e.preventDefault();

    var input_wordKey = $('.box-wordkey-clone').clone().addClass('box-wordkey').removeClass('box-wordkey-clone').removeClass('nomostrar').attr({
      'id': 'divwordkey' + count_words_key
    });
    input_wordKey.find('button.btn-remove').data('parent', 'divwordkey' + count_words_key);
    input_wordKey.find('input').attr({
      'name': 'words_key[]',
      'id': 'words_key' + count_words_key
    });
    count_words_key++;
    $('.box-wordskeys').append(input_wordKey);

  })

  /*Add Colaborators*/

  $('.btn-colaborators').click(function (e) {
    e.preventDefault();

    var colaboratorbox = $('.box-colaborator-clone').clone().removeClass('box-colaborator-clone').removeClass('nomostrar').addClass('box-colaborator').attr('id', 'divcolaborator' + count);
    colaboratorbox.find('.box-title').text('Colaborador ' + count);
    colaboratorbox.find('button.btn-remove').data('parent', 'divcolaborator' + count);
    colaboratorbox.find("input[id='name']").attr({
      'id': 'name' + count,
      'name': 'colaborator[' + count + '][name]'
    });
    colaboratorbox.find("input[id='lastname']").attr({
      'id': 'lastname' + count,
      'name': 'colaborator[' + count + '][lastname]'
    });
    colaboratorbox.find("input[id='email']").attr({
      'id': 'email' + count,
      'name': 'colaborator[' + count + '][email]'
    });
    colaboratorbox.find("input[id='organization']").attr({
      'id': 'organization' + count,
      'name': 'colaborator[' + count + '][organization]'
    });
    colaboratorbox.find("select[id='typecontribution']").attr({
      'id': 'typecontribution' + count,
      'name': 'colaborator[' + count + '][typecontribution]'
    });
    colaboratorbox.find("input[id='image_organization']").attr({
      'id': 'image_organization' + count,
      'name': 'colaborator[' + count + '][image_organization]'
    }).data('content-preview', '#image_content_prev' + count);
    colaboratorbox.find("input[id='id_colaborator']").attr({
      'id': 'id_colaborator' + count,
      'name': 'colaborator[' + count + '][id]'
    });
    colaboratorbox.find("img.content-image-preview").attr({
			'id': 'image_content_prev' + count
		});

    count++;

    $('.content-box-colaborators').append(colaboratorbox);
    //console.log(colaboratorbox.html());

  });



  $('#form_register').on('click', 'button.btn-remove', function (e) {
    // body...
    e.preventDefault();

    $('#' + $(this).data('parent')).remove();
  });

  //iCheck for checkbox and radio inputs
  $('input[type="radio"].minimal').iCheck({
    checkboxClass: 'icheckbox_minimal-blue',
    radioClass: 'iradio_minimal-blue'
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


///////////////////////////////////////////////////
//////Function to preview image colaborators///////
///////////////////////////////////////////////////

function addColaboratorImage() {
  $("#form_register").on('change', ".image_colaborator_file", function () {
    var id_content_image = $(this).data("content-preview");
    readURL(this, id_content_image);

  });

}

function readURL(input, id_content_image) {

  if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function (e) {
      $(id_content_image).attr('src', e.target.result);

    }

    reader.readAsDataURL(input.files[0]);
  }
}


function selectCopyring(){
  var titulos_licencias = [],
  descripciones_licencias =[],
  count_licencias = 1;

  titulos_licencias[1]="Reconocimiento-NoComercial CC BY-NC";
  titulos_licencias[2]="Reconocimiento-NoComercial-CompartirIgual CC BY-NC-SA";
  titulos_licencias[3]="Reconocimiento-NoComercial-SinObraDerivada CC BY-NC-ND";

  descripciones_licencias[1]="Esta licencia permite a otros entremezclar, ajustar y construir a partir de su obra con fines no comerciales, y aunque en sus nuevas creaciones deban reconocerle su autoría y no puedan ser utilizadas de manera comercial, no tienen que estar bajo una licencia con los mismos términos.";
  descripciones_licencias[2]="Esta licencia permite a otros entremezclar, ajustar y construir a partir de su obra con fines no comerciales, siempre y cuando le reconozcan la autoría y sus nuevas creaciones estén bajo una licencia con los mismos términos.";
  descripciones_licencias[3]="Esta licencia es la más restrictiva de las seis licencias principales, sólo permite que otros puedan descargar las obras y compartirlas con otras personas, siempre que se reconozca su autoría, pero no se pueden cambiar de ninguna manera ni se pueden utilizar comercialmente.";



  $("select#licencia").imagepicker({
    show_label  : true
  });

  $("div.thumbnail").each(function(){
    $(this).find('img').before('<h3>'+titulos_licencias[count_licencias]+'</h3>');
    $(this).append('<p>'+	descripciones_licencias[count_licencias]+'</p>');
    count_licencias++;
  });
}
