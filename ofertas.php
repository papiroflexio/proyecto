<?php   

  session_start();

  include_once("php/php-login/db.php");
  
?>

<!DOCTYPE html>
<html>
<head>
    <title>JC FOTOGRAFIA</title>

    <!-- jQuery (primero) y otros archivos con funciones hechas en jQuery -->

    <script src="scripts/funciones.js"></script>
    <script src="scripts/mandarURL.js"></script>
    <script src="scripts/subirComentarios.js"></script>
    <script src="scripts/borrarComentarios.js"></script>
    <script src="scripts/borrarExperiencias.js"></script>
    <script src="scripts/borrarOfertas.js"></script>
    <script src="scripts/ordenarOfertas.js"></script>

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
            <!-- Aqui se introducen las miguitas de pan.  -->
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">Artículos</li>
              </ol>
            </nav>
            <h1>Bienvenido a JC Fotografía.</h1>
              <h3 class="texto">En esta sección de la página encontrarás los artículos y servicios que están disponibles.</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12 col-md-12 col-xl-12">
            <!-- Botón para seleccionar como queremos mostrar las ofertas, Precio (Mayor a menor) o Fecha de subida (Mas recientes) -->
            <div class="dropdown">
              <button class="btn btn-basic dropdown-toggle" id="formaOrd" type="button" data-toggle="dropdown">Ordenar por:
              <span class="caret"></span></button>
              <ul class="dropdown-menu">
                <li><a id="precio" onclick="ordenar('precio')">Precio (Mayor a menor)</a></li>
                <li><a id="fecha" onclick="ordenar('fecha')">Fecha de subida (Mas recientes)</a></li>
              </ul>
            </div>
          </div><br><br>
        </div>
        <section class="row">
          <!-- Aquí se muestran las ofertas, pueden estar ordenadas por precio y por fecha de subida. -->
          <span id="resultado"></span>   
        </section>
    <?php include_once("php/include/footer.php"); ?>
    </section>
    </div>
</body>
</html>