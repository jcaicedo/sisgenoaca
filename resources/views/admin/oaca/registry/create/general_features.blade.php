<div class="box-body nomostrar" id="general-features">
								<h4>{{trans('admin.generalfeatures')}}</h4>
								{{-- <section data-step="0"></section> --}}
								<br>

						{{-- 	<div class="form-group col-xs-12 col-md-4 col-lg-4">
								<label for="identificator">{{trans('admin.identificator')}}<span> *</span></label>
								<input type="text" class="form-control" id="identificator" name="identificator" placeholder="{{trans('admin.placeholderIdentificator')}}">
							</div> --}}

							<div class="form-group col-xs-12 col-md-4 col-lg-6">
								<label for="title">{{trans('admin.title')}}<span> *</span></label>
								<input type="text" class="form-control" id="title" name="title" placeholder="{{trans('admin.placeholderTitle')}}" >
							</div>

							<div class="form-group col-xs-12 col-md-4 col-lg-6">
								<label for="language">{{trans('admin.language')}}<span> *</span></label>
								<div>
									<select name="language" id="language" class="form-control" required="">
										<option value="">Seleccione un idioma</option>
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

							<div class="form-group box-wordskeys">
								<div class="col-md-12">
									<label for="words_key">{{trans('admin.wordskey')}}<span> *</span></label> <button type="button" class="btn btn-box-tool btn-wordskey-plus">
									<i class="fa fa-plus"></i>
								</button>
							</div>

							<div class="form-group col-md-12 box-wordkey">
								<div class="col-md-6">
									<input type="text" class="form-control" id="words_key1" name="words_key[]" placeholder="{{trans('admin.placeholderWordKey')}}">
								</div>
							</div>
							
						</div>

					</div>
					<!--/-box-body-->