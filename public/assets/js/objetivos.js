$(document).ready(function(){


//agregar nuevo titulo

$("#btn-add-title").click(function(e){

$("#contenido li").last().after("<li><a>"+$("#title").val()+"</a></li>");

	e.preventDefault();


});

$(document).on("click","#add-title",function(e){
$(".title-content").last().after('<div class="form-group title-content"><div class="col-sm-11"><input class="form-control"></div><div class="col-sm-1"><button type="button" class="btn btn-box-tool" id="btn-add-contri"><i class="fa fa-plus"></i></button></div><div class="col-md-7"><br><input class="form-control"><br><input class="form-control"><br><input class="form-control"></div></div>');

e.preventDefault();


});


})

