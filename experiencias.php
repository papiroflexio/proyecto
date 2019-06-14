<?php   

  // Inicio de sesión en esta página.

  session_start();

  // Se incluye el fichero de conexión a la base de datos para futuras acciones.

  include_once("php/php-login/db.php");

  // Se crea una variable en la que coge de la URL el valor de "idexp", para futuras acciones.

  $id_imagen = $_GET['idexp'];
  
?>

<!DOCTYPE html>
<html>
<head>
    <!-- Título de la página -->
    <title>JC FOTOGRAFIA</title>

    <!-- jQuery -->

    <script src="scripts/funciones.js"></script>
    <script src="scripts/mandarURL.js"></script>
    <script src="scripts/subirComentarios.js"></script>
    <script src="scripts/borrarComentarios.js"></script>
    <script src="scripts/borrarExperiencias.js"></script>
    <script src="scripts/contarCaracteres.js"></script>

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
        <!-- Botón de volver a la página principal -->
        <button type="button" href ="principal.php" class="btn btn-warning"><a id="paginaPrincipal" href="principal.php">Vuelve a la página principal</a></button>
        <div class="row">
          <div class="col-sm-12 col-md-12 col-xl-12"><br>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="principal.php">Galería</a></li>
                <li class="breadcrumb-item active" aria-current="page">Comentarios</li>
              </ol>
            </nav>
          </div>
        </div>
        <span class="numPag"></span>
        <section class="row">
          <!-- Aquí se muestra la oferta con los comentarios después de haberla seleccionado en la página principal. -->
          <?php 
            // Guardamos en una variable la query para futuras acciones. ($id_experiencia es la variable que creamos arriba y
            // se utiliza para mostrar la experiencia que hemos seleccionado en la pagina principal, donde salen todas.)
            $query = "SELECT * FROM fotos WHERE id = $id_imagen";
            // Guardamos la ejecución de la query en una variable.
            $resultado = $conn->query($query);
            /* 
                Si el numero de filas de la query que hemos ejecutado es mayor que 0, se ejecutará el bucle while para 
                mostrar la experiencia
            */
            if ($resultado->num_rows  > 0) {
              while ($row = $resultado->fetch_assoc()) {
                  // Guardamos en esta variable, el nombre de la imagen y quitamos ese prefijo raro que se le añade
                  // al subir una imagen a la base de datos mediante un input type="file".
                  $imagen = str_replace("C:fakepath", "", $row['imagen']);
                ?>
                  <div class="col-md-6">
                    <div class="thumbnail">
                      <img src="img/<?php echo $imagen;?>" class="img"><br>
                      <p><span class="patata"><?php echo $row['titulo']; ?></span></p>
                      <p><span class="patata">Subida por: <?php echo $row['usuario']; ?> [<?php echo $row['fecha']; ?>]</span></p> 
                      <!-- 
                          Si la sesión está iniciada y el nombre de la sesión coincide con "admin" o el usuario con la sesión iniciada
                          coincide con el nombre de usuario que ha creado la experiencia, aparecerá un botón de borrar dicha experiencia.
                      -->
                      <?php  if (isset($_SESSION['username'])) { ?>

                               <div class="dropdown">
                                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Valora esta foto
                                <span class="caret"></span></button>
                                <ul class="dropdown-menu">
                                  <li><a href="#">1</a></li>
                                  <li><a href="#">2</a></li>
                                  <li><a href="#">3</a></li>
                                  <li><a href="#">4</a></li>
                                  <li><a href="#">5</a></li>
                                </ul>
                              </div> 

                              <?php

                    if ($_SESSION['username'] == "admin" || $_SESSION['username'] == $row['usuario']) { ?>

                      <br><input type="button" value="Eliminar" class=" eliminar btn btn-danger btn-sm my-1 my-sm-0" onclick="eliminarOferta('<?php echo $row['id']; ?>')">
            <?php   }
              } 
            ?>
                    </div>
                  </div>
          <?php  }
            }
          ?>
                  <div class="col-md-6">
                    <div class="thumbnail">
                      <div class="thumbnail">
                        <form>
                          <p>
                            <!-- 
                                  A partir de aquí es la sección donde está la caja de comentarios en la que le he introducido
                                  como extra un contador de caracteres, para que el usuario pueda ver cuantos caracteres le quedan.
                             -->
                            <?php if(isset($_SESSION['username'])) { ?>
                                <h4>¡Hola <?php echo $_SESSION['username']; ?>, aquí puedes introducir tu comentario!</h4><br>
                                <textarea id="area" maxlength="150"></textarea><br>
                                <input type="button" id="botonComentar" value="Enviar comentario" class="btn btn-info btn-sm my-1 my-sm-0">
                                <div id="areaInfo"></div>
                                <!-- Con este codigo PHP si el usuario no está con la sesión iniciada, no sale el error de que no encuentra la sesión abierta y no saldrá -->
   
                            <?php } else {
                              
                                        echo "Inicia sesión para poder comentar.";
                                }
                            ?>         
                        </form>
                      </div>
                      <!-- Aquí se muestran dinámicamente los comentarios de dicha experiencia -->
                      <?php include_once("php/include/mostrarComentarios.php");?>
                  </div>
        </section>
    <?php include_once("php/include/footer.php"); ?>
    </section>
    </div>
</body>
</html>