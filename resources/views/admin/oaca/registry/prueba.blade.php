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
						{!! csrf_field() !!}
						<div class="box-body">
							<h4>{{trans('admin.select_plantilla')}}</h4>


							</div>

							<div class="box-footer">
								<button type="submit" class="btn btn-primary">Submit</button>
							</div>

						</form>

					</div>
				</div>
			</section>


		</div>

	@endsection

	@push('styles')
		<link rel="stylesheet" href="//code.jquery.com/ui/1.11.0/themes/smoothness/jquery-ui.css">


		@push('scripts')
			<script src="//code.jquery.com/jquery-1.10.2.js"></script>
			<script src="//code.jquery.com/ui/1.11.0/jquery-ui.js"></script>


		</script>
