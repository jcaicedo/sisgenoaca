(function(){

/*Fin Agregar palabras claves*/

$(document).on("click","#btn-add-contri",function(event){

    $(".section_contri").after('<div class="sec-contri"><hr align="center" width="100%"><div class="form-group"><label name="contribution_type" class="col-sm-2 control-label" >Tipo de Contribución</label><div class="col-sm-10"><select class="form-control"><option value="A">autor</option><option value="R">revisor</option><option value="D">desconocido</option><option value="I">iniciador</option><option value="T">terminador</option><option value="E">editor</option><option value="Es">escritor</option></select></div></div><div class="form-group"><div class="col-sm-3"><label for="contri_name">Nombre</label><input name="contri_name" class="form-control" placeholder="Ingrese Nombre"></div><div class="col-sm-3"><label for="contri_last_name">Apellido</label><input name="contri_last_name" class="form-control" placeholder="Ingrese Apellido"></div><div class="col-sm-3"><label for="contri_email">Correo</label><input name="contri_email" class="form-control" placeholder="Ingrese Correo"></div><div class="col-sm-3"><label for="contri_organization">Organización</label><input name="contri_organization" class="form-control" placeholder="Ingrese Organización"></div></div></div>');
event.preventDefault();
});




/*Agregar Colaborador*/


}());

