$(document).ready(function(){


//agregar nuevo titulo

$("#btn-add-title").click(function(e){

$("#contenido li").last().after("<li><a>"+$("#title").val()+"</a></li>");

	e.preventDefault();


});


})

