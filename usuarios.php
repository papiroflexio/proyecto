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
      <div class="col-sm-12 col-md-5 col-xl-8">
        <div class="row justify-content-center align-items-center text-center">
            <div class="thumbnail">
              <div class="col-8">
                  <div class="card">
                      <div class="card-body">
                          <h3>Modifica o borra usuarios de la página.</h3><br>
                      </div>
                  </div>
              </div>
        </div>
                          <?php 

                              require_once("php/include/db.php");

                              $query = "SELECT * FROM usuarios";
                              $resultado = $conn->query($query);

                              if (isset($_POST['id'])) {
                                
                                $eliminar = $_POST['id'];
                                $query = "DELETE FROM fotos WHERE id = $eliminar";
                                if (mysqli_query($conn, $query)) {

                                  echo "Funciona";

                                } else {

                                  echo "error.";

                                }
                              }

                              if ($resultado->num_rows  > 0) {
                                while ($row = $resultado->fetch_assoc()) {

                                  ?>

                                    <div class="col-md-8">
                                      <div class="thumbnail">
                                        <a href="modificarUser.php?userpatata=<?php echo $row['usuario']; ?>"><?php echo $row['usuario']; ?></a><br>
                                        <p><span class="patata"><?php echo $row['nombre']; ?></span></p>
                                        <p><span class="patata"><?php echo $row['correo']; ?></span></p>
                                        <p><span class="patata"><?php echo $row['contra']; ?></span></p>          
                                        <?php  

                                          if (isset($_SESSION['username'])) {
                                            
                                            

                                          } 

                                        ?>
                                      </div>
                                    </div>
                                <?php  } 

                                          } else {

                                            echo "No hay experiencias disponibles.";

                                          }
                                ?>
        </div>
      </div>
    </div>
  </body>
</html>