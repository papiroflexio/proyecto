<?php

	include_once("php-login/db.php");

	$nombre = $_POST['nombre'];
	$correo = $_POST['correo'];
	$usuario = $_POST['usuario'];
	$contrasena = $_POST['pass'];

	$contra = MD5($contrasena);

	echo $contra;



	$peticion = "INSERT INTO usuarios (nombre, usuario, correo, contra) VALUES (\"$nombre\", \"$usuario\", \"$correo\", \"$contra\")";
		
	$consulta = "SELECT * FROM usuarios;";
	
	mysqli_query($conn, $peticion);
	$resultado = $conn->query($consulta);
	
	if ($resultado->num_rows > 0) {
		
		while ($row = $resultado->fetch_assoc()) {
			
			echo "Bienvenido: " . $row['usuario'] . "<br>";

		}

	} else {

		echo " Ningún resultado.";

	}

	$conn->close();

?>