<?php  
	/*

		Este PHP conecta a la base de datos e inserta los valores del formulario de creación
		de ofertas por el administrador.
		
	*/

	session_start();

	require_once("php-login/db.php");

	$tabla = "fotos";

	$imagen = $_POST['imagen'];
	$titulo = $_POST['titulo'];
	$descripcion = $_POST['descripcion'];
	$usuario = $_SESSION['username'];

	//$hash = password_hash($contra, PASSWORD_BCRYPT);

	$query = "INSERT INTO $tabla (imagen, titulo, descripcion, usuario) VALUES (\"$imagen\", \"$titulo\", \"$descripcion\", \"$usuario\")";

	echo $query;

	mysqli_query($conn, $query);

?>