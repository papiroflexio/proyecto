<?php  
	/*

		Este PHP conecta a la base de datos e inserta los valores del formulario de creación
		de ofertas por el administrador.
		
	*/

	session_start();

	require_once("php-login/db.php");

	$tabla = "ventas";

	$imagen = $_POST['imagen'];
	$titulo = $_POST['titulo'];
	$precio = $_POST['precio'];

	$query = "INSERT INTO $tabla (imagen, titulo, precio) VALUES (\"$imagen\", \"$titulo\", \"$precio\")";

	echo $query;

	if ($conn->query($query)) {
		echo "Funciona";
	} else {

		echo "No";
	}

?>