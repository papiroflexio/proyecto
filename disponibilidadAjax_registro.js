$(document).ready(function(){
	
	$("#botonRegistro").click(function(){	

		//cogemos el valor del input
		var nombre = $("#nombre").val();
		var email = $("#correo").val();
		var user = $("#usuario").val();
		var pass = $("#passwor").val();

		var loc = "login.php";
				
		
		//creamos array de parámetros que mandaremos por POST

		var datos = {

			"nombre" : nombre,
			"usuario" : user,
			"correo" : email,
			"contra" : pass
		};
				
		// Guardar localmente los datos. (pendiente)

		//llamada al fichero PHP con AJAX

		$.ajax({
			data:  datos,
			url:   'php/php-login/insertarUsuarios.php',
			type:  'post',
			success:  function (response) {

				if (!response) {

					location.href = loc;

				} else if (response) {}{
					
					$("#infusr").attr("src", "img/registro_img/no.png");
					$("#disponibilidad").html("<span>Usuario ya registrado.</span>");
	
				}

					

			}
		});
	
		
	});
		
	
});