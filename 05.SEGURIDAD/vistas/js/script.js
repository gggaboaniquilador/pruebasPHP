$("email").change(function() {
	var email = $(this).val();
	var datos = new FormData();
	datos.append("validarEmail", email);
	$.ajax({

		url:"ajax/formularios.ajax.php",
		method:"POST",
		data: datos,
		cache: false,
		contentType:false,
		processData:false,
		success:function(respuesta);

	});
})