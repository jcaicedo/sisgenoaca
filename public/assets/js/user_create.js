$(document).ready(function(){



/*    $(document).on("click","#register_user",function(e){

        $postData = $(this).serialize();

     console.log( $( this ).serialize() );

    });*/

    //$( "#registro_usuario" ).on( "submit", function( event ) {
    //    event.preventDefault();
    //    $postData = $(this).serializeArray();
    //    console.log( $postData[first_name]);
    //});

    $('#registro_usuario').submit(function() {
       postData = $('#registro_usuario').serializeObject();
        console.log(postData.first_name);


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
                window.location.replace("/app/oaca/registro");
            },
            error: function (data) {
                console.log('Error:', data);

            }


        });

    });





})

