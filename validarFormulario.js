$(document).ready(function() {


	// Creo variables globales con el valor "false" para poder validar que no hayan campos vacíos o mal validados.

	var nomb = false;
	var corr = false;
	var usua = false;
	var contra = false;

	/*Funcion de validar nombre.*/

	$("#nombre").focusout(function() {

		var exp = /[A-z]/;

		if ($("#nombre").val().match(exp)) {

			$("#infnom").attr("src", "img/registro_img/ok.png");

			//Convertimos la variable nomb en true para que se sepa que ya está validada.

			nomb = true;

		} else if (!$("#nombre").val().match(exp)){

			$("#infnom").attr("src", "img/registro_img/no.png");
			//Se sigue quedando en false para que la validación salga mal.

			nomb = false;

		}

	});

	/*Funcion de validar correo.*/

	$("#correo").focusout(function() {

		var exp = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/;

		if ($("#correo").val().match(exp)) {

			$("#infcor").attr("src", "img/registro_img/ok.png");

			//Convertimos la variable en true para que se sepa que ya está validada.

			corr = true;

		} else if (!$("#correo").val().match(exp)){

			$("#infcor").attr("src", "img/registro_img/no.png");
			//Se sigue quedando en false para que la validación salga mal.

			corr = false;

		}

	});

	/*Funcion de validar usuario.*/

	$("#usuario").keyup(function() {

		var exp = /[!^a-zA-Z0-9]/;

		if ($("#usuario").val().match(exp)) {

			$("#infusr").attr("src", "img/registro_img/ok.png");

			//Convertimos la variable en true para que se sepa que ya está validada.

			usua = true;

		} else {

			$("#infusr").attr("src", "img/registro_img/no.png");
			//Se sigue quedando en false para que la validación salga mal.

			usua = false;

		}

	});

	/*Funcion de validar contraseña.*/

	$("#passwor").focusout(function() {

		var exp = /[a-zA-Z0-9]/;

		if ($("#passwor").val().match(exp)) {

			$("#infpas").attr("src", "img/registro_img/ok.png");

			//Convertimos la variable en true para que se sepa que ya está validada.

			contra = true;

		} else if (!$("#passwor").val().match(exp)){

			$("#infpas").attr("src", "img/registro_img/no.png");
			//Se sigue quedando en false para que la validación salga mal.

			contra = false;

		}

	});

	/*Si están todos los campos en true, que se ejecute al dar click en el botón de registro.*/

	$("#botonRegistro").click(function(){	

		console.log(nomb);
		console.log(corr);
		console.log(usua);
		console.log(contra);

		if (nomb && corr && usua && contra) {

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

		} else {

			/*Si no son todos los valores "true", que salte una alerta.*/

			alert("Hay algún elemento mal en el formulario.");

		}
		
	});

});