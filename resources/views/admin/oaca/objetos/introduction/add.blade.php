@extends('admin.layouts.default')
@section('title',trans('admin.introduction'))
@section('content')



<div class="content-wrapper">
	<form action="" method="post" role="form" id="form-create-introduction" enctype="multipart/form-data" >
		<div class="content sortable">
			{{csrf_field()}}
			<input type="hidden" name="register_id" value="{{$register}}">
			

			<input type="hidden" name="elementos" value="" id="hidden_elementos">

		</div>

	</form>
</div>

<div class="box-footer" style="margin-bottom:35px;">

	<div style="margin:0;background-color:transparent;text-align:center;">
		{{-- <button type="submit" class="btn btn-primary btn-proccess" id="preview-oaca">Pre-Visualizar</button> --}}
		<a id="preview-oaca" class="btn btn-warning">
			<i class="fa fa-eye"></i>
			Visualizar
		</a>
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

@push('scripts')

<script>
	$(document).ready(function(){

		$("#myModal").modal('show');
	});
</script>

@endpush