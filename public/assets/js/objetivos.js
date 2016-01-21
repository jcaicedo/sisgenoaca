(function(){

    var lista =document.getElementById("lista"),
        objetivoInput=document.getElementById("objetivoInput"),
        btnNuevoObjetivo = document.getElementById("btn-agregar");



    //Funcion agregar tarea

    var agregarObjetivoEspecifico = function(){

        var objetivoEspecifico = objetivoInput.value,
            nuevoObjeticoEspecifico = document.createElement("li"),
            contenido = document.createTextNode(objetivoEspecifico);

        //Agregando objetivo a li

        nuevoObjeticoEspecifico.appendChild(contenido);

        lista.appendChild(nuevoObjeticoEspecifico);

        objetivoInput.value="";

    };

    //Evento Agregar objetivo

    btnNuevoObjetivo.addEventListener("click",agregarObjetivoEspecifico);




}());