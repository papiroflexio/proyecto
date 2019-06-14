		window.onload = function() {

		//document.getElementById("comentario").addEventListener("keyup", areatexto, false);
		
		document.getElementById("correo").addEventListener("change", email, false);
		document.getElementById("usuario").addEventListener("change", usuario, false);
		document.getElementById("passwor").addEventListener("change", contrak, false);
		document.getElementById("enviar").addEventListener("click", checkeo, false);

	}



	function email(email) {

		var email = document.getElementById("correo").value;
	    var expr = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	    
	    if (!expr.test(email)) {

	    	document.getElementById("infemail").innerHTML = '<p style = "color: red "> El correo no es correcto. </p>';

		} else {

			document.getElementById("infemail").innerHTML = '<p style = "color: green "> El correo es correcto. </p>';

		}
     
	}
	
	function usuario(user){

		var user = document.getElementById("usuario").value;
		var expr = /[a-zA-Z0-9]/;
		
		if (!expr.test(user)){

			document.getElementById("infuser").innerHTML = '<p style = "color: red "> El usuario solo puede tener numeros y letras. </p>';

		} else {

			document.getElementById("infuser").innerHTML = '<p style = "color: green "> Nombre de usuario correcto. </p>';

		}
	}

	function contrak(passwd){

		var passwd = document.getElementById("passwor").value;
		var expr = /[a-zA-Z0-9]/;
		
		if (!expr.test(passwd)){

			document.getElementById("infpass").innerHTML = '<p style = "color: red "> La contraseña solo puede tener numeros y letras. </p>';

		} else {

			document.getElementById("infpass").innerHTML = '<p style = "color: green "> Contraseña adecuada. </p>';

		}
	}

	function checkeo() {

		var palomita = document.getElementById("click").checked;

		if (!palomita) {

			document.getElementById("infaceptar").innerHTML = '<p style = "color: red "> No has aceptado los términos de IBERIAN TRIPS. </p>'

		} else {

			return True;

		}

	}
