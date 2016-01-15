@extends('layouts.encabezado')

@section('content')

    <div class="container">
        <h2>Generador</h2>
    </div>


    <div class="container">
        <div class="row">
            <div class="col col-md-6 col-md-offset-3">
                <div class="panel panel-default">
                    <div class="panel-body">
                        {!! Form::open(['route'=>'registro','method'=>'post']) !!}

                        <h3>Datos de Identificación</h3>
                        <br>
                        <div class="form-group">
                            {!! Form::label('nombreoaca', 'Nombre del OACA') !!}
                            {!! Form::text('nombreoaca',null,['class'=>'form-control','required'=>'required']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('areaconocimiento', 'Area de Conocimiento') !!}
                            {!! Form::text('areaconocimiento',null,['class'=>'form-control','required'=>'required']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('subareaconocimiento', 'Sub-Area de Conocimiento') !!}
                            {!! Form::text('subareaconocimiento',null,['class'=>'form-control','required'=>'required']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('idioma', 'Idioma') !!}
                            {!! Form::text('idioma',null,['class'=>'form-control','required'=>'required']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('lugar_origen', 'Lugar de Origen') !!}
                            {!! Form::text('lugar_origen',null,['class'=>'form-control','required'=>'required']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('fecha_creacion', 'Fecha de Creacion') !!}
                            {!! Form::date('fecha_creacion',null,['class'=>'form-control','required'=>'required']) !!}
                        </div>

                        <br>

                        <h3>Aspectos Pedagógicos</h3>
                        <br>

                        <h2>Intencionalidad de Aprendizaje</h2>
                        <br>

                        <div class="form-group">
                            {!! Form::label('obj_gen','Objetivo General') !!}
                            {!! Form::text('obj_gen',null,['class'=>'form-control','required','required']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('obj_espcifico','Objetivo Especifico') !!}
                            {!! Form::text('obj_especifico',null,['class'=>'form-control','required','required']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('contexto','Contexto') !!}
                            {!! Form::text('contexto',null,['class'=>'form-control','required','required']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('audiencia','Audiencia') !!}
                            {!! Form::text('audiencia',null,['class'=>'form-control','required','required']) !!}
                        </div>


                        {!! Form::close() !!}



                    </div>
                </div>
            </div>

        </div>
    </div>



   @endsection