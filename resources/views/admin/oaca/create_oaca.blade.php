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
              <i class="fa fa-close"></i>
            </button>
          </div>
        </div>
        <div class="box-body">
          <input type="text" class="form-control"> 
        </div>
      </div>
    </div>



    <!--  modulo textarea -->

{{--     <div class="textarea nomostrar  ">

      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Textarea</h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool">
              <i class="fa  fa-close"></i>
            </button>
            <button  type="button" class="btn btn-box-tool">
             <i class="fa  fa-paint-brush"></i>
           </button>
         </div>
       </div>
       <div class=" box-body">
         <textarea type="hidden" class="form-control" rows="7"></textarea>
       </div>
     </div>

   </div> --}}

   <div class="textareaclone nomostrar  ">

    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">Textarea</h3>
        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool">
            <i class="fa  fa-close"></i>
          </button>
          <button  type="button" class="btn btn-box-tool">
           <i class="fa  fa-paint-brush"></i>
         </button>
       </div>
     </div>
     <div class="box-body edit-textarea">
      
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
          <i class="fa fa-close"></i>
        </button>
      </div>
    </div>
    <div class=" box-body">
     <input class="form-control" type="file" />
   </div>
 </div>

</div>


{{-- Editor --}}
{{--  <div class="box">
  <div class="box-header">
    <h3 class="box-title">Bootstrap WYSIHTML5
      <small>Simple and fast</small>
    </h3>
    <!-- tools box -->
    <div class="pull-right box-tools">
      <button type="button" class="btn btn-default btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse">
        <i class="fa fa-minus"></i></button>
        <button type="button" class="btn btn-default btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove">
          <i class="fa fa-times"></i></button>
        </div>
        <!-- /. tools -->
      </div>
      <!-- /.box-header -->
      <div class="box-body pad">
        <form>
          <textarea class="textarea textarea-new" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
        </form>
      </div>
    </div>
    --}}
    

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


.options-textarea{
  padding-bottom: 10px;
}

</style>
{{-- <link type="text/css" rel="stylesheet" href="/vendor/jqueryte/dist/jquery-te-1.4.0.css"> --}}

<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.1/summernote.css" rel="stylesheet">

@endpush

@push('scripts')
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.1/summernote.js"></script>
{{-- <script src="//cdn.tinymce.com/4/tinymce.min.js"></script> --}}


<script type="text/javascript"  src="/assets/js/objetos/preview.js" ></script>
<script type="text/javascript"  src="/assets/js/objetos/options-textarea.js" ></script>
<script type="text/javascript" src="/vendor/jqueryte/dist/jquery-te-1.4.0.min.js" charset="utf-8"></script>

<script> 

$(document).ready(function(){


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

              // case 'textarea':
              // var textarea = $(".textareaclone").clone();
              // $(textarea).removeClass("nomostrar").removeClass("textareaclone").addClass("remove-div-"+count).addClass("textarea").appendTo( this );
              // $(".remove-div-"+count).find('textarea').attr({"data-element":"textarea","data-position":count,'id':'textarea'+count,"name":"textarea"}).addClass("myinput");
              // $(".remove-div-"+count).find('button').attr({"data-parent":"remove-div-"+count}).addClass('remove-div');
              // tinymce.init({ 
              //   selector:'#textarea'+count,
              //   plugins: [
              //   'advlist autolink lists link image charmap print preview anchor',
              //   'searchreplace visualblocks code fullscreen',
              //   'insertdatetime media table contextmenu paste code textcolor colorpicker'
              //   ],
              //   toolbar:'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | forecolor backcolor| bullist numlist outdent indent |',
              //   content_css: [
              //   '//fast.fonts.net/cssapi/e6dc9b99-64fe-4292-ad98-6974f93cd2a2.css',
              //   '//www.tinymce.com/css/codepen.min.css'
              //   ]

              // });



              // elements[count]="textarea";
              // $("#hidden_elementos").val(elements);
              // count ++;

              // break;
              case 'textarea':
              var textarea = $(".textareaclone").clone();
              $(textarea).removeClass("nomostrar").removeClass("textareaclone").addClass("remove-div-"+count).addClass("textarea").appendTo( this );
              $(".remove-div-"+count).find('.edit-textarea').attr({"data-element":"textarea","data-position":count,'id':'textarea'+count,"name":"textarea"}).addClass("myinput");
              $(".remove-div-"+count).find('button').attr({"data-parent":"remove-div-"+count}).addClass('remove-div');

              $('#textarea'+count).summernote({
                height: 300,               
                minHeight: null,             
                maxHeight: null,             
                focus: true  
              });



              elements[count]="textarea";
              $("#hidden_elementos").val(elements);
              count ++;

              break;

              case 'uploadimage':
              var uploadimage = $("div.uploadimage").first().clone();
              $(uploadimage).removeClass("nomostrar").addClass("remove-div-"+count).appendTo(this)

              $(".remove-div-"+count).find('input').attr({"data-element":"image","data-position":count,'value':'image-'+count,"name":"image","id":'image-'+count}).addClass("myinput").after("<input type='hidden' name='image' value='image-"+count+"'>");
              $(".remove-div-"+count).find('button').attr({"data-parent":"remove-div-"+count}).addClass('remove-div');

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

var textareaID;
var content_element

$( ".sortable:not(div.box-footer)" ).sortable({
  axis: 'y',
  opacity: 0.5,
  tolerance: 'pointer'

});

}); /*enddocumentReady*/






</script>
<script src="/vendor/jQuery.serializeObject/jquery.serializeObject.js" >
</script>

@endpush

