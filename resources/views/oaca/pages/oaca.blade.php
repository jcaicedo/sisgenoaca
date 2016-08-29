@extends('oaca.layouts.default')
@section('title',trans('admin.createOaca'))
@section('content')

<div class="content-wrapper">

	<section class="introduction">
		
		@foreach($content_introduction as $key=>$element_introduction)

		@if($element_introduction->type_element == 'title')

		<h1>{{ $element_introduction->content }}</h1>

		@endif

		@if($element_introduction->type_element == 'textarea')

		<?php echo $element_introduction->content ?>
		
		@endif

		@if($element_introduction->type_element == 'image')
		<img src="{{ $element_introduction->content }}" alt="" style="width:50px; height:100%">
		@endif

		@endforeach
	</section>


</div>

@endsection

<!--Styles-->
@push('styles')
<style>
	.content-wrapper{padding-top: 20px;}
</style>

<!--Scripts-->
@push('scripts')
<script src="/vendor/AdminLTE/plugins/jQuery/jQuery-2.2.0.min.js"></script>
<script>

	$(document).ready(function (e) {
		



	});
</script>