<?php 

	require_once("db.php");

	$query = "SELECT * FROM fotos ORDER by fecha DESC";
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
						<a href="experiencias.php?idexp=<?php echo $row['id']; ?>"><img src="img/<?php echo $imagen; ?>" class="img"></a><br>
						<p><span class="patata"><?php echo $row['titulo']; ?></span></p>
						<strong><p><span class="patata">Pincha en la imagen para ver los comentarios de esta foto.</span></p></strong>
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
				