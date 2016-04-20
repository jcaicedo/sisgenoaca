@extends('admin.layouts.menuoaca')
@section('title',trans('admin.createOaca'))
@section('content')

<div class="content-wrapper">
	
</div>




@endsection

@push('scripts')
<script>
	$(function(){

    $( "#texto" ).draggable({
      appendTo: "body",
      helper: "clone"
    });

    $(".content-wrapper").droppable({
    	drop:function(event,ui){
    		$( " <input></input>" ).text( ui.draggable.text() ).appendTo( this );
    	}

    });


	});


</script>
@endpush