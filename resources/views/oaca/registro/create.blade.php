@extends('layouts.head_dev')

@section('title','Create Registro')

@section('content')

   <section class="content">
       <div class="container">
       <div class="row">
           <div class="box box-primary">
               <div class="box-header with-border">
                   <h1 class="box-title">Registro Oaca</h1>
               </div>
               <!--/.box-header-->

               <!--Inicio de Registor-->

                {!!Form::open(['route'=>'registro','method'=>'post','class'=>'form-horizontal'])  !!}
                <div class="box-body">

                    <h4 class="box-title">Aspectos Generales</h4>
                    <br>

                    <!--Content Form-->
              <div class="form-group">
                   {!! Form::label(null, 'Sistema de Identificación',['class'=>'col-sm-2 control-label']) !!}
                   <div class="col-sm-10">
                   {!! Form::text(null,null,['class'=>'form-control','required'=>'required','placeholder'=>'Ingrese Nombre']) !!}
                   </div>
               </div>

               <div class="form-group">
                   {!! Form::label(null, 'Código de Identificación',['class'=>'col-sm-2 control-label']) !!}
                   <div class="col-sm-10">
                   {!! Form::text(null,null,['class'=>'form-control','required'=>'required','placeholder'=>'Ingrese Nombre']) !!}
                   </div>
               </div>


               <div class="form-group">
                   {!! Form::label(null, 'Título',['class'=>'col-sm-2 control-label']) !!}
                   <div class="col-sm-10">
                   {!! Form::text(null,null,['class'=>'form-control','required'=>'required','placeholder'=>'Divida del título y el subtitulo con ":" (espacio dos puntos']) !!}
                   </div>
               </div>

               <div class="form-group">
                   {!! Form::label(null, 'Descripción',['class'=>'col-sm-2 control-label']) !!}

                   <div class="col-sm-10">
                       {!! Form::text(null,null,['class'=>'form-control','required'=>'required','placeholder'=>'Breve descripción']) !!}
                   </div>

               </div>

                <div class="form-group">
                    {!! Form::label('null','Palabras Clave',['class'=>'col-sm-2 control-label']) !!}

                    <div class="col-sm-10">
                        {!! Form::text(null,null,['class'=>'form-control','placeholder'=>'Ingrese Palabra Clave','id'=>'objetivoInput']) !!}
                        {!! Form::button('Agregar',['class'=>'btn btn-primary','id'=>'btn-agregar']) !!}
                        <div class="box-body">
                            <ul class="lista" id="lista">

                            </ul>
                        </div>
                    </div>
                </div>

               <div class="form-group">
                   {!! Form::label(null, 'Versión',['class'=>'col-sm-2 control-label']) !!}

                   <div class="col-sm-10">
                       {!! Form::text(null,null,['class'=>'form-control','required'=>'required','placeholder'=>'Indique Versión por ejemplo: "24092004 2" (ddmmaaaa+numeroedición)']) !!}
                   </div>

               </div>

               <div class="form-group">
                   {!! Form::label(null, 'Estado',['class'=>'col-sm-2 control-label']) !!}

                   <div class="col-sm-10">
                       {!! Form::select(null,['Borrador','Final','Revisión','No Disponible'],['class'=>'form-control','required'=>'required','placeholder'=>'Indique Versión por ejemplo: "24092004 2" (ddmmaaaa+numeroedición)']) !!}
                   </div>

               </div>






               <div class="form-group">
                   {!! Form::label('areaconocimiento', 'Area de Conocimiento',['class'=>'col-sm-2 control-label']) !!}

                   <div class="col-sm-10">
                       {!! Form::text('areaconocimiento',null,['class'=>'form-control','required'=>'required','placeholder'=>'Ingrese Area de Conocimiento']) !!}
                   </div>

               </div>
                    <div class="form-group">
                        {!! Form::label('subareaconocimiento', 'Sub-Area de Conocimiento',['class'=>'col-sm-2 control-label']) !!}

                        <div class="col-sm-10">
                            {!! Form::text('subareaconocimiento',null,['class'=>'form-control','required'=>'required','placeholder'=>'Ingrese Area de Conocimiento']) !!}
                        </div>
                    </div>

                    <div class="form-group">
                        {!! Form::label('idioma', 'Idioma',['class'=>'col-sm-2 control-label']) !!}

                        <div class="col-sm-10">
                            {!! Form::text('idioma',null,['class'=>'form-control','required'=>'required','placeholder'=>'Ingrese Idioma']) !!}

                        </div>

                    </div>

                    <div class="form-group">
                        {!! Form::label('origen', 'Lugar de Origen',['class'=>'col-sm-2 control-label']) !!}

                        <div class="col-sm-10">
                            {!! Form::text('origen',null,['class'=>'form-control','required'=>'required','placeholder'=>'Ingrese Lugar de Origen']) !!}
                        </div>
                    </div>

                    <br>

                    <h4 class="box-title">Aspectos Pedagógicos</h4>
                    <h4 class="box-title">Intencionalidad de Aprendizaje</h4>
                    <br>


                    <div class="form-group">
                        {!! Form::label('objetivogeneral','Objetivo General',['class'=>'col-sm-2 control-label']) !!}

                        <div class="col-sm-10">
                            {!! Form::text('objetivogeneral',null,['class'=>'form-control','required','required','placeholder'=>'Ingrese Objetivo General']) !!}
                        </div>

                    </div>

                    <div class="form-group">
                        {!! Form::label('null','Objetivos Especificos',['class'=>'col-sm-2 control-label']) !!}

                        <div class="col-sm-10">
                            {!! Form::text(null,null,['class'=>'form-control','placeholder'=>'Ingrese Objetivo Especifico','id'=>'objetivoInput']) !!}
                            {!! Form::button('Agregar',['class'=>'btn btn-primary','id'=>'btn-agregar']) !!}
                            <div class="box-body">
                                <ul class="lista" id="lista">

                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        {!! Form::label('contexto','Contexto',['class'=>'col-sm-2 control-label']) !!}

                        <div class="col-sm-10">
                            {!! Form::text('contexto',null,['class'=>'form-control','required','required','placeholder'=>'Ingrese Contexto']) !!}
                        </div>

                    </div>

                    <div class="form-group">
                        {!! Form::label('audiencia','Audiencia',['class'=>'col-sm-2 control-label']) !!}

                        <div class="col-sm-6">
                            {!! Form::text('audiencia',null,['class'=>'form-control','required','required','placeholder'=>'Especifique Audiencia']) !!}
                        </div>

                    </div>

                    <div class="form-group">
                        {!! Form::submit('Siguiente',['class'=>'btn btn-info pull-right']) !!}
                    </div>




                    <!--End Content Form-->
                </div>

                        {!! Form::close() !!}

               <!--Fin Registro-->

           </div>
       </div>
       </div>
   </section>


    @endsection