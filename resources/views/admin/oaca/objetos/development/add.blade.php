@extends('admin.layouts.menuoaca')
@section('title',trans('admin.development'))
@section('content')

<div class="content-wrapper">
	<div class="box-header box-header-btn">

		<h1 class="box-title">{{trans('admin.development')}}</h1>

	</div>
	<form action="{{url('/admin/oaca/objetos/development')}}" method="post"  role="form" id="form-create-oaca" enctype="multipart/form-data" >
		<input type="hidden" name="_token" value="{{ csrf_token() }}">

		<input type="hidden" name="register_id" value="{{$register_id}}">

		<div id="rootwizard" class="tabbable tabs-left">
			
			<ul class="nav bav-tabs">
				<li><a href="#tab1" data-toggle="tab">{{trans('admin.explanation')}}</a></li>
				<li><a href="#tab2" data-toggle="tab">{{trans('admin.exemplification')}}</a></li>
				<li><a href="#tab3" data-toggle="tab">{{trans('admin.application')}}</a></li>
				<li><a href="#tab4" data-toggle="tab">{{trans('admin.justification')}}</a></li>
				<li><a href="#tab5" data-toggle="tab">{{trans('admin.compare')}}</a></li>
				<li><a href="#tab6" data-toggle="tab">{{trans('admin.contrast')}}</a></li>
				<li><a href="#tab7" data-toggle="tab">{{trans('admin.contextualization')}}</a></li>
				<li><a href="#tab8" data-toggle="tab">{{trans('admin.generalization')}}</a></li>
			</ul>
			<div id="bar" class="progress progress-info progress-striped">
				<div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 57.1429%;"></div>
			</div>

			<div class="tab-content">
				<div class="tab-pane" id="tab1">
					<div style="margin:0;background-color:transparent;text-align:center;">
						<a  class="btn btn-warning preview-oaca" data-prev="prev1" data-content="#content-form1">
							<i class="fa fa-eye"></i>
							Visualizar
						</a>
					</div>

					<!--EXPLANATION-->
					<div class="content sortable" id="content-form1" data-pattern='explanation'>
						

						
					</div>


					<div class="preview" id="prev1">
						<div class="box-footer box-footer-preview" style="margin-bottom:35px;">
							<div style="margin:0;background-color:transparent;text-align:center;">

								<a class="btn btn-warning" id="preview">
									<i class="fa fa-edit"></i>
									Seguir Editando</a>

									<button type="submit" class="btn btn-success">
										<i class="fa fa-cogs"></i>
										Procesar</button>
									</div>
								</div>



								<div class="content-preview">

								</div>
							</div>

							<!--./EXPLANATION-->
						</div>
						<div class="tab-pane" id="tab2" >
							<div style="margin:0;background-color:transparent;text-align:center;">

								<a class="btn btn-warning preview-oaca" data-prev="prev2">
									<i class="fa fa-eye"></i>
									Visualizar
								</a>
							</div>
							<!--EXEMPLIFICATION-->

							<div class="content sortable" data-pattern='exemplification'>
								
								
							</div>


							<div class="preview">
								<div class="box-footer box-footer-preview" style="margin-bottom:35px;">
									<div style="margin:0;background-color:transparent;text-align:center;">

										<a class="btn btn-warning" id="preview">
											<i class="fa fa-edit"></i>
											Seguir Editando</a>

											<button type="submit" class="btn btn-success">
												<i class="fa fa-cogs"></i>
												Procesar</button>
											</div>
										</div>



										<div class="content-preview">

										</div>
									</div>
									<!--./EXEMPLIFICATION-->
								</div>
								<div class="tab-pane" id="tab3">
									<div style="margin:0;background-color:transparent;text-align:center;">

										<a class="btn btn-warning preview-oaca" data-prev="prev3">
											<i class="fa fa-eye"></i>
											Visualizar
										</a>
									</div>
									<!--APPLICATION-->
									
									<div class="content sortable" data-pattern='application'>


									</div>


									<div class="preview">
										<div class="box-footer box-footer-preview" style="margin-bottom:35px;">
											<div style="margin:0;background-color:transparent;text-align:center;">

												<a class="btn btn-warning" id="preview">
													<i class="fa fa-edit"></i>
													Seguir Editando</a>

													<button type="submit" class="btn btn-success">
														<i class="fa fa-cogs"></i>
														Procesar</button>
													</div>
												</div>



												<div class="content-preview">

												</div>
											</div>


											<!--./APPLICATION-->
										</div>
										<div class="tab-pane" id="tab4">
											<div style="margin:0;background-color:transparent;text-align:center;">

												<a class="btn btn-warning preview-oaca" data-prev="prev4">
													<i class="fa fa-eye"></i>
													Visualizar
												</a>
											</div>
											<!--JUSTIFICATION-->

											<div class="content sortable" data-pattern='justification'>
												

											</div>


											<div class="preview">
												<div class="box-footer box-footer-preview" style="margin-bottom:35px;">
													<div style="margin:0;background-color:transparent;text-align:center;">

														<a class="btn btn-warning" id="preview">
															<i class="fa fa-edit"></i>
															Seguir Editando</a>

															<button type="submit" class="btn btn-success">
																<i class="fa fa-cogs"></i>
																Procesar</button>
															</div>
														</div>



														<div class="content-preview">

														</div>
													</div>
													<!--./JUSTIFICATION-->
												</div>
												<div class="tab-pane" id="tab5">

													<div style="margin:0;background-color:transparent;text-align:center;">
														{{-- <button type="submit" class="btn btn-primary btn-proccess" id="preview-oaca">Pre-Visualizar</button> --}}
														<a class="btn btn-warning preview-oaca" data-prev="prev5">
															<i class="fa fa-eye"></i>
															Visualizar
														</a>
													</div>
													<!--COMPARE-->

													<div class="content sortable" data-pattern='compare'>
														

													</div>


													<div class="preview">
														<div class="box-footer box-footer-preview" style="margin-bottom:35px;">
															<div style="margin:0;background-color:transparent;text-align:center;">

																<a class="btn btn-warning" id="preview">
																	<i class="fa fa-edit"></i>
																	Seguir Editando</a>

																	<button type="submit" class="btn btn-success">
																		<i class="fa fa-cogs"></i>
																		Procesar</button>
																	</div>
																</div>



																<div class="content-preview">

																</div>
															</div>
															<!--./COMPARE-->
														</div>
														<div class="tab-pane" id="tab6">

															<div style="margin:0;background-color:transparent;text-align:center;">
																{{-- <button type="submit" class="btn btn-primary btn-proccess" id="preview-oaca">Pre-Visualizar</button> --}}
																<a class="btn btn-warning preview-oaca"  data-prev="prev6">
																	<i class="fa fa-eye"></i>
																	Visualizar
																</a>
															</div>
															<!--CONTRAST-->

															<div class="content sortable" data-pattern='contrast'>
																

															</div>


															<div class="preview">
																<div class="box-footer box-footer-preview" style="margin-bottom:35px;">
																	<div style="margin:0;background-color:transparent;text-align:center;">

																		<a class="btn btn-warning" id="preview">
																			<i class="fa fa-edit"></i>
																			Seguir Editando</a>

																			<button type="submit" class="btn btn-success">
																				<i class="fa fa-cogs"></i>
																				Procesar</button>
																			</div>
																		</div>



																		<div class="content-preview">

																		</div>
																	</div>
																	<!--./CONTRAST-->
																</div>
																<div class="tab-pane" id="tab7">

																	<div style="margin:0;background-color:transparent;text-align:center;">
																		{{-- <button type="submit" class="btn btn-primary btn-proccess" id="preview-oaca">Pre-Visualizar</button> --}}
																		<a class="btn btn-warning preview-oaca"  data-prev="prev7">
																			<i class="fa fa-eye"></i>
																			Visualizar
																		</a>
																	</div>
																	<!--CONTEXTUALIZATION-->

																	<div class="content sortable" data-pattern='contextualization'>
																		

																	</div>


																	<div class="preview">
																		<div class="box-footer box-footer-preview" style="margin-bottom:35px;">
																			<div style="margin:0;background-color:transparent;text-align:center;">

																				<a class="btn btn-warning" id="preview">
																					<i class="fa fa-edit"></i>
																					Seguir Editando</a>

																					<button type="submit" class="btn btn-success" >
																						<i class="fa fa-cogs"></i>
																						Procesar</button>
																					</div>
																				</div>



																				<div class="content-preview">

																				</div>
																			</div>
																			<!--./CONTEXTUALIZATION-->
																		</div>
																		<div class="tab-pane" id="tab8">

																			<div style="margin:0;background-color:transparent;text-align:center;">
																				{{-- <button type="submit" class="btn btn-primary btn-proccess" id="preview-oaca">Pre-Visualizar</button> --}}
																				<a class="btn btn-warning preview-oaca"  data-prev="prev8">
																					<i class="fa fa-eye"></i>
																					Visualizar
																				</a>
																			</div>
																			<!--GENERALIZATION-->
																			<div class="content sortable" data-pattern='generalization'>

																				
																			</div>


																			<div class="preview">
																				<div class="box-footer box-footer-preview" style="margin-bottom:35px;">
																					<div style="margin:0;background-color:transparent;text-align:center;">

																						<a class="btn btn-warning" id="preview">
																							<i class="fa fa-edit"></i>
																							Seguir Editando</a>

																							<button type="submit" class="btn btn-success">
																								<i class="fa fa-cogs"></i>
																								Procesar</button>
																							</div>
																						</div>



																						<div class="content-preview">

																						</div>
																					</div>
																					<!--./GENERALIZATION-->
																				</div>
																				<ul class="pager wizard">
																					<li class="previous first" style="display:none;"><a href="#">First</a></li>
																					<li class="previous"><a href="#">Previous</a></li>
																					<li class="next last" style="display:none;"><a href="#">Last</a></li>
																					<li class="next"><a href="#">Next</a></li>
																				</ul>
																			</div>
																		</div>
																	</form>


																</div>




																<!-------------------------------------------------------------------------------->

																{{-- Modulos de elementos ocultos para clonar --}}

																{{-- Modulo Title --}}

																<div class="titulo-clone nomostrar">
																	<div class="box">
																		<div class="box-header with-border">
																			<h3 class="box-title">Titulo</h3>
																			<div class="box-tools pull-right">
																				<button type="button" class="btn btn-box-tool">
																					<i class="fa fa-close"></i>
																				</button>
																			</div>
																		</div>
																		<div class="box-body">
																			<input type="text" class="form-control componente"> 
																		</div>
																	</div>
																</div>

																{{-- Modulo Textarea --}}
																<div class="textareaclone nomostrar  ">

																	<div class="box">
																		<div class="box-header with-border">
																			<h3 class="box-title">Textarea</h3>
																			<div class="box-tools pull-right">
																				<button type="button" class="btn btn-box-tool">
																					<i class="fa  fa-close"></i>
																				</button>
																				<button  type="button" class="btn btn-box-tool">
																					<i class="fa  fa-paint-brush"></i>
																				</button>
																			</div>
																		</div>
																		<div class="box-body edit-textarea">

																		</div>
																	</div>

																</div>


																<!--modulo image-->


																<div class="uploadimage uploadimage-clone nomostrar">
																	<div class="box">
																		<div class="box-header with-border">
																			<h3 class="box-title">Image</h3>
																			<div class="box-tools pull-right">
																				<button type="button" class="btn btn-box-tool">
																					<i class="fa fa-close"></i>
																				</button>
																			</div>
																		</div>
																		<div class=" box-body">
																			<input class="form-control" type="file" />
																		</div>
																	</div>
																</div>


																<!-- Modal -->
																<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
																	<div class="modal-dialog" role="document">
																		<div class="modal-content">
																			<div class="modal-header">
																				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
																				<h4 class="modal-title" id="myModalLabel">Modal title</h4>
																			</div>
																			<div class="modal-body">
																				...
																			</div>
																			<div class="modal-footer">
																				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
																				<button type="button" class="btn btn-primary">Save changes</button>
																			</div>
																		</div>
																	</div>
																</div>


																@endsection


																<!--Styles-->
																@push('styles')


																<link href="/vendor/summernote/dist/summernote.css" rel="stylesheet">
																<link href="/assets/css/style_steps.css" rel="stylesheet">


																<style>
																	.nomostrar{display:none;}
																	.mostrar{display: block;}
																	.btn-proccess{margin:0 auto; width: 200px;align:left;}
																	.preview{display: none;}
																	.mark_background{background: #88AAAA}
																	.content-preview{padding-left: 5%; padding-right: 5%;padding-bottom: 5%;}
																	.content-preview h2{
																		color: blue;
																		text-align: center;
																	}
																	.callout{margin: 0 !important; min-height:0;}

																	.options-textarea{
																		padding-bottom: 10px;
																	}
																	.box-header-btn{
																		background: #CCCBCB;
																	}

																</style>
																@endpush

																<!--Scripts-->


																@push('scripts')
																<script src="/vendor/summernote/dist/summernote.js"></script>
																<script type="text/javascript"  src="/assets/js/objetos/preview.js" ></script>
																<script type="text/javascript"  src="/assets/js/objetos/options-textarea.js" ></script>
																<script type="text/javascript" src="/vendor/jqueryte/dist/jquery-te-1.4.0.min.js" charset="utf-8"></script>
																<script type="text/javascript" src="/vendor/twitter-bootstrap-wizard/jquery.bootstrap.wizard.min.js" ></script>


																<script>
																	$(document).ready(function(){
																		$('#rootwizard').bootstrapWizard({'tabClass': 'nav nav-tabs',onTabShow: function(tab, navigation, index) {
																			var $total = navigation.find('li').length;
																			var $current = index+1;
																			var $percent = ($current/$total) * 100;
																			$('#rootwizard .progress-bar').css({width:$percent+'%'});
																		}});


																		var count=0;

																		$( "#title, #textarea, #uploadimage" ).draggable({
																			appendTo: "body",
																			helper: "clone"
																		});


																		$(".content").droppable({
																			accept: '.option',
																			drop:function(event,ui){

																				var opt = ui.draggable.data('element-option');

            // console.log(ui.draggable.data('element-option'));

            switch(opt){
            	case 'title':
            	var title = $(".titulo-clone").clone().removeClass('titulo-clone');
            	$(title).removeClass("nomostrar").addClass("remove-div-"+count).addClass("title").appendTo(this);
            	$(".remove-div-"+count).find('input').attr({"data-element":"title","id":"title-"+count,"name":"data["+count+"][content]"}).addClass("myinput");
            	$(".remove-div-"+count).find('button').attr({"data-parent":"remove-div-"+count}).addClass('remove-div');
            	$("#title-"+count).after("<input type='hidden' name='data["+count+"][type]' value='title'>");
            	$("#title-"+count).after("<input type='hidden' name='data["+count+"][id]' value=''>");
            	$("#title-"+count).after("<input type='hidden' name='data["+count+"][pattern]' value='"+$(this).data('pattern')+"'>");



            	count ++;

            	break;

            	case 'textarea':
            	var textarea = $(".textareaclone").clone();
            	$(textarea).removeClass("nomostrar").removeClass("textareaclone").addClass("remove-div-"+count).addClass("textarea").appendTo( this );
            	$(".remove-div-"+count).find('.edit-textarea').attr({"data-element":"textarea",'data-content':'content-textarea'+count,'id':'textarea'+count,"name":"textarea"}).addClass("myinput");
            	$(".remove-div-"+count).find("input#input-textarea"+count).addClass('componente');
            	$(".remove-div-"+count).find('button').attr({"data-parent":"remove-div-"+count}).addClass('remove-div');
            	$("#textarea"+count).after("<input type='hidden' name='data["+count+"][content]' id='content-textarea"+count+"' value='pruab'>");
            	$("#textarea"+count).after("<input type='hidden' name='data["+count+"][type]'  value='textarea'>");
            	$("#textarea"+count).after("<input type='hidden' name='data["+count+"][id]' value=''>");


            	$('#textarea'+count).summernote({
            		height: 300,               
            		minHeight: null,             
            		maxHeight: null,             
            		focus: true,
            		maximumImageFileSize: 512*1024  
            	});


            	count ++;

            	break;

            	case 'uploadimage':
            	var uploadimage = $("div.uploadimage-clone").clone();
            	$(uploadimage).removeClass("nomostrar").removeClass("uploadimage-clone").addClass("remove-div-"+count).appendTo(this)

            	$(".remove-div-"+count).find('input').attr({"data-element":"image","data-position":count,'value':'image-'+count,"name":"image"+count,"id":'imagep-'+count}).addClass("myinput");
            	$(".remove-div-"+count).find('button').attr({"data-parent":"remove-div-"+count}).addClass('remove-div');
            	$("#image-"+count).addClass("componente");
            	$(".remove-div-"+count).after("<input type='hidden' name='data["+count+"][content]' value='image"+count+"'>");
            	$(".remove-div-"+count).after("<input type='hidden' name='data["+count+"][type]' value='image'>");
            	$(".remove-div-"+count).after("<input type='hidden' name='data["+count+"][id]' value=''>");

            	count ++;

            	break;


            }




        }

    });

				//Function Delete content

				$("#form-create-oaca").on('click','button.remove-div',function (e){

					var divDelete = $(this).data('parent');

					$("."+divDelete).remove();

				});

				var textareaID;
				var content_element

				$( ".sortable:not(div.box-footer)" ).sortable({
					axis: 'y',
					opacity: 0.5,
					tolerance: 'pointer',
					handle: ".box-header"

				});

			});



		</script>
		<script src="/vendor/jQuery.serializeObject/jquery.serializeObject.js" >
		</script>
		@endpush