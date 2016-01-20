@extends('layouts.encabezado')

@section('content')

<h1>Generando OACA</h1>

    <div class="container">
        <div class="row">
            <div class="col-lg-1">
                <h3>Botones</h3>
                <button class="btn btn-default" data-toggle="modal" data-target="#AgregarTexto">Agregar Texto</button>
                <button class="btn btn-default">Agregar Elemento</button>

            </div>
        </div>
    </div>

    {{--Modal Agregar Texto--}}

    <div class="modal fade" id="AgregarTexto" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">

            <div class="modal-content">
                <div class="modal-header">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Nuevo Contenido</h4>
                </div>

                <div class="modal-body">

                    <form action="">
                        <div class="form-group">
                            <label for="titulo" class="control-label">Titulo</label>
                            <input type="text" class="form-control" id="recipient-titulo">
                        </div>

                        <div class="form-group">
                            <label for="text" class="control-label">Contenido</label>
                            <textarea class="form-control" id="text-content"></textarea>
                        </div>


                    </form>
                    
                    
                </div>

                <div class="modal-footer">
                    <button class="btn btn-default" type="button" data-dismiss="modal">Close</button>
                    <button class="btn btn-primary" type="button">Save changes</button>
                </div>



            </div>
        </div>

    </div>







    @endsection
