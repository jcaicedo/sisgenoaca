{{-- Derechos de Autor --}}
<div class="box-body nomostrar" id="copyright">
  <input type="hidden" name="licencia" id="licencia" value="">
  <h4>{{trans('admin.copyright')}}</h4>
  <br>
  <ol id="selectable-copyright">
    <li class="ui-widget-content {{$registro->licencia == 'by-nc' ? 'ui-selected' : '' }} " data-licencia="by-nc">
      <div class="col-md-3 content-img-copyright"  style="overflow:hidden;">
        <img src="/assets/imgs/licencias_creative_commons/by-nc.png" alt="">
      </div>
      <div class="col-md-9" style="overflow:hidden;">
        <h2>
          <b>
            Reconocimiento-NoComercial
            CC BY-NC


          </b>
        </h2>
        <p>
          Esta licencia permite a otros entremezclar, ajustar y construir a partir de su obra con fines no comerciales, y aunque en sus nuevas creaciones deban reconocerle su autoría y no puedan ser utilizadas de manera comercial, no tienen que estar bajo una licencia con los mismos términos.
        </p>
      </div>
      @if ($registro->licencia == 'by-nc')
        <input type='hidden'  name='licencia' value='by-nc'>
      @endif
    </li>
    <li class="ui-widget-content {{$registro->licencia == 'by-nc-nd' ? 'ui-selected' : '' }}" data-licencia="by-nc-nd">
      <div class="col-md-3 content-img-copyright"  style="overflow:hidden;">
        <img src="/assets/imgs/licencias_creative_commons/by-nc-nd.png" alt="">
      </div>
      <div class="col-md-9" style="overflow:hidden;">
        <h2>
          <b>
            Reconocimiento-NoComercial-CompartirIgual
            CC BY-NC-SA

          </b>
        </h2>
        <p>
          Esta licencia permite a otros entremezclar, ajustar y construir a partir de su obra con fines no comerciales, siempre y cuando le reconozcan la autoría y sus nuevas creaciones estén bajo una licencia con los mismos términos.
        </p>
      </div>
      @if ($registro->licencia == 'by-nc-nd')
        <input type='hidden'  name='licencia' value='by-nc-nd'>
      @endif
    </li>
    <li class="ui-widget-content {{$registro->licencia == 'by-nc-sa' ? 'ui-selected' : '' }}" data-licencia="by-nc-sa">
      <div class="col-md-3 content-img-copyright"  style="overflow:hidden;">
        <img src="/assets/imgs/licencias_creative_commons/by-nc-sa.png" alt="">
      </div>
      <div class="col-md-9" style="overflow:hidden;">
        <h2>
          <b>
            Reconocimiento-NoComercial-SinObraDerivada
            CC BY-NC-ND

          </b>
        </h2>
        <p>
          Esta licencia es la más restrictiva de las seis licencias principales, sólo permite que otros puedan descargar las obras y compartirlas con otras personas, siempre que se reconozca su autoría, pero no se pueden cambiar de ninguna manera ni se pueden utilizar comercialmente.
        </p>
      </div>
      @if ($registro->licencia == 'by-nc-sa')
        <input type='hidden' name='licencia' value='by-nc-sa'>
      @endif
    </li>

  </ol>

</div>
