$(document).ready(function(){

	var ordenar = "fecha";

	var dato = {
			ord : ordenar
	};

	$.ajax({
			data:  dato,
			url:   'php/include/mostrarOfertas.php',
			type:  'post',
			success: function(response) {

				$('#resultado').html(response);

			}


		});

});

function ordenar(ordenar) {

	var ordenar = ordenar;

	var dato = {
			ord : ordenar
	};

	$.ajax({
			data:  dato,
			url:   'php/include/mostrarOfertas.php',
			type:  'post',
			success: function(response) {

				$('#resultado').html(response);

			}


		});

}