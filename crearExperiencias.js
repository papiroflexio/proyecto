$(document).ready(function(){
	
	$("#crearExperiencia").click(function(){	

		var img = $("#imagen").val();
		var tit = $("#titulo").val();
		var des = $("#descripcion").val();

		var loc = "/proyecto/principal.php";


		var dato = {
			"imagen" : img,
			"titulo" : tit,
			"descripcion" : des
		};
				
		// Guardar localmente los datos. (pendiente)
	
		//llamada al fichero PHP con AJAX

		$.ajax({
			data:  dato,
			url:   'php/crearOferta.php',
			type:  'post',

		});

		alert("Experiencia creada.");
		location.href = loc;

	});
			
});