{{-- Seleccion de Plantilla --}}

<div class="box-body" id="selectable_plantilla">
  {{-- <h4 style="text-align:center;">{{trans('admin.select_plantilla')}}</h4> --}}
  <br>

  <select class="image-picker show-html" name="plantilla">
    <option data-img-src="/assets/imgs/contents-img/plantillas/plantilla-screen-block.png" {{$registro->plantilla =="full-screen-block"?"selected":""}} value="full-screen-block">Full Screen Block</option>
  </select>

</div>
