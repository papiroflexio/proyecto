function eliminarOferta(id) {

	var num = id;
	var loc = "principal.php";

	var dato = {
			id : id
	};

	console.log(id);
	
	$.ajax({
			data:  dato,
			url:   'php/include/mostrarExperiencia.php',
			type:  'post',

		});

	alert("Experiencia eliminada.");
	location.href = loc;

}