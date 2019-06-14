function eliminarOferta(id) {

	var num = id;

	var dato = {
			id : id
	};

	$.ajax({
			data:  dato,
			url:   'php/include/mostrarOfertas.php',
			type:  'post',
			success:  function (response) {
				
				alert("Oferta eliminada.");
				location.reload();
								
			}

		});

	
	//location.reload();

}