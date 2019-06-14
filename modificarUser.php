<?php 

  // Se inicia la sesión en esta página.

  session_start();

 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Título de la página -->
    <title>JC FOTOGRAFIA</title>

    <!-- jQuery -->

    <script src="scripts/funciones.js"></script>
    <script src="scripts/modificarUsuarioAdmin.js"></script>
    <script src="scripts/borrarUser.js"></script>
    
    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="bootstrap/bootstrap.css">

    <!-- Otros CSS -->

    <link rel="stylesheet" href="css/plantilla.css">

    <!-- Bootstrap JS -->

    <script src="bootstrap/bootstrap.js"></script>
  </head>
  <body>
    <div id="contenedor" >
      <div class="container">
      <!-- Se incluye el navegador de forma dinámica -->
      <?php  include_once("php/include/nav.php"); ?>
      <!-- Botón de volver a la página principal -->
      <button type="button" href ="principal.php" class="btn btn-warning"><a id="paginaPrincipal" href="principal.php">Vuelve a la página principal</a></button><br><br>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item active" aria-current="page">Perfil</li>
        </ol>
      </nav>  
      <div class="col-sm-12 col-md-5 col-xl-4">
        <div class="row justify-content-center align-items-center text-center">
            <div class="thumbnail">
              <div class="col-4">
                  <div class="card">
                      <div class="card-body">
                          <form action="" autocomplete="off">
                            <!-- 
                                Creación del formulario de modificación de datos del usuario.
                            -->
                            <h4>Aquí puedes modificar tus datos, <?php echo $_GET['userpatata']; ?></h4>
                            <?php

                            // Se incluye la conexión a la base de datos.
                            include_once("php/include/db.php");
                            // Creación de una variable donde guardo el nombre del usuario que tiene la sesión iniciada par futuras acciones.
                            $usuario = $_GET['userpatata'];
                            //Creación de la query
                            $query = "SELECT * FROM usuarios WHERE usuario = '$usuario'";
                            // Ejecución de la query
                            $resultado = $conn->query($query); 

                            /*
                              
                              He metido el formulario dentro del while para que me introduzca en el atributo value los datos del usuario que tiene
                              iniciada la sesión, para que sus datos salgan dentro del cuadro de texto y se envíen nuevamente a la base de datos,
                              donde llegarán solo los campos modificados.

                            */

                            if ($resultado->num_rows  > 0) {
                              while ($row = $resultado->fetch_assoc()) { ?>

                                <div class="form-group">
                                    <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre y apellidos"  value="<?php echo $row['nombre']; ?>" required> <img src="" id="infnom">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="correo" id="correo" class="form-control" value="<?php echo $row['correo']; ?>" placeholder="Correo Electronico" required> <img src="" id="infcor">
                                </div>
                                <div class="form-group">
                                    <input type="text" id="usuario" name="usuario" class="form-control" placeholder="Usuario" value="<?php echo $row['usuario']; ?>" required> <img src="" id="infusr">
                                </div>
                                <div class="form-group">
                                    <input type="password" id="passwor" class="form-control" name="pass" value="<?php echo $row['contra']; ?>" placeholder="Contraseña" required> <img src="" id="infpas">
                                </div>
                                <input type="button" id="botonModificar" value="Modificar datos" class="form-control btn btn-primary btn-sm my-1 my-sm-0">
                                <h4>Pulsa este botón si quieres eliminar tu cuenta. Cuidado, no habrá vuelta atrás.</h4>
                                <button id="eliminarUser" class="form-control btn btn-danger btn-sm my-1 my-sm-0" onclick="deleteUser('<?php echo $row['usuario']; ?>')">Eliminar</button>
                                <br>
                                <br>
                              </form>
                    <?php    }
                            } 
                            ?>
                      </div>
                  </div>
              </div>

            </div>
        </div>
      </div>
    </div>
    </div>
  </body>
</html>