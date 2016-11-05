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
                      <div id="bootstrap-wizard-1" class="col-sm-12">
                        <div class="form-bootstrapWizard">
                          <ul class="bootstrapWizard form-wizard">
                            <li class="active" data-target="#step1">
                              <a href="#tab1" data-toggle="tab" class="active"> <span class="step">1</span> <span class="title">Selección de Patrón</span> </a>
                            </li>
                            <li data-target="#step2" class="">
                              <a href="#tab2" data-toggle="tab"> <span class="step">2</span> <span class="title">Características Generales</span> </a>
                            </li>
                            <li data-target="#step3" class="">
                              <a href="#tab3" data-toggle="tab"> <span class="step">3</span> <span class="title">Ciclo de Vida</span> </a>
                            </li>
                            <li data-target="#step4" class="">
                              <a href="#tab4" data-toggle="tab"> <span class="step">4</span> <span class="title">Educacional</span> </a>
                            </li>
                            <li data-target="#step5" class="">
                              <a href="#tab5" data-toggle="tab"> <span class="step">5</span> <span class="title">Referencias</span> </a>
                            </li>
                            <li data-target="#step6" class="">
                              <a href="#tab6" data-toggle="tab"> <span class="step">6</span> <span class="title">Derechos de Autor</span> </a>
                            </li>
                            <li data-target="#step7" class="">
                              <a href="#tab7" data-toggle="tab"> <span class="step">7</span> <span class="title">Derechos de Autor</span> </a>
                            </li>
                            <li data-target="#step8">
                              <a href="#tab8" data-toggle="tab"> <span class="step">8</span> <span class="title">Derechos de Autor</span> </a>
                            </li>
                          </ul>
                          <div class="clearfix"></div>
                        </div>
                        <div class="tab-content">
                          <div class="tab-pane active" id="tab1">
                            <br>
                            <h3><strong>1 </strong> - Selección de Patrón</h3>
                            @include('admin.oaca.registry.create.pattern')

                            <div class="form-actions">
                              <div class="row">
                                <div class="col-sm-12">
                                  <ul class="pager wizard no-margin">
                                    <li class="previous disabled">
                                      <a href="#" class="btn btn-lg btn-default"> Previous </a>
                                    </li>
                                    <li class="next">
                                      <a href="#" class="btn btn-lg txt-color-darken"> Next </a>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="tab-pane" id="tab2">
                            <br>
                            <h3><strong>2</strong> - Características Generales</h3>
                            @include('admin.oaca.registry.create.general_features')

                            <div class="form-actions">
                              <div class="row">
                                <div class="col-sm-12">
                                  <ul class="pager wizard no-margin">
                                    <li class="previous">
                                      <a href="#" class="btn btn-lg btn-default"> Previous </a>
                                    </li>
                                    <li class="next disabled">
                                      <a href="#" class="btn btn-lg txt-color-darken"> Next </a>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="tab-pane" id="tab3">
                            <br>
                            <h3><strong>3</strong> - Ciclo de Vida</h3>
                            @include('admin.oaca.registry.create.lifecycle')
                            <div class="form-actions">
                              <div class="row">
                                <div class="col-sm-12">
                                  <ul class="pager wizard no-margin">
                                    <li class="previous">
                                      <a href="#" class="btn btn-lg btn-default"> Previous </a>
                                    </li>
                                    <li class="next disabled">
                                      <a href="#" class="btn btn-lg txt-color-darken"> Next </a>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="tab-pane" id="tab4">
                            <br>
                            <h3><strong>4</strong> - Educacional</h3>
                            @include('admin.oaca.registry.create.educational')

                            <div class="form-actions">
                              <div class="row">
                                <div class="col-sm-12">
                                  <ul class="pager wizard no-margin">
                                    <li class="previous">
                                      <a href="#" class="btn btn-lg btn-default"> Previous </a>
                                    </li>
                                    <li class="next disabled">
                                      <a href="#" class="btn btn-lg txt-color-darken"> Next </a>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="tab-pane" id="tab5">
                            <br>
                            <h3><strong>5</strong> - Referencias</h3>
                            @include('admin.oaca.registry.create.referencias')

                            <div class="form-actions">
                              <div class="row">
                                <div class="col-sm-12">
                                  <ul class="pager wizard no-margin">
                                    <li class="previous">
                                      <a href="#" class="btn btn-lg btn-default"> Previous </a>
                                    </li>
                                    <li class="next disabled">
                                      <a href="#" class="btn btn-lg txt-color-darken"> Next </a>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="tab-pane" id="tab6">
                            <br>
                            <h3><strong>6</strong> - Derechos de Autor</h3>
                            @include('admin.oaca.registry.create.copyright')

                            <div class="form-actions">
                              <div class="row">
                                <div class="col-sm-12">
                                  <ul class="pager wizard no-margin">
                                    <li class="previous">
                                      <a href="#" class="btn btn-lg btn-default"> Previous </a>
                                    </li>
                                    <li class="next disabled">
                                      <a href="#" class="btn btn-lg txt-color-darken"> Next </a>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="tab-pane" id="tab7">
                            <br>
                            <h3><strong>7</strong> - Derechos de Autor</h3>
                            @include('admin.oaca.registry.create.selectable_plantilla')

                            <div class="form-actions">
                              <div class="row">
                                <div class="col-sm-12">
                                  <ul class="pager wizard no-margin">
                                    <li class="previous">
                                      <a href="#" class="btn btn-lg btn-default"> Previous </a>
                                    </li>
                                    <li class="next disabled">
                                      <a href="#" class="btn btn-lg txt-color-darken"> Next </a>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="tab-pane" id="tab8">
                            <br>
                            <h3><strong>Step 8</strong> - Save Form</h3>
                            <br>
                            <h1 class="text-center text-success"><strong><i class="fa fa-check fa-lg"></i> Complete</strong></h1>
                            <h4 class="text-center">Click next to finish</h4>
                            <br>
                            <br>
                            <div class="form-actions">
                              <div class="row">
                                <div class="col-sm-12">
                                  <ul class="pager wizard no-margin">
                                    <li class="previous">
                                      <a href="#" class="btn btn-lg btn-default"> Previous </a>
                                    </li>
                                    <li class="next disabled">
                                      <a href="#" class="btn btn-lg txt-color-darken"> Next </a>
                                    </li>
                                  </ul>
                                </div>
                              </div>
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
    <style>
    .nomostrar{display: none;}

    #feedback { font-size: 1.4em; }
    #selectable .ui-selecting { background: #FECA40; }
    #selectable .ui-selected { background: #F39814; color: white; }
    #selectable {  margin: 0 auto; list-style-type: none; padding: 0; width: 1050px; }
    #selectable li { padding: 15px; float: left; width: 500px; height: auto; font-size: 4em; text-align: center; margin:10px; }

    #selectable-copyright .ui-selecting { background: #FECA40; }
    #selectable-copyright .ui-selected { background: #F39814; color: white; }
    #selectable-copyright { list-style-type: none; margin: 0; padding: 0; width: 60%; }
    #selectable-copyright li { margin: 3px; padding: 0.4em; font-size: 1.4em; height: 241px; }
    #selectable-copyright li img{ height: auto; width:180px; }
    .content-img-copyright{ overflow: hidden; line-height: 200px; }

    ///////////////////
    /*Start Wizard*/

.bootstrapWizard {
    display: block;
    list-style: none;
    padding: 0;
    position: relative;
    width: 100%
}

.bootstrapWizard a:hover,.bootstrapWizard a:active,.bootstrapWizard a:focus {
    text-decoration: none
}

.bootstrapWizard li {
    display: block;
    float: left;
    width: 12%;
    text-align: center;
    padding-left: 0
}

.bootstrapWizard li:before {
    border-top: 3px solid #55606E;
    content: "";
    display: block;
    font-size: 0;
    overflow: hidden;
    position: relative;
    top: 11px;
    right: 1px;
    width: 100%;
    z-index: 1
}

.bootstrapWizard li:first-child:before {
    left: 50%;
    max-width: 50%
}

.bootstrapWizard li:last-child:before {
    max-width: 50%;
    width: 50%
}

.bootstrapWizard li.complete .step {
    background: #0aa66e;
    padding: 1px 6px;
    border: 3px solid #55606E
}

.bootstrapWizard li .step i {
    font-size: 10px;
    font-weight: 400;
    position: relative;
    top: -1.5px
}

.bootstrapWizard li .step {
    background: #B2B5B9;
    color: #fff;
    display: inline;
    font-size: 15px;
    font-weight: 700;
    line-height: 12px;
    padding: 7px 13px;
    border: 3px solid transparent;
    border-radius: 50%;
    line-height: normal;
    position: relative;
    text-align: center;
    z-index: 2;
    transition: all .1s linear 0s
}

.bootstrapWizard li.active .step,.bootstrapWizard li.active.complete .step {
    background: #0091d9;
    color: #fff;
    font-weight: 700;
    padding: 7px 13px;
    font-size: 15px;
    border-radius: 50%;
    border: 3px solid #55606E
}

.bootstrapWizard li.complete .title,.bootstrapWizard li.active .title {
    color: #2B3D53
}

.bootstrapWizard li .title {
    color: #bfbfbf;
    display: block;
    font-size: 13px;
    line-height: 15px;
    max-width: 100%;
    position: relative;
    table-layout: fixed;
    text-align: center;
    top: 20px;
    word-wrap: break-word;
    z-index: 104
}

.wizard-actions {
    display: block;
    list-style: none;
    padding: 0;
    position: relative;
    width: 100%
}

.wizard-actions li {
    display: inline
}

.tab-content.transparent {
    background-color: transparent
}

/*End Wizard*/

    </style>
    <link rel="stylesheet" href="/vendor/AdminLTE/plugins/iCheck/all.css">

  @endpush
  @push('scripts')
    {{-- <script src="/vendor/bootstrapvalidator/dist/js/bootstrapValidator.min.js"></script> --}}
    {{-- <script type="text/javascript"  src="/assets/js/register/main.js" ></script> --}}
    <script type="text/javascript"  src="/assets/js/register/create/main.js" ></script>
    <script src="//code.jquery.com/ui/1.11.0/jquery-ui.js"></script>

    <!-- iCheck 1.0.1 -->
    <script src="/vendor/AdminLTE/plugins/iCheck/icheck.min.js"></script>

    <script>
    $( function() {
      $( "#selectable-copyright" ).selectable({
        selected: function(event, ui){
          console.log( $(ui.selected).data('licencia'));
          $("#licencia").val($(ui.selected).data('licencia'));
        }
      });
    } );
    </script>

    <script type="text/javascript">
    $(document).ready(function () {
      //Initialize tooltips
      $('.nav-tabs > li a[title]').tooltip();

      //Wizard
      $('a[data-toggle="tab"]').on('show.bs.tab', function (e) {

        var $target = $(e.target);

        if ($target.parent().hasClass('disabled')) {
          return false;
        }
      });

      $(".next-step").click(function (e) {

        var $active = $('.wizard .nav-tabs li.active');
        $active.next().removeClass('disabled');
        nextTab($active);

      });
      $(".prev-step").click(function (e) {

        var $active = $('.wizard .nav-tabs li.active');
        prevTab($active);

      });
    });

    function nextTab(elem) {
      $(elem).next().find('a[data-toggle="tab"]').click();
    }
    function prevTab(elem) {
      $(elem).prev().find('a[data-toggle="tab"]').click();
    }
    </script>
  @endpush
