 $("#preview-oaca").click(function(e){
      e.preventDefault();
      var myElements = [];
      $("#form-create-oaca .myinput").each(function(index){

          console.log($(this).data("element"));
          myElements.push($(this).data("element"));
          


      });

      console.log(myElements);
      $("#hidden_elementos").val(myElements);



      var postData = $('#form-create-oaca').serializeArray();
      var Data = $('#form-create-oaca').serialize();
      var postDataObject = $('#form-create-oaca').serializeObject();
      console.log("postData");
      console.log(postData);

     

    var formData = new FormData($(this)[0]);

    console.log(postData);

//upload image

// <input type="file" id="image-url" name="image" />
// var file=$(‘#image-url');
// if(file.val()!=""){//Preview web site
//         if (file[0].files && file[0].files[0]) {
//           var reader = new FileReader();
//           reader.onload = function (e) {
//             $('.image-src-'+currentBanner, '#banners-'+currentLocation).attr('src', e.target.result);
//           }
//           reader.readAsDataURL(file[0].files[0]);
//         }
//       }



/*      var elementos = postData[0].value.split(',');
     
    console.log(elementos[1]); */

  /*     var elementos = postData[1]['elementos'].split(',');*/
  var elementos = postData[1].value.split(',');



       $("#form-create-oaca").hide();
       $(".preview").show();

    numImage = 0;

for(i=1;i<postData.length;i++){
  
  var element = elementos [i-1];
  var value = postData[i+1].value;

  
   
  switch(element){

    case 'title':

     $(".content-preview").append('<h2>'+value+'</h2>');
     
     break;

     case 'textarea':
     
     $(".content-preview").append('<p>'+value+'</p>');
     
     break;

     case 'image':

        $(".content-preview").append('<img src="" alt="'+value+'" id="loadimage'+numImage+'" height="100" width="100">')
        
         $("#"+value).html(function(){
           readImage(this,numImage);
            numImage ++;
         });


     break;

  }
}
    

    });

    $('#preview').click(function(e){
      e.preventDefault();
          $(".content-preview").html("");
          $("#form-create-oaca").show();
          $(".preview").hide();

    });

function readImage (input, id) 
{


    if(input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e){
            $('#loadimage'+id).attr('src', e.target.result);

        }
              reader.readAsDataURL(input.files[0]);
    }
}



$( ".sortable:not(div.box-footer)" ).sortable({
      revert: true
    });