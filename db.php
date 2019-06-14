<?php

	$host = "localhost";
	$usuario = "root";
	$db_pass = "";
	$db_nombre = "proyectofinal";

	$conn = new mysqli($host, $usuario, $db_pass, $db_nombre);

	if ($conn->connect_error) {

		echo "La conexión falló: " . $conn->connect_error;

	} else {

		//echo "conectado";

	}

?>