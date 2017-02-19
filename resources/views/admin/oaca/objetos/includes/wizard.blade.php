<div class="row">

  <div id="bootstrap-wizard-1" class="col-sm-12">
    <div class="form-bootstrapWizard">
      <ul class="bootstrapWizard form-wizard">
        <li class="" id="registro">
         <span class="step"> <i class="fa fa-check fa-lg"></i> </span> <span class="title">Registro</span>
        </li>
        <li class="" id="motivation">
         <span class="step"> <i class="fa  fa-hand-pointer-o fa-3x"></i> </span> <span class="title">Motivación</span>
        </li>
        <li  class="" id="development">
        <span class="step"> <i class="fa  fa-hand-peace-o fa-3x"></i> </span> <span class="title">Desarrollo</span>
        </li>
        <li  class="" id="close">
        <span class="step"> <i class="fa  fa-hand-rock-o fa-3x"></i> </span> <span class="title">Cierre Integrador</span>
        </li>
        <li data-target="finalizar" id="finalizar" class="">
        <span class="step"> <i class="fa fa-cubes fa-3x"></i></span> <span class="title">Finalizar</span>
        </li>
      {{-- <li data-target="#step4">
      <span class="step">6</span> <span class="title">Save Form</span>
    </li> --}}
      </ul>
      <div class="clearfix"></div>
    </div>

  </div>
</div>

<style media="screen">
/*Start Wizard*/

.bootstrapWizard {
  display: block;
  list-style: none;
  padding: 0;
  position: relative;
  width: 100%
}

.bootstrapWizard a:hover,.bootstrapWizard a:active,.bootstrapWizard a:focus {
  text-decoration: none
}

.bootstrapWizard li {
  display: block;
  float: left;
  width: 20%;
  text-align: center;
  padding-left: 0
}
.bootstrapWizard li#registro .step {
  background: green;
}

.bootstrapWizard li:before {
  border-top: 3px solid #55606E;
  content: "";
  display: block;
  font-size: 0;
  overflow: hidden;
  position: relative;
  top: 11px;
  right: 1px;
  width: 100%;
  z-index: 1
}

.bootstrapWizard li:first-child:before {
  left: 50%;
  max-width: 50%
}

.bootstrapWizard li:last-child:before {
  max-width: 50%;
  width: 50%
}

.bootstrapWizard li.complete .step {
  background: #0aa66e;
  padding: 1px 6px;
  border: 3px solid #55606E
}

.bootstrapWizard li .step i {
  font-size: 13px;
  font-weight: 400;
  position: relative;
  top: -1.5px
}

.bootstrapWizard li .step {
  background: #B2B5B9;
  color: #fff;
  display: inline;
  font-size: 13px;
  font-weight: 700;
  line-height: 12px;
  padding: 7px 11px;
  border: 3px solid transparent;
  border-radius: 50%;
  line-height: normal;
  position: relative;
  text-align: center;
  z-index: 2;
  transition: all .1s linear 0s
}

.bootstrapWizard li.active .step,.bootstrapWizard li.active.complete .step {
  background: #0091d9;
  color: #fff;
  font-weight: 700;
  padding: 7px 13px;
  font-size: 15px;
  border-radius: 50%;
  border: 3px solid #55606E
}

.bootstrapWizard li.complete .title,.bootstrapWizard li.active .title {
  color: #2B3D53
}

.bootstrapWizard li .title {
  color: #bfbfbf;
  display: block;
  font-size: 13px;
  line-height: 15px;
  max-width: 100%;
  position: relative;
  table-layout: fixed;
  text-align: center;
  top: 20px;
  word-wrap: break-word;
  z-index: 104
}

.wizard-actions {
  display: block;
  list-style: none;
  padding: 0;
  position: relative;
  width: 100%
}

.wizard-actions li {
  display: inline
}

.tab-content.transparent {
  background-color: transparent
}

/*End Wizard*/

</style>
