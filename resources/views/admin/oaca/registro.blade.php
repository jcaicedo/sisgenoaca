@extends('admin.layouts.default')
@section('title','Registro OACA')
@section('content')

<div class="content-wrapper">
	<section class="content-header">
		<h1>
		Registro OACA
		</h1>
	</section>
	 <!--Inicio de Registor-->

   <section class="content">
     

<div class="row">
  <div class="col-sm-8 col-sm-offset-2">
    
<form action="#" method="post" id="form_registro" role="form">
  
  {{ csrf_field() }}


<div class="box box-primary">
              <div class="box-header with-border">
              <h3 class="box-title">Aspectos Generales</h3>
            </div>
            <!-- /.box-header -->

            <div class="box-body">
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
            </div>
            <div class="box-footer">

                        <button type="button" class="btn btn-primary pull-right" style="margin: 0 auto; width: 200px" id="btn_general">Siguiente</button>
            </div>

</div>

</form>







  </div>
</div>


   </section>




</div>

		


@endsection