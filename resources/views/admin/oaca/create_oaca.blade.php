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

    $( "#title" ).draggable({
      appendTo: "body",
      helper: "clone"
    });

    $(".content").droppable({
    	drop:function(event,ui){


        $("<label></label>").text("Ingrese Titulo").appendTo( this );
    		$( "<input></input>" ).addClass("form-control").text( ui.draggable.text() ).appendTo( this );
    	}

    });

    /*Agregar extarea*/

    $("#textarea").draggable({
      appendTo:"body",
      helper:"clone"
    });

    

	});


</script>
@endpush