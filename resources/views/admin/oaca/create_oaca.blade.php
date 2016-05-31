@extends('admin.layouts.menuoaca')
@section('title',trans('admin.createOaca'))
@section('content')

<div class="content-wrapper">
  <form action="" method="post" role="form" id="form-create-oaca" enctype="multipart/form-data">
<div class="content">
  

            {{csrf_field()}}
    
      <!-- modulo de Titulo -->
  

      <div class="form-group titulo nomostrar">
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

        <div class="box-footer" style="margin-bottom:35px;">
        
        <div style="margin:0;background-color:transparent;text-align:center;">
           <button type="button" class="btn btn-primary" style="margin: 0 auto; width: 200px; align:center;" id="create-oaca">{{trans('admin.process')}}</button>
        </div>
              
             
        </div>





</div>
</form>

</div>




@endsection


@push('styles')
<style>

.nomostrar{display:none;}
.mostrar{display: block;}

</style>

@endpush

@push('scripts')
<script>
	$(function(){

    // var textarea = $(".textarea").html();
   
    // var title = $(".titulo").html();
    var count=0;

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
              var title = $(".titulo").first().clone();
              $(title).toggleClass("nomostrar mostrar").appendTo(this).find('input').attr({"data-element":"title","data-position":count,"id":"title-"+count,"name":"title"});
        /*      $(title).last().find('input').attr({"data-element":"title","data-position":count,"name":"title"});*/
              count ++;

              break;
            case 'textarea':
              var textarea = $(".textarea").first().clone();
              $(textarea).toggleClass("nomostrar mostrar").appendTo( this ).find('textarea').attr({"data-element":"textarea","data-position":count,'id':'textarea-'+count,"name":"textarea"});
              count ++;

              break;

            case 'uploadimage':
              var uploadimage = $("div.uploadimage").first().clone();
              $(uploadimage).toggleClass("nomostrar mostrar").appendTo(this).find('input').attr({"data-element":"image","data-position":count,'id':'image-'+count,"name":"imagen"});
              count ++;
              
              break;


          }
        
          


    	}

    });



	});


    $("#create-oaca").click(function(e){
        e.preventDefault();
       
       $("form-create-oaca").find("input,textarea").each(function(){


          var $me = $(this);
          var campo = $me.data("element");

          console.log($me);


       }).first(":visible").focus();
       
        
    

        });
        
   


</script>
<script src="/vendor/jQuery.serializeObject/jquery.serializeObject.js" ></script>
@endpush

