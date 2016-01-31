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

                {!!Form::open(['class'=>'form-horizontal','id'=>'form_registro'])  !!}

               <br>

                <div class="box box-body" id="general_form">
                        <div class="box-header with-border">
                            <h4 class="box-title" >Aspectos Generales</h4>
                        </div>
                    <br>
                        <div class="form-group">
                                {!! Form::label('sistema', 'Sistema de Identificación',['class'=>'col-sm-2 control-label']) !!}
                             <div class="col-sm-10">
                                {!! Form::text('sistema',null,['class'=>'form-control','required'=>'required','placeholder'=>'Ingrese Sistema de Identificacion']) !!}
                             </div>
                            {{--/.col-sm-10--}}
                         </div>
                        {{--/.form-group--}}

                        <div class="form-group">
                                {!! Form::label('user_code', 'Código de Identificación',['class'=>'col-sm-2 control-label']) !!}
                            <div class="col-sm-10">
                                {!! Form::text('user_code',null,['class'=>'form-control','required'=>'required','placeholder'=>'Ingrese Código de Identificación']) !!}
                            </div>
                            {{--/.col-sm-10--}}
                        </div>
                        {{--/.form-group--}}

                        <div class="form-group">
                                 {!! Form::label('title', 'Título',['class'=>'col-sm-2 control-label']) !!}
                            <div class="col-sm-10">
                                {!! Form::text('title',null,['class'=>'form-control','required'=>'required','placeholder'=>'Divida del título y el subtitulo con ":" (espacio dos puntos)']) !!}
                            </div>
                            {{--/.col-sm-10--}}
                        </div>
                        {{--/.form-group--}}


                      <div class="form-group">
                                 {!! Form::label(null, 'Idioma',['class'=>'col-sm-2 control-label']) !!}
                          <div class="col-sm-10">
                                {!! Form::select(null,['E'=>'English','Es'=>'Español','O'=>'Otro'],'Es',['class'=>'form-control','required'=>'required']) !!}
                          </div>
                          {{--/.col-sm-10--}}
                      </div>
                     {{--/.form-group--}}

                        <div class="form-group">
                                {!! Form::label('description', 'Descripción',['class'=>'col-sm-2 control-label']) !!}
                            <div class="col-sm-10">
                                {!! Form::textarea('description',null,['class'=>'form-control','required'=>'required','placeholder'=>'Breve descripción']) !!}
                            </div>
                            {{--/.col-sm-10--}}
                        </div>
                        {{--/.form-group    --}}

                        <div class="form-group">
                                {!! Form::label('key_word','Palabras Clave',['class'=>'col-sm-2 control-label']) !!}

                            <div class="col-sm-10">
                                {!! Form::text('key_word',null,['class'=>'form-control','placeholder'=>'Ingrese Palabras Claves','id'=>'objetivoInput']) !!}
                                        <br>
                                {!! Form::button('Agregar',['class'=>'btn btn-default','id'=>'btn-agregar']) !!}
                            <div class="box-body">
                                <ul class="lista" id="lista">
                                    {{--Contenido de las palabras claves agregadas--}}
                                </ul>
                                {{--/.lista--}}
                            </div>
                            {{--/.box-body--}}
                            </div>
                            {{--/.col-sm-10--}}
                        </div>
                        {{--/.form-group--}}


                        {!! Form::button('Siguiente',['class'=>'btn btn-primary','style'=>'margin: 0 auto;width: 200px;', 'id'=>'btn_general']) !!}


                </div>
               {{--/.box--}}

                                                                                                    {{--CICLO DE VIDA--}}

               <div class="box box-body" id="ciclo_vida">

                   <div class="box-header with-border">
                       <h4 class="box-title" >Ciclo De Vida</h4>
                   </div>

                        <div class="form-group">
                                {!! Form::label('version', 'Versión',['class'=>'col-sm-2 control-label']) !!}
                            <div class="col-sm-10">
                                {!! Form::text('version',null,['class'=>'form-control','required'=>'required','placeholder'=>'Indique Versión por ejemplo: "24092004 2" (ddmmaaaa+numeroedición)']) !!}
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
                                <h3 class="box-title">Colaboradores</h3>

                                <div class="box-tools pull-right">

                                    <button type="button" class="btn btn-box-tool">
                                        <i class="fa fa-plus"></i></button>
                                </div>
                            </div>

                        <div class="form-group">
                                {!! Form::label('contribution_type', 'Tipo de Contribución',['class'=>'col-sm-2 control-label']) !!}
                            <div class="col-sm-10">
                                {!! Form::select('contribution_type',['A'=>'autor','R'=>'revisor','D'=>'desconocido','I'=>'Iniciador','T'=>'Terminador','E'=>'Editor','Es'=>'Escritor'],'Es',['class'=>'form-control','required'=>'required','placeholder'=>'Autor del contenido']) !!}
                            </div>
                            {{--/.col-sm-10--}}
                        </div>
                        {{--/.form-group    --}}

                        <div class="form-group">

                            <div class="col-sm-3">
                                {!! Form::label('contri_name','Nombre') !!}
                                {!! Form::text('contri_name',null,['class'=>'form-control','placeholder'=>'Ingrese Nombre']) !!}
                            </div>
                            {{--/.col-sm-3--}}

                            <div class="col-sm-3">
                                {!! Form::label('contri_lastname','Apellido') !!}
                                {!! Form::text('contri_lastname',null,['class'=>'form-control','placeholder'=>'Ingrese Apellido']) !!}
                            </div>
                            {{--/.col-sm-3--}}

                            <div class="col-sm-3">
                                {!! Form::label('contri_email','Correo') !!}
                                {!! Form::email('contri_email',null,['class'=>'form-control','placeholder'=>'Ingrese Correo']) !!}
                            </div>
                            {{--/.col-sm-3--}}

                            <div class="col-sm-3">
                                {!! Form::label('contri_organization','Organización') !!}
                                {!! Form::text('contri_organization',null,['class'=>'form-control','placeholder'=>'Ingrese Organización']) !!}
                            </div>
                            {{--/.col-sm-3--}}

                        </div>
                        {{--/.form-group--}}
                        <br>
                        </div>
                        {{--/.box    --}}
                        </div>
                        {{--/.content--}}
                        </div>
                        {{--/.container--}}


                        <div class="form-group">
                                {!! Form::label('organization', 'Organización',['class'=>'col-sm-2 control-label']) !!}
                            <div class="col-sm-10">
                             {!! Form::text('organization',null,['class'=>'form-control','required'=>'required','placeholder'=>'Organización de los autores asociados al contenido']) !!}
                            </div>
                            {{--/.col-sm-10--}}
                        </div>
                        {{--/.form-group--}}

                        <div class="form-group">
                                {!! Form::label('date_create', 'Fecha',['class'=>'col-sm-2 control-label']) !!}
                            <div class="col-sm-10">
                                {!! Form::date('date_create',null,['class'=>'form-control','required'=>'required','placeholder'=>'Fecha del Contenido educativo']) !!}
                            </div>
                            {{--/.col-sm-10--}}
                        </div>
                        {{--/.form-group--}}
                        <br>
                   {!! Form::button('Siguiente',['class'=>'btn btn-primary','style'=>'margin: 0 auto;width: 200px;', 'id'=>'btn_ciclo_vida']) !!}
                </div>
               {{--/.box--}}


                                                                                                        {{--EDUCATIVO--}}
               <div class="box box-body" id="educativo">

                   <div class="box-header with-border">
                       <h4 class="box-title" >Educativo</h4>
                   </div>


                        <div class="form-group">
                                 {!! Form::label('learning_resource','Recursos de Aprendizaje',['class'=>'col-sm-2 control-label']) !!}
                            <div class="col-sm-10">
                                <div class="checkbox">

                                    <label>
                                        {!! Form::checkbox('name', 'value', false) !!}
                                        Evaluación y pruebas de material
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        {!! Form::checkbox('name', 'value', false) !!}
                                        Tarea Cerrada
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        {!! Form::checkbox('name', 'value', false) !!}
                                        Tarea Abierta
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        {!! Form::checkbox('name', 'value', false) !!}
                                        Material de Investigación
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        {!! Form::checkbox('name', 'value', false) !!}
                                        Manual
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        {!! Form::checkbox('name', 'value', false) !!}
                                        Fuente de Información
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        {!! Form::checkbox('name', 'value', false) !!}
                                        Herramienta
                                    </label>
                                </div>

                            </div>
                            {{--/.col-sm-10--}}
                        </div>
                        {{--/.form-group--}}




                         <div class="form-group">
                                         {!! Form::label(null,'Rol de los destinatarios',['class'=>'col-sm-2 control-label']) !!}
                             <div class="col-sm-10">
                                  <div class="checkbox">

                                      <label>
                                         {!! Form::checkbox('name', 'value', false) !!}
                                             Estudiante
                                      </label>
                                 </div>
                                <div class="checkbox">
                                     <label>
                                      {!! Form::checkbox('name', 'value', false) !!}
                                          Profesor
                                     </label>
                                 </div>
                                 <div class="checkbox">
                                     <label>
                                       {!! Form::checkbox('name', 'value', false) !!}
                                          Autor
                                     </label>
                                 </div>
                                <div class="checkbox">
                                     <label>
                                       {!! Form::checkbox('name', 'value', false) !!}
                                          Gerente
                                    </label>
                                 </div>
                             </div>
                             {{--/.col-sm-10--}}
                         </div>
                         {{--/.form-group--}}



                         <div class="form-group">
                               {!! Form::label(null,'Contexto',['class'=>'col-sm-2 control-label']) !!}
                               <div class="col-sm-10">
                                   <div class="checkbox">

                                       <label>
                                           {!! Form::checkbox('name', 'value', false) !!}
                                           Educación Infantil
                                       </label>
                                   </div>
                                   <div class="checkbox">
                                       <label>
                                           {!! Form::checkbox('name', 'value', false) !!}
                                           Educación Primaria
                                       </label>
                                   </div>
                                   <div class="checkbox">
                                       <label>
                                           {!! Form::checkbox('name', 'value', false) !!}
                                           Educación Secundaria
                                       </label>
                                   </div>
                                   <div class="checkbox">
                                       <label>
                                           {!! Form::checkbox('name', 'value', false) !!}
                                           Bachillerato
                                       </label>
                                   </div>
                                   <div class="checkbox">
                                       <label>
                                           {!! Form::checkbox('name', 'value', false) !!}
                                           Formación Profesional
                                       </label>
                                   </div>
                                   <div class="checkbox">
                                       <label>
                                           {!! Form::checkbox('name', 'value', false) !!}
                                           Estudios Universitarios
                                       </label>
                                   </div>
                                   <div class="checkbox">
                                       <label>
                                           {!! Form::checkbox('name', 'value', false) !!}
                                           Postgrados
                                       </label>
                                   </div>
                                   <div class="checkbox">
                                       <label>
                                           {!! Form::checkbox('name', 'value', false) !!}
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
                                {!! Form::label('cost', 'Coste',['class'=>'col-sm-2 control-label']) !!}
                            <div class="col-sm-10">
                                {!! Form::select('cost',['N'=>'no','S'=>'si'],'S',['class'=>'form-control','required'=>'required']) !!}
                            </div>
                            {{--/.col-sm-10--}}
                        </div>
                        {{--/.form-group--}}

                        <div class="form-group">
                                {!! Form::label('copyright', 'Derechos de Autor y otras Restricciones',['class'=>'col-sm-2 control-label']) !!}
                            <div class="col-sm-10">
                                {!! Form::select('copyright',['N'=>'no','S'=>'si'],'S',['class'=>'form-control','required'=>'required']) !!}
                            </div>
                        </div>

                        <div class="form-group">
                                {!! Form::label('copyright_description', 'Descripción de los derechos de Autor',['class'=>'col-sm-2 control-label']) !!}
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
   </section>
    {{--/.content--}}

    @endsection