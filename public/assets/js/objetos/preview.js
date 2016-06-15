 $("#preview-oaca").click(function(e){
      e.preventDefault();

      postData = $('#form-create-oaca').serializeObject();
       console.log(postData['elementos']);

       $elementos = postData['elementos'].split(',');

       console.log($elementos[0]);

       $("#form-create-oaca").hide();
       $(".content-preview").show();

    

    });

    $('#preview').click(function(e){
      e.preventDefault();

       $("#form-create-oaca").show();
       $(".content-preview").hide();

    });
