@extends('admin.layouts.default')
@section('title',trans('admin.plantilla'))
@section('content')

<div class="content-wrapper">


	<section class="content-header">
		<h1>{{trans('admin.select_plantilla')}}</h1>
		<ol class="breadcrumb">
			<li>
				<a href="#">
					<i class="fa fa-dashboard"></i>Dashboard
				</a>
			</li>
			<li class="active">
				Plantilla
			</li>
		</ol>
	</section>

	<section class="content">
		<div class="row">
			<div class="box box-primary">

				<div class="box-header with-border">
					<h3 class="box-title">
						{{trans('admin.create_plantilla')}}
					</h3>
				</div>
				<form  method="post" id="form_select_plantilla" role="form">

					<div class="box-body">

						<ol id="selectable" name="">
							<li class="ui-state-default">
								<img name="plantilla1" src="/assets/imgs/contents-img/plantillas/plantilla1.png" style="height:auto; width:100%; " alt="">
							</li>
							<li class="ui-state-default">
								<img name="plantilla2" src="/assets/imgs/contents-img/plantillas/plantilla1.png" style="height:auto; width:100%; " alt="">
							</li>
							<li class="ui-state-default">
								<img name="plantilla3" src="/assets/imgs/contents-img/plantillas/plantilla1.png" style="height:auto; width:100%; " alt="">
							</li>
							<li class="ui-state-default">
								<img name="plantilla4" src="/assets/imgs/contents-img/plantillas/plantilla1.png" style="height:auto; width:100%; " alt="">
							</li>
							<li class="ui-state-default">
								<img name="plantilla5" src="/assets/imgs/contents-img/plantillas/plantilla1.png" style="height:auto; width:100%; " alt="">
							</li>
						</ol>

					</div>
				</form>
				
			</div>
		</div>
	</section>

	
</div>

@endsection

@push('styles')
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.0/themes/smoothness/jquery-ui.css">
<style>
	#feedback { font-size: 1.4em; }
	#selectable .ui-selecting { background: #FECA40; }
	#selectable .ui-selected { background: #F39814; color: white; }
	#selectable {  margin: 0 auto; list-style-type: none; padding: 0; width: 1050px; }
	#selectable li { padding: 15px; float: left; width: 500px; height: auto; font-size: 4em; text-align: center; margin:10px; }

</style>


@push('scripts')
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.0/jquery-ui.js"></script>
<script>

	$(document).ready(function ($) {
		$('ol').selectable({
			selected: function( event, ui ) {
				console.log( $( ".ui-selected", this ).find('img').attr('name'));
			},
			stop: function(event, ui){
				$(".ui-selected:first",this).each(function(){
					$(this).siblings().removeClass("ui-selected");

				});
			}
		});
		
	});

</script>