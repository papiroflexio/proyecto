$(document).ready(function(){
	
	$("#botonLogin").click(function(){		

		//cogemos el valor del input

		var nom = $("#usuario").val();
		var pas = $("#contra").val();

		var loc = "principal.php";
		
		if ( nom == "" && pas == "" ){
			alert("Introduce todos los campos.");
			return;
		}
		
		//creamos array de parámetros que mandaremos por POST

		var datos = {
			"nombre" : nom,
			"contra" : pas
		};
				
		// Guardar localmente los datos. (pendiente)

		//llamada al fichero PHP con AJAX

		$.ajax({
			data:  datos,
			url:   'php/php-login/inicioSesion.php',
			type:  'post',
			success:  function (response) {
				if (response == nom) {

					
					location.href = loc;
					

				} else {

					$("#disponibilidad").html("Usuario / contraseña incorrecto.");
					

				}
								
			}
		});

	});
			
});