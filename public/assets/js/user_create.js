$(document).ready(function(){


//Validacion de formulario
//
        $("#registro_usuario").validate({


                rules:{
                    first_name:{
                        required:true
                    },
                    last_name:{
                        required:true
                    },
                    email:{
                        required:true
                    },
                    rol:{
                        required:true
                    },
                    password:{
                        required:true
                    },
                    institucion:{
                        required:true
                    }

                },
                messages:{
                    first_name:{
                        required:"Debe Ingresar Nombre"
                    },
                    last_name:{
                        required:"Debe Ingresar Apellido"
                    },
                    email:{
                        required:"Debe Ingresar Email"
                    },
                    password:{
                        required:"Debe Ingresar una Contraseña"
                    },
                    institucion:{
                        required:"Debe Indica Institución"
                    }

                }

        });

        $.validator.setDefaults({

            errorClass: 'help-block',
            highlight:function(element){
                $(element)
                .addClass('.error');
            },
            unhighlight:function(element){
                $(element)
                .removeClass('.error');
            }
        });



        $("#register_user").click(function(e){

            e.preventDefault();

            var isValid = $("#registro_usuario").valid();

            if(isValid){

         postData = $('#registro_usuario').serializeObject();
        console.log(postData.first_name);
        jsonString = JSON.stringify(postData);

        $.ajax({
            url: 'http://sisgenoaca.app/usuario/registro/',
            type: "POST",
            beforeSend:function(xhr){
                var token =$('meta[name="csrf_token"]').attr('content');
                if(token){
                    return xhr.setRequestHeader('X-CSRF-TOKEN', token);
                }
            },
            data:{ obj: postData },
            success:function(data){
                console.log(data);
                //window.location.replace("/app/oaca/registro");
            },
            error: function (data) {
                console.log('Error:', data);

            }


        });
            }


 

    });





})

