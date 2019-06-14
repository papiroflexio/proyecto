<?php

	/*
		Este PHP conecta a la base de datos, busca si hay coincidencias con el usuario introducido en el formulario de registro.
		Si no hay coincidencias, hace el INSERT y te crea el usuario, después de crearte el usuario, te lleva al login.
		
	*/

	require_once("db.php");

	$tabla = "usuarios";

	$nombre = $_POST['nombre'];
	$user = $_POST['usuario'];
	$correo = $_POST['correo'];
	$contrasena = $_POST['contra'];

	$contra = MD5($contrasena);

	//$hash = password_hash($contra, PASSWORD_BCRYPT);

	$buscar_usuario = "SELECT * FROM $tabla WHERE usuario = '$_POST[usuario]' ";

	$resultado = $conn->query($buscar_usuario);
	$contar = mysqli_num_rows($resultado);

	if ($contar == 1) {
		
		echo "Este usuario ya está cogido, prueba con otro nombre.";

	} else {

		$query = "INSERT INTO usuarios (nombre, correo, usuario, contra) VALUES (\"$nombre\", \"$correo\", \"$user\", \"$contra\")";

		if ($conn->query($query)) {
			
				
			}


		}

	mysqli_close($conn);

?>