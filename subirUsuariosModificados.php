<?php
	session_start();

	include_once("php-login/db.php");

	$nombre = $_POST['nombre'];
	$correo = $_POST['correo'];
	$usuario = $_POST['usuario'];
	$contrasena = $_POST['contra'];

	$sesion = $_SESSION['username'];

	$contra = MD5($contrasena);

	echo $nombre;

	// Estas consultas son para cambiar los valores de ese usuario.

	$cambiar_nombre = "UPDATE usuarios SET nombre = '$nombre' WHERE usuario = '$sesion'";
	mysqli_query($conn, $cambiar_nombre);

	$cambiar_correo = "UPDATE usuarios SET correo = '$correo' WHERE usuario = '$sesion'";
	mysqli_query($conn, $cambiar_correo);

	$cambiar_usuario = "UPDATE usuarios SET usuario = '$usuario' WHERE usuario = '$sesion';";
	mysqli_query($conn, $cambiar_usuario);

	$cambiar_contra = "UPDATE usuarios SET contra = '$contra' WHERE usuario = '$sesion';";
	mysqli_query($conn, $cambiar_contra);

	$conn->close();

?>