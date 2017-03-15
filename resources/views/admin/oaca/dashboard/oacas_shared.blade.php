@extends('admin.layouts.default')
@section('title',trans('admin.createOaca'))
  @section('content')

    <div class="content-wrapper">

      <section class="content-header">
        <h1>{{trans('admin.dashboard')}}</h1>
        <ol class="breadcrumb">
          <li>
            <a href="#">
              <i class="fa fa-dashboard"></i>
              Inicio
            </a>
          </li>
          <li class="active">
            OACAS Compartidos
          </li>
        </ol>
      </section>

      <section class="content">
        <div class="row">
          <div class="col-xs-12">
          <div class="box box-primary">

            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th>Titulo</th>
                  <th>Status</th>
                  <th>Fecha Creación</th>
                  <th>Última Actualización</th>
                  <th>&nbsp;</th>
                </tr>
                <tr>
                	@foreach($registrys as $key=>$registry)
                    <tr>
                      <td>
                        {{$registry->title_oaca}}
                      </td>
                      <td>
                        <a href="">
                          <span class="label label-{{$registry->status == 'active'?'success':'warning'}}">
                            {{$registry->status =='active'?'Activo':'Pendiente'}}
                          </span>
                        </a>
                      </td>
                      <td>
                        {{$registry->created_at->format('d/m/Y')}}
                      </td>
                      <td>
                        {{ $registry->updated_at->format('d/m/Y') }}
                      </td>
                      <td class="text-right">
                        <a href="{{ url("admin/oaca/registry/edit/{$registry->id}") }}" class="btn btn-sm btn-default">
                          <i class="fa fa-edit"></i>
                        </a>
                        <a href="{{ url("admin/oaca/objetos/edit-motivation/{$registry->id}") }}" class="btn btn-sm btn-default">
                          <i class="fa fa-newspaper-o"></i>
                        </a>
                        <a href="{{ url("oaca/view/{$registry->id}")}}" class="btn btn-default" target="_blank">
                          <i class="fa fa-desktop"></i>
                        </a>
                        {{-- <a href="{{ url("admin/oaca/registry/{$registry->id}/delete")}}" class="btn btn-default">
                          <i class="fa fa-trash-o"></i>
                        </a> --}}
                        {{-- <a href="{{ url("oaca/view/{$registry->id}")}}" class="btn btn-default">
                          <i class="fa fa-desktop"></i>
                        </a> --}}
                      </td>
                    </tr>
                  @endforeach
                </tr>
              </table>
            </div>
          </div>
          </div>
        </div>
      </section>

    </div>

  @endsection
