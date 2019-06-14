$(document).ready(function(){
	
	$("#crearOferta").click(function(){	

		//cogemos el valor del input
		var img = $("#imagen").val();
		var tit = $("#titulo").val();
		var pre = $("#precio").val();
		var ofe = $("#oferta").val();

		var loc = "ofertas.php";
				
		
		//creamos array de parámetros que mandaremos por POST

		var datos = {

			"imagen" : img,
			"titulo" : tit,
			"precio" : pre
		};
				
		// Guardar localmente los datos. (pendiente)

		//llamada al fichero PHP con AJAX

		$.ajax({
			data:  datos,
			url:   'php/subirOfertas.php',
			type:  'post'
			

		});

		alert("Oferta creada.");
		location.href = loc;
		
	});
		
	
});