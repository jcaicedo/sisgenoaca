$("#preview-oaca").click(function(event) {
  /* Act on the event */

  event.preventDefault();
  var countImage = 0;

  $(".contentchild").each(function(index, el) {

    var childcontent_preview = $(".contentfather-clone").clone().removeClass('contentfather-clone')
    .addClass('contentchild')
    .removeClass('nomostrar')
    .css('display','inherit')
    .attr({
     'id':'contentchild-preview'+index
   });

    var id_contentepreview = $(childcontent_preview).attr('id');
    $(childcontent_preview).appendTo('.content-preview');

    $(".myinput", el).each(function(index, el) {
      console.log(id_contentepreview);
      var element = $(el).data('element');
      console.log(element);
      switch(element){
        case 'title':
        console.log($(el).val());
        $('<h2>'+$(el).val()+'</h2>').appendTo('#'+id_contentepreview);
            // $(id_contentepreview).append('<h2>'+$(el).val()+'</h2>');
            break;
            case 'textarea':

            var content_textarea = $('#'+$(el).attr('id')).summernote('code');
            $('<br>'+content_textarea+'<br>').appendTo('#'+id_contentepreview);
            var idContent = $(el).data('content');
            $("#"+idContent).val(content_textarea);

            break;
            case 'image':

            console.log($(el).attr('id'));

            if($(el).val()!=''){
              $('<div class="image-preview-content"><img src="" alt="'+$(el).attr('id')+'" id="loadimage'+countImage+'" height="100" width="100"><div>').appendTo('#'+id_contentepreview);

              $("#"+$(el).attr('id')).html(function(){
               readImage(el,countImage);
               countImage ++;
             });
            }else{

              var id_image = $(el).attr('id')+'-original';
              var image = $('#'+id_image).clone();
              $('#'+id_contentepreview).append(image);


            }
            break;
          }
        });





  }); /*./each contentchild*/

 //Hidden elements from edit content
 $(".content-principal").hide();
 $(".preview").show();
 $("#preview-oaca").hide();
 $("#preview").show();
 //$("#processit").show();



}); /* ./ principal*/

$('#preview').click(function(e){
  e.preventDefault();
  $(".content-preview").html("");
  $(".content-principal").show();
  $(".preview").hide();
  $("#preview-oaca").show();
  $("#preview").hide();
  //$("#processit").hide();

});

function readImage (input, id) {

  if(input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function (e){
      $('#loadimage'+id).attr('src', e.target.result);

    }
    reader.readAsDataURL(input.files[0]);
  }
}


$(".btn-clear-input-image").click(function(e){

  e.preventDefault();
  var id_image_input = $(this).data('content');
  $(id_image_input).val('');

});





$(document).ready(function (e) {
	// body...
  $("#preview").hide();
  var array_elements_delete = [];
  var count= $('input[name=count_elements_old]').val();

				//console.log(count);

				$( "#title, #textarea, #uploadimage" ).draggable({
					appendTo: "body",
					helper: "clone"
				});


       $( "#title, #textarea, #uploadimage, #contenedor" ).draggable({
        appendTo: "body",
        helper: "clone"
      });

       $(".contentchild").droppable({
        accept:'.option',
        drop: function(event, ui){

          console.log(ui.draggable.data('element-option'));
          var type = ui.draggable.data('element-option');
          var id_content = $(this).attr('id');
          newElement(type,id_content);

        }
      });

       $(".content-principal").droppable({
        accept:'.content-child',
        drop:function(event, ui){
          count++;
          console.log(count);
          var content = $(".contentfather-clone").clone().removeClass('contentfather-clone')
          .removeClass('nomostrar')
          .addClass('contentchild')
          .attr({
            'id':'contentchild'+count
          });

          $(content).appendTo(".content-principal");

          $(".contentchild").droppable({
            accept:'.option',
            drop: function(event, ui){

              console.log(ui.draggable.data('element-option'));
              var type = ui.draggable.data('element-option');
              var id_content = $(this).attr('id');
              newElement(type,id_content);

            }
          });

          $( ".sortable:not(div.box-footer)" ).sortable({
            axis: 'y',
            opacity: 0.5,
            tolerance: 'pointer',
            handle: ".box-header"

          });

        }


      });

    // $(".contentchild").droppable({
    //   accept:'.option',
    //   drop: function(event, ui){
    //     console.log(this);
    //   }
    // });
    var newElement = function(type, id_content){
      if(type!='contenedor'){

        switch(type){
          case 'title':
          var title = $(".titulo-clone").clone().removeClass('titulo-clone');
          $(title).removeClass("nomostrar").addClass("remove-div-"+count).addClass("title").data('contentchild',id_content).appendTo( '#'+id_content);
          $(".remove-div-"+count).find('input').attr({"data-element":"title","id":"title-"+count,"name":"data["+count+"][content]"}).addClass("myinput");
          $(".remove-div-"+count).find('button').attr({"data-parent":"remove-div-"+count}).addClass('remove-div');
          $("#title-"+count).after("<input type='hidden' name='data["+count+"][type]' value='title'>");
          $("#title-"+count).after("<input type='hidden' name='data["+count+"][id]' value=''>");
          $("#title-"+count).after("<input type='hidden' name='data["+count+"][contentchild]' value='"+id_content+"'>");


          count ++;

          break;

          case 'textarea':
          var textarea = $(".textareaclone").clone();
          $(textarea).removeClass("nomostrar").removeClass("textareaclone").addClass("remove-div-"+count).addClass("textarea").data('contentchild',id_content).appendTo('#'+id_content );
          $(".remove-div-"+count).find('.edit-textarea').attr({"data-element":"textarea",'data-content':'content-textarea'+count,'id':'textarea'+count,"name":"textarea"}).addClass("myinput");
          $(".remove-div-"+count).find("input#input-textarea"+count).addClass('componente');
          $(".remove-div-"+count).find('button').attr({"data-parent":"remove-div-"+count}).addClass('remove-div');
          $("#textarea"+count).after("<input type='hidden' name='data["+count+"][content]' id='content-textarea"+count+"' value='pruab'>");
          $("#textarea"+count).after("<input type='hidden' name='data["+count+"][type]'  value='textarea'>");
          $("#textarea"+count).after("<input type='hidden' name='data["+count+"][id]' value=''>");
          $("#textarea"+count).after("<input type='hidden' name='data["+count+"][contentchild]' value='"+id_content+"'>");


          $('#textarea'+count).summernote({
            height: 300,               
            minHeight: null,             
            maxHeight: null,             
            focus: true,
            maximumImageFileSize: 512*1024  
          });


          count ++;

          break;

          case 'uploadimage':
          var uploadimage = $("div.uploadimage-clone").clone();
          $(uploadimage).removeClass("nomostrar").removeClass("uploadimage-clone").addClass("remove-div-"+count).data('contentchild',id_content).appendTo('#'+id_content)

          $(".remove-div-"+count).find('input').attr({"data-element":"image","data-position":count,'value':'image-'+count,"name":"image"+count,"id":'imagep-'+count}).addClass("myinput");
          $(".remove-div-"+count).find('button').attr({"data-parent":"remove-div-"+count}).addClass('remove-div');
          $("#imagep-"+count).addClass("componente");
          $("#imagep-"+count).after("<input type='hidden' name='data["+count+"][content]' value='image"+count+"'>");
          $("#imagep-"+count).after("<input type='hidden' name='data["+count+"][type]' value='image'>");
          $("#imagep-"+count).after("<input type='hidden' name='data["+count+"][id]' value=''>");
          $("#imagep-"+count).after("<input type='hidden' name='data["+count+"][contentchild]' value='"+id_content+"'>");

          count ++;

          break;


        }}

      };

				//Function Delete content

				$("#form-create-oaca").on('click','button.remove-div',function (e){

					var divDelete = $(this).data('parent');

          if($(this).data('idelement')){
           array_elements_delete.push($(this).data('idelement'));
           $('#elementos-delete').val(array_elements_delete);
           console.log($('#elementos-delete').val());
         }


         $("."+divDelete).remove();

       });

				$( ".sortable:not(div.box-footer)" ).sortable({
					axis: 'y',
					opacity: 0.5,
					tolerance: 'pointer',
					handle: ".box-header"

				});


			});