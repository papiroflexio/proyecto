$(document).ready(function(){

		//Contador de caracteres, el máximo son 150, así el usuario puede verlo por pantalla.
		$("#area").keyup(function(){

			texto = $("#area").val();

			dividir = texto.split("");

			letras = 150;

			letras = letras - dividir.length;

			if (letras >= 20) {

				document.getElementById("areaInfo").innerHTML = "<p> Te quedan " + letras + " palabras restantes. </p>";

			}
			else if (letras < 20) {

				document.getElementById("areaInfo").innerHTML = '<p style = "color: red "> Te quedan ' + letras + ' palabras restantes. </p>';

			}
		});
});
