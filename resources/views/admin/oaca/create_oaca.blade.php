@extends('admin.layouts.menuoaca')
@section('title',trans('admin.createOaca'))
@section('content')

<div class="content-wrapper">
<div class="content">
  
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
              <form>
                    <textarea class="editor0" id="editor0" name="editor1" rows="10" cols="80">
                                            This is my textarea to be replaced with CKEditor.
                    </textarea>
              </form>
            </div>
          </div>
          <!-- /.box -->

        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->

</div>

</div>




@endsection

@push('styles')
<style>
.mostrar{
  display: inline;
}

.textarea
{
  margin: 21px 0 !important;
}



}
</style>


@endpush


@push('scripts')
<script>
	$(function(){

    var textarea = $(".textarea").html();
    var count=1;


 CKEDITOR.replace('editor1');
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
           
              $(textarea).css({"display":"block","margin":"35px 0px !important"}).attr('id', 'editor'+count).appendTo( this );
              CKEDITOR.replace('editor'+count);
              count++;
              console.log(count);
              break;

          }
        
          


    	}

    });



	});



   


</script>
@endpush