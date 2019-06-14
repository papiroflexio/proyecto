<?php
  
  /* Este if, sirve para destruir la sesión del usuario que esté logeado para
      evitar posibles fallos con los inicios de sesión. */
  
  if(isset($_SESSION['username'])) {
      
    session_destroy();
        
  }
  
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Título de la página -->
    <title>JC FOTOGRAFIA</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- jQuery -->

    <script src="./scripts/funciones.js"></script>
    <script src="./scripts/disponibilidadAjax.js"></script>
    
    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="bootstrap/bootstrap.css">

    <!-- Otros CSS -->

    <link rel="stylesheet" href="css/plantilla.css">

    <!-- Bootstrap JS -->

    <script src="bootstrap/bootstrap.js"></script>
  </head>
  <body>
    <!-- Creación del formulario de inicio de sesión con bootstrap + diseño e insercción del navegador dinamicamente. -->
    <div class="container">
      <?php include_once("php/include/nav.php"); ?><br><br>
      <div class="col-sm-12 col-md-5 col-xl-8">
        <div class="row justify-content-center align-items-center text-center">
            <div class="thumbnail">
              <div class="col-4">
                  <div class="card">
                      <div class="card-body">
                          <form action="" autocomplete="off">
                            <h4>Inicio de sesión</h4>
                              <div class="form-group">
                                  Usuario:<br>
                                  <input type="text" name="user"  class="form-control" placeholder="Usuario" id="usuario">
                              </div>
                              <div class="form-group">
                                  Contraseña:<br>
                                  <input type="password" name="passwd"  class="form-control" placeholder="Contraseña" id="contra">
                              </div>
                              <input type="button" id="botonLogin" value="Inicia Sesión" class="form-control btn btn-info btn-sm my-1 my-sm-0"><br><br>
                              <a href="registro.php" class="form-control btn btn-primary btn-sm my-1 my-sm-0" role="button">Registrate</a><br><br>
                              <span id="disponibilidad"></span>
                          </form>
                      </div>
                  </div>
              </div>
            </div>
        </div>
      </div>
      <div class="col-sm-12 col-md-5 col-xl-4" id="registoL">
        <h1><a href="registro.php">Regístrate</a> si aún no lo estás, para poder acceder a JC Fotografía</h1>
      </div>
    </div>
  </body>
</html>

