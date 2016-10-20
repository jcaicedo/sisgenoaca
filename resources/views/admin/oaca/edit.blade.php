@extends('admin.layouts.default')
@section('title','Registro OACA')
@section('content')


<div class="content-wrapper">
	<section class="content-header">
		<h1>{{trans('admin.newOaca')}}</h1>
		<ol class="breadcrumb">
			<li>
				<a href="">
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
						<input type="hidden" name="user_id" value="{{ Auth::user()->id}}">
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

						</div>

					</div>
					<!--/-box-body-->

					<!--CICLO DE VIDA -->

					<div class="box-body nomostrar" id="lifecycle">
						<h4>{{trans('admin.lifecycle')}}</h4>
						<br>
						<div class="form-group col-xs-12 col-sm-6">
							<label for="version">{{trans('admin.version')}}<span> *</span></label>
							<input type="text" class="form-control" id="version" name="version" placeholder="{{trans('admin.placeholderVersion')}}">
						</div>

						<div class="form-group col-xs-12 col-sm-6">
							<label for="state">{{trans('admin.state')}}<span> *</span></label>
							<div>
								<select name="state" id="state" class="form-control" required="">
									<option value="borrador">{{trans('admin.draftcopy')}}</option>
									<option value="final">{{trans('admin.end')}}</option>
									<option value="revision">{{trans('admin.review')}}</option>
									<option value="nodisponible">{{trans('admin.notavaliable')}}</option>
								</select>
							</div>
						</div>

						<div class="form-group">
							<label for="colaborator">{{trans('admin.title_colaborators')}}<span> *</span></label>
							<button type="button" class="btn btn-box-tool btn-colaborators">
								<i class="fa fa-plus"></i>
							</button>
							<br>

							<div class="content-box-colaborators">
								<div class="box box-colaborator" >
									<div class="box-header">
										<h6 class="box-title">{{trans('admin.colaborator')}} 1</h6>
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
												<select name="colaborator[1][typecontribution]" id="typecontribution1" class="form-control">
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
												<input type="text" name="colaborator[1][name]" id="name1" class="form-control" placeholder="{{trans('admin.placeholdername')}}">
											</div>
											<div class="col-md-4">
												<label for="lastname">{{trans('admin.lastname')}} <span>*</span> </label>
												<input type="text" name="colaborator[1][lastname]" id="lastname1" class="form-control" placeholder="{{trans('admin.placeholderlastname')}}">
											</div>
											<div class="col-md-6">
												<label for="email">{{trans('admin.email')}} <span>*</span> </label>
												<input type="email" name="colaborator[1][email]" id="email1" class="form-control" placeholder="{{trans('admin.placeholderemail')}}">
											</div>

											<div class="col-md-6">
												<label for="organization">{{trans('admin.organization')}} <span>*</span> </label>
												<input type="text" name="colaborator[1][organization]" id="organization1" class="form-control" placeholder="{{trans('admin.placeholderorganization')}}">
											</div>
										</div>
									</div>
								</div>
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
										<input type="checkbox" name="learning_resources[]" value="evaluation_test">{{trans('admin.evaluation_test')}}
									</label>
								</div>
								<div class="checkbox">
									<label for="">
										<input type="checkbox" name="learning_resources[]" value="close_homework">{{trans('admin.close_homework')}}
									</label>
								</div>
								<div class="checkbox">
									<label for="">
										<input type="checkbox" name="learning_resources[]" value="open_homework">{{trans('admin.open_homework')}}
									</label>
								</div>
								<div class="checkbox">
									<label for="">
										<input type="checkbox" name="learning_resources[]" value="research_material">{{trans('admin.research_material')}}
									</label>
								</div>
								<div class="checkbox">
									<label for="">
										<input type="checkbox" name="learning_resources[]" value="manual">{{trans('admin.manual')}}
									</label>
								</div>
								<div class="checkbox">
									<label for="">
										<input type="checkbox" name="learning_resources[]" value="source_information">{{trans('admin.source_information')}}
									</label>
								</div>
								<div class="checkbox">
									<label for="">
										<input type="checkbox" name="learning_resources[]" value="source_information">{{trans('admin.source_information')}}
									</label>
								</div>
								<div class="checkbox">
									<label for="">
										<input type="checkbox" name="learning_resources[]" value="tool">{{trans('admin.tool')}}
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
										<input type="checkbox" name="destination_rol[]" value="student">{{trans('admin.student')}}
									</label>
								</div>

								<div class="checkbox">
									<label for="">
										<input type="checkbox" name="destination_rol[]" value="student">{{trans('admin.student')}}
									</label>
								</div>
								<div class="checkbox">
									<label for="">
										<input type="checkbox" name="destination_rol[]" value="professor">{{trans('admin.professor')}}
									</label>
								</div>
								<div class="checkbox">
									<label for="">
										<input type="checkbox" name="destination_rol[]" value="author">{{trans('admin.author')}}
									</label>
								</div>
								<div class="checkbox">
									<label for="">
										<input type="checkbox" name="destination_rol[]" value="manager">{{trans('admin.manager')}}
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
										<input type="checkbox" name="context[]" value="children_educaction">{{trans('admin.children_educaction')}}
									</label>
								</div>
								<div class="checkbox">
									<label for="">
										<input type="checkbox" name="context[]" value="primary_education">{{trans('admin.primary_education')}}
									</label>
								</div>
								<div class="checkbox">
									<label for="">
										<input type="checkbox" name="context[]" value="highschool_education">{{trans('admin.highschool_education')}}
									</label>
								</div>
								<div class="checkbox">
									<label for="">
										<input type="checkbox" name="context[]" value="bachillerato">{{trans('admin.bachillerato')}}
									</label>
								</div>
								<div class="checkbox">
									<label for="">
										<input type="checkbox" name="context[]" value="professional">{{trans('admin.professional')}}
									</label>
								</div>
								<div class="checkbox">
									<label for="">
										<input type="checkbox" name="context[]" value="college">{{trans('admin.college')}}
									</label>
								</div>
								<div class="checkbox">
									<label for="">
										<input type="checkbox" name="context[]" value="postgraduate">{{trans('admin.postgraduate')}}
									</label>
								</div>



							</div>
						</div> <!--/-form-group-->

						<div class="form-group col-md-12">
							<label for="age_range">{{trans('admin.age_range')}}</label>
							<br>
							<input type="number" name="age_range" id="age_range" class="from-control" placeholder="{{trans('admin.placeholderage_range')}}" value="0">
						</div>
					</div>
					<!--/-box-body Educational -->

					{{-- Derechos de Autor --}}

					<div class="box-body nomostrar" id="copyright">
						<h4>{{trans('admin.copyright')}}</h4>
						<br>
						<div class="form-group col-md-6 col-xs-12">
							<label for="cost">{{trans('admin.cost')}}</label>
							<select name="cost" id="cost" class="form-control">
								<option value="yes" default>{{trans('admin.yes')}}</option>
								<option value="not">{{trans('admin.not')}}</option>
							</select>
						</div>
						<div class="form-group col-md-6 col-xs-12">
							<label for="copyright_restrictions">{{trans('admin.copyright_restrictions')}}</label>
							<select name="cost" id="copyright_restrictions" class="form-control">
								<option value="yes">{{trans('admin.yes')}}</option>
								<option value="not">{{trans('admin.not')}}</option>
							</select>
						</div>
						<div class="form-group">
							<label for="copyright_description">{{trans('admin.copyright_description')}}</label><span style="color:red;"> *</span>
							<textarea class="form-control" name="copyright_description" id="copyright_description" cols="30" rows="10"></textarea>
						</div>
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
<style>
	.nomostrar{display: none;}
</style>

@endpush

@push('scripts')
<script src="/vendor/bootstrapvalidator/dist/js/bootstrapValidator.min.js"></script>
<script type="text/javascript"  src="/assets/js/register/main.js" ></script>



<script>

	$(document).ready(function(){

		var count = 2;
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
				$(this).hide();
				$('.btn-back').data('body','copyright');
				$('.btn-save').show();
				break;
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
	$('.btn-next').data('body','educational').show();
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
@endpush