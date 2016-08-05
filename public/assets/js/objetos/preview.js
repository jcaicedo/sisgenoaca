 $("#preview-oaca").click(function(e){


   e.preventDefault();


   var countImage = 0;

   $("#form-create-oaca .myinput").each(function(index){

     console.log($(this).data('element'));
     var element = $(this).data('element');
     switch(element){

      case 'title':
      $(".content-preview").append('<h2>'+$(this).val()+'</h2>');
      break;

      case 'textarea':
      var content_textarea = $('#'+$(this).attr('id')).summernote('code');
      $(".content-preview").append('<br>'+content_textarea+'<br>');
      console.log($(this).data('content'));
      console.log(content_textarea);
      var idContent = $(this).data('content');
      console.log(idContent);
      $("#"+idContent).val(content_textarea);
      break;

      case 'image':

      $(".content-preview").append('<br><img src="" alt="'+$(this).attr('id')+'" id="loadimage'+countImage+'" height="100" width="100"><br>');

      $("#"+$(this).attr('id')).html(function(){
       readImage(this,countImage);
       countImage ++;
     });
      break;

    }

  });




   var myElements = [];

   $("#form-create-oaca .myinput").each(function(index){
     myElements.push($(this).data("element"));

   });

   $(".sortable").hide();
   $(".box-header-btn").hide();
   $(".preview").show();


 });


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


