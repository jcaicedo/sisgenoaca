(function(){
var idinput = 0;
    var lista =document.getElementById("lista"),
        objetivoInput=document.getElementById("objetivoInput"),
        btnNuevoObjetivo = document.getElementById("btn-agregar");



    //Funcion agregar tarea

    var agregarObjetivoEspecifico = function(){

        var objetivoEspecifico = objetivoInput.value,
            nuevoObjeticoEspecifico = document.createElement("li"),
            nuevoinput = document.createElement("input"),
            contenido = document.createTextNode(objetivoEspecifico);

            nuevoinput.value = objetivoEspecifico
        //Agregando objetivo a li
nuevoinput.setAttribute('form','form_registro');
nuevoinput.setAttribute('name','input['+idinput+']');
        nuevoObjeticoEspecifico.appendChild(nuevoinput);

        lista.appendChild(nuevoObjeticoEspecifico);

        objetivoInput.value="";
        idinput ++;
    };

    //Evento Agregar objetivo

    btnNuevoObjetivo.addEventListener("click",agregarObjetivoEspecifico);




}());