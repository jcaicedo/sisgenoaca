(function(){

/*Fin Agregar palabras claves*/
var count =1;
$(document).on("click","#btn-add-contri",function(event){

    $(".section_contri").last().after('<div class="sec-contri"><hr align="center" width="100%"><div class="form-group"><label for="contri_type" class="col-sm-2 control-label" >Tipo de Contribución</label><div class="col-sm-10"><select class="form-control name="contri'+count+'"><optionc class="contri_type'+count+'" name="contri'+count+'" value="A">autor</option><option class="contri_type'+count+'" name="contributions'+count+'" value="R">revisor</option><option class="contri_type'+count+'" name="contri'+count+'" value="D">desconocido</option><option class="contri_type'+count+'" name="contri'+count+'" value="I">iniciador</option><option class="contri_type'+count+'" name="contri'+count+'" value="T">terminador</option><option class="contri_type'+count+'" name="contri'+count+'" value="E">editor</option><option class="contri_type'+count+'" name="contrib'+count+'" value="Es">escritor</option></select></div></div><div class="form-group"><div class="col-sm-3"><label for="contri_name">Nombre</label><input for="contribution" name="contri['+count+']" id="contri_name" class="form-control" placeholder="Ingrese Nombre"></div><div class="col-sm-3"><label for="contri_last_name">Apellido</label><input name="contri['+count+']" id="contri_last_name" class="form-control" placeholder="Ingrese Apellido"></div><div class="col-sm-3"><label for="contri_email">Correo</label><input name="contri['+count+']" id="contri_email" class="form-control" placeholder="Ingrese Correo"></div><div class="col-sm-3"><label for="contri_organization">Organización</label><input name="contri['+count+']" id="contri_organization" class="form-control" placeholder="Ingrese Organización"></div></div></div>');
count++;
event.preventDefault();

});




/*Agregar Colaborador*/


}());

