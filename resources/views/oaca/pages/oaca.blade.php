@extends('oaca.layouts.default')
@section('title',trans('admin.createOaca'))
@section('content')

<div class="content-wrapper">

	<section class="introduction">
		@foreach($content_introduction as $key=>$element_introduction)

		@if($element_introduction->type_element == 'textarea')
		
		<input type="hidden" class="value-textarea" name="textarea[]" value = "{{$element_introduction->content}}">
		
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
		
		$('.value-textarea').each(function(index){

			$(this).after($(this).val());

		});



	});
</script>