$(document).ready(function (e) {

	// body...
	
	$('#form_register').bootstrapValidator({

		fields:{
			identificator: {
				validators: {
					notEmpty: {
						message: 'Campo Identificador está vacío'
					},
					stringLength: {
						min: 10,
						max: 100,
						message: 'Campo Identificador debe contener entre 10 y 100 caracteres alfanumericos'
					},
					
				}
			},
			title: {
				validators: {
					notEmpty: {
						message: 'Campo Título está vacío'
					},
					stringLength: {
						min: 10,
						max: 100,
						message: 'Campo Título debe contener entre 10 y 100 caracteres alfanumericos'
					},
					
				}
			},
			language: {
				row: 'col-xs-12',
				validators: {
					notEmpty: {
						message: 'Campo Idioma está vacío'
					},
					
					
				}
			},
			description: {
				validators: {
					notEmpty: {
						message: 'Campo Descripción está vacío'
					},
					stringLength: {
						min: 100,
						max: 500,
						message: 'Campo Descripción debe contener entre 10 y 100 caracteres alfanumericos'
					},
					
				}
			},
			words_key: {
				validators: {
					notEmpty: {
						message: 'Campo está vacío'
					},

					
				}
			},


		}
	});



});