@extends('oaca.layouts.default')
@section('title',trans('admin.createOaca'))
@section('content')

<div class="content-wrapper">

	<section class="introduction">
		@foreach($content_introduction as $key=>$element_introduction)

		@if($element_introduction->type_element == 'textarea')
		
		{{$element_introduction->content}}
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