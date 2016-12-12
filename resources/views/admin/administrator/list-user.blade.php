@extends('admin.layouts.default')
@section('title','Listar Usuarios')
@section('content')

  <div class="content-wrapper">
    <section class="cotent-header">
      @if (session('status'))
    <div class="alert alert-success">
       <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
        {{ session('status') }}
    </div>
    @endif
    </section>
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Lista de Usuarios</h3>
              <div class="box-tools">
                <div class="input-group input-group-sm" style="width:150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">
                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default">
                      <i class="fa fa-search"></i>
                    </button>
                  </div>
                </div>
              </div>
            </div>
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tbody>
                  <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Rol</th>
                    <th>&nbsp;</th>
                  </tr>
                  @foreach ($users as $key => $user)
                    <tr>
                      <td>{{$user->id}} </td>
                      <td>{{$user->name}}</td>
                      <td>{{$user->email}}</td>
                      <td>{{App\Models\Roles::getNameRole($user->role)}}</td>
                      <td class="text-right">
                        <a href="{{url("/admin/superadmin/edit-user/{$user->id}")}}" class="btn btn-sm btn-default" data-toggle="tooltip" title="Editar Usuario!">
                          <i class="fa fa-edit"></i>
                        </a>
                      </td>

                    </tr>
                  @endforeach

                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection
@push('scripts')
<script charset="utf-8">
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
});
</script>
@endpush
