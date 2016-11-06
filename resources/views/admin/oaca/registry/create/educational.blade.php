<!-- Educativo -->
					<div class="box-body " id="educational">
						{{-- <h4>{{trans('admin.educational')}}</h4> --}}
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
