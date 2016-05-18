@extends('admin.layouts.menuoaca')
@section('title',trans('admin.createOaca'))
@section('content')

<div class="content-wrapper">
<div class="content">
  
  <form action="" method="post" role="form" enctype="multipart/form-data">
            {{csrf_field()}}
    
      <!-- modulo de Titulo -->
  

      <div class="form-group titulo nomostrar" style="display: none;">
      <label for="">Ingrese Titulo</label>
      <input type="text" class="form-control"> 
      </div>
      

      <!-- modulo de texarea -->
      <div class="row textarea" style="display: none;">
        <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header">
              <h3 class="box-title">CK Editor
                <small>Advanced and full of features</small>
              </h3>
              <!-- tools box -->
              <div class="pull-right box-tools">
                <button type="button" class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove">
                  <i class="fa fa-times"></i></button>
              </div>
              <!-- /. tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body pad">
              
                    <textarea class="editor0" id="editor0" name="editor1" rows="10" cols="80">
                                            This is my textarea to be replaced with CKEditor.
                    </textarea>
              
            </div>
          </div>
          <!-- /.box -->

        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->


        <div class="col-sm-12 uploadimage" style="display: none; margin:0px;">
          <label for="image">Imagen</label>
          <input type="file" name="image"/>
        </div>
    

</form>



</div>

</div>




@endsection

@push('styles')
<style>

  .mostrar{display: inline;}
  .nomostrar{display: none !important;}

</style>

@endpush


@push('scripts')
<script>
	$(function(){

    var textarea = $(".textarea").html();
    var uploadimage = $(".uploadimage").html();
    var title = $(".titulo").html();
    console.log(uploadimage);
    var count=1;


 CKEDITOR.replace('editor1');
    /*Agregar Titulo*/

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
              $(title).css({"display":"block"}).appendTo(this);
              // $("<label></label>").text("Ingrese Titulo").appendTo( this );
              // $( "<input></input>" ).addClass("form-control").text( ui.draggable.text() ).appendTo( this );
              break;
            case 'textarea':
           
              $(textarea).css({"display":"block","margin":"35px 0px !important"}).attr('id', 'editor'+count).appendTo( this );
              CKEDITOR.replace('editor'+count);
              count++;
              console.log(count);
              break;

            case 'uploadimage':
              $(uploadimage).css({"display":"block","margin":"35px 0px !important"}).appendTo(this);
            break;

          }
        
          


    	}

    });



	});



   


</script>
@endpush