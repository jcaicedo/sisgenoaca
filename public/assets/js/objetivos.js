$(document).ready(function(){

var idTitleContente = 2;
//agregar nuevo titulo


$(document).on("click","#add-title",function(e){
$(".title-content").last().after('<br><div class="title-content" name="contenedor" id="subtcontentplus'+idTitleContente+'"><div class="col-sm-11"><input  type="text" class="form-control ptitulo" id="titulo" name="titulo"></div><div class="col-sm-1"><button type="button" class="btn btn-box-tool btn-add-subtitle" id="plus'+idTitleContente+'"><i class="fa fa-plus"></i></button></div><div class="col-md-7 sub-title-content" id="subinputplus'+idTitleContente+'" style="left: 16%;"><br></div></div>');
idTitleContente ++;
e.preventDefault();


});

$(document).on("click",".btn-add-subtitle",function(e){
var idContent = $(this).attr('id');

$("div#subtcontent"+idContent+" #subinput"+idContent+"").last().append('<input type="text" name="subtitulo" class="form-control">');
	e.preventDefault();
});


$(document).on("click","#fin_obj",function(e){


   jsonObj = [];

    $("div[name=contenedor]").each(function(){

        var titulo= $(this).find("input[name=titulo]").val();

        var objTitulo = {};
        objTitulo['titulo'] = titulo;
        objTitulo['subtitulos'] = [];


        $(this).find("input[name=subtitulo]").each(function(){

            objTitulo['subtitulos'].push($(this).val());
        });


        jsonObj.push(objTitulo);

    });

    jsonString = JSON.stringify(jsonObj);
    //console.log("aqui"+jsonString);


    $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        });

console.log(jsonObj);

$.ajax({
    url: 'http://sisgenoaca.app/app/oaca/objetos/create',
    type: "POST",
    beforeSend:function(xhr){
        var token =$('meta[name="csrf_token"]').attr('content');
        if(token){
             return xhr.setRequestHeader('X-CSRF-TOKEN', token);
        }
    },
    data:{ obj: jsonObj },
      success:function(data){
        console.log(data);
                         window.location.replace("/app/oaca/registro");
    },
    error: function (data) {
                console.log('Error:', data);

            }
  

});



});


  /*  $("#fin_obj").click(function(e){
        e.preventDefault();
        
            var $param = $('#form_registro').serializeObject();
            //var $param2= parseJSON($param);
            console.log($param);
 });*/



})

