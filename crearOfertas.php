<?php 

  // Inicio de sesión en esta página.

  session_start();
 
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>JC FOTOGRAFIA</title>

	<!-- jQuery -->

	<script src="scripts/funciones.js"></script>
	<script src="scripts/crearOfertas.js"></script>


	<!-- Bootstrap CSS -->

	<link rel="stylesheet" href="bootstrap/bootstrap.css">

	<!-- Otros CSS -->

	<link rel="stylesheet" href="css/plantilla.css">

	<!-- Bootstrap JS -->

	<script src="bootstrap/bootstrap.js"></script>
</head>
  <body>
    <div class="container">
      <!-- Se incluye el navegador de forma dinámica -->
      <?php include_once("php/include/nav.php"); ?>
      <!-- Botón de volver a la página principal -->
        <button type="button" href ="principal.php" class="btn btn-warning"><a id="paginaPrincipal" href="principal.php">Vuelve a la página principal</a></button><br><br>
      <div class="col-sm-12 col-md-5 col-xl-4">
        <div class="row justify-content-center align-items-center text-center">
            <div class="thumbnail">
              <div class="col-4">
                  <div class="card">
                      <div class="card-body">
                          <form action="" autocomplete="off">
                            <!-- 
                                  Creación del formulario de creación de ofertas, solamente accesible para el administrador.
                                  en el botón desplegable azul que sale en todas las páginas, si eres administrador, aparece
                                  una nuev opción, Crear ofertas.
                            -->
                            <h4>Crea un artículo</h4>
                              <div class="form-group">
                                  <input type="file" id="imagen" placeholder="Seleccione una imagen" class="form-control" required>
                              </div>
                              <div class="form-group">
                                  <input type="text" id="titulo" placeholder="Nombre del articulo" class="form-control" required>
                              </div>
                              <div class="form-group">
                                  <input type="text" id="precio" placeholder="Precio del articulo" class="form-control" required maxlength="150">
                              </div>
                              <input type="button" id="crearOferta" value="Crear artículo" class="form-control btn btn-primary btn-sm my-1 my-sm-0">
                          </form>
                      </div>
                  </div>
              </div>
            </div>
        </div>
      </div>
    </div>
  </body>
</html>