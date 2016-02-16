@extends('layouts.head_dev')
@section('title','Create Registro')
@section('content')
<section class="content">
  <div class="container">
    <div class="row">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h1 class="box-title" style="font-size: 24px;">Registro Oaca</h1>
        </div>
        <!--/.box-header-->
        <!--Inicio de Registor-->
        {!!Form::open(['class'=>'form-horizontal','id'=>'form_registro','enctype'=>'application/json'])  !!}
        <br>
        <div class="box box-body" id="general_form">
          <div class="box-header with-border">
            <h4 class="box-title" >Aspectos Generales</h4>
          </div>
          <br>
          <div class="form-group">
            <label for="form_registro" class="col-sm-2 control-label">Identificador <span>*</span></label>
            
            <div class="col-sm-10">
              <input type="text" name="identificador" class="form-control" placeholder="Indique identificador" id="identificador">
            </div>
            {{--/.col-sm-10--}}
          </div>
          {{--/.form-group--}}
          <div class="form-group">
            
            <label for="form_registro" name="title" class="col-sm-2 control-label">Título <span>*</span></label>
            
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="Divida del título y el subtitulo con ":"(espacio dos puntos)" id="title" name="title">
            </div>
            {{--/.col-sm-10--}}
          </div>
          {{--/.form-group--}}
          <div class="form-group">
            <label for="form_registro" class="col-sm-2 control-label">Idioma <span>*</span></label>
            
            <div class="col-sm-10">
              <select name="idioma" class="form-control" required>
                <option value="ingles">Ingles</option>
                <option value="español" default>Español</option>
                <option value="otro">Otro</option>
              </select>
            </div>
            {{--/.col-sm-10--}}
          </div>
          {{--/.form-group--}}
          <div class="form-group">
            <label for="form_registro" class="col-sm-2 control-label" name="description">Descripción <span>*</span></label>
            
            <div class="col-sm-10">
              <textarea name="description" id="description" class="form-control" cols="30" rows="10"></textarea>
            </div>
            {{--/.col-sm-10--}}
          </div>
          {{--/.form-group    --}}
          
          <div>
            <div class="form-group nuevo_palabras">
              
              <label for="form_registro" name="word_key" class="col-sm-2 control-label">Palabra Clave <span>*</span></label>
              <div class="col-sm-10" id="inputs" >
                <input type="text" name="word_key" id="word_key" class="form-control" placeholder="Ingrese Palabras Claves">
                
              </div>
              {{--/.col-sm-10--}}
              
              
            </div>
            {{--/.form-group--}}
            <button type="button" class="btn btn-default col-md-offset-2" id="btn-agregar">Agregar</button>
            
          </div>
          <br>
          <button type="button" class="btn btn-primary" style="margin: 0 auto; width: 200px" id="btn_general">Siguiente</button>
        </div>
        {{--/.box--}}
        {{--CICLO DE VIDA--}}
        <div class="box box-body" id="ciclo_vida">
          <div class="box-header with-border">
            <h4 class="box-title" >Ciclo De Vida</h4>
          </div>
          <br>
          <div class="form-group">
            <label for="form_registro" class="col-sm-2 control-label" name="version"> Versión <span>*</span></label>
            
            <div class="col-sm-10">
              <input type="text" name="version" class="form-control" id="version" placeholder="Indique Versión por ejemplo: "24092004 2" (ddmmaaaa+numeroedición)">
            </div>
            {{--/.col-sm-10--}}
          </div>
          {{--/.form-group--}}
          <div class="form-group">
            <label for="form_registro" name="status" class="col-sm-2 control-label">Estado</label>
            <div class="col-sm-10">
              <select name="status" id="status" class="form-control">
                <option value="borrador">Borrado</option>
                <option value="final">Final</option>
                <option value="revision">Revision</option>
                <option value="nodisponible">No disponible</option>
              </select>
              
            </div>
            {{--/.COL-SM-10--}}
          </div>
          {{--/.form-group--}}
          <div class="container">
            <div class="content">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title">Colaboradores <span style="color: red;">*</span></h3>
                  <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" id="btn-add-contri">
                    <i class="fa fa-plus"></i></button>
                  </div>
                </div>
                <br>
                <div class="section_contri">
                  
                  <div class="form-group ">
                    <label for="form_registro" name="contribution_type" class="col-sm-2 control-label">Tipo de Contribución</label>
                    <div class="col-sm-10">
                      <select name="contri_type" id="" class="form-control">
                        <option value="autor">Autor</option>
                        <option value="revisor">Revisor</option>
                        <option value="desconocido">Desconocido</option>
                        <option value="indicador">Indicador</option>
                        <option value="terminador">Terminador</option>
                        <option value="editor">Editor</option>
                        <option value="escritor">Escritor</option>
                      </select>
                    </div>
                    {{--/.col-sm-10--}}
                  </div>
                  {{--/.form-group    --}}
                  <div class="form-group">
                    <div class="col-sm-3">
                      <label for="form_registro">Nombre <span>*</span></label>
                      <input type="text" name="contri_name" id="" class="form-control" placeholder="Ingrese Nombre">
                    </div>
                    {{--/.col-sm-3--}}
                    <div class="col-sm-3">
                      <label for="form_registro">Apellido<span>*</span></label>
                      <input type="text" name="contri_last_name" class="form-control" placeholder="Ingrese apellido">
                    </div>
                    {{--/.col-sm-3--}}
                    <div class="col-sm-3">
                      <label for="form_registro">Correo <span>*</span></label>
                      <input type="email" class="form-control" placeholder="Ingrese Correo" name="contri_email">
                    </div>
                    {{--/.col-sm-3--}}
                    <div class="col-sm-3">
                      <label for="form_registro">Organización <span>*</span></label>
                      <input type="text" class="form-control" name="contri_organization" placeholder="Ingrese Organización">
                    </div>
                    {{--/.col-sm-3--}}
                  </div>
                  {{--/.form-group--}}
                </div>
                <br>
              </div>
              {{--/.box    --}}
            </div>
            {{--/.content--}}
          </div>
          {{--/.container--}}
          <button type="button" class="btn btn-primary" style="margin: 0 auto; width: 200px;" id="btn_ciclo_vida">Siguiente</button>
        </div>
        {{--/.box--}}
        {{--EDUCATIVO--}}
        <div class="box box-body" id="educativo">
          <div class="box-header with-border">
            <h4 class="box-title" >Educativo</h4>
          </div>
          <div class="form-group">
            <label for="form_registro" name="learning_resource" class="col-sm-2 control-label">Recursos de Aprendizaje</label>
            <div class="col-sm-10">
              <div class="checkbox">
                <label>
                  <input type="checkbox" name="recurso_aprendizaje" value="evaluacion_prueba">
                  Evaluación y pruebas de material
                </label>
              </div>
              <div class="checkbox">
                <label>
                  <input type="checkbox" name="recurso_aprendizaje" value="tarea_cerrada">
                  Tarea Cerrada
                </label>
              </div>
              <div class="checkbox">
                <label>
                  <input type="checkbox" name="recurso_aprendizaje" value="tarea_abierta">
                  Tarea Abierta
                </label>
              </div>
              <div class="checkbox">
                <label>
                  <input type="checkbox" name="recurso_aprendizaje" value="material_investigacion">
                  Material de Investigación
                </label>
              </div>
              <div class="checkbox">
                <label>
                  <input type="checkbox" name="recurso_aprendizaje" value="manual">
                  Manual
                </label>
              </div>
              <div class="checkbox">
                <label>
                  <input type="checkbox" name="recurso_aprendizaje" value="fuente_informacion">
                  Fuente de Información
                </label>
              </div>
              <div class="checkbox">
                <label>
                  <input type="checkbox" name="recurso_aprendizaje" value="herramienta">
                  Herramienta
                </label>
              </div>
            </div>
            {{--/.col-sm-10--}}
          </div>
          {{--/.form-group--}}
          <div class="form-group">
            <label for="form_registro" class="col-sm-2 control-label">Rol de los Destinatarios</label>
            <div class="col-sm-10">
              <div class="checkbox">
                <label>
                  <input type="checkbox" name="rol_receptor" value="estudiante" >
                  Estudiante
                </label>
              </div>
              <div class="checkbox">
                <label>
                <input type="checkbox" name="rol_receptor" value="profesor" >
                  Profesor
                </label>
              </div>
              <div class="checkbox">
                <label>
                <input type="checkbox" name="rol_receptor" value="autor" >
                  Autor
                </label>
              </div>
              <div class="checkbox">
                <label>
                  <input type="checkbox" name="rol_receptor" value="gerente" >
                  Gerente
                </label>
              </div>
            </div>
            {{--/.col-sm-10--}}
          </div>
          {{--/.form-group--}}
          <div class="form-group">
            <label for="form_registro" class="col-sm-2 control-label" >Contexto <span style="color: red;">*</span></label>
            <div class="col-sm-10">
              <div class="checkbox">
                <label>
                  <input type="checkbox" name="contexto" value="educacion_infantil">
                  Educación Infantil
                </label>
              </div>
              <div class="checkbox">
                <label>
                <input type="checkbox" name="contexto" value="educacion_primaria">
                  Educación Primaria
                </label>
              </div>
              <div class="checkbox">
                <label>
                 <input type="checkbox" name="contexto" value="educacion_secundaria">
                  Educación Secundaria
                </label>
              </div>
              <div class="checkbox">
                <label>
                  <input type="checkbox" name="contexto" value="bachillerato">
                  Bachillerato
                </label>
              </div>
              <div class="checkbox">
                <label>
                  <input type="checkbox" name="contexto" value="formacion_profesional">
                  Formación Profesional
                </label>
              </div>
              <div class="checkbox">
                <label>
                  <input type="checkbox" name="contexto" value="estudios_universitarios">
                  Estudios Universitarios
                </label>
              </div>
              <div class="checkbox">
                <label>
                  <input type="checkbox" name="contexto" value="postgrados">
                  Postgrados
                </label>
              </div>
              <div class="checkbox">
                <label>
                  <input type="checkbox" name="contexto" value="formacion_empresa">
                  Formación de Empresas
                </label>
              </div>
            </div>
            {{--/.col-sm-10--}}
          </div>
          {{--/.form-group--}}
          <div class="form-group">
            <label for="form_registro" name="age_range" class="col-sm-2 control-label">Rango Típico de Edad</label>
            <div class="col-sm-10">
              <input type="number" class="form-control" name="age_range" id="age_range" placeholder="Edad de los destinatarios">
            </div>
            {{--/.col-sm-10--}}
          </div>
          {{--/.form-group    --}}
          <button type="button" class="btn btn-primary" style="margin: 0 auto; width: 200px;" id="btn_educativo" >Siguiente</button>
        </div>
        {{--/.box.box-body--}}
        {{--DERECHOS DE AUTOR--}}
        <div class="box box-body" id="derecho_autor">
          <div class="box-header with-border">
            <h4 class="box-title" >Derechos</h4>
          </div>
          <div class="form-group">
            <label for="form_registro" name="cost" class="col-sm-2 control-label">Coste <span style="color: red;">*</span></label>
            <div class="col-sm-10">
              <select name="cost" id="" class="form-control">
                <option name="cost" value="no">No</option>
                <option name="cost" value="si" default>Si</option>

              </select>
            </div>
            {{--/.col-sm-10--}}
          </div>
          {{--/.form-group--}}
          <div class="form-group">
            <label for="form_registro" class="col-sm-2 control-label">Derechos de Autor y otras Restricciones <span style="color: red;">*</span></label>
            <div class="col-sm-10">
              <select name="copyright" id="" class="form-control">
                <option name="copyright" value="no">No</option>
                <option name="copyright" value="si" default>Si</option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label for="form_registro" name="copyright_description" class="col-sm-2 control-label">Descripción de los derechos de Autor <span style="color: red;"></span> </label>
            <div class="col-sm-10">
              <textarea name="copyright_description" id="copyright_description" cols="30" rows="10" class="form-control"></textarea>
            </div>
            {{--/.col-sm-10--}}
          </div>
          {{--/.form-group--}}
          <br>
          {!! Form::submit('Finalizar',['class'=>'btn btn-primary','style'=>'margin: 0 auto;width: 200px;', 'id'=>'registrar']) !!}
        </div>
        {{--/.box box-body--}}
        {{--<div class="container form-group">--}}
          {{--<div class="row">--}}
            {{--<div class="col-sm-4">--}}
              {{--{!! Form::submit('Cancelar',['class'=>'btn btn-danger pull-right']) !!}--}}
            {{--</div>--}}
            {{--<div class="col-sm-4">--}}
              {{--{!! Form::submit('Registrar',['class'=>'btn btn-primary pull-right']) !!}--}}
            {{--</div>--}}
          {{--</div>--}}
        {{--</div>--}}
        {{--/.form-group--}}
        {{--<br>--}}
        <!--End Content Form-->
      </div>
      {{--/.box.box-primary--}}
      {!! Form::close() !!}
      <!--Fin Registro-->
    </div>
    {{--/.row--}}
  </div>
  {{--/.container--}}
  <div id="results"></div>
</section>
{{--/.content--}}
@endsection