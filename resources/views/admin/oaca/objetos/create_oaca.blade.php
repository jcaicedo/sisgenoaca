@extends('admin.layouts.menuoaca')
@section('title',trans('admin.introduction'))
@section('content')

<div class="content-wrapper">
  <div class="box-header">
    <h1 >{{trans('admin.introduction')}}
      <div class="box-tool pull-right">
      </div>
    </h1>
  </div>

<form action="{{url('/admin/oaca/objetos/introduction')}}" method="post"  role="form" id="form-create-oaca" enctype="multipart/form-data">

<input type="hidden" name="_token" value="{{ csrf_token() }}">

<div class="content contentchild sortable" id="contentchild0">
  
</div>


</form>



</div>


@endsection


<!--Elementos a clonar-->

<div class="content contentchild sortable contentfather-clone" id="contentchild1" style="display:none;">
  
</div>


@push('styles')
<style>
  .contentchild{
    border-radius: 25px;
    border:2px solid #73AD21;
    margin: 3px;
  }
</style>
@endpush

@push('scripts')
<script src="/vendor/summernote/dist/summernote.js"></script>
<script type="text/javascript"  src="/assets/js/objetos/preview.js" ></script>
<script type="text/javascript"  src="/assets/js/objetos/options-textarea.js" ></script>
<script type="text/javascript" src="/vendor/jqueryte/dist/jquery-te-1.4.0.min.js" charset="utf-8"></script>

<script>

  $(document).ready(function() {
var $count =1;
    $( "#title, #textarea, #uploadimage, #contenedor" ).draggable({
      appendTo: "body",
      helper: "clone"
    });
    
  $("#contentchild0").droppable({
          accept:'.option',
          drop: function(event, ui){
           
          console.log(ui.draggable.data('element-option'));
          $("<input  type='text' value='hola'/>").appendTo('#'+$(this).attr('id'));
          }
        });

    $(".content-wrapper").droppable({
      accept:'.content-child',
      drop:function(event, ui){
        $count++;
        console.log($count);
        var content = $(".contentfather-clone").clone().removeClass('contentfather-clone')
                    .css({
                      display: 'inherit'
                    })
                    .attr({
                      'id':'contentchild'+$count
                    });
         
        $(content).appendTo("#form-create-oaca");

        $(".contentchild").droppable({
          accept:'.option',
          drop: function(event, ui){
           
          console.log($(this).attr('id'));
          $("<input  type='text' value='hola'/>").appendTo('#'+$(this).attr('id'));
          }
        });
       
      }

      
    });

    // $(".contentchild").droppable({
    //   accept:'.option',
    //   drop: function(event, ui){
    //     console.log(this);
    //   }
    // });

    


  });
</script>

@endpush