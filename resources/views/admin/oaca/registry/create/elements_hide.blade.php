<!--///////////////////////////ELEMENTOS OCULTOS PARA CLONAR ////////////////////////////-->
{{-- Input Word Key --}}
<div class="form-group col-md-12 box-wordkey-clone nomostrar">
	<div class="col-md-6 col-xs-10">
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
		  <input type="hidden" name="colaborator[][id]" value="" id="id_colaborator">
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

			<div class="col-md-12 text-center div_content_image_organization_colaborators">
				<label class="col-md-12" for="image_organization">{{trans('admin.image_organization')}}</label>
				<div class="col-md-12">
					<img src="https://placehold.it/200x200" alt="Imagen Institución" class="content-image-preview">
				</div>
				<div class="col-md-6 col-md-offset-3">
				<input type="file" name="colaborator[][image_organization]" id="image_organization" class="form-control image_colaborator_file" data-content-preview="" >
				{{-- <input type="hidden" name="colaborator[][image_organization_colaborator]" id="image_organization_colaborator" class="form-control image_organization_colaborator" > --}}
				</div>
			</div>

		</div>
	</div>
</div>
