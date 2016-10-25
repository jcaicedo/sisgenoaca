<!---CICLO DE VIDA-->

<div class="box-body nomostrar" id="lifecycle">
  <h4>{{trans('admin.lifecycle')}}</h4>
  <br>
  <div class="form-group col-xs-12 col-sm-6">
    <label for="version">{{trans('admin.version')}}<span> *</span></label>
    <input type="text" class="form-control" id="version" name="version" placeholder="{{trans('admin.placeholderVersion')}}" value="{{$content_register->version}}">
  </div>

  <div class="form-group col-xs-12 col-sm-6">
    <label for="state">{{trans('admin.state')}}<span> *</span></label>
    <div>
      <select name="state" id="state" class="form-control" required="">
        <option value="borrador" {{$content_register->state == 'borrador'?'selected':''}} >{{trans('admin.draftcopy')}}</option>
        <option value="final" {{$content_register->state == 'final'?'selected':''}}>{{trans('admin.end')}}</option>
        <option value="revision" {{$content_register->state == 'revision'?'selected':''}}>{{trans('admin.review')}}</option>
        <option value="nodisponible" {{$content_register->state == 'nodisponible'?'selected':''}}>{{trans('admin.notavaliable')}}</option>
      </select>
    </div>
  </div>
  <!--Colaborators-->
  <div class="form-group ">
    <label for="colaborator">{{trans('admin.title_colaborators')}}<span> *</span></label>
    <button type="button" class="btn btn-box-tool btn-colaborators">
      <i class="fa fa-plus"></i>
    </button>
    <br>
    <div class="content-box-colaborators">
      @foreach($content_register->colaborator as $key=>$colaborator)

      <div class="box box-colaborator" id="divcolaborator{{$key}}" >
        <div class="box-header">
          <h6 class="box-title">{{trans('admin.colaborator')}} {{$key}}</h6>
          @if($key != 0 )
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool btn-remove" data-parent="divcolaborator{{$key}}">
              <i class="fa fa-close"></i>
            </button>
          </div>
          @endif
        </div>
        <br>
        <div class="box-body">
          <div class="form-group">
            <div class="col-md-4">
              <label for="">{{trans('admin.typecontribution')}}</label>
              <select name="colaborator[{{$key}}][typecontribution]" id="typecontribution{{$key}}" class="form-control">
                <option value="author" {{$colaborator->typecontribution == 'author'?'selected':''}} >{{trans('admin.author')}}</option>
                <option value="reviser" {{$colaborator->typecontribution == 'reviser'?'selected':''}}>{{trans('admin.reviser')}}</option>
                <option value="unknown" {{$colaborator->typecontribution == 'unknown'?'selected':''}}>{{trans('admin.unknown')}}</option>
                <option value="indicator" {{$colaborator->typecontribution == 'indicator'?'selected':''}}>{{trans('admin.indicator')}}</option>
                <option value="terminator" {{$colaborator->typecontribution == 'terminator'?'selected':''}}>{{trans('admin.terminator')}}</option>
                <option value="editor" {{$colaborator->typecontribution == 'editor'?'selected':''}}>{{trans('admin.editor')}}</option>
                <option value="writer" {{$colaborator->typecontribution == 'writer'?'selected':''}}>{{trans('admin.writer')}}</option>
              </select>
            </div>

            <div class="col-md-4">
              <label for="name">{{trans('admin.name')}} <span>*</span> </label>
              <input type="text" name="colaborator[{{$key}}][name]" id="name{{$key}}" class="form-control" placeholder="{{trans('admin.placeholdername')}}" value="{{$colaborator->name}}">
            </div>
            <div class="col-md-4">
              <label for="lastname">{{trans('admin.lastname')}} <span>*</span> </label>
              <input type="text" name="colaborator[{{$key}}][lastname]" id="lastname{{$key}}" class="form-control" placeholder="{{trans('admin.placeholderlastname')}}" value="{{$colaborator->lastname}}">
            </div>
            <div class="col-md-6">
              <label for="email">{{trans('admin.email')}} <span>*</span> </label>
              <input type="email" name="colaborator[{{$key}}][email]" id="email{{$key}}" class="form-control" placeholder="{{trans('admin.placeholderemail')}}" value="{{$colaborator->email}}">
            </div>

            <div class="col-md-6">
              <label for="organization">{{trans('admin.organization')}} <span>*</span> </label>
              <input type="text" name="colaborator[{{$key}}][organization]" id="organization{{$key}}" class="form-control" placeholder="{{trans('admin.placeholderorganization')}}" value="{{$colaborator->organization}}">
            </div>

            <div class="col-md-12">
              <img src="/assets/imgs/contents-img/registry/Colaborators/{{$colaborator->image_organization}}" alt="" />
              <label for="image_organization">{{trans('admin.image_organization')}}</label>
              <input type="file" name="colaborator[{{$key}}][image_organization]" id="image_organization{{$key}}" class="form-control" >
            </div>
          </div>
        </div>
      </div>


      @endforeach
    </div>

  </div>


</div>
<!--/-box-body CICLO DE VIDA -->
