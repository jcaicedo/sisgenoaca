 $('.preview-oaca').click(function(e){
  e.preventDefault();

  var content_preview = $(this).data('prev');
  var content_data = $(this).data('content');

  $(content_data+" .myinput").each(function(index){

    console.log($(this).val());
  });

});




 $("#preview-oaca").click(function(e){
   e.preventDefault();

   var countImage = 0;

   $("#form-create-oaca .myinput").each(function(index){

     var element = $(this).data('element');
     switch(element){

      case 'title':
      $(".content-preview").append('<h2>'+$(this).val()+'</h2>');
      break;

      case 'textarea':
      
      var content_textarea = $('#'+$(this).attr('id')).summernote('code');
      $(".content-preview").append('<br>'+content_textarea+'<br>');
      var idContent = $(this).data('content');
      $("#"+idContent).val(content_textarea);
      break;

      case 'image':
      $(this);

      $(".content-preview").append('<br><img src="" alt="'+$(this).attr('id')+'" id="loadimage'+countImage+'" height="100" width="100"><br>');

      $("#"+$(this).attr('id')).html(function(){
       readImage(this,countImage);
       countImage ++;
     });
      break;

    }

  });
    //Hidden elements from edit content
    $(".sortable").hide();
    $(".box-header-btn").hide();
    $(".preview").show();


  });

//Reset Preview and return to edit content

$('#preview').click(function(e){
  e.preventDefault();
  $(".content-preview").html("");
  $(".sortable").show();
  $('.box-header-btn').show();
  $(".preview").hide();

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


