@extends('oaca.layouts.default')
@section('title',trans('admin.createOaca'))
@section('content')

<div class="content-wrapper">

<<<<<<< HEAD
	<!--INTRODUCTION-->

	<section class="content introduction moment">

		
		<div class="flexslider flexslider-motivation">
=======
	<!--MOTIVATION-->
	@foreach($content_motivation as $key=>$content_child)
	<section class="content motivation-{{$key}} moment" style="display:none;">
		<h2 class="content-oaca-font-size">{{trans('admin.'.$key)}}</h2>
		<div class="flexslider flexslider_deelop">
>>>>>>> origin/develop/fullscream
			<ul class="slides">
				@foreach($content_child as $key_child=>$content)
				<li>
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
							<p>{{ print_r ($element->content)}}</p>
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
				</li>
				@endforeach
			</ul>
		</div>
	</section>
	@endforeach

	<!--./MOTIVATION-->
	<!--DEVELOP-->


	@foreach($content_develop as $key=>$content_child)

	<section class="content develop-{{$key}} moment" style="display:none;">
<<<<<<< HEAD
		<h2 class="content-oaca-font-size">{{$key}}</h2>
		<div class="flexslider flexslider_develop">
=======
		<h2 class="content-oaca-font-size">{{trans('admin.'.$key)}}</h2>
		<div class="flexslider flexslider_deelop">
>>>>>>> origin/develop/fullscream
			<ul class="slides">
				@foreach($content_child as $key_child=>$content)
				<li>
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
							<p>{{ print_r ($element->content)}}</p>
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
				</li>
				@endforeach
			</ul>
		</div>
	</section>
	@endforeach

	<!--./DEVELOP-->


	<!--CLOSE-->


	@foreach($content_close as $key=>$content_child)
	<section class="content close-{{$key}} moment"  style="display:none;">
		<h2 class="content-oaca-font-size">{{trans('admin.'.$key)}}</h2>
		<div class="flexslider">
			<ul class="slides">
				@foreach($content_child as $key_child=>$content)
				<li>
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
							<p> {{print_r ($element->content)}} </p>
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
				</li>
				@endforeach
			</ul>
		</div>
	</section>
	@endforeach

	<!--./CLOSE-->

	<!--References-->
	<section class="content moment" id="content-references"  style="display:none;">
		<h2 class="content-oaca-font-size">Referencias</h2>
	</section>
	<!--./References-->
	<section class="content">
		<p>
			{{$references}}
		</p>
	</section>

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
	<style media="screen">
		ul.slides li {
			background-color: rgb(161, 213, 227);
			margin: 20px;
			padding: 12px;
		}
	</style>

{{-- <link rel="stylesheet" type="text/css" href="/vendor/flexslider/flexslider.css"> --}}

<!--Scripts-->
@push('scripts')
<script src="/vendor/AdminLTE/plugins/jQuery/jQuery-2.2.0.min.js"></script>
<!-- FlexSlider -->
{{-- <script  src="/vendor/flexslider/jquery.flexslider.js"></script> --}}


<script>


	$(document).ready(function (e) {

		$('.flexslider-motivation').flexslider({
			animation: "slide",
			animationLoop:true,
			slideshow: false,
			smoothHeight: true,

		});

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
			console.log(content_section);
			$(content_section).show();

			if($(this).data('flexslider')=='0'){
				var carousel = $(content_section).find("div.flexslider");
				$(carousel).flexslider({
					animation: "slide",
					animationLoop:true,
					slideshow: false,
					smoothHeight: true,
				});

				$(this).data('flexslider','1');
			}

			console.log($(this).data('element'));
		});

<<<<<<< HEAD

		
		
=======
		$(".btn-element-sidebar-references").click(function(){
			$(".moment").hide();
			$("#content-references").show();
		});
>>>>>>> origin/develop/fullscream


		// $('.flexslider, .flexslider_deelop').flexslider({
		// 	animation: "slide",
		// 	animationLoop:true,
		// 	slideshow: false,
		// 	smoothHeight: true,
		//
		// });


	});
</script>
