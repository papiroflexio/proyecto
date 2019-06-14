<?php 

  if(isset($_SESSION['usuario'])) {
        
      session_destroy();
          
    }

 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Título de la página -->
    <title>JC FOTOGRAFIA</title>

    <!-- jQuery -->

    <script src="./scripts/funciones.js"></script>
    <script src="./scripts/validarFormulario.js"></script>
    
    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="bootstrap/bootstrap.css">

    <!-- Otros CSS -->

    <link rel="stylesheet" href="css/plantilla.css">

    <!-- Bootstrap JS -->

    <script src="bootstrap/bootstrap.js"></script>
  </head>
  <body>
    <!-- Creación del formulario de registro con bootstrap + diseño e insercción del navegador dinamicamente. -->
    <div class="container">
      <?php include_once("php/include/nav.php"); ?><br><br>
      <div class="col-sm-12 col-md-5 col-xl-4">
        <div class="row justify-content-center align-items-center text-center">
            <div class="thumbnail">
              <div class="col-4">
                  <div class="card">
                      <div class="card-body">
                          <form action="" autocomplete="off">
                              <!-- Principio del formulario -->
                              <h4>Formulario de registro</h4>
                              <div class="form-group">
                                  <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre y apellidos" required> <img src="" id="infnom">
                              </div>
                              <div class="form-group">
                                  <input type="text" name="correo" id="correo" class="form-control"placeholder="Correo Electronico" required> <img src="" id="infcor">
                              </div>
                              <div class="form-group">
                                  <input type="text" id="usuario" name="usuario" class="form-control" placeholder="Usuario" required> <img src="" id="infusr"> <span id="disponibilidad">
                              </div>
                              <div class="form-group">
                                  <input type="password" id="passwor" name="pass" class="form-control" placeholder="Contraseña" required> <img src="" id="infpas">
                              </div>
                              <input type="button" id="botonRegistro" value="Registrarte" class="form-control btn btn-primary btn-sm my-1 my-sm-0">
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
