(function(){

var lastKeyWord = "objetivoInput",
count =1;
    $(document).on("click","#btn-agregar",function(event){
        
        $(".nuevo_palabras").last().after('<div class="form-group nuevo_palabras" id="words_key'+count+'"><label  class="col-sm-2 control-label">Palabra Clave</label><div class="col-sm-10"><input class="form-control" id="word_key_'+count+'" name="word_key"/></div></div>');
        count ++;
        event.preventDefault();
    });



}());

