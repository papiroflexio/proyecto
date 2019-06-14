<?php 

	require_once("db.php");

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
				$imagen = str_replace("C:fakepath", "", $row['imagen']);
			?>

				<div class="col-md-8">
					<div class="thumbnail">
						<a href="modificarUser.php?userpatata=<?php echo $row['usuario']; ?>"><?php echo $row['usuario']; ?></a><br>
						<p><span class="patata"><?php echo $row['nombre']; ?></span></p>
						<p><span class="patata"><?php echo $row['correo']; ?></span></p>
						<p><span class="patata"><?php echo $row['contraseña']; ?></span></p>
						
						<p><span class="patata">Subida por: <?php echo $row['usuario']; ?> [<?php echo $row['fecha']; ?>]</span></p>						
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
				