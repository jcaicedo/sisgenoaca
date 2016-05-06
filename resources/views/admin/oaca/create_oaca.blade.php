@extends('admin.layouts.menuoaca')
@section('title',trans('admin.createOaca'))
@section('content')

<div class="content-wrapper">
<div class="content">
  


</div>

</div>




@endsection

@push('styles')
<style>



}
</style>


@endpush


@push('scripts')
<script>
	$(function(){

    /*Agregar Titulo*/

    $( "#title, #textarea" ).draggable({
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
              $("<label></label>").text("Ingrese Titulo").appendTo( this );
              $( "<input></input>" ).addClass("form-control").text( ui.draggable.text() ).appendTo( this );
              break;
            case 'textarea':
              $("<label></label>").text("Ingrese Titulo").appendTo( this );
              $( "<button></button>" ).addClass("btn btn-success").text( ui.draggable.text() ).appendTo( this );
              break;

          }
        
          


    	}

    });

    /*Agregar extarea*/



   
        /*Agregar Titulo*/

 



    /*Agregar extarea

    /*$("#textarea").draggable({
      appendTo:"body",
      helper:"clone"
    });*/

	});


</script>
@endpush