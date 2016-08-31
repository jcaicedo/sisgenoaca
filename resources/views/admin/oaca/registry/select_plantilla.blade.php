@extends('admin.layouts.default')
@section('title',trans('admin.plantilla'))
@section('content')

<div class="content-wrapper">

	<ol id="selectable">
		<li class="ui-state-default">1</li>
		<li class="ui-state-default">2</li>
		<li class="ui-state-default">3</li>
		<li class="ui-state-default">4</li>
		<li class="ui-state-default">5</li>
		<li class="ui-state-default">6</li>
		<li class="ui-state-default">7</li>
		<li class="ui-state-default">8</li>
		<li class="ui-state-default">9</li>
		<li class="ui-state-default">10</li>
		<li class="ui-state-default">11</li>
		<li class="ui-state-default">12</li>
	</ol>
</div>

@endsection

@push('styles')
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.0/themes/smoothness/jquery-ui.css">
<style>
	#feedback { font-size: 1.4em; }
	#selectable .ui-selecting { background: #FECA40; }
	#selectable .ui-selected { background: #F39814; color: white; }
	#selectable { list-style-type: none; margin: 0; padding: 0; width: 450px; }
	#selectable li { margin: 3px; padding: 1px; float: left; width: 100px; height: 80px; font-size: 4em; text-align: center; }
</style>


@push('scripts')
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.0/jquery-ui.js"></script>
<script>

	$(document).ready(function ($) {
		$('ol').selectable();
		
	});

</script>