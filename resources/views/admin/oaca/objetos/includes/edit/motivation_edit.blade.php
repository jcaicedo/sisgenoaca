
						@if(isset($content_motivation[$pattern_array[$i-1]]))


							@foreach($content2[$pattern_array[$i-1]] as $key=>$data)
								<div class="content contentchild contentchildfirst sortable" id="contentchild{{$count_element}}" data-pattern='{{$pattern_array[$i-1]}}'>

									<div class="box-header with-border">

										<div class="box-tools box-tools-content pull-right">
											<button type="button" class="btn btn-box-tool remove-content" data-content = "#contentchild{{$count_element}}">
												<i class="fa fa-close"></i>
											</button>

										</div>
									</div>

									@foreach($data as $key=> $element)

										@if($element->type_element == 'title')
											<div class="title remove-div-{{$count}}  old">
												<div class="box">
													<div class="box-header with-border">
														<h3 class="box-title">{{trans('admin.title')}}</h3>
														<h3>{{$count}}</h3>
														<div class="box-tools pull-right">
															<button  class="btn btn-box-tool remove-div" data-parent="remove-div-{{$count}}" data-idelement="{{$element->id}}">
																<i class="fa fa-close"></i>
															</button>
														</div>
													</div>
													<div class="box-body">
														<input type="text" class="form-control componente myinput" data-element="title" data-position={{$count}} id="title-{{$count}}" name="data[{{$count}}][content]" value="{{$element->content}}">
														<input type="hidden" name="data[{{$count}}][type]" value='title'>
														<input type="hidden" name="data[{{$count}}][id]" value="{{$element->id}}">
														<input type="hidden" name="data[{{$count}}][pattern]" value="{{$element->pattern_pedagogicaltechno}}" >
														<input type='hidden' name='data[{{$count}}][contentchild]' value="contentchild{{$count_element}}">
													</div>
												</div>
											</div>
											<?php $count++;?>
										@endif

										@if($element->type_element == 'textarea')

											<div class="textarea remove-div-{{$count}} old">

												<div class="box">
													<div class="box-header with-border">
														<h3 class="box-title">Textarea</h3>
														<h3>{{$count}}</h3>
														<div class="box-tools pull-right">
															<button type="button" class="btn btn-box-tool remove-div" data-parent="remove-div-{{$count}}" data-idelement="{{$element->id}}" >
																<i class="fa  fa-close"></i>
															</button>
															<button  type="button" class="btn btn-box-tool">
																<i class="fa  fa-paint-brush"></i>
															</button>
														</div>
													</div>
													<div class="box-body edit-textarea myinput" data-element="textarea" data-position="{{$count}}" id="textarea{{$count}}" name="textarea" data-content="content-textarea{{$count}}">

													</div>

													<input type="hidden" name="textarea" id="input-textarea{{$count}}" value="{{$element->content}}" class="componente" >
													<input type="hidden" name="data[{{$count}}][content]" id="content-textarea{{$count}}" value="pruab">
													<input type="hidden" name="data[{{$count}}][type]" value="textarea">
													<input type="hidden" name="data[{{$count}}][id]" value="{{$element->id}}">
													<input type="hidden" name="data[{{$count}}][pattern]" value="{{$element->pattern_pedagogicaltechno}}" >
													<input type='hidden' name='data[{{$count}}][contentchild]' value="contentchild{{$count_element}}">

												</div>

											</div>
											<?php $count++;?>
										@endif



										@if($element->type_element == 'image')
											<div class="uploadimage remove-div-{{$count}} old" >
												<div class="box">
													<div class="box-header with-border">
														<h3 class="box-title">Image</h3>
														<h3>{{$count}}</h3>
														<div class="image-preview-content" id="imagep-{{$count}}-original">
															<img src="{{$element->content}}" alt=""  >
														</div>

														<div class="box-tools pull-right">
															<button type="button" class="btn btn-box-tool remove-div" data-parent="remove-div-{{$count}}" data-idelement="{{$element->id}}">
																<i class="fa fa-close"></i>
															</button>
														</div>
													</div>
													<div class=" box-body">
														<div class="col-md-6">
															<input class="form-control myinput image-upload" type="file" data-element="image" data-position="{{$count}}" value="image-{{$count}}" name="image{{$count}}" id="imagep-{{$count}}" />


															<input type="hidden" id="image-{{$count}}" name="image" value="imagep-{{$count}}" class="componente">

															<input type="hidden" name="data[{{$count}}][content]" value="image{{$count}}" >
															<input type="hidden" name="data[{{$count}}][type]" value='image' >
															<input type="hidden" name="data[{{$count}}][id]" value='{{$element->id}}' >
															<input type="hidden" name="data[{{$count}}][pattern]" value="{{$element->pattern_pedagogicaltechno}}" >
															<input type='hidden' name='data[{{$count}}][contentchild]' value="contentchild{{$count_element}}">

														</div>
														<buttton type="button" class="btn btn-info btn-sm btn-clear-input-image" data-content ='#imagep-{{$count}}'>{{trans('admin.btn-clear')}}</buttton>
													</div>
												</div>
											</div>
											<?php $count++;?>
										@endif

										@if ($element->type_element == 'filehtml')
											<div class="uploadhotpotatoes remove-div-{{$count}} old">
												<div class="box">
													<div class="box-header with-border">
														<h3 class="box-title">Actividad Hot Potatoes</h3>
														<h3>{{$count}}</h3>
														<div class="filehtml-preview-content" id="filehtmlp-{{$count}}-original" data-content="{{$element->content}}">
															<h2>Html Actual: {{$element->content}}</h2>
														</div>
														<div class="box-tools pull-right">
															<button type="button" class="btn btn-box-tool remove-div" data-parent="remove-div-{{$count}}" datal-idelement="{{$element->id}}">
																<i class="fa fa-close"></i>
															</button>
														</div>
													</div>
													<div class="box-body">
														<div class="col-md-6">
															<input class="form-control myinput image-upload" type="file" data-element="filehtml" data-position="{{$count}}" value="filehtml-{{$count}}" name="filehtml{{$count}}" id="filehtmlp-{{$count}}"/>
															<input type="hidden" id="filehtml-{{$count}}" name="filehtml" value="filehtml-{{$count}}" class="componente">

															<input type="hidden" name="data[{{$count}}][content]" value="filehtml{{$count}}" >
															<input type="hidden" name="data[{{$count}}][type]" value='filehtml' >
															<input type="hidden" name="data[{{$count}}][id]" value='{{$element->id}}' >
															<input type="hidden" name="data[{{$count}}][pattern]" value="{{$element->pattern_pedagogicaltechno}}" >
															<input type='hidden' name='data[{{$count}}][contentchild]' value="contentchild{{$count_element}}">
														</div>
														<buttton type="button" class="btn btn-info btn-sm btn-clear-input-image" data-content ="#filehtmlp-{{$count}}">{{trans('admin.btn-clear')}}</buttton>
													</div>
												</div>
											</div>
											<?php $count++;?>
										@endif




									@endforeach

									<?php $count_element++; ?>
								</div>
							@endforeach
						@endif
