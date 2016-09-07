@extends('admin.layouts.default')
@section('title','Registro OACA')
@section('content')

<div class="content-wrapper">
	<section class="content-header">
		<h1>{{trans('admin.newOaca')}}</h1>
		<ol class="breadcrumb">
			<li>
				<a href="/admin/oaca/registry/registrys">
					<i class="fa fa-dashboard"></i>
					Incio
				</a>
			</li>
			<li class="active">
				Registro OACA
			</li>
		</ol>
	</section>

	<section class="content">
		<div class="row">
			<div class="col-md-12">
				<div class="box box-primary">
					<div class="box-header with-border">
						<h3 class="box-title">Registro Nuevo Oaca</h3>
					</div> 
					<!--/-box-header-->
					<!-- form start-->

					<form  method="post" id="form_register" role="form">
						{!! csrf_field() !!}
						<input type="hidden" name="user_id" value="{{ Auth::user()->id}}">
						<input type="hidden" name="register_id" value="{{$registro->id}}">
						<div class="box-body" id="general-features">
							<h4>{{trans('admin.generalfeatures')}}</h4>
							<section data-step="0"></section>
							<br>

							<div class="form-group col-xs-12">
								<label for="identificator">{{trans('admin.identificator')}}<span> *</span></label>
								<input type="text" class="form-control" id="identificator" name="identificator" placeholder="{{trans('admin.placeholderIdentificator')}}" value="{{$content_register->identificator}}">
							</div>

							<div class="form-group col-xs-12">
								<label for="title">{{trans('admin.title')}}<span> *</span></label>
								<input type="text" class="form-control" id="title" name="title" placeholder="{{trans('admin.placeholderTitle')}}" value="{{$content_register->title}}">
							</div>

							<div class="form-group col-xs-12">
								<label for="language">{{trans('admin.language')}}<span> *</span></label>
								<div>
									<select name="language" id="language" class="form-control" required="">
										<option value="">Seleccione un idioma</option>
										<option value="english" {{$content_register->language =='english'?'selected':''}}>{{trans('admin.english')}}</option>
										<option value="spanish" {{$content_register->language =='spanish'?'selected':''}} >{{trans('admin.spanish')}}</option>
										<option value="other" {{$content_register->language =='other'?'selected':''}} >{{trans('admin.other')}}</option>
									</select>
								</div>
							</div>

							<div class="form-group col-xs-12">
								<label for="description">{{trans('admin.description')}}<span> *</span></label>
								<textarea id="description" name="description" class="form-control" cols="30" rows="10">{{$content_register->description}}</textarea>
							</div>

							<div class="form-group box-wordskeys">
								<div class="col-md-12">
									<label for="words_key">{{trans('admin.wordskey')}}<span> *</span></label> <button type="button" class="btn btn-box-tool btn-wordskey-plus">
									<i class="fa fa-plus"></i>
								</button>
							</div>
							@if($content_register->words_key)
							
							
							@foreach($content_register->words_key as $key=>$word)
							@if($key == 0)
							<div class="form-group col-md-12 box-wordkey" id="divwordkey{{$key+1}}">
								<div class="col-md-6">
									<input type="text" class="form-control" id="words_key1" name="words_key[]"  placeholder="{{trans('admin.placeholderWordKey')}}" value="{{$word}}">
								</div>
							</div>
							@else
							<div class="form-group col-md-12 box-wordkey" id="divwordkey{{$key+1}}" >
								<div class="col-md-6">
									<input type="text" class="form-control" id="words_key{{$key+1}}" name="words_key[]"  placeholder="{{trans('admin.placeholderWordKey')}}" value="{{$word}}">
								</div>
								<button type="button" class="btn btn-box-tool btn-remove" data-parent="divwordkey{{$key+1}}">
									<i class="fa fa-close"></i>
								</button>
							</div>
							@endif
							@endforeach
							@else

							<div class="form-group col-md-12 box-wordkey">
								<div class="col-md-6">
									<input type="text" class="form-control" id="words_key1" name="words_key[]" placeholder="{{trans('admin.placeholderWordKey')}}">
								</div>
							</div>

							@endif
						</div>

					</div>
					<!--/-box-body-->
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
										</div>
									</div>
								</div>


								@endforeach
							</div>

						</div>


					</div>
					<!--/-box-body CICLO DE VIDA -->

					<!-- Educativo -->
					<div class="box-body nomostrar" id="educational">
						<h4>{{trans('admin.educational')}}</h4>
						<br>

						<div class="form-group">
							<div class="col-md-3 col-xs-12">
								<label for="learning_resources">{{trans('admin.learning_resources')}}</label><span> *</span>
							</div>
							<div class="col-md-9 col-xs-12">
								<div class="checkbox">
									<label for="">
										<input type="checkbox" name="learning_resources[]" value="evaluation_test" {{ in_array("evaluation_test",$content_register->learning_resources)?'checked':''}}>{{trans('admin.evaluation_test')}}
									</label>
								</div>
								<div class="checkbox">
									<label for="">
										<input type="checkbox" name="learning_resources[]" value="close_homework" {{ in_array("close_homework",$content_register->learning_resources)?'checked':''}}>{{trans('admin.close_homework')}}
									</label>
								</div>
								<div class="checkbox">
									<label for="">
										<input type="checkbox" name="learning_resources[]" value="open_homework" {{ in_array("open_homework",$content_register->learning_resources)?'checked':''}} >{{trans('admin.open_homework')}}
									</label>
								</div>
								<div class="checkbox">
									<label for="">
										<input type="checkbox" name="learning_resources[]" value="research_material" {{ in_array("research_material",$content_register->learning_resources)?'checked':''}} >{{trans('admin.research_material')}}
									</label>
								</div>
								<div class="checkbox">
									<label for="">
										<input type="checkbox" name="learning_resources[]" value="manual" {{ in_array("manual",$content_register->learning_resources)?'checked':''}} >{{trans('admin.manual')}}
									</label>
								</div>
								<div class="checkbox">
									<label for="">
										<input type="checkbox" name="learning_resources[]" value="source_information" {{ in_array("source_information",$content_register->learning_resources)?'checked':''}} >{{trans('admin.source_information')}}
									</label>
								</div>
								<div class="checkbox">
									<label for="">
										<input type="checkbox" name="learning_resources[]" value="tool" {{ in_array("tool",$content_register->learning_resources)?'checked':''}} >{{trans('admin.tool')}}
									</label>
								</div>

							</div>
						</div>

						<div class="form-group">
							<div class="col-md-3 col-xs-12">
								<label for="ldestination_rol">{{trans('admin.destination_rol')}}</label><span> *</span>
							</div>
							<div class="col-md-9 col-xs-12">

								<div class="checkbox">
									<label for="">
										<input type="checkbox" name="destination_rol[]" value="student" {{ in_array("student",$content_register->destination_rol)?'checked':''}} >{{trans('admin.student')}}
									</label>
								</div>

								<div class="checkbox">
									<label for="">
										<input type="checkbox" name="destination_rol[]" value="student" {{ in_array("student",$content_register->destination_rol)?'checked':''}} >{{trans('admin.student')}}
									</label>
								</div>
								<div class="checkbox">
									<label for="">
										<input type="checkbox" name="destination_rol[]" value="professor" {{ in_array("professor",$content_register->destination_rol)?'checked':''}} >{{trans('admin.professor')}}
									</label>
								</div>
								<div class="checkbox">
									<label for="">
										<input type="checkbox" name="destination_rol[]" value="author" {{ in_array("author",$content_register->destination_rol)?'checked':''}} >{{trans('admin.author')}}
									</label>
								</div>
								<div class="checkbox">
									<label for="">
										<input type="checkbox" name="destination_rol[]" value="manager" {{ in_array("manager",$content_register->destination_rol)?'checked':''}} >{{trans('admin.manager')}}
									</label>
								</div>

							</div>
						</div>
						<div class="form-group">
							<div class="col-md-3 col-xs-12">
								<label for="context">{{trans('admin.context')}}</label><span> *</span>
							</div>
							<div class="col-md-9 col-xs-12">

								<div class="checkbox">
									<label for="">
										<input type="checkbox" name="context[]" value="children_educaction" {{ in_array("children_educaction",$content_register->context)?'checked':''}} >{{trans('admin.children_educaction')}}
									</label>
								</div>
								<div class="checkbox">
									<label for="">
										<input type="checkbox" name="context[]" value="primary_education" {{ in_array("primary_education",$content_register->context)?'checked':''}} >{{trans('admin.primary_education')}}
									</label>
								</div>
								<div class="checkbox">
									<label for="">
										<input type="checkbox" name="context[]" value="highschool_education" {{ in_array("highschool_education",$content_register->context)?'checked':''}} >{{trans('admin.highschool_education')}}
									</label>
								</div>
								<div class="checkbox">
									<label for="">
										<input type="checkbox" name="context[]" value="bachillerato" {{ in_array("bachillerato",$content_register->context)?'checked':''}} >{{trans('admin.bachillerato')}}
									</label>
								</div>
								<div class="checkbox">
									<label for="">
										<input type="checkbox" name="context[]" value="professional" {{ in_array("professional",$content_register->context)?'checked':''}} >{{trans('admin.professional')}}
									</label>
								</div>
								<div class="checkbox">
									<label for="">
										<input type="checkbox" name="context[]" value="college" {{ in_array("college",$content_register->context)?'checked':''}} >{{trans('admin.college')}}
									</label>
								</div>
								<div class="checkbox">
									<label for="">
										<input type="checkbox" name="context[]" value="postgraduate" {{ in_array("postgraduate",$content_register->context)?'checked':''}} >{{trans('admin.postgraduate')}}
									</label>
								</div>



							</div>
						</div> <!--/-form-group-->

						<div class="form-group col-md-12">
							<label for="age_range">{{trans('admin.age_range')}}</label>
							<br>
							<input type="number" name="age_range" id="age_range" class="from-control" placeholder="{{trans('admin.placeholderage_range')}}" value="{{$content_register->age_range}}">
						</div>
					</div>
					<!--/-box-body Educational -->

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
								
							</li>
							
						</ol>

					</div>

					




					{{-- Seleccion de Plantilla --}}

					<div class="box-body nomostrar" id="selectable_plantilla">
						<h4 style="text-align:center;">{{trans('admin.select_plantilla')}}</h4>
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



					<div class="box-footer">
						<button class="btn btn-danger btn-back nomostrar" data-body="lifecycle" >
							<i class="fa fa-hand-o-left"></i>
							&nbsp;{{trans('admin.back')}}
						</button>
						<button type="button" class="btn btn-primary btn-next pull-right" data-body="general-features">
							<i class="fa fa-hand-o-right"></i>	
							&nbsp;{{trans('admin.next')}}	
						</button>
						<button type="submit" class="btn btn-success btn-save  pull-right nomostrar">
							<i class="fa fa-save"></i>
							Guardar
						</button>
					</div>


				</form>
			</div>
		</div>
	</div>
</section>



</div>
<!--///////////////////////////ELEMENTOS OCULTOS PARA CLONAR ////////////////////////////-->
{{-- Input Word Key --}}
<div class="form-group col-md-12 box-wordkey-clone nomostrar">
	<div class="col-md-6">
		<input type="text" class="form-control" name="words_key[]" placeholder="{{trans('admin.placeholderWordKey')}}">
	</div>
	<button type="button" class="btn btn-box-tool btn-remove">
		<i class="fa fa-close"></i>
	</button>
</div>

{{-- Container Colaborators --}}
<div class="box box-colaborator-clone nomostrar" >
	<div class="box-header">
		<h6 class="box-title">{{trans('admin.colaborator')}}</h6>
		<div class="box-tools pull-right">
			<button type="button" class="btn btn-box-tool btn-remove">
				<i class="fa fa-close"></i>
			</button>
		</div>
	</div>
	<br>
	<div class="box-body">
		<div class="form-group">
			<div class="col-md-4">
				<label for="">{{trans('admin.typecontribution')}}</label>
				<select name="colaborator[][typecontribution]" id="typecontribution" class="form-control">
					<option value="author">{{trans('admin.author')}}</option>
					<option value="reviser">{{trans('admin.reviser')}}</option>
					<option value="unknown">{{trans('admin.unknown')}}</option>
					<option value="indicator">{{trans('admin.indicator')}}</option>
					<option value="terminator">{{trans('admin.terminator')}}</option>
					<option value="editor">{{trans('admin.editor')}}</option>
					<option value="writer">{{trans('admin.writer')}}</option>
				</select>
			</div>

			<div class="col-md-4">
				<label for="name">{{trans('admin.name')}} <span>*</span> </label>
				<input type="text" name="colaborator[][name]" id="name" class="form-control" placeholder="{{trans('admin.placeholdername')}}">
			</div>
			<div class="col-md-4">
				<label for="lastname">{{trans('admin.lastname')}} <span>*</span> </label>
				<input type="text" name="colaborator[][lastname]" id="lastname" class="form-control" placeholder="{{trans('admin.placeholderlastname')}}">
			</div>
			<div class="col-md-6">
				<label for="email">{{trans('admin.email')}} <span>*</span> </label>
				<input type="email" name="colaborator[][email]" id="email" class="form-control" placeholder="{{trans('admin.placeholderemail')}}">
			</div>

			<div class="col-md-6">
				<label for="organization">{{trans('admin.organization')}} <span>*</span> </label>
				<input type="text" name="colaborator[][organization]" id="organization" class="form-control" placeholder="{{trans('admin.placeholderorganization')}}">
			</div>
		</div>
	</div>
</div>



@endsection

@push('styles')
<link rel="stylesheet" href="/vendor/bootstrapvalidator/dist/css/bootstrapValidator.min.css">
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.0/themes/smoothness/jquery-ui.css">

<style>
	.nomostrar{display: none;}
	#feedback { font-size: 1.4em; }
	#selectable .ui-selecting { background: #FECA40; }
	#selectable .ui-selected { background: #F39814; color: white; }
	#selectable {  margin: 0 auto; list-style-type: none; padding: 0; width: 1050px; }
	#selectable li { padding: 15px; float: left; width: 500px; height: auto; font-size: 4em; text-align: center; margin:10px; }

	#selectable-copyright .ui-selecting { background: #FECA40; }
	#selectable-copyright .ui-selected { background: #F39814; color: white; }
	#selectable-copyright { list-style-type: none; margin: 0; padding: 0; width: 60%; }
	#selectable-copyright li { margin: 3px; padding: 0.4em; font-size: 1.4em; height: 241px; }
	#selectable-copyright li img{ height: auto; width:180px; }
	.content-img-copyright{ overflow: hidden; line-height: 200px; }

</style>

@endpush

@push('scripts')
<script src="/vendor/bootstrapvalidator/dist/js/bootstrapValidator.min.js"></script>
<script type="text/javascript"  src="/assets/js/register/main.js" ></script>
<script src="//code.jquery.com/ui/1.11.0/jquery-ui.js"></script>



<script>

	$(document).ready(function(){

		$(".ui-state-default").each(function(){
			console.log($(this).data('value'));
			if($(this).data('value') == $("#number_plantilla").val()){
				$(this).addClass('ui-selected');
				console.log({{$registro->plantilla}});
			}
		});

		var count = {{count($content_register->words_key)}};
		var count_words_key=2;


		/*add Words Key*/

		$('.btn-wordskey-plus').click(function(e){
			e.preventDefault();

			var input_wordKey = $('.box-wordkey-clone').clone().addClass('box-wordkey').removeClass('box-wordkey-clone').removeClass('nomostrar').attr({'id':'divwordkey'+count_words_key});
			input_wordKey.find('button.btn-remove').data('parent','divwordkey'+count_words_key);
			input_wordKey.find('input').attr({'name':'words_key[]','id':'words_key'+count_words_key});
			count_words_key++;
			$('.box-wordskeys').append(input_wordKey);

		})

		/*Add Colaborators*/

		$('.btn-colaborators').click(function(e){
			e.preventDefault();

			var colaboratorbox = $('.box-colaborator-clone').clone().removeClass('box-colaborator-clone').removeClass('nomostrar').addClass('box-colaborator').attr('id','divcolaborator'+count);
			colaboratorbox.find('.box-title').text('{{trans('admin.colaborator')}} '+count);
			colaboratorbox.find('button.btn-remove').data('parent','divcolaborator'+count);
			colaboratorbox.find("input[id='name']").attr({'id':'name'+count,'name':'colaborator['+count+'][name]'});
			colaboratorbox.find("input[id='lastname']").attr({'id':'lastname'+count,'name':'colaborator['+count+'][lastname]'});
			colaboratorbox.find("input[id='email']").attr({'id':'email'+count,'name':'colaborator['+count+'][email]'});
			colaboratorbox.find("input[id='organization']").attr({'id':'organization'+count,'name':'colaborator['+count+'][organization]'});
			colaboratorbox.find("select[id='typecontribution']").attr({'id':'typecontribution'+count,'name':'colaborator['+count+'][typecontribution]'});


			count ++;

			$('.content-box-colaborators').append(colaboratorbox);
			console.log(colaboratorbox.html());

		});


		/*Buttom Next*/
		$('.btn-next').click(function(e){
			e.preventDefault();


			var content_body = $('.btn-next').data('body');

			switch(content_body){

				case 'general-features':
				$('.btn-next').data('body','lifecycle');
				$('#'+content_body).hide();
				$('#lifecycle').show();
				$('.btn-back').data('body','lifecycle').show();
				break;

				case 'lifecycle':
				$('.btn-next').data('body','educational');
				$('#'+content_body).hide();
				$('#educational').show();
				$('.btn-back').data('body','educational');
				break;

				case 'educational':
				$('.btn-next').data('body','copyright');
				$('#'+content_body).hide();
				$('#copyright').show();
				$('.btn-back').data('body','copyright');
				break;

				case 'copyright':
				$('.btn-next').data('body','selectable_plantilla');
				$('#'+content_body).hide();
				$('#selectable_plantilla').show();
				$(this).hide();
				$('.btn-back').data('body','selectable_plantilla');
				$('.btn-save').show();
			}

		});

		/*Button Back*/

		$(".btn-back").click(function(e) {
			// body...
			e.preventDefault();

			var content_body = $('.btn-back').data('body');

			switch(content_body){

				case 'lifecycle':
				$(this).hide();
				$('#'+content_body).hide();
				$('#general-features').show();
				$('.btn-next').data('body','general-features');
				break;

				case 'educational':
				$(this).data('body','lifecycle');
				$('#'+content_body).hide();
				$('#lifecycle').show();
				$('.btn-next').data('body','lifecycle');
				break;

				case 'copyright':
				$(this).data('body','educational');
				$('#'+content_body).hide();
				$('#educational').show();
				$('.btn-next').data('body','educational');
				break;

				case 'selectable_plantilla':
				$(this).data('body','copyright');
				$('#'+content_body).hide();
				$('#copyright').show();
				$('.btn-next').data('body','copyright').show();
				$('.btn-save').hide();
				break;

			}


		});

		$('#form_register').on('click','button.btn-remove',function(e) {
			// body...
			e.preventDefault();

			$('#'+$(this).data('parent')).remove();
		});

	});
</script>

<script>

	$(document).ready(function ($) {
		$('ol').selectable({
			selected: function( event, ui ) {
				$('.input_plantilla').each(function(){
					$(this).remove();
				});
				var idPlantilla = $( ".ui-selected", this ).find('img').attr('name');
				$( ".ui-selected", this ).find('img').after("<input type='hidden' class='input_plantilla' name='plantilla' value='"+idPlantilla+"'>");

			},
			stop: function(event, ui){
				$(".ui-selected:first",this).each(function(){
					$(this).siblings().removeClass("ui-selected");

				});
			}
		});
		
	});

</script>

<script>
	$( function() {
		$( "#selectable-copyright" ).selectable({
			selected: function(event, ui){
				console.log( $(ui.selected).data('licencia'));
				$("#licencia").val($(ui.selected).data('licencia'));
			}
		});
	} );
</script>


@endpush