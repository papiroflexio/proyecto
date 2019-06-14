$(document).ready(function(){
	
	/* 
		Este codigo te coge las variables de la url, yo en este caso,
	   lo he utilizado para coger la variable idexp que contiene el
	   id de la pagina para poder mostar los comentarios que se hacen 
	   sobre cada oferta individual, es decir: Si hago un comentario en 
	   la oferta 1, que no me salgan esos comentarios en la oferta 2.
	*/

	var getUrlParameter = function getUrlParameter(sParam) {
    var sPageURL = window.location.search.substring(1),
        sURLVariables = sPageURL.split('&'),
        sParameterName,
        i;

	    for (i = 0; i < sURLVariables.length; i++) {
	        sParameterName = sURLVariables[i].split('=');

	        if (sParameterName[0] === sParam) {
	            return sParameterName[1] === undefined ? true : decodeURIComponent(sParameterName[1]);
	        }
	    }
	};
	$("#botonComentar").click(function(){		

		//cogemos el valor de la URL por el metodo GET.

		var enlace = getUrlParameter('idexp');
		var enl = String(enlace);

		//creamos array de parámetros que mandaremos por POST

		var dato = {
			"pagina" : enl
		};
				
		// Guardar localmente los datos. (pendiente)

		//llamada al fichero PHP con AJAX

		$.ajax({
			data:  dato,
			url:   'php/include/mostrarComentarios.php',
			type:  'get',
			success:  function (response) {
				
				//location.reload();
								
			}

		});

		//location.reload();

	});
			
});