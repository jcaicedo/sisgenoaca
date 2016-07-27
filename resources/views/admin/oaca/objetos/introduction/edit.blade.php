@extends('admin.layouts.menuoaca')
@section('title',trans('admin.edit_Oaca'))
@section('content')

<div class="content-wrapper">

<!--	@foreach($registrys as $key=>$registry)
	<h1>{{$registry->title_oaca}}</h1>
	@foreach($registry->elements as $ind=>$element)
	h1>{{ $element->area }}</h1>
	@endforeach
	@endforeach-->

	<div class="box-header box-header-btn">
		<h1 class="box-title">{{trans('admin.introduction')}}</h1>
		<div style="margin:0;background-color:transparent;text-align:center;" >
			<a href="" id="preview-oaca" class="btn btn-warning">
				<i class="fa fa-eye"></i>
				{{trans('admin.visualize')}}
			</a>

		</div>
	</div>

	<form action="" method="post" onSubmit="submitFormOaca()" role="form" id="form-create-oaca" enctype="multipart/form-data">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<input type="hidden" name="register_id" value="{{$register_id}}">


		<input type="hidden" name="elementos" value="" id="hidden_elementos">

		<div class="content sortable" id="content-form">
			@foreach($contentIntroduction as $key=>$element)


			@if(($element->type_element) == 'title')

			<div class="titulo">
				<div class="box">
					<div class="box-header with-border">
						<h3 class="box-title">{{trans('admin.title')}}</h3>
						<div class="box-tools pull-right">
							<button class="btn btn-box-tool">
								<i class="fa fa-close"></i>
							</button>
						</div>
					</div>
					<div class="box-body">
						<input type="text" class="form-control componente" value="{{$element->content}}">
					</div>
				</div>
			</div>

			@endif

			@endforeach



		</div>


	</form>

	
</div>



@endsection

@push('styles')
<link href="/vendor/summernote/dist/summernote.css" rel="stylesheet">

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

@push('scripts')

<script src="/vendor/summernote/dist/summernote.js"></script>
<script type="text/javascript"  src="/assets/js/objetos/preview.js" ></script>
<script type="text/javascript"  src="/assets/js/objetos/options-textarea.js" ></script>
<script type="text/javascript" src="/vendor/jqueryte/dist/jquery-te-1.4.0.min.js" charset="utf-8"></script>

<script>
	$(document).ready(function(){








		$( ".sortable:not(div.box-footer)" ).sortable({
			axis: 'y',
			opacity: 0.5,
			tolerance: 'pointer',
			handle: ".box-header"

		});

	});


</script>

@endpush