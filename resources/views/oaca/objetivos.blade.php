@extends('layouts.head_dev')

@section('title','Create')

@section('content')
<div class="container">
    <div class="row">

        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Objetivos</h3>
            </div>

            <div class="box-body">
                    {!! Form::open(['role'=>'form']) !!}
                        <div class="form-group">
                            {!! Form::label('null','Objetivo General') !!}
                            {!! Form::text(null,null,['class'=>'form-control','placeholder'=>'Ingrese Objetivo General']) !!}
                        </div>

                    {!! Form::close() !!}
            </div>

            <div class="box-body">
                {!! Form::open(['role'=>'form']) !!}
                <div class="form-group">
                    {!! Form::label('null','Objetivos Especificos') !!}
                    {!! Form::text(null,null,['class'=>'form-control','placeholder'=>'Ingrese Objetivo Especifico','id'=>'objetivoInput']) !!}
                </div>
                <div class="form-group">
                    {!! Form::button('Agregar',['class'=>'btn btn-primary','id'=>'btn-agregar']) !!}
                </div>

                {!! Form::close() !!}
            </div>

            <div class="box-body">
                <ul class="lista" id="lista">

                </ul>
            </div>


            </div>


        </div>



    </div>
</div>







    @endsection
