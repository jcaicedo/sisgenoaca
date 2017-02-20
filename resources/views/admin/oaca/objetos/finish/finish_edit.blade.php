@extends('admin.layouts.menuoaca')
@section('title',trans('admin.finish_create_oaca_title'))

  @section('content')

    <div class="content-wrapper">
      <div class="row">
        <h1 class="text-center">¿Finalizó la Edición del OACA?</h1>
        @include('admin.oaca.objetos.includes.wizard')
      </div>


      <div class="content" id="content-finish">
        <div class="row">
          <div class="col-md-10 col-md-offset-1">
            <div class="box box-default">
              <div class="box-body">
                <div class="row">
                  <div class="col-md-6 text-center">
                    <div class="row">
                      <h3 class="text-center">Si ya terminó de editar el OACA puede hacer click en <strong>Ver OACA</strong></h3>
                      <div class="text-center">
                        <a href="{{ url("oaca/view/{$registry->id}")}}" target="_blank" class="btn btn-primary text-center" type="button" name="button_ver" style="font-size:24px;">
                          <i class="fa fa-external-link fa-1x"></i>
                          Ver OACA
                        </a>
                      </div>
                    </div>


                  </div>
                  <div class="col-md-6 text-center">
                    <h3>Si desea realizar algún cambio en el OACA, haga click en <strong>Editar</strong></h3>
                    <div class="text-center">
                      <a href="{{ url("admin/oaca/objetos/edit-motivation/{$registry->id}") }}" class="btn btn-warning text-center" type="button" name="button_return" style="font-size:24px;">
                        <i class="fa fa-chevron-left fa-1x"></i>
                        Editar
                      </a>
                    </div>
                  </div>

                  <div class="col-md-6 text-center" style="padding-top:10px;">
                    <h3>Si desea hacer público su OACA, solo debe marcar la opción de <strong>Publicar OACA</strong> </h3>
                    <div class="col-md-12" style="padding-top:8px;">
                      <input type="hidden" name="registry_id" id="registry_id" value="{{$registry->id}}">
                      <div class="form-group">
                        <label style="font-size:20px; color:green">
                          <input type="checkbox" name="publicar" id="publicar" class="minimal" {{$registry->status=="1"?"checked":""}} >
                          Publicar OACA
                        </label>
                      </div>
                    </div>
                  </div>

                  <div id="content_shared" class="col-md-6 text-center" style="padding-top:10px;">
                    <h3>Puede compartir su OACA para que otros puedan editar y agregar contenido. Solo debe hacer click en <strong>Compartir</strong>. </h3>
                    <div class="col-md-12" style="padding-top:8px;">
                      <div class="form-group">
                        <button type="button" id="btn-share" name="button-share" class="btn btn-warning text-center" style="font-size:24px;background-color:rgb(95, 86, 150);border-color:rgb(95, 86, 150);">
                          <i class="fa fa-share-alt fa-1x"></i>
                          Compartir
                        </button>
                      </div>
                    </div>
                  </div>


                </div>
              </div>
              <div class="box-footer text-center">
                <a type="button" href="/admin/" class="btn btn-success btn-lg" name="exit_create_oaca" id="exit_create_oaca">
                  <i class="fa fa-mail-reply fa-1x"></i>
                  {{trans('admin.exit')}}
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>


    </div>




  @endsection

  @push('styles')
  <style media="screen">
  #content-finish{padding-top: 53px;}
  </style>

@endpush

@push('scripts')
  <script type="text/javascript">
  $(document).ready(function() {


    	$('ul.form-wizard li#finish').addClass('active');

    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass: 'iradio_minimal-blue'
    });

    $('input#publicar').on('ifChanged', function(event){

      var id_registry = $('input[name="registry_id"]').val();

      console.log(id_registry);
      $.ajax( "/admin/oaca/objetos/status/"+$(this).is(':checked')+"/"+id_registry, function( data ) {
        console.log(data);
      });
    });

    $("#btn-share").click(function(){
      var register_id=$("#registry_id").val();
      $.getJSON("/admin/oaca/objetos/share-oaca/"+register_id).done(function(data){
      $("#content_shared h3").text(data.msj_reponse);
      $("#btn-share").hide();
      });
    });


  });

  $("ul.bootstrapWizard li.active").removeClass("active");
  $("ul.bootstrapWizard li#finalizar").addClass("active");
  </script>


@endpush
