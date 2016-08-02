 $("#preview-oaca").click(function(e){

  e.preventDefault();

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


