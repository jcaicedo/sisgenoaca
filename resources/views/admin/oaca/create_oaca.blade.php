@extends('admin.layouts.menuoaca')
@section('title',trans('admin.createOaca'))
@section('content')

<div class="content-wrapper">
<div class="content">
  
  <form action="" method="post" role="form" enctype="multipart/form-data">
            {{csrf_field()}}
    
      <!-- modulo de Titulo -->
  

      <div class="form-group titulo nomostrar" style="display: none;">
      <label for="">Ingrese Titulo</label>
      <input type="text" class="form-control"> 
      </div>

     <!--  modulo textarea -->
      
     <div class="form-group textarea nomostrar">
       <label >Texto</label>
        <textarea class="form-control" rows="7"></textarea>
     </div>


        <div class="form-group uploadimage nomostrar">
          <label for="image">Imagen</label>
          <input class="form-control" type="file" name="image"/>
        </div>
    

</form>



</div>

</div>




@endsection


@push('styles')
<style>

.nomostrar{display:none;}

</style>

@endpush

@push('scripts')
<script>
	$(function(){

    var textarea = $(".textarea").html();
    var uploadimage = $(".uploadimage").html();
    var title = $(".titulo").html();
    console.log(uploadimage);
    var count=1;


/* CKEDITOR.replace('editor1');*/
    /*Agregar Titulo*/

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
              $(title).css({"display":"block"}).appendTo(this);

              break;
            case 'textarea':
           
              $(textarea).attr('id', 'editor'+count).appendTo( this );

              break;

            case 'uploadimage':
              $(uploadimage).css({"display":"block","margin":"35px 0px !important"}).appendTo(this);
            break;

          }
        
          


    	}

    });



	});



   


</script>
@endpush

