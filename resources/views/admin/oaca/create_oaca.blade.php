@extends('admin.layouts.menuoaca')
@section('title',trans('admin.createOaca'))
@section('content')

<div class="content-wrapper">
<div class="content">
  
</div>
<div class="row">
  <div class="col-md-12">
    <ul class="timeline">
                  <li>
              

              <div class="timeline-item">
         

                <h3 class="timeline-header"><a href="#">Support Team</a> sent you an email</h3>

                <div class="timeline-body">
                  Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles,
                  weebly ning heekya handango imeem plugg dopplr jibjab, movity
                  jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle
                  quora plaxo ideeli hulu weebly balihoo...
                </div>
                <div class="timeline-footer">
                  <a class="btn btn-primary btn-xs">Read more</a>
                  <a class="btn btn-danger btn-xs">Delete</a>
                </div>
              </div>
            </li>
    </ul>
  </div>
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

    $( "#texto" ).draggable({
      appendTo: "body",
      helper: "clone"
    });

    $(".content-wrapper").droppable({
    	drop:function(event,ui){
    		$( " <input></input>" ).addClass("content").text( ui.draggable.text() ).appendTo( this );
    	}

    });


	});


</script>
@endpush