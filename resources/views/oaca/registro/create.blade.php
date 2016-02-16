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
                               <!-- {!! Form::label('identificador', 'Identificador',['class'=>'col-sm-2 control-label']) !!} -->
                               <label for="form_registro" class="col-sm-2 control-label">Identificador <span style="color: red;">*</span></label>
    
                             <div class="col-sm-10">
<!--                                 {!! Form::text('identificador',null,['class'=>'form-control','required'=>'required','placeholder'=>'Indique identificador']) !!} -->
                                    <input type="text" name="identificador" class="form-control" placeholder="Indique identificador" id="identificador">
                             </div>
                            {{--/.col-sm-10--}}
                         </div>
                        {{--/.form-group--}}


                        <div class="form-group">
<!--                                  {!! Form::label('title', 'Título*',['class'=>'col-sm-2 control-label']) !!} -->
                                        <label for="form_registro" name="title" class="col-sm-2 control-label">Título <span style="color:red;">*</span></label>
                                        
                            <div class="col-sm-10">
                               <!--  {!! Form::text('title',null,['class'=>'form-control','required'=>'required','placeholder'=>'Divida del título y el subtitulo con ":" (espacio dos puntos)']) !!} -->
                               <input type="text" class="form-control" placeholder="Divida del título y el subtitulo con ":"(espacio dos puntos)" id="title" name="title">
                            </div>
                            {{--/.col-sm-10--}}
                        </div>
                        {{--/.form-group--}}


                      <div class="form-group">
<!--                                  {!! Form::label(null, 'Idioma*',['class'=>'col-sm-2 control-label']) !!} -->
                                        <label for="form_registro" class="col-sm-2 control-label">Idioma <span style="color:red;">*</span></label>
                                        
                          <div class="col-sm-10">
                                <!-- {!! Form::select(null,['E'=>'English','Es'=>'Español','O'=>'Otro'],'Es',['class'=>'form-control','required'=>'required']) !!} -->
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
                                <!-- {!! Form::label('description', 'Descripción*',['class'=>'col-sm-2 control-label']) !!} -->
                                <label for="form_registro" class="col-sm-2 control-label" name="description">Descripción <span style="color:red;">*</span></label>
                                
                            <div class="col-sm-10">
                                <!-- {!! Form::textarea('description',null,['class'=>'form-control','required'=>'required','placeholder'=>'Breve descripción']) !!} -->
                                <!-- <input type="textarea" class="form-control" placeholder="Breve Descripción" id="description" name="description" > -->
                                <textarea name="description" form="form_registro" class="form-control"></textarea>
                            </div>
                            {{--/.col-sm-10--}}
                        </div>
                        {{--/.form-group    --}}

                
                <div>
                        <div class="form-group nuevo_palabras">
   
                                <!-- {!! Form::label('word_key','Palabra Clave*',['class'=>'col-sm-2 control-label']) !!} -->
                                <label for="form_registro" name="word_key" class="col-sm-2 control-label">Palabra Clave <span style="color:red;">*</span></label>

                            <div class="col-sm-10" id="inputs" >

                                <!-- {!! Form::text('word_key',null,['class'=>'form-control','placeholder'=>'Ingrese Palabras Claves','id'=>'objetivoInput']) !!} -->
                                <input type="text" name="word_key" id="word_key" class="form-control" placeholder="Ingrese Palabras Claves">

                       
                            </div>
                            {{--/.col-sm-10--}}
                            
                                
                        </div>
                        {{--/.form-group--}}

                                <!-- {!! Form::button('Agregar',['class'=>'btn btn-default col-md-offset-2','id'=>'btn-agregar']) !!} -->
                                <button type="button" class="btn btn-default col-md-offset-2" id="btn-agregar">Agregar</button>
                            
                        </div>
                        <br>
                        <!-- {!! Form::button('Siguiente',['class'=>'btn btn-primary','style'=>'margin: 0 auto;width: 200px;', 'id'=>'btn_general']) !!} -->
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
                                <!-- {!! Form::label('version', 'Versión*',['class'=>'col-sm-2 control-label']) !!} -->
                                <label for="form_registro" class="col-sm-2 control-label" name="version"> Versión <span style="color:red;">*</span></label>
                                
                            <div class="col-sm-10">
                                <!-- {!! Form::text('version',null,['class'=>'form-control','required'=>'required','placeholder'=>'Indique Versión por ejemplo: "24092004 2" (ddmmaaaa+numeroedición)']) !!} -->
                                <input type="text" name="version" class="form-control" id="version" placeholder="Indique Versión por ejemplo: "24092004 2" (ddmmaaaa+numeroedición)">

                            </div>
                            {{--/.col-sm-10--}}
                         </div>
                        {{--/.form-group--}}

                        <div class="form-group">
                                {!! Form::label('status', 'Estado',['class'=>'col-sm-2 control-label']) !!}
                            <div class="col-sm-10">
                                {!! Form::select('status',['B'=>'Borrador','F'=>'Final','R'=>'Revisión','N'=>'No Disponible'],'R',['class'=>'form-control','required'=>'required','placeholder'=>'Indique Versión por ejemplo: "24092004 2" (ddmmaaaa+numeroedición)']) !!}
                            </div>
                            {{--/.COL-SM-10--}}
                        </div>
                        {{--/.form-group--}}


                        <div class="container">
                        <div class="content">
                        <div class="box">


    

                            <div class="box-header with-border">
                                <h3 class="box-title">Colaboradores*</h3>

                                <div class="box-tools pull-right">

                                    <button type="button" class="btn btn-box-tool" id="btn-add-contri">
                                        <i class="fa fa-plus"></i></button>
                                </div>
                            </div>
                            <br>

<div class="section_contri">
    

                        <div class="form-group ">
                                {!! Form::label('contribution_type', 'Tipo de Contribución',['class'=>'col-sm-2 control-label']) !!}
                            <div class="col-sm-10">
                                {!! Form::select('contri_type',['A'=>'autor','R'=>'revisor','D'=>'desconocido','I'=>'Iniciador','T'=>'Terminador','E'=>'Editor','Es'=>'Escritor'],'Es',['class'=>'form-control','required'=>'required','placeholder'=>'Autor del contenido']) !!}
                            </div>
                            {{--/.col-sm-10--}}
                        </div>
                        {{--/.form-group    --}}

                        <div class="form-group">

                            <div class="col-sm-3">
                                {!! Form::label('contri_name','Nombre*') !!}
                                {!! Form::text('contri_name',null,['class'=>'form-control','placeholder'=>'Ingrese Nombre']) !!}
                            </div>
                            {{--/.col-sm-3--}}

                            <div class="col-sm-3">
                                {!! Form::label('contri_las_tname','Apellido*') !!}
                                {!! Form::text('contri_last_name',null,['class'=>'form-control','placeholder'=>'Ingrese Apellido']) !!}
                            </div>
                            {{--/.col-sm-3--}}

                            <div class="col-sm-3">
                                {!! Form::label('contri_email','Correo*') !!}
                                {!! Form::email('contri_email',null,['class'=>'form-control','placeholder'=>'Ingrese Correo']) !!}
                            </div>
                            {{--/.col-sm-3--}}

                            <div class="col-sm-3">
                                {!! Form::label('contri_organization','Organización*') !!}
                                {!! Form::text('contri_organization',null,['class'=>'form-control','placeholder'=>'Ingrese Organización']) !!}
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


                   {!! Form::button('Siguiente',['class'=>'btn btn-primary','style'=>'margin: 0 auto;width: 200px;', 'id'=>'btn_ciclo_vida']) !!}
                </div>
               {{--/.box--}}


                                                                                                        {{--EDUCATIVO--}}
               <div class="box box-body" id="educativo">

                   <div class="box-header with-border">
                       <h4 class="box-title" >Educativo</h4>
                   </div>


                        <div class="form-group">
                                 {!! Form::label('learning_resource','Recursos de Aprendizaje*',['class'=>'col-sm-2 control-label']) !!}
                            <div class="col-sm-10">
                                <div class="checkbox">

                                    <label>
                                        {!! Form::checkbox('recurso_aprendizaje', 'evaluacion_prueba', false) !!}
                                        Evaluación y pruebas de material
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        {!! Form::checkbox('recurso_aprendizaje', 'tarea_cerrada', false) !!}
                                        Tarea Cerrada
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        {!! Form::checkbox('recurso_aprendizaje', 'tarea_abierta', false) !!}
                                        Tarea Abierta
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        {!! Form::checkbox('recurso_aprendizaje', 'material_investigacion', false) !!}
                                        Material de Investigación
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        {!! Form::checkbox('recurso_aprendizaje', 'manual', false) !!}
                                        Manual
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        {!! Form::checkbox('recurso_aprendizaje', 'fuente_informacion', false) !!}
                                        Fuente de Información
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        {!! Form::checkbox('recurso_aprendizaje', 'herramienta', false) !!}
                                        Herramienta
                                    </label>
                                </div>

                            </div>
                            {{--/.col-sm-10--}}
                        </div>
                        {{--/.form-group--}}




                         <div class="form-group">
                                         {!! Form::label('rol_receptor','Rol de los destinatarios',['class'=>'col-sm-2 control-label']) !!}
                             <div class="col-sm-10">
                                  <div class="checkbox">

                                      <label>
                                         {!! Form::checkbox('rol_receptor', 'estudiante', false) !!}
                                             Estudiante
                                      </label>
                                 </div>
                                <div class="checkbox">
                                     <label>
                                      {!! Form::checkbox('rol_receptor', 'profesor', false) !!}
                                          Profesor
                                     </label>
                                 </div>
                                 <div class="checkbox">
                                     <label>
                                       {!! Form::checkbox('rol_receptor', 'autor', false) !!}
                                          Autor
                                     </label>
                                 </div>
                                <div class="checkbox">
                                     <label>
                                       {!! Form::checkbox('rol_receptor', 'gerente', false) !!}
                                          Gerente
                                    </label>
                                 </div>
                             </div>
                             {{--/.col-sm-10--}}
                         </div>
                         {{--/.form-group--}}



                         <div class="form-group">
                               {!! Form::label('contexto','Contexto*',['class'=>'col-sm-2 control-label']) !!}
                               <div class="col-sm-10">
                                   <div class="checkbox">

                                       <label>
                                           {!! Form::checkbox('contexto', 'educacion_infantil', false) !!}
                                           Educación Infantil
                                       </label>
                                   </div>
                                   <div class="checkbox">
                                       <label>
                                           {!! Form::checkbox('contexto', 'educacion_primaria', false) !!}
                                           Educación Primaria
                                       </label>
                                   </div>
                                   <div class="checkbox">
                                       <label>
                                           {!! Form::checkbox('contexto', 'educacion_secundaria', false) !!}
                                           Educación Secundaria
                                       </label>
                                   </div>
                                   <div class="checkbox">
                                       <label>
                                           {!! Form::checkbox('contexto', 'bachillerato', false) !!}
                                           Bachillerato
                                       </label>
                                   </div>
                                   <div class="checkbox">
                                       <label>
                                           {!! Form::checkbox('contexto', 'formacion_profesional', false) !!}
                                           Formación Profesional
                                       </label>
                                   </div>
                                   <div class="checkbox">
                                       <label>
                                           {!! Form::checkbox('contexto', 'estudios_universitarios', false) !!}
                                           Estudios Universitarios
                                       </label>
                                   </div>
                                   <div class="checkbox">
                                       <label>
                                           {!! Form::checkbox('contexto', 'postgrados', false) !!}
                                           Postgrados
                                       </label>
                                   </div>
                                   <div class="checkbox">
                                       <label>
                                           {!! Form::checkbox('contexto', 'value', false) !!}
                                           Formación de Empresas
                                       </label>
                                   </div>
                               </div>
                               {{--/.col-sm-10--}}
                         </div>
                           {{--/.form-group--}}

                           <div class="form-group">
                               {!! Form::label('age_range', 'Rango Típico de Edad',['class'=>'col-sm-2 control-label']) !!}
                               <div class="col-sm-10">
                                   {!! Form::number('age_range',null,['class'=>'form-control','required'=>'required','placeholder'=>'Edad de los destinatarios ']) !!}
                               </div>
                               {{--/.col-sm-10--}}
                           </div>
                           {{--/.form-group    --}}
                   {!! Form::button('Siguiente',['class'=>'btn btn-primary','style'=>'margin: 0 auto;width: 200px;', 'id'=>'btn_educativo']) !!}
               </div>
               {{--/.box.box-body--}}




                                                                                  {{--DERECHOS DE AUTOR--}}


               <div class="box box-body" id="derecho_autor">

                   <div class="box-header with-border">
                       <h4 class="box-title" >Derechos</h4>
                   </div>


                        <div class="form-group">
                                {!! Form::label('cost', 'Coste*',['class'=>'col-sm-2 control-label']) !!}
                            <div class="col-sm-10">
                                {!! Form::select('cost',['N'=>'no','S'=>'si'],'S',['class'=>'form-control','required'=>'required']) !!}
                            </div>
                            {{--/.col-sm-10--}}
                        </div>
                        {{--/.form-group--}}

                        <div class="form-group">
                                {!! Form::label('copyright', 'Derechos de Autor y otras Restricciones*',['class'=>'col-sm-2 control-label']) !!}
                            <div class="col-sm-10">
                                {!! Form::select('copyright',['N'=>'no','S'=>'si'],'S',['class'=>'form-control','required'=>'required']) !!}
                            </div>
                        </div>

                        <div class="form-group">
                                {!! Form::label('copyright_description', 'Descripción de los derechos de Autor*',['class'=>'col-sm-2 control-label']) !!}
                            <div class="col-sm-10">
                                {!! Form::textarea('copyright_description',null,['class'=>'form-control','required'=>'required','placeholder'=>'Descripción del estado de los derechos de autor del contenido']) !!}
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