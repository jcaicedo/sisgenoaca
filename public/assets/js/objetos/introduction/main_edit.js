
$("#preview-oaca").click(function(e){
 e.preventDefault();

 var countImage = 0;

 $("#form-create-oaca .myinput").each(function(index){

   var element = $(this).data('element');
   console.log(element);
   switch(element){

    case 'title':
    $(".content-preview").append('<h2>'+$(this).val()+'</h2>');
    break;

    case 'textarea':

    var content_textarea = $('#'+$(this).attr('id')).summernote('code');
    $(".content-preview").append('<br>'+content_textarea+'<br>');
    var idContent = $(this).data('content');
    $("#"+idContent).val(content_textarea);
    break;

    case 'image':
    console.log($(this).attr('id'));

    if($(this).val()!=''){
      $(".content-preview").append('<br><img src="" alt="'+$(this).attr('id')+'" id="loadimage'+countImage+'" height="100" width="100"><br>');

      $("#"+$(this).attr('id')).html(function(){
       readImage(this,countImage);
       countImage ++;
     });
    }else{

      var id_image = $(this).attr('id')+'-original';
      var image = $('#'+id_image).clone();
      $(".content-preview").append(image);


    }
    break;

  }

});
    //Hidden elements from edit content
    $(".sortable").hide();
    $(".box-header-principal").hide();
    $(".preview").show();


  });

//Reset Preview and return to edit content

$('#preview').click(function(e){
  e.preventDefault();
  $(".content-preview").html("");
  $(".sortable").show();
  $('.box-header-principal').show();
  $(".preview").hide();

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
  var array_elements_delete = [];
  var count= $('input[name=count_elements_old]').val();

				//console.log(count);

				$( "#title, #textarea, #uploadimage" ).draggable({
					appendTo: "body",
					helper: "clone"
				});


				$(".content").droppable({
					accept: '.option',
					drop:function(event,ui){

						var opt = ui.draggable.data('element-option');

            // console.log(ui.draggable.data('element-option'));

            switch(opt){
            	case 'title':
            	var title = $(".titulo-clone").clone().removeClass('titulo-clone');
            	$(title).removeClass("nomostrar").addClass("remove-div-"+count).addClass("title").appendTo(this);
            	$(".remove-div-"+count).find('input').attr({"data-element":"title","id":"title-"+count,"name":"data["+count+"][content]"}).addClass("myinput");
            	$(".remove-div-"+count).find('button').attr({"data-parent":"remove-div-"+count}).addClass('remove-div');
            	$("#title-"+count).after("<input type='hidden' name='data["+count+"][type]' value='title'>");
            	$("#title-"+count).after("<input type='hidden' name='data["+count+"][id]' value=''>");


            	count ++;

            	break;

            	case 'textarea':
            	var textarea = $(".textareaclone").clone();
            	$(textarea).removeClass("nomostrar").removeClass("textareaclone").addClass("remove-div-"+count).addClass("textarea").appendTo( this );
            	$(".remove-div-"+count).find('.edit-textarea').attr({"data-element":"textarea",'data-content':'content-textarea'+count,'id':'textarea'+count,"name":"textarea"}).addClass("myinput");
            	$(".remove-div-"+count).find("input#input-textarea"+count).addClass('componente');
            	$(".remove-div-"+count).find('button').attr({"data-parent":"remove-div-"+count}).addClass('remove-div');
            	$("#textarea"+count).after("<input type='hidden' name='data["+count+"][content]' id='content-textarea"+count+"' value='pruab'>");
            	$("#textarea"+count).after("<input type='hidden' name='data["+count+"][type]'  value='textarea'>");
            	$("#textarea"+count).after("<input type='hidden' name='data["+count+"][id]' value=''>");


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
            	$(uploadimage).removeClass("nomostrar").removeClass("uploadimage-clone").addClass("remove-div-"+count).appendTo(this)

            	$(".remove-div-"+count).find('input').attr({"data-element":"image","data-position":count,'value':'image-'+count,"name":"image"+count,"id":'imagep-'+count}).addClass("myinput");
            	$(".remove-div-"+count).find('button').attr({"data-parent":"remove-div-"+count}).addClass('remove-div');
            	$("#imagep-"+count).addClass("componente");
            	$("#imagep-"+count).after("<input type='hidden' name='data["+count+"][content]' value='image"+count+"'>");
            	$("#imagep-"+count).after("<input type='hidden' name='data["+count+"][type]' value='image'>");
            	$("#imagep-"+count).after("<input type='hidden' name='data["+count+"][id]' value=''>");

            	count ++;

            	break;


            }




          }

        });

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