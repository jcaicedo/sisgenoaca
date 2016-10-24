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


								@include('admin.oaca.registry.edit.pattern')
								@include('admin.oaca.registry.edit.general_features')
								@include('admin.oaca.registry.edit.lifecycle')
								@include('admin.oaca.registry.edit.educational')
								@include('admin.oaca.registry.edit.referencias')
								@include('admin.oaca.registry.edit.copyright')
								@include('admin.oaca.registry.edit.selectable_plantilla')

								<div class="box-footer">
									<button class="btn btn-danger btn-back nomostrar" data-body="general-features" >
										<i class="fa fa-hand-o-left"></i>
										&nbsp;{{trans('admin.back')}}
									</button>
									<button type="button" class="btn btn-primary btn-next pull-right" data-body="select-pattern">
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

		@include('admin.oaca.registry.edit.elements_hide')




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
		<link rel="stylesheet" href="/vendor/AdminLTE/plugins/iCheck/all.css">

	@endpush

	@push('scripts')
		<script src="/vendor/bootstrapvalidator/dist/js/bootstrapValidator.min.js"></script>
		<script type="text/javascript"  src="/assets/js/register/main.js" ></script>
		<script type="text/javascript"  src="/assets/js/register/edit/main.js" ></script>
		<script src="//code.jquery.com/ui/1.11.0/jquery-ui.js"></script>

		<!-- iCheck 1.0.1 -->
		<script src="/vendor/AdminLTE/plugins/iCheck/icheck.min.js"></script>

		<script>

		$(document).ready(function(){

			// $(".ui-state-default").each(function(){
			// 	console.log($(this).data('value'));
			// 	if($(this).data('value') == $("#number_plantilla").val()){
			// 		$(this).addClass('ui-selected');
			// 		console.log({{$registro->plantilla}});
			// 	}
			// });
			//
			var count = {{count($content_register->words_key)}};
			// var count_words_key=2;
			//
			//
			// /*add Words Key*/
			//
			// $('.btn-wordskey-plus').click(function(e){
			// 	e.preventDefault();
			//
			// 	var input_wordKey = $('.box-wordkey-clone').clone().addClass('box-wordkey').removeClass('box-wordkey-clone').removeClass('nomostrar').attr({'id':'divwordkey'+count_words_key});
			// 	input_wordKey.find('button.btn-remove').data('parent','divwordkey'+count_words_key);
			// 	input_wordKey.find('input').attr({'name':'words_key[]','id':'words_key'+count_words_key});
			// 	count_words_key++;
			// 	$('.box-wordskeys').append(input_wordKey);
			//
			// })
			//
			// /*Add Colaborators*/
			//
			// $('.btn-colaborators').click(function(e){
			// 	e.preventDefault();
			//
			// 	var colaboratorbox = $('.box-colaborator-clone').clone().removeClass('box-colaborator-clone').removeClass('nomostrar').addClass('box-colaborator').attr('id','divcolaborator'+count);
			// 	colaboratorbox.find('.box-title').text('{{trans('admin.colaborator')}} '+count);
			// 	colaboratorbox.find('button.btn-remove').data('parent','divcolaborator'+count);
			// 	colaboratorbox.find("input[id='name']").attr({'id':'name'+count,'name':'colaborator['+count+'][name]'});
			// 	colaboratorbox.find("input[id='lastname']").attr({'id':'lastname'+count,'name':'colaborator['+count+'][lastname]'});
			// 	colaboratorbox.find("input[id='email']").attr({'id':'email'+count,'name':'colaborator['+count+'][email]'});
			// 	colaboratorbox.find("input[id='organization']").attr({'id':'organization'+count,'name':'colaborator['+count+'][organization]'});
			// 	colaboratorbox.find("select[id='typecontribution']").attr({'id':'typecontribution'+count,'name':'colaborator['+count+'][typecontribution]'});
			//
			//
			// 	count ++;
			//
			// 	$('.content-box-colaborators').append(colaboratorbox);
			// 	console.log(colaboratorbox.html());
			//
			// });
			//
			//
			// /*Buttom Next*/
			// $('.btn-next').click(function(e){
			// 	e.preventDefault();
			//
			//
			// 	var content_body = $('.btn-next').data('body');
			//
			// 	switch(content_body){
			//
			// 		case 'general-features':
			// 		$('.btn-next').data('body','lifecycle');
			// 		$('#'+content_body).hide();
			// 		$('#lifecycle').show();
			// 		$('.btn-back').data('body','lifecycle').show();
			// 		break;
			//
			// 		case 'lifecycle':
			// 		$('.btn-next').data('body','educational');
			// 		$('#'+content_body).hide();
			// 		$('#educational').show();
			// 		$('.btn-back').data('body','educational');
			// 		break;
			//
			// 		case 'educational':
			// 		$('.btn-next').data('body','copyright');
			// 		$('#'+content_body).hide();
			// 		$('#copyright').show();
			// 		$('.btn-back').data('body','copyright');
			// 		break;
			//
			// 		case 'copyright':
			// 		$('.btn-next').data('body','selectable_plantilla');
			// 		$('#'+content_body).hide();
			// 		$('#selectable_plantilla').show();
			// 		$(this).hide();
			// 		$('.btn-back').data('body','selectable_plantilla');
			// 		$('.btn-save').show();
			// 	}
			//
			// });
			//
			// /*Button Back*/
			//
			// $(".btn-back").click(function(e) {
			// 	// body...
			// 	e.preventDefault();
			//
			// 	var content_body = $('.btn-back').data('body');
			//
			// 	switch(content_body){
			//
			// 		case 'lifecycle':
			// 		$(this).hide();
			// 		$('#'+content_body).hide();
			// 		$('#general-features').show();
			// 		$('.btn-next').data('body','general-features');
			// 		break;
			//
			// 		case 'educational':
			// 		$(this).data('body','lifecycle');
			// 		$('#'+content_body).hide();
			// 		$('#lifecycle').show();
			// 		$('.btn-next').data('body','lifecycle');
			// 		break;
			//
			// 		case 'copyright':
			// 		$(this).data('body','educational');
			// 		$('#'+content_body).hide();
			// 		$('#educational').show();
			// 		$('.btn-next').data('body','educational');
			// 		break;
			//
			// 		case 'selectable_plantilla':
			// 		$(this).data('body','copyright');
			// 		$('#'+content_body).hide();
			// 		$('#copyright').show();
			// 		$('.btn-next').data('body','copyright').show();
			// 		$('.btn-save').hide();
			// 		break;
			//
			// 	}
			//
			//
			// });
			//
			// $('#form_register').on('click','button.btn-remove',function(e) {
			// 	// body...
			// 	e.preventDefault();
			//
			// 	$('#'+$(this).data('parent')).remove();
			// });

		});
		</script>

		<script>

		$(document).ready(function ($) {
			// $('ol').selectable({
			// 	selected: function( event, ui ) {
			// 		$('.input_plantilla').each(function(){
			// 			$(this).remove();
			// 		});
			// 		var idPlantilla = $( ".ui-selected", this ).find('img').attr('name');
			// 		$( ".ui-selected", this ).find('img').after("<input type='hidden' class='input_plantilla' name='plantilla' value='"+idPlantilla+"'>");
			//
			// 	},
			// 	stop: function(event, ui){
			// 		$(".ui-selected:first",this).each(function(){
			// 			$(this).siblings().removeClass("ui-selected");
			//
			// 		});
			// 	}
			// });

		});

		</script>

		<script>
		$( function() {
			$( "#selectable-copyright" ).selectable({
				selected: function(event, ui){
					console.log('Aqui: '+ $(ui.selected).data('licencia'));
					$("#licencia").val($(ui.selected).data('licencia'));
				}
			});




		} );



		</script>


	@endpush
