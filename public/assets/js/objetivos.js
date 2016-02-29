$(document).ready(function(){

var idTitleContente = 2;
//agregar nuevo titulo


$(document).on("click","#add-title",function(e){
$(".title-content").last().after('<br><div class="title-content" id="subtcontentplus'+idTitleContente+'"><div class="col-sm-11"><input  type="text" class="form-control" id="titulo" name="titulo"></div><div class="col-sm-1"><button type="button" class="btn btn-box-tool btn-add-subtitle" id="plus'+idTitleContente+'"><i class="fa fa-plus"></i></button></div><div class="col-md-7 sub-title-content" id="subinputplus'+idTitleContente+'" style="left: 16%;"><br></div></div>');
idTitleContente ++;
e.preventDefault();


});

$(document).on("click",".btn-add-subtitle",function(e){
var idContent = $(this).attr('id');

$("div#subtcontent"+idContent+" #subinput"+idContent+"").last().append('<input type="text" class="form-control">');
	e.preventDefault();
});


$(document).on("click","#fin_obj",function(e){

var $param = $("#form_temario").serializeObject();
            //var $param2= parseJSON($param);

           console.log($param);


});



})

