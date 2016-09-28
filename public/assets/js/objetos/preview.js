var count_contentchild = 0;

$("#preview-oaca").click(function(event){
 event.preventDefault();
 var countImage = 0;

 var content_btn =$(this).data('btn');

 $(".contentchild").each(function(index, el) {

  var childcontent_preview = $(".contentfather-clone").clone().removeClass('contentfather-clone')
  .addClass('contentchild')
  .removeClass('nomostrar')
  .css({
    'display':'inherit'
  })
  .attr({
   'id':'contentchild-preview'+index
 });

  childcontent_preview.find('div.box-header').remove();

  var id_contentepreview = $(childcontent_preview).attr('id');
  $(childcontent_preview).appendTo('.content-preview');

  $(".myinput", el).each(function(index, el) {
    console.log(id_contentepreview);
    var element = $(el).data('element');
    console.log(element);
    switch(element){
      case 'title':
      console.log($(el).val());
      $('<h2>'+$(el).val()+'</h2>').appendTo('#'+id_contentepreview);
      /* $(id_contentepreview).append('<h2>'+$(el).val()+'</h2>');*/
      break;
      case 'textarea':

      var content_textarea = $('#'+$(el).attr('id')).summernote('code');
      $('<br>'+content_textarea+'<br>').appendTo('#'+id_contentepreview);
      var idContent = $(el).data('content');
      $("#"+idContent).val(content_textarea);

      break;
      case 'image':

      console.log($(el).attr('id'));

      if($(el).val()!=''){
        $('<div class="image-preview-content"><img src="" alt="'+$(el).attr('id')+'" id="loadimage'+countImage+'" height="100" width="100"><div>').appendTo('#'+id_contentepreview);

        $("#"+$(el).attr('id')).html(function(){
         readImage(el,countImage);
         countImage ++;
       });
      }else{

        var id_image = $(el).attr('id')+'-original';
        var image = $('#'+id_image).clone();
        $('#'+id_contentepreview).append(image);


      }
      break;
    }
  });



});

    //Hidden elements from edit content
    $(".content-principal").hide();
    $(".preview").show();
    $("#preview-oaca").hide();
    $("#preview").show();
   // $("#processit").show();
   $(".regular").slick({
    dots: true,
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1
  });


   


 });

//Reset Preview and return to edit content

$('#preview').click(function(e){
  e.preventDefault();
  $(".regular").slick('unslick');
  $(".content-preview").html("");
  $(".content-principal").show();
  $(".preview").hide();
  $("#preview-oaca").show();
  $("#preview").hide();
  //$("#processit").hide();


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

$("#btn-slick-next").click(function(event) {
  /* Act on the event */

  $('.regular').slick('slickNext');
});


