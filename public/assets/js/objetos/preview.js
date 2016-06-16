 $("#preview-oaca").click(function(e){
      e.preventDefault();

      var postData = $('#form-create-oaca').serializeArray();
      var postDataObject = $('#form-create-oaca').serializeObject();

      $.ajax({
        url:'http://sisgenoaca.app/admin/oaca/objetos/create/preview',
        type:'POST',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        data:{
          data:{obj:postDataObject}
        },
        success:function(data){

          console.log(data);
        },
        error:function(data){
            console.log('ERROR'+data);
        }

      });





      var elementos = postData[0].value.split(',');
     
    console.log(elementos[1]); 

      /* $elementos = postData['elementos'].split(',');

      console.log(postData);*/

       $("#form-create-oaca").hide();
       $(".content-preview").show();

for(i=1;i<postData.length;i++){
  
  var element = elementos [i-1];
  var value = postData[i].value;
   
  switch(element){

    case 'titulo':

     $(".content-preview").append('<h2>'+value+'</h2>');
     
     break;

     case 'textarea':
     
     $(".content-preview").append('<p>'+value+'</p>');
     
     break;

  }
}
    

    });

    $('#preview').click(function(e){
      e.preventDefault();

       $("#form-create-oaca").show();
       $(".content-preview").hide();

    });
