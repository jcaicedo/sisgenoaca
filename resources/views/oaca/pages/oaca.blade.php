@extends('oaca.layouts.default')
@section('title',trans('admin.createOaca'))
@section('content')

<div class="content-wrapper">

	<!--INTRODUCTION-->

	<section class="content introduction moment">

		@foreach($content_introduction as $key=>$element_introduction)

		@if($element_introduction->type_element == 'title')
		<div class="row">
			<div class="col-md-12 title">
				<h1 class="content-oaca-font-size">{{ $element_introduction->content }}</h1>
			</div>
		</div>
		@endif

		@if($element_introduction->type_element == 'textarea')
		<div class="row ">
			<div class="col-md-12 textarea">	
				<p><?php echo $element_introduction->content ?></p>
			</div>
		</div>
		@endif

		@if($element_introduction->type_element == 'image')
		<div class="row">
			<div class="col-md-12 image">
				<img src="{{ $element_introduction->content }}" alt="" style="width:50%; height:auto">
			</div>
		</div>
		@endif

		@endforeach
	</section>

	<!--./INTRODUCTION-->
	<!--DEVELOP-->


	@foreach($content_develop as $key=>$content)
	<section class="content develop-{{$key}} moment" style="display:none;">
		<h2 class="content-oaca-font-size">{{$key}}</h2>

		@foreach($content as $key=>$element)

		@if($element->type_element == 'title')
		<div class="row">
			<div class="col-md-12 title">
				<h1 class="content-oaca-font-size">{{$element->content}}</h1>
			</div>
		</div>
		@endif

		@if($element->type_element == 'textarea')
		<div class="row">
			<div class="col-md-12 textarea">
				<p><?php echo $element->content ?></p>
			</div>
		</div>
		@endif

		@if($element->type_element == 'image')
		<div class="row">
			<div class="col-md-12 image">
				<img src="{{ $element->content }}" alt="" style="width:50%; height:auto">
			</div>
		</div>
		@endif


		@endforeach

	</section>
	@endforeach

	<!--./DEVELOP-->


	<!--CLOSE-->


	@foreach($content_close as $key=>$content)
	<section class="content close-{{$key}} moment"  style="display:none;">
		<h2 class="content-oaca-font-size">{{$key}}</h2>

		@foreach($content as $key=>$element)


		@if($element->type_element == 'title')
		<div class="row">
			<div class="col-md-12 title">
				<h1 class="content-oaca-font-size">{{$element->content}}</h1>
			</div>
		</div>
		@endif

		@if($element->type_element == 'textarea')
		<div class="row">
			<div class="col-md-12 textarea">
				<p><?php echo $element->content ?></p>
			</div>
		</div>
		@endif

		@if($element->type_element == 'image')
		<div class="row">
			<div class="col-md-12 image">
				<img src="{{ $element->content }}" alt="" style="width:50%; height:auto">
			</div>
		</div>
		@endif


		@endforeach

	</section>
	@endforeach

	<!--./CLOSE-->
	


</div>

<div class="main-footer">
	<div class="pull-right">
		<img src="/assets/imgs/licencias_creative_commons/{{$oaca->licencia}}.png" alt="" style="margin-top:-11px;">
	</div>
	<strong>
		Copyright © 2014-2015 SisGeoAca
	</strong>
</div>

@endsection

<!--Styles-->
@push('styles')

<style>
	
</style>

<!--Scripts-->
@push('scripts')
<script src="/vendor/AdminLTE/plugins/jQuery/jQuery-2.2.0.min.js"></script>

<script>


	$(document).ready(function (e) {

		$('.textarea p').each(function(e){
			
			$(this).addClass('content-oaca-font-size');

		});
		
		$('.btn-element-sidebar').click(function(argument) {
			var content_section ='.'+$(this).data('element');
			var title = $(this).data('title');
			var subtitle = $(this).data('subtitle');

			$('.title-moment').text(title);
			$('.title-pattern').text(subtitle);

			$(".moment").hide();
			$(content_section).show();

			console.log($(this).data('element'));
		});



	});
</script>