@extends('admin.layouts.menuoaca')
@section('title',trans('admin.createOaca'))
@section('content')


<div class="content-wrapper">
  <form action="" method="post" role="form" id="form-create-oaca" enctype="multipart/form-data">
<div class="content">
  


    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{csrf_field()}}

      <!-- modulo de Titulo -->
 


    <!--  <textarea name="textarea" class="jqte-test"><b>My contents are from <u><span style="color:rgb(0, 148, 133);">TEXTAREA</span></u></b></textarea> -->

<input type="hidden" name="elementos" value="" id="hidden_elementos">
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
          <input class="form-control" type="file" />
        </div>

        <div class="box-footer" style="margin-bottom:35px;">
        
        <div style="margin:0;background-color:transparent;text-align:center;">
           <button type="submit" class="btn btn-success btn-proccess" id="create-oaca">{{trans('admin.process')}}</button>
           <button type="submit" class="btn btn-primary btn-proccess" id="preview-oaca">PreView</button>
        </div>
              
             
        </div>





</div>
</form>


<div class="preview">
  <div class="box-footer" style="margin-bottom:35px;">
    <div style="margin:0;background-color:transparent;text-align:center;">
        
           <button type="button" class="btn btn-primary btn-proccess" id="preview">PreView</button>
        </div>
  </div>
   


        <div class="content-preview">
          
        </div>
</div>
</div>





@endsection


@push('styles')
<style>

.nomostrar{display:none;}
.mostrar{display: block;}
.btn-proccess{margin:0 auto; width: 200px;align:left;}
.preview{display: none;}

.jqte-test {
  display:block;
  margin:0 0 10px;
  padding:6px;
  width:95%;
  background:#FFF;
  border:#AAA 1px solid;
  font-size:13px;
}
textarea.jqte-test, div.jqte-test, span.jqte-test {
  min-height:100px;
}

</style>
<link type="text/css" rel="stylesheet" href="/vendor/jqueryte/dist/jquery-te-1.4.0.css">
@endpush

@push('scripts')
<script type="text/javascript"  src="/assets/js/objetos/preview.js" ></script>
<script type="text/javascript" src="/vendor/jqueryte/dist/jquery-te-1.4.0.min.js" charset="utf-8"></script>
<script> 

$(".jqte-test").jqte({"status" : true});

	$(function(){

    var elements = new Array();
  

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
              elements[count]="titulo";
              $("#hidden_elementos").val(elements);
/*              console.log($("#hidden_elementos").val())
*//*              console.log(elements);
*/              count ++;

              break;
            case 'textarea':
              var textarea = $(".textarea").first().clone();
              $(textarea).toggleClass("nomostrar mostrar").appendTo( this ).find('textarea').attr({"data-element":"textarea","data-position":count,'id':'textarea-'+count,"name":"textarea"});
             elements[count]="textarea";
             $("#hidden_elementos").val(elements);
/*              console.log($("#hidden_elementos").val())
*/              count ++;

              break;

            case 'uploadimage':
              var uploadimage = $("div.uploadimage").first().clone();
              $(uploadimage).toggleClass("nomostrar mostrar").appendTo(this).find('input').attr({"data-element":"image","data-position":count,'id':'image-'+count,"name":"image"});
            elements[count]="image";
            $("#hidden_elementos").val(elements);
/*             console.log($("#hidden_elementos").val())
*/              count ++;
              
              break;


          }
        
          


    	}

    });



	});



   


</script>
<script src="/vendor/jQuery.serializeObject/jquery.serializeObject.js" ></script>

@endpush

