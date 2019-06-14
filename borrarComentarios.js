function eliminar(id) {

	var num = id;

	var dato = {
			id : id
	};

	console.log(id);

	$.ajax({
			data:  dato,
			url:   'php/include/mostrarComentarios.php',
			type:  'post',
			success:  function (response) {
				
				location.reload();
								
			}

		});


	//location.reload();

}