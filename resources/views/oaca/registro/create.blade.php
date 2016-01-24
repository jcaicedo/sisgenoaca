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

                                                                                                                                                        {{--CICLO DE VIDA--}}


                    <br>
                    <h4 class="box-title">Ciclo de Vida</h4>
                    <br>
               <div class="form-group">
                   {!! Form::label(null, 'Versión',['class'=>'col-sm-2 control-label']) !!}

                   <div class="col-sm-10">
                       {!! Form::text(null,null,['class'=>'form-control','required'=>'required','placeholder'=>'Indique Versión por ejemplo: "24092004 2" (ddmmaaaa+numeroedición)']) !!}
                   </div>

               </div>

               <div class="form-group">
                   {!! Form::label(null, 'Estado',['class'=>'col-sm-2 control-label']) !!}

                   <div class="col-sm-10">
                       {!! Form::select(null,['B'=>'Borrador','F'=>'Final','R'=>'Revisión','N'=>'No Disponible'],'R',['class'=>'form-control','required'=>'required','placeholder'=>'Indique Versión por ejemplo: "24092004 2" (ddmmaaaa+numeroedición)']) !!}
                   </div>

               </div>
<div class="container">
    <div class="content">
        <div class="box">
            <br>
            <div class="form-group">
                {!! Form::label(null, 'Tipo de Contribución',['class'=>'col-sm-2 control-label']) !!}

                <div class="col-sm-10">
                    {!! Form::select(null,['A'=>'autor','R'=>'revisor','D'=>'desconocido','I'=>'Iniciador','T'=>'Terminador','E'=>'Editor','Es'=>'Escritor'],'Es',['class'=>'form-control','required'=>'required','placeholder'=>'Autor del contenido']) !!}
                </div>

            </div>

            <div class="form-group">
                <div class="col-sm-3">
                    {!! Form::label(null,'Nombre') !!}
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">

                </div>
                <div class="col-sm-3">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">

                </div>
                <div class="col-sm-3">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">

                </div>
                <div class="col-sm-3">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">

                </div>

            </div>



            <br>


        </div>

    </div>
</div>






                    <div class="form-group">
                        {!! Form::label(null, 'Organización',['class'=>'col-sm-2 control-label']) !!}

                        <div class="col-sm-10">
                            {!! Form::text(null,null,['class'=>'form-control','required'=>'required','placeholder'=>'Organización de los autores asociados al contenido']) !!}
                        </div>

                    </div>

                    <div class="form-group">
                        {!! Form::label(null, 'Fecha',['class'=>'col-sm-2 control-label']) !!}

                        <div class="col-sm-10">
                            {!! Form::date(null,null,['class'=>'form-control','required'=>'required','placeholder'=>'Fecha del Contenido educativo']) !!}
                        </div>

                    </div>

                                                                                                                                                           {{--DERECHOS DE AUTOR--}}


                    <br>
                    <h4 class="box-title">Derechos</h4>
                    <br>

                    <div class="form-group">
                        {!! Form::label(null, 'Coste',['class'=>'col-sm-2 control-label']) !!}

                        <div class="col-sm-10">

                            {!! Form::select(null,['N'=>'no','S'=>'si'],'S',['class'=>'form-control','required'=>'required']) !!}
                        </div>

                    </div>


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