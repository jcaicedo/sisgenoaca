@extends('admin.layouts.default')
@section('title','Listar Usuarios')
@section('content')
  <div class="content-wrapper">
    <section class="content-header">
      <h1>Editar Usuario</h1>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-md-12">
        <div class="box box-primary">
          <form class="" action="{{url("/admin/superadmin/edit-user")}}" method="post">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="hidden" name="id_user" value="{{$user->id}}">
            <div class="box-body">
              <div class="form-group">
                <label for="name">Nombre</label>
                <input type="text" name="name" class="form-control" value="{{$user->name}}">
              </div>
              <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" class="form-control" value="{{$user->username}}">
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="text" name="email" class="form-control" value="{{$user->email}}">
              </div>
            </div>
            <div class="box-footer">
              <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
          </form>
        </div>
        </div>
      </div> <!--./row-->
    </section>
  </div>
@endsection
