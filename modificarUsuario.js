/*
	Este fichero valida, recoge los datos del formulario de modificación de usuarios y los manda a un fichero PHP donde
	se realizan las consultas correspondientes.

*/

$(document).ready(function() {


	/* Creo variables globales con el valor "false" para poder validar que no hayan campos vacíos o mal validados. */

	var nomb = false;
	var corr = false;
	var usua = false;
	var contra = false;

	/* Si están todos los campos en true, que se ejecute al dar click en el botón de registro. */

	$("#botonModificar").click(function(){

		/* Funcion de validar nombre. */

		var exp = /[A-z]/;

		if ($("#nombre").val().match(exp)) {

			$("#infnom").attr("src", "img/registro_img/ok.png");

			/* Convertimos la variable nomb en true para que se sepa que ya está validada. */

			nomb = true;

		} else if (!$("#nombre").val().match(exp)){

			$("#infnom").attr("src", "img/registro_img/no.png");

			/* Se sigue quedando en false para que la validación salga mal. */

			nomb = false;

		}

		/* Funcion de validar correo. */

		var exp = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/;

		if ($("#correo").val().match(exp)) {

			$("#infcor").attr("src", "img/registro_img/ok.png");

			/* Convertimos la variable en true para que se sepa que ya está validada. */

			corr = true;

		} else if (!$("#correo").val().match(exp)){

			$("#infcor").attr("src", "img/registro_img/no.png");
			/* Se sigue quedando en false para que la validación salga mal. */

			corr = false;

		}

		/* Funcion de validar usuario. */

		var exp = /[!^a-zA-Z0-9]/;

		if ($("#usuario").val().match(exp)) {

			$("#infusr").attr("src", "img/registro_img/ok.png");

			/* Convertimos la variable en true para que se sepa que ya está validada. */

			usua = true;

		} else {

			$("#infusr").attr("src", "img/registro_img/no.png");

			/* Se sigue quedando en false para que la validación salga mal. */

			usua = false;

		}

		/* Funcion de validar contraseña */

		var exp = /[a-zA-Z0-9]/;

		if ($("#passwor").val().match(exp)) {

			$("#infpas").attr("src", "img/registro_img/ok.png");

			//Convertimos la variable en true para que se sepa que ya está validada.

			contra = true;

		} else if (!$("#passwor").val().match(exp)){

			$("#infpas").attr("src", "img/registro_img/no.png");
			
			/* Se sigue quedando en false para que la validación salga mal. */

			contra = false;

		}


		if (nomb && corr && usua && contra) {

			//cogemos el valor del input

			var nombre = $("#nombre").val();
			var email = $("#correo").val();
			var user = $("#usuario").val();
			var pass = $("#passwor").val();

			console.log(nombre);
			console.log(email);
			console.log(user);
			console.log(pass);

			var loc = "principal.php";
					
			
			// Creamos array de parámetros que mandaremos por POST

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
				url:   'php/subirUsuariosModificados.php',
				type:  'post'

			});

			alert("Datos modificados correctamente");
			location.href = loc;

		} else {

			/*Si no son todos los valores "true", que salte una alerta.*/

			alert("Hay algún elemento mal en el formulario.");

		}
		
	});

});