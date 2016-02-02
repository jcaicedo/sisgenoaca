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
        //errorPlacement: function(error,element) {
        //    return true;
        //},
        rules:{
            description:{
              minlength:15
            },
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
            },
            copyright_description:{
                required:true,
                minlength:15
            }
        },
        messages:{
            sistema:{
                required:"Debe ingresar un Sistema de Identificación"
            },
            user_code:{
                required:"Debe ingresar un Código de Identificación"
            },
            title:{
                required:"Debe Ingresar un título"
            },
            description:{
                required:"Debe agregar una descripción",
                minlength:"la descripción debe ser mayor a 15 caracteres"
            },
            key_word:{
                required:"Debe ingresar al menos una palabra clave"
            },
            version:{
                required:"Debe ingresar código de versión"
            },
            contri_name:{
                required:"Ingreso Nombre"
            },
            contri_lastname:{
                required:"Ingrese Apellido"
            },
            contri_email:{
                required:"Ingrese Email",
                email:"Verifique formato de correo"
            },
            contri_organization:{
                required:"Ingrese Organización"
            },
            organization:{
                required:"Especifique Organización"
            },
            age_range:{
                required:"Debe indicar un rago de edad"
            },
            copyright_description:{
                required:"Debe agregar una descripción del autor",
                minlength:"Debe poseer más de 15 caracteres"
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




    $("#registrar").click(function(e){
        e.preventDefault();
        var isValid = $("#form_registro").valid();
        if(isValid){
           //var json_data= $('#form_registro').serializeObject();
           // $.post('/app/oaca/registro/create',$('#form_registro').serializeObject());
           // console.log($('#form_registro').serializeArray());
            var $param = $('#form_registro').serializeArray();
            $.each($param, function(i, field){
                $("#results").append(field.name + ":" + field.value + " ");
            });

            $.ajax({
               type:"post",
                url:'/app/oaca/registro/create',
                data:JSON.stringify($param),
                dataType:"json",
                success: function(data){
                    return data;
                },
                error:function(){
                    alert('ERROR');
                }

            },'json');

        } });





});