$(document).ready(function(){

/*Agregar nuevas palabras claves*/

var lastKeyWord = "objetivoInput",
count =1;
    $(document).on("click","#btn-agregar",function(event){
        
        $(".nuevo_palabras").last().after('<div class="form-group nuevo_palabras" id="words_key'+count+'"><label  class="col-sm-2 control-label">Palabra Clave</label><div class="col-sm-10"><input class="form-control" id="word_key_'+count+'" name="word_key"/></div></div>');
        count ++;
        event.preventDefault();
    });


    



/*Validación de formulario*/
$("#btn_general").click(function(e){
    e.preventDefault();
    var isValid = $("#form_registro").valid();
    if(isValid) {
        

        $('#general_form').hide(); 
        $('#ciclo_vida').show();}});


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
            identificador:{
                required:true
            },
            title:{
                required:true
            },
            idioma:{
                required:true
            },

            description:{
              minlength:15,
              required:true
            },
             word_key:{
             required:true

           },
           version:{
            required:true
           },

            contri_name:{
                required:true
            },
            contri_last_name:{
                required:true
            },
            contri_email:{
                required:true
            },
            contri_organization:{
                required:true
            },
            age_range:{
                required:true
            },
            copyright_description:{
                required:true,
                minlength:15
            }
        },
        messages:{
            title:{
                required:"Debe ingresar un título"
            },
            identificador:{
                required:"Debe ingresar un Identificador"
            },

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
            word_key:{
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
            var $param = $('#form_registro').serializeObject();
            //var $param2= parseJSON($param);

           console.log($param);
 $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        });
    $.ajax({
        url:'http://sisgenoaca.app/app/oaca/registro/create',
        type:'POST',
        data:{
            _token: $("[name='_token']").val(),
            data: $param
        },
        success:function(){console.log(arguments);},
        error:function(){
            console.log('ERROR');
            console.log(arguments);

        }


    },'json');

        } });

/*Fin validación formulario*/



});