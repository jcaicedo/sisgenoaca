$(document).ready(function() {
	// body...

	/*Button Bold*/

	$("#form-create-oaca").on("change",".bold-btn",function(e){
		if($(this).is(":checked")){
			$("#"+$(this).data('textareainput')).css("font-weight","bold");
		}else{
			$("#"+$(this).data('textareainput')).css("font-weight","");
		}

	});

	$("#form-create-oaca").on("change",".italic-btn",function(e){
		if($(this).is(":checked")){
			$("#"+$(this).data('textareainput')).css("font-style","italic");
		}else{
			$("#"+$(this).data('textareainput')).css("font-style","");
		}

	});

	$("#form-create-oaca").on("change",".under-btn",function(e){
		if($(this).is(":checked")){
			$("#"+$(this).data('textareainput')).css("text-decoration","underline");
		}else{
			$("#"+$(this).data('textareainput')).css("text-decoration","");
		}

	});

});