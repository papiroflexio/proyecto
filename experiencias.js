	window.onload = function() {

		document.getElementById("comentario").addEventListener("keyup", areatexto, false);
		
		document.getElementById("enviar").addEventListener("click", email, false);

	}



	function areatexto() {

		texto = document.getElementById("comentario").value;

		dividir = texto.split("");

		letras = 150;

		letras = letras - dividir.length;

		if (letras >= 20) {

			document.getElementById("area").innerHTML = "<p> Te quedan " + letras + " palabras restantes. </p>";

		}
		else if (letras < 20) {

			document.getElementById("area").innerHTML = '<p style = "color: red "> Te quedan ' + letras + ' palabras restantes. </p>';

		}

		// Adaptar para que reste por cada letra.

		

	}

		function email(email) {

		var email = document.getElementById("correo").value;
	
	    expr = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	    
	    if ( !expr.test(email) )
	        
	        alert("Error: La dirección de correo " + email + " es incorrecta.");
	}
	
