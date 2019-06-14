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
	<script src="scripts/crearExperiencias.js"></script>


	<!-- Bootstrap CSS -->

	<link rel="stylesheet" href="bootstrap/bootstrap.css">

	<!-- Otros CSS -->

	<link rel="stylesheet" href="css/plantilla.css">

	<!-- Bootstrap JS -->

	<script src="bootstrap/bootstrap.js"></script>
</head>
  <body>
    <div class="container">
      <?php include_once("php/include/nav.php"); ?>
      <button type="button" href ="principal.php" class="btn btn-warning"><a id="paginaPrincipal" href="principal.php">Vuelve a la página principal</a></button><br><br>
      <div class="col-sm-12 col-md-5 col-xl-4">
        <div class="row justify-content-center align-items-center text-center">
            <div class="thumbnail">
              <div class="col-4">
                  <div class="card">
                      <div class="card-body">
                          <form action="" autocomplete="off">
                            <h4>Comparte una imagen con tus seguidores.</h4><br>
                              <div class="form-group">
                                  <input type="file" id="imagen" placeholder="Nombre de la imagen" class="form-control" required>
                              </div>
                              <div class="form-group">
                                  <textarea type="text" id="titulo" placeholder="Título de la imagen" class="form-control" required maxlength="150"></textarea>
                              </div>
                              <input type="button" id="crearExperiencia" value="Subir imagen" class="form-control btn btn-primary btn-sm my-1 my-sm-0">
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