<?php

	session_start();

	include_once("php-login/db.php");

		$usuario = $_SESSION['username'];
		$comentario = $_POST['comentario'];
		$pag = $_POST['pagina'];

		$peticion = "INSERT INTO comentarios (usuario, foto, nombrefoto) VALUES (\"$usuario\", \"$comentario\", \"$pag\")";

		$conn->query($peticion);

	$conn->close();

?>