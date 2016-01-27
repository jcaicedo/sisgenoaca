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

                {!!Form::open(['route'=>'registro','method'=>'post','class'=>'form-horizontal'])  !!}

               <br>

                <div class="box box-body">
                        <div class="box-header with-border">
                            <h4 class="box-title" >Aspectos Generales</h4>
                        </div>
                    <br>
                        <div class="form-group">
                                {!! Form::label(null, 'Sistema de Identificación',['class'=>'col-sm-2 control-label']) !!}
                             <div class="col-sm-10">
                                {!! Form::text(null,null,['class'=>'form-control','required'=>'required','placeholder'=>'Ingrese Nombre']) !!}
                             </div>
                            {{--/.col-sm-10--}}
                         </div>
                        {{--/.form-group--}}

                        <div class="form-group">
                                {!! Form::label(null, 'Código de Identificación',['class'=>'col-sm-2 control-label']) !!}
                            <div class="col-sm-10">
                                {!! Form::text(null,null,['class'=>'form-control','required'=>'required','placeholder'=>'Ingrese Nombre']) !!}
                            </div>
                            {{--/.col-sm-10--}}
                        </div>
                        {{--/.form-group--}}

                        <div class="form-group">
                                 {!! Form::label(null, 'Título',['class'=>'col-sm-2 control-label']) !!}
                            <div class="col-sm-10">
                                {!! Form::text(null,null,['class'=>'form-control','required'=>'required','placeholder'=>'Divida del título y el subtitulo con ":" (espacio dos puntos']) !!}
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
                                {!! Form::label(null, 'Descripción',['class'=>'col-sm-2 control-label']) !!}
                            <div class="col-sm-10">
                                {!! Form::textarea(null,null,['class'=>'form-control','required'=>'required','placeholder'=>'Breve descripción']) !!}
                            </div>
                            {{--/.col-sm-10--}}
                        </div>
                        {{--/.form-group    --}}

                        <div class="form-group">
                                {!! Form::label('null','Palabras Clave',['class'=>'col-sm-2 control-label']) !!}

                            <div class="col-sm-10">
                                {!! Form::text(null,null,['class'=>'form-control','placeholder'=>'Ingrese Palabra Clave','id'=>'objetivoInput']) !!}
                                        <br>
                                {!! Form::button('Agregar',['class'=>'btn btn-primary','id'=>'btn-agregar']) !!}
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

                </div>
               {{--/.box--}}

                                                                                                    {{--CICLO DE VIDA--}}

               <div class="box box-body">

                   <div class="box-header with-border">
                       <h4 class="box-title" >Ciclo De Vida</h4>
                   </div>

                        <div class="form-group">
                                {!! Form::label(null, 'Versión',['class'=>'col-sm-2 control-label']) !!}
                            <div class="col-sm-10">
                                {!! Form::text(null,null,['class'=>'form-control','required'=>'required','placeholder'=>'Indique Versión por ejemplo: "24092004 2" (ddmmaaaa+numeroedición)']) !!}
                            </div>
                            {{--/.col-sm-10--}}
                         </div>
                        {{--/.form-group--}}

                        <div class="form-group">
                                {!! Form::label(null, 'Estado',['class'=>'col-sm-2 control-label']) !!}
                            <div class="col-sm-10">
                                {!! Form::select(null,['B'=>'Borrador','F'=>'Final','R'=>'Revisión','N'=>'No Disponible'],'R',['class'=>'form-control','required'=>'required','placeholder'=>'Indique Versión por ejemplo: "24092004 2" (ddmmaaaa+numeroedición)']) !!}
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
                                {!! Form::label(null, 'Tipo de Contribución',['class'=>'col-sm-2 control-label']) !!}
                            <div class="col-sm-10">
                                {!! Form::select(null,['A'=>'autor','R'=>'revisor','D'=>'desconocido','I'=>'Iniciador','T'=>'Terminador','E'=>'Editor','Es'=>'Escritor'],'Es',['class'=>'form-control','required'=>'required','placeholder'=>'Autor del contenido']) !!}
                            </div>
                            {{--/.col-sm-10--}}
                        </div>
                        {{--/.form-group    --}}

                        <div class="form-group">

                            <div class="col-sm-3">
                                {!! Form::label(null,'Nombre') !!}
                                {!! Form::text(null,null,['class'=>'form-control','placeholder'=>'Ingrese Nombre']) !!}
                            </div>
                            {{--/.col-sm-3--}}

                            <div class="col-sm-3">
                                {!! Form::label(null,'Apellido') !!}
                                {!! Form::text(null,null,['class'=>'form-control','placeholder'=>'Ingrese Apellido']) !!}
                            </div>
                            {{--/.col-sm-3--}}

                            <div class="col-sm-3">
                                {!! Form::label(null,'Correo') !!}
                                {!! Form::email(null,null,['class'=>'form-control','placeholder'=>'Ingrese Correo']) !!}
                            </div>
                            {{--/.col-sm-3--}}

                            <div class="col-sm-3">
                                {!! Form::label(null,'Organización') !!}
                                {!! Form::text(null,null,['class'=>'form-control','placeholder'=>'Ingrese Organización']) !!}
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
                                {!! Form::label(null, 'Organización',['class'=>'col-sm-2 control-label']) !!}
                            <div class="col-sm-10">
                             {!! Form::text(null,null,['class'=>'form-control','required'=>'required','placeholder'=>'Organización de los autores asociados al contenido']) !!}
                            </div>
                            {{--/.col-sm-10--}}
                        </div>
                        {{--/.form-group--}}

                        <div class="form-group">
                                {!! Form::label(null, 'Fecha',['class'=>'col-sm-2 control-label']) !!}
                            <div class="col-sm-10">
                                {!! Form::date(null,null,['class'=>'form-control','required'=>'required','placeholder'=>'Fecha del Contenido educativo']) !!}
                            </div>
                            {{--/.col-sm-10--}}
                        </div>
                        {{--/.form-group--}}
                        <br>
                </div>
               {{--/.box--}}
                                                                                                        {{--EDUCATIVO--}}
               <div class="box box-body">

                   <div class="box-header with-border">
                       <h4 class="box-title" >Educativo</h4>
                   </div>


                        <div class="form-group">
                                 {!! Form::label(null,'Recursos de Aprendizaje',['class'=>'col-sm-2 control-label']) !!}
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
                               {!! Form::label(null, 'Rango Típico de Edad',['class'=>'col-sm-2 control-label']) !!}
                               <div class="col-sm-10">
                                   {!! Form::number(null,null,['class'=>'form-control','required'=>'required','placeholder'=>'Edad de los destinatarios ']) !!}
                               </div>
                               {{--/.col-sm-10--}}
                           </div>
                           {{--/.form-group    --}}

               </div>
               {{--/.box.box-body--}}




                                                                                  {{--DERECHOS DE AUTOR--}}


               <div class="box box-body">

                   <div class="box-header with-border">
                       <h4 class="box-title" >Derechos</h4>
                   </div>


                        <div class="form-group">
                                {!! Form::label(null, 'Coste',['class'=>'col-sm-2 control-label']) !!}
                            <div class="col-sm-10">
                                {!! Form::select(null,['N'=>'no','S'=>'si'],'S',['class'=>'form-control','required'=>'required']) !!}
                            </div>
                            {{--/.col-sm-10--}}
                        </div>
                        {{--/.form-group--}}

                        <div class="form-group">
                                {!! Form::label(null, 'Derechos de Autor y otras Restricciones',['class'=>'col-sm-2 control-label']) !!}
                            <div class="col-sm-10">
                                {!! Form::select(null,['N'=>'no','S'=>'si'],'S',['class'=>'form-control','required'=>'required']) !!}
                            </div>
                        </div>

                        <div class="form-group">
                                {!! Form::label(null, 'Descripción de los derechos de Autor',['class'=>'col-sm-2 control-label']) !!}
                            <div class="col-sm-10">
                                {!! Form::textarea(null,null,['class'=>'form-control','required'=>'required','placeholder'=>'Descripción del estado de los derechos de autor del contenido']) !!}
                            </div>
                            {{--/.col-sm-10--}}
                        </div>
                        {{--/.form-group--}}
                        <br>

               </div>
                {{--/.box--}}

                        <div class="container form-group">
                            <div class="row">


                            <div class="col-sm-4">
                                {!! Form::submit('Cancelar',['class'=>'btn btn-danger pull-right']) !!}
                            </div>
                           <div class="col-sm-4">
                               {!! Form::submit('Registrar',['class'=>'btn btn-primary pull-right']) !!}
                           </div>
                            </div>
                        </div>
                        {{--/.form-group--}}
               <br>


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