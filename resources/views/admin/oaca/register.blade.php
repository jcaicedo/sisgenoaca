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

					<form action="" method="post" id="form_register" role="form">
						
						<div class="box-body" id="general-features">
							<h4>{{trans('admin.generalfeatures')}}</h4>
							<br>

							<div class="form-group col-xs-12">
								<label for="identificator">{{trans('admin.identificator')}}<span> *</span></label>
								<input type="text" class="form-control" id="identificator" name="identificator" placeholder="{{trans('admin.placeholderIdentificator')}}">
							</div>

							<div class="form-group col-xs-12">
								<label for="title">{{trans('admin.title')}}<span> *</span></label>
								<input type="text" class="form-control" id="title" name="title" placeholder="{{trans('admin.placeholderTitle')}}">
							</div>

							<div class="form-group col-xs-12">
								<label for="language">{{trans('admin.language')}}<span> *</span></label>
								<div>
									<select name="language" id="language" class="form-control" required="">
										<option value="english">{{trans('admin.english')}}</option>
										<option value="spanish">{{trans('admin.spanish')}}</option>
										<option value="other">{{trans('admin.other')}}</option>
									</select>
								</div>
							</div>

							<div class="form-group col-xs-12">
								<label for="description">{{trans('admin.description')}}<span> *</span></label>
								<textarea id="description" name="description" class="form-control" cols="30" rows="10"></textarea>
							</div>

							<div class="form-group col-xs-12">
								<label for="words_key">{{trans('admin.wordskey')}}<span> *</span></label> <button type="button" class="btn btn-box-tool">
								<i class="fa fa-plus"></i>
							</button>
							<input type="text" class="form-control" id="words_key" name="words_key[]" placeholder="{{trans('admin.placeholderWordKey')}}">
						</div>

					</div>
					<!--/-box-body-->

					<!--CICLO DE VIDA -->

					<div class="box-body" id="lifecycle">
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
							<label for="colaborators">{{trans('admin.colaborators')}}</label>
							<button type="button" class="btn btn-success">
								<i class="fa fa-plus"></i>
							</button>
							



						</div>


					</div>
					<!--/-box-body-->

					<div class="box-footer">
						<button type="button" class="btn btn-primary btn-next" data-body="general-features">
							<i class="fa fa-hand-o-right"></i>	
							&nbsp;{{trans('admin.next')}}	
						</button>
					</div>


				</form>
			</div>
		</div>
	</div>
</section>

</div>

@endsection

@push('styles')
<style>
	.nomostrar{display: none;}
</style>
@endpush

@push('scripts')

<script>

	$(document).ready(function(){

		$('.btn-next').click(function(){
			var content_body = $('.btn-next').data('body');

			switch(content_body){

				case 'general-features':

				$('.btn-next').data('body',"lifecycle");
				$('#'+content_body).hide();
				$('#lifecycle').show();

				break;
			}

		});

		

	});
</script>
@endpush