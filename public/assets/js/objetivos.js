$(document).ready(function(){


//agregar nuevo titulo

$("#btn-add-title").click(function(e){

$("#contenido li").last().after("<li><a>"+$("#title").val()+"</a></li>");

	e.preventDefault();


});

$(document).on("click","#add-title",function(e){
$(".title-content").last().after('<div class="title-content"><div class="col-sm-11"><input class="form-control"></div><div class="col-sm-1"><button type="button" class="btn btn-box-tool" id="btn-add-subtitle"><i class="fa fa-plus"></i></button></div><div class="col-md-7 sub-title-content" style="left: 16%;"><br></div></div>');

e.preventDefault();


});

$(document).on("click",".btn-add-subtitle",function(e){

alert ($(this).attr('id'));
	e.preventDefault();
});


})

