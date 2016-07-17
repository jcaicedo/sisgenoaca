 $("#preview-oaca").click(function(e){

  e.preventDefault();

/*
  var count = 0;
  $('div#content-form input.componente').each( function(index, element){
    var inputElements=[];
    var type_element = $(this).attr('name');
    switch(type_element){

      case 'title':

      inputElements.push('title');
      $(this).attr({'name':'title-'+count});
      count ++;

      break;

      case 'textarea':

      inputElements.push('textarea');
      var summernoteid = $(this).val();
      var content_textarea = $('#'+summernoteid).summernote('code');
      $(this).val(content_textarea);
      $(this).attr({'name':'textarea-'+count});
      count ++;

      break;

      case 'image':

      inputElements.push('image');
      console.log($(this));
      $(this).attr({'name':'image-'+count});
      console.log($(this));
      count ++;

      break;
    }

  });
  
  */

  var myElements = [];

  $("#form-create-oaca .myinput").each(function(index){
   myElements.push($(this).data("element"));

 });


  $("#hidden_elementos").val(myElements);



  var postData = $('#form-create-oaca').serializeArray();
  var Data = $('#form-create-oaca').serialize();
  var postDataObject = $('#form-create-oaca').serializeObject();

  var elementos = postData[1].value.split(',');
 // console.log(postData);


 numImage = 0;

 $.each(postData, function(index, input){

  var   element = input.name;

  switch(element){
    case 'title':
    $(".content-preview").append('<h2>'+input.value+'</h2>');
    break;

    case 'textarea':
    console.log(input.value);
    var content_textarea = $('#'+input.value).summernote('code');
    $(".content-preview").append('<br>'+content_textarea+'<br>');

    break;

    case 'image':
    $(".content-preview").append('<br><img src="" alt="'+input.value+'" id="loadimage'+numImage+'" height="100" width="100"><br>');

    $("#"+input.value).html(function(){
     readImage(this,numImage);
     numImage ++;
   });
    break;
  }
  //console.log(input.value);

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


