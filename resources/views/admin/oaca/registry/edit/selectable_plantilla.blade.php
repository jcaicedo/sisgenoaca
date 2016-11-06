{{-- Seleccion de Plantilla --}}

<div class="box-body" id="selectable_plantilla">
  {{-- <h4 style="text-align:center;">{{trans('admin.select_plantilla')}}</h4> --}}
  <br>
  <input type="hidden" id="number_plantilla" value="{{$registro->plantilla}}" >
  <ol id="selectable" name="selectable">
    <li class="ui-state-default" data-value="plantilla1">
      <img name="plantilla1" src="/assets/imgs/contents-img/plantillas/plantilla1.png" style="height:auto; width:100%; " alt="">
      @if($registro->plantilla == "plantilla1")
        <input type="hidden" class="input_plantilla" name="plantilla" value="{{$registro->plantilla}}">
      @endif
    </li>
    <li class="ui-state-default" data-value="plantilla2">
      <img name="plantilla2" src="/assets/imgs/contents-img/plantillas/plantilla1.png" style="height:auto; width:100%; " alt="">
      @if($registro->plantilla == "plantilla2")
        <input type="hidden" class="input_plantilla" name="plantilla" value="{{$registro->plantilla}}">
      @endif
    </li>
    <li class="ui-state-default" data-value="plantilla3">
      <img name="plantilla3" src="/assets/imgs/contents-img/plantillas/plantilla1.png" style="height:auto; width:100%; " alt="">
      @if($registro->plantilla == "plantilla3")
        <input type="hidden" class="input_plantilla" name="plantilla" value="{{$registro->plantilla}}">
      @endif
    </li>
    <li class="ui-state-default" data-value="plantilla4">
      <img name="plantilla4" src="/assets/imgs/contents-img/plantillas/plantilla1.png" style="height:auto; width:100%; " alt="">
      @if($registro->plantilla == "plantilla4")
        <input type="hidden" class="input_plantilla" name="plantilla" value="{{$registro->plantilla}}">
      @endif
    </li>
    <li class="ui-state-default" data-value="plantilla5">
      <img name="plantilla5" src="/assets/imgs/contents-img/plantillas/plantilla1.png" style="height:auto; width:100%; " alt="">
      @if($registro->plantilla == "plantilla5")
        <input type="hidden" class="input_plantilla" name="plantilla" value="{{$registro->plantilla}}">
      @endif
    </li>
  </ol>

</div>
