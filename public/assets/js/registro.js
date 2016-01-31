$(document).ready(function(){





$("#btn_general").click(function(e){
    e.preventDefault();
    var isValid = $("#form_registro").valid();
    if(isValid) {$('#general_form').hide(); $('#ciclo_vida').show();}});


$("#btn_ciclo_vida").click(function(e){
        e.preventDefault();
        var isValid = $("#form_registro").valid();
        if(isValid) {$('#ciclo_vida').hide(); $('#educativo').show();}});



$("#btn_educativo").click(function(e){
        e.preventDefault();
        var isValid = $("#form_registro").valid();
        if(isValid) {$('#educativo').hide(); $('#derecho_autor').show();}});



    $("#form_registro").validate({
        rules:{
            key_word:{
            required:true
            },

            contri_name:{
                required:true
            },
            contri_lastname:{
                required:true
            },
            contri_email:{
                required:true
            },
            contri_organization:{
                required:true
            }
        },
        messages:{
            sistema:{
                required:"Debe ingresar un Sistema de Identificación"
            }
        }

    });



    $.validator.setDefaults({

        errorClass: 'help-block',
        highlight: function(element){
            $(element)
                .addClass('.error');
        },

        unhighlight: function(element){
            $(element)
                .removeClass('.error');
        }

    });

    $.validator.setDefaults({
        debug: true,
        success: "valid"
    });






});