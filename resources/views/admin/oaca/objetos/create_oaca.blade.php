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
  
  <form action="{{url('/admin/oaca/objetos/introduction')}}" method="post"  role="form" id="form-create-oaca" enctype="multipart/form-data" >
    <input type="hidden" name="_token" value="{{ csrf_token() }}">





    <div class="content" id="content-form">

      <div class="box-header box-header-principal">

        <a id="preview-oaca" class="btn btn-warning">
          <i class="fa fa-eye"></i>
          Visualizar
        </a>

      </div>

      
      
      {{-- <input type="hidden" name="register_id" value="{{$register_id}}">
      <input type="hidden" name="task_moment" value="{{$task_moment}}"> --}}
      <input type="hidden" name="elementos" value="" id="hidden_elementos">

      <ul id="sortable2" class="dropfalse sortable">
        <li class="ui-state-highlight">Cannot be dropped..</li>
        <li class="ui-state-highlight">..on an empty list</li>
        <li class="ui-state-highlight">Item 3</li>
      </ul>

    </div>

    <div class="content sortable" id="content-form">

      <div class="box-header box-header-principal">

        <a id="preview-oaca" class="btn btn-warning">
          <i class="fa fa-eye"></i>
          Visualizar
        </a>

      </div>

      
      
      {{-- <input type="hidden" name="register_id" value="{{$register_id}}">
      <input type="hidden" name="task_moment" value="{{$task_moment}}"> --}}
      <input type="hidden" name="elementos" value="" id="hidden_elementos">

      <ul id="sortable3" class="dropfalse sortable">
        <li class="ui-state-highlight">Cannot be dropped..</li>
        <li class="ui-state-highlight">..on an empty list</li>
        <li class="ui-state-highlight">Item 3</li>
      </ul>

    </div>


    <div class="preview">

      <div class="box-header box-header-preview">
        <div class="content-btn-preview">
          <a class="btn btn-warning" id="preview">
            <i class="fa fa-edit"></i>
            Seguir Editando
          </a>
          <button type="submit" class="btn btn-success" id="processit">
            <i class="fa fa-cogs"></i>
            Procesar
          </button>
        </div>
      </div>

      <div class="content-preview">

      </div>
    </div>
    


  </form>


</div>




<!-------------------------------------------------------------------------------->

{{-- Modulos de elementos ocultos para clonar --}}

{{-- Modulo Title --}}


<div class="content contenedor-clone sortable nomostrar" id="content-form">

  <div class="box-header box-header-principal">

    <a id="preview-oaca" class="btn btn-warning">
      <i class="fa fa-eye"></i>
      Visualizar
    </a>

  </div>



      {{-- <input type="hidden" name="register_id" value="{{$register_id}}">
      <input type="hidden" name="task_moment" value="{{$task_moment}}"> --}}
      <input type="hidden" name="elementos" value="" id="hidden_elementos">

    </div>

    <div class="titulo-clone nomostrar">
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
          <input type="text" class="form-control componente"> 
        </div>
      </div>
    </div>

    {{-- Modulo Textarea --}}
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


    <div class="uploadimage uploadimage-clone nomostrar">
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


    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Modal title</h4>
          </div>
          <div class="modal-body">
            ...
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div>


    @endsection


    <!--Styles-->
    @push('styles')


    <link href="/vendor/summernote/dist/summernote.css" rel="stylesheet">

    <style>
      .nomostrar{display:none;}
      .mostrar{display: block;}
      .btn-proccess{margin:0 auto; width: 200px;align:left;}
      .preview{display: none;}
      .mark_background{background: #88AAAA}
      .content-preview{padding:5%;}
      .content-preview h2{
        color: blue;
        text-align: center;
      }
      #preview-oaca{margin-left: 44%;}
      .box-header-principal{padding-top: 0px;}
      .content-btn-preview{text-align: center;padding-top: 5px;}
      .image-preview-content{text-align: center;}
      .image-preview-content img{width: 50%; height: auto;}

    </style>
    <style>
      #sortable1, #sortable2, #sortable3 { list-style-type: none; margin: 0; float: left; margin-right: 10px; background: #eee; padding: 5px; width: 143px;}
      #sortable1 li, #sortable2 li, #sortable3 li { margin: 5px; padding: 5px; font-size: 1.2em; width: 120px; }
    </style>
    @endpush

    <!--Scripts-->


    @push('scripts')
    <script src="/vendor/summernote/dist/summernote.js"></script>
    <script type="text/javascript"  src="/assets/js/objetos/preview.js" ></script>
    <script type="text/javascript"  src="/assets/js/objetos/options-textarea.js" ></script>
    <script type="text/javascript" src="/vendor/jqueryte/dist/jquery-te-1.4.0.min.js" charset="utf-8"></script>


    <script>
      $(document).ready(function(){

       $('.sidebar-menu').sortable({
        connectWith: ".sortable",
        remove: function(event, ui){
          var element = "<li><input type='text'/></li>";
          console.log(ui.item.parent().attr('id'));
          $(element).appendTo('#'+ui.item.parent().attr('id'));
          $(this).sortable('cancel');
        }
      }).disableSelection();


       $( ".sortable" ).sortable({
        connectWith: ".sidebar-menu"
      }).disableSelection();

     });



   </script>
   <script src="/vendor/jQuery.serializeObject/jquery.serializeObject.js" >
   </script>
   @endpush