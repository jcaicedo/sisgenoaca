@extends('admin.layouts.default')
@section('title','Registro OACA')
  @section('content')


    <div class="content-wrapper">
      <section class="content-header">
        <h1>{{trans('admin.newOaca')}}</h1>
        <ol class="breadcrumb">
          <li>
            <a href="/admin">
              <i class="fa fa-dashboard"></i>
              Incio
            </a>
          </li>
          <li class="active">
            Registro OACA
          </li>
        </ol>
      </section>


      <div class="content">
        <div class="row">
          <article class="col-sm-12 col-md-12 col-lg-12 sortable-grid ui-sortable">
            <div id="wid-id-0" class=" box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title">Registro Nuevo Oaca</h3>
              </div>
              <!-- widget div-->
              <div role="content">
                <!-- widget content -->
                <div class="widget-body">

                  <div class="row">
                    <form  novalidate="novalidate"  method="post" id="form_register" role="form" enctype="multipart/form-data">
                      <input type="hidden" name="user_id" value="{{ Auth::user()->id}}">
                      {!! csrf_field() !!}
                      <div id="bootstrap-wizard-1" class="col-sm-12 wizard">

                        @include('admin.oaca.registry.include.wizard')

                        <div class="tab-content">
                          <div class="tab-pane active" id="tab1">
                            <br>
                            <h3><strong>1 </strong> - Selección de Patrón</h3>

                            @include('admin.oaca.registry.create.pattern')

                          </div>
                          <div class="tab-pane" id="tab2">
                            <br>
                            <h3><strong>2</strong> - Características Generales</h3>

                            @include('admin.oaca.registry.create.general_features')

                          </div>
                          <div class="tab-pane" id="tab3">
                            <br>
                            <h3><strong>3</strong> - Ciclo de Vida</h3>

                            @include('admin.oaca.registry.create.lifecycle')

                          </div>
                          <div class="tab-pane" id="tab4">
                            <br>
                            <h3><strong>4</strong> - Educacional</h3>

                            @include('admin.oaca.registry.create.educational')

                          </div>
                          <div class="tab-pane" id="tab5">
                            <br>
                            <h3><strong>5</strong> - Referencias</h3>

                            @include('admin.oaca.registry.create.referencias')

                          </div>
                          <div class="tab-pane" id="tab6">
                            <br>
                            <h3><strong>6</strong> - Derechos de Autor</h3>

                            @include('admin.oaca.registry.create.copyright')

                          </div>
                          <div class="tab-pane" id="tab7">
                            <br>
                            <h3><strong>7</strong> - Derechos de Autor</h3>

                            @include('admin.oaca.registry.create.selectable_plantilla')

                          </div>
                          <div class="tab-pane" id="tab8">
                            <br>
                            <br>

                            <br>
                            <h1 class="text-center text-success"><strong><i class="fa fa-check fa-lg"></i> Registro Completado</strong></h1>
                            <p class="text-center">Antes de continuar puede revisar los datos del Registro
                                                    o hacer click en "Crear OACA" para continuar</p>

                            <br>
                            <br>
                            <div class="text-center">
                              <button type="submit" class="btn btn-success btn-lg btn-save" style="font-size:30px;">
                                <i class="fa  fa-cube fa-1x"></i>
                                CREAR OACA

                              </button>
                            </div>

                          </div>
                        </div>
                        <div class="form-actions form-actions-btn">
                          <div class="row">
                            <div class="col-sm-12">
                              <ul class="pager wizard no-margin">
                                <li class="previous">
                                  <a href="#" class="btn btn-lg btn-default prev-step"> Atrás </a>
                                </li>
                                <li class="next">
                                  <a href="#" class="btn btn-lg txt-color-darken next-step"> Siguiente </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>

                </div>
                <!-- end widget content -->

              </div>
              <!-- end widget div -->

            </div>
            <!-- end widget -->

          </article>
        </div>
      </div>


    </div>



  @endsection
  @include('admin.oaca.registry.create.elements_hide')

  @push('styles')
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.0/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" href="/assets/css/registry/master.css">
    <link rel="stylesheet" href="/vendor/AdminLTE/plugins/iCheck/all.css">

  @endpush
  @push('scripts')
    {{-- <script src="/vendor/bootstrapvalidator/dist/js/bootstrapValidator.min.js"></script> --}}
    <script type="text/javascript"  src="/assets/js/register/create/main.js" ></script>
    <script src="//code.jquery.com/ui/1.11.0/jquery-ui.js"></script>

    <!-- iCheck 1.0.1 -->
    <script src="/vendor/AdminLTE/plugins/iCheck/icheck.min.js"></script>
  @endpush
