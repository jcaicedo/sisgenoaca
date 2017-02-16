<!--CICLO DE VIDA -->

<div class="box-body " id="lifecycle">
	{{-- <h4>{{trans('admin.lifecycle')}}</h4> --}}
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
	<!--Modulo de colaboradores-->
	<div class="form-group">
		<label for="colaborator">{{trans('admin.title_colaborators')}}<span> *</span></label>
		<button type="button" class="btn btn-box-tool btn-colaborators">
			<i class="fa fa-plus"></i>
		</button>
		<br>

		<div class="content-box-colaborators">
			<div class="box box-colaborator" >
				<div class="box-header">
					<h6 class="box-title">{{trans('admin.colaborator')}} 0</h6>
					<div class="box-tools pull-right">
						<button type="button" class="btn btn-box-tool btn-remove">
							<i class="fa fa-close"></i>
						</button>
					</div>
				</div>
				<br>
				<div class="box-body">
					<input type="hidden" name="colaborator[0][id]" value="">
					<div class="form-group">
						<div class="col-md-4">
							<label for="">{{trans('admin.typecontribution')}}</label>
							<select name="colaborator[0][typecontribution]" id="typecontribution0" class="form-control">
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
							<input type="text" name="colaborator[0][name]" id="name0" class="form-control" placeholder="{{trans('admin.placeholdername')}}">
						</div>
						<div class="col-md-4">
							<label for="lastname">{{trans('admin.lastname')}} <span>*</span> </label>
							<input type="text" name="colaborator[0][lastname]" id="lastname0" class="form-control" placeholder="{{trans('admin.placeholderlastname')}}">
						</div>
						<div class="col-md-6">
							<label for="email">{{trans('admin.email')}} <span>*</span> </label>
							<input type="email" name="colaborator[0][email]" id="email0" class="form-control" placeholder="{{trans('admin.placeholderemail')}}">
						</div>

						<div class="col-md-6">
							<label for="organization">{{trans('admin.organization')}} <span>*</span> </label>
							<input type="text" name="colaborator[0][organization]" id="organization0" class="form-control" placeholder="{{trans('admin.placeholderorganization')}}">
						</div>
						<div class="col-md-12 div_content_image_organization_colaborators">
							<label for="image_organization">{{trans('admin.image_organization')}}</label>
							<div class="col-md-12 text-center">
								<img src="https://placehold.it/900x500" alt="Imagen Institución">
							</div>
							<input type="file" name="colaborator[0][image_organization]" id="image_organization0" class="form-control image_colaborator_file" >

							{{-- <input type="hidden" name="colaborator[0][image_organization_colaborator]" id="image_organization_colaborator0" class="form-control image_organization_colaborator" > --}}
						</div>
					</div>
				</div>
			</div>
		</div>




	</div>


</div>
<!--/-box-body CICLO DE VIDA -->
