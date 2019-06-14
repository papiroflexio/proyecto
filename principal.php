<?php 	

	// Inicio de sesión en esta página.
	
	session_start();
	
?>
<!DOCTYPE html>
<html>
	<head>
		<!-- Título de la página. -->
		<title>JC FOTOGRAFIA</title>

		<!-- jQuery (primero) y otros archivos con funciones hechas en jQuery -->

		<script src="scripts/funciones.js"></script>
		<script src="scripts/crearOfertas.js"></script>
		<script type="text/javascript" src="scripts/borrarOfertas.js"></script>


		<!-- Bootstrap CSS -->

		<link rel="stylesheet" href="bootstrap/bootstrap.css">

		<!-- Otros CSS -->

		<link rel="stylesheet" href="css/plantilla.css">

		<!-- Bootstrap JS -->

		<script src="bootstrap/bootstrap.js"></script>
	</head>
<body>
	<div id="contenedor" >
	<section class="container">
		<!-- Se incluye el navegador de forma dinámica -->
		<?php  include_once("php/include/nav.php"); ?>
		<div class="row">
			<div class="col-sm-12 col-md-12 col-xl-12"><br>
				<!-- Aqui se introducen las miguitas de pan.	-->
				<nav aria-label="breadcrumb">
				  <ol class="breadcrumb">
				    <li class="breadcrumb-item active" aria-current="page">Galería</li>
				  </ol>
				</nav>
				<center><h1 class="titulo">Bienvenido a JC Fotografía.</h1></center><br>
				<h3 class="texto">Bienvenido a mi página de fotografía, esta página es un proyecto de final de curso hecho por: Jose Carlos Mena Reyes.</h3>
				<h3>En esta página, encontrarás las imágenes subidas por el fotógrafo, en las cuales los usuarios registrados en la página podrán comentarlas mientras estén con la sesión iniciada.</h3>
				<h3>Para ver los comentarios de cada imagen, pincha sobre ella.</h3><br>
			</div>
		</div>
		<div class="row">
			<!-- Aquí se muestran las ofertas guardadas en la base de datos. -->
		    <?php include_once("php/include/mostrarExperiencia.php"); ?>
		</div>
		<?php include_once("php/include/footer.php"); ?>
	</section>
</body>
</html>
