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
	var titulo=$("input[name=titulo]").val();


	//var titulo = $(this).val();
	console.log(titulo);

console.log("hola");
	item = {};
	item['title']=titulo;

	$("input[name=subtitulo]").each(function(){

		item['titulo']={};
		item['titulo']['subtitulo']=$(this).val();
	});


	jsonObj.push(item);

});

jsonString = JSON.stringify(jsonObj);
console.log("aqui"+jsonString);


});



})

