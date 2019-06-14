<?php

	require_once("db.php");

	$usuarioL = $_POST['nombre'];
	$passL = $_POST['contra'];

	$contra = MD5($passL);


	$consulta = "SELECT * FROM usuarios WHERE usuario = '$usuarioL' AND contra = '$contra'";
	
	$resultado = mysqli_query($conn, $consulta);
	$row = mysqli_fetch_assoc($resultado);

	if (mysqli_num_rows($resultado) > 0) {

		session_start();
		$_SESSION['username'] = $usuarioL;

		echo "$usuarioL";

		
	} else {

		echo "Usuario / contraseña incorrecto.";

	}

	

?>