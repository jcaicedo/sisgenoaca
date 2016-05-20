@extends('admin.layouts.menuoaca')
@section('title',trans('admin.createOaca'))
@section('content')

<div class="content-wrapper">
<button class="btn btn-success">Preview
</button>

  
  <form action="" method="post" role="form" enctype="multipart/form-data">
            {{csrf_field()}}
    
      <!-- modulo de Titulo -->
  <div class="content">

      <div class="form-group titulo nomostrar" style="display: none;">
      <label for="">Ingrese Titulo</label>
      <input type="text" class="form-control"> 
      </div>

<!-- modulo textarea -->

      <div class="form-group textarea nomostrar">
        <label for="textarea">Area de Texto</label>
        <textarea name="" id=""  rows="3" class="form-control"></textarea>
      </div>
      


    
        <div class="form-group uploadimage" style="display: none; margin:0px;">
       
          <label for="image">Imagen</label>
          <input type="file" name="image" class="form-control"/>
         
        </div>
    
</div>
</form>





</div>




@endsection

@push('styles')
<style>

  .mostrar {display: inline;}
  .nomostrar {display: none !important;}

</style>

@endpush


@push('scripts')
<script>
	$(function(){

    var textarea = $(".textarea").html();
    var uploadimage = $(".uploadimage").html();
    var title = $(".titulo").html();
    console.log(textarea);
    var count=1;




 
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
           
              $(textarea).css({"display":"block"}).appendTo(this);

              break;

            case 'uploadimage':
              $(uploadimage).css({"display":"block","margin":"35px 0px !important"}).appendTo(this).find('input').attr('image', '2');
              
            break;

          }
        
          


    	}

    });



	});



   


</script>
@endpush