@extends('admin.layouts.menuoaca')
@section('title',trans('admin.createOaca'))
@section('content')


<div class="content-wrapper">
  <form action="" method="post" role="form" id="form-create-oaca" enctype="multipart/form-data">
    <div class="box-footer" style="margin-bottom:35px;">

      <div style="margin:0;background-color:transparent;text-align:center;">
       <button type="submit" class="btn btn-success btn-proccess" id="create-oaca">{{trans('admin.process')}}</button>
       <button type="submit" class="btn btn-primary btn-proccess" id="preview-oaca">PreView</button>
     </div>


   </div>
   <div class="content sortable">



    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{csrf_field()}}





    <!--  <textarea name="textarea" class="jqte-test"><b>My contents are from <u><span style="color:rgb(0, 148, 133);">TEXTAREA</span></u></b></textarea> -->

    <input type="hidden" name="elementos" value="" id="hidden_elementos">


    {{-- Modulo Title --}}

    <div class="titulo nomostrar">
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Titulo</h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool">
              <i class="fa fa-minus"></i>
            </button>
          </div>
        </div>
        <div class="box-body">
          <input type="text" class="form-control"> 
        </div>
      </div>
    </div>



    <!--  modulo textarea -->

    <div class="textarea nomostrar ">

      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Textarea</h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool">
              <i class="fa fa-minus"></i>
            </button>
            <button  type="button" class="btn btn-box-tool">
             <i class="fa  fa-paint-brush"></i>
           </button>
         </div>
       </div>
       <div class=" box-body">
        <div class=" options-textarea">
          <div class=" btn-group" role="group" data-toggle="buttons">
            <label class="btn btn-default ">
              <input type="checkbox" class="bold-btn" ><b>B</b>
            </label>
            <label class="btn btn-default ">
              <input type="checkbox" class="italic-btn" ><i>I</i>
            </label>
            <label class="btn btn-default ">
              <input type="checkbox" class="under-btn" ><u>U</u>
            </label>

          </div>
        </div>
        <textarea  class="form-control" rows="7"></textarea>
      </div>
    </div>

  </div>



  <!--modulo image-->


  <div class="uploadimage nomostrar">

    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">Image</h3>
        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool">
            <i class="fa fa-minus"></i>
          </button>
        </div>
      </div>
      <div class=" box-body">
       <input class="form-control" type="file" />
     </div>
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
  .mark_background{background: #88AAAA}

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

  .options-textarea{
    padding-bottom: 10px;
  }

</style>
<link type="text/css" rel="stylesheet" href="/vendor/jqueryte/dist/jquery-te-1.4.0.css">
@endpush

@push('scripts')
<script type="text/javascript"  src="/assets/js/objetos/preview.js" ></script>
<script type="text/javascript"  src="/assets/js/objetos/options-textarea.js" ></script>
<script type="text/javascript" src="/vendor/jqueryte/dist/jquery-te-1.4.0.min.js" charset="utf-8"></script>
<script> 

  $(document).ready(function(){

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
              var title = $(".titulo").clone().removeClass('titulo');
              $(title).removeClass("nomostrar").addClass("remove-div-"+count).appendTo(this);
              $(".remove-div-"+count).find('input').attr({"data-element":"title","data-position":count,"id":"title-"+count,"name":"title"}).addClass("myinput");
              $(".remove-div-"+count).find('button').attr({"data-parent":"remove-div-"+count}).addClass('remove-div');
              
              elements[count]="title";
              $("#hidden_elementos").val(elements);
              count ++;

              break;
              case 'textarea':
              var textarea = $(".textarea").first().clone();
              $(textarea).removeClass("nomostrar").addClass("remove-div-"+count).appendTo( this );
              $(".remove-div-"+count).find('textarea').attr({"data-element":"textarea","data-position":count,'id':'textarea'+count,"name":"textarea"}).addClass("myinput");
              $(".remove-div-"+count).find('button').attr({"data-parent":"remove-div-"+count}).addClass('remove-div');
              $(".remove-div-"+count).find('input.bold-btn').attr({"data-textareainput":"textarea"+count});
              $(".remove-div-"+count).find('input.italic-btn').attr({"data-textareainput":"textarea"+count});
              $(".remove-div-"+count).find('input.under-btn').attr({"data-textareainput":"textarea"+count});

              elements[count]="textarea";
              $("#hidden_elementos").val(elements);
              count ++;

              break;

              case 'uploadimage':
              var uploadimage = $("div.uploadimage").first().clone();
              $(uploadimage).removeClass("nomostrar").addClass("remove-div-"+count).appendTo(this)

              $(".remove-div-"+count).find('input').attr({"data-element":"image","data-position":count,'value':'image-'+count,"name":"image","id":'image-'+count}).addClass("myinput").after("<input type='hidden' name='image' value='image-"+count+"'>");

              elements[count]="image";
              $("#hidden_elementos").val(elements);
              count ++;

              break;


            }




          }

        });



  });

    $("#form-create-oaca").on('click','button.remove-div',function (e){

      var divDelete = $(this).data('parent');

      $("."+divDelete).remove();

    });

  });



  


</script>
<script src="/vendor/jQuery.serializeObject/jquery.serializeObject.js" >
</script>

@endpush

