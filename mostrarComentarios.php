<?php 
	
	require_once("db.php");

	if (isset($_GET['idexp'])) {
		
		$pagina = $_GET['idexp'];

	};

	if (isset($_POST['id'])) {
		
		$eliminar = $_POST['id'];
		$query = "DELETE FROM comentarios WHERE id = $eliminar";
		if (mysqli_query($conn, $query)) {

			echo "Funciona";

		} else {

			echo "error.";

		}


	};

		$consulta = "SELECT * FROM comentarios WHERE nombrefoto = '$pagina' ORDER BY id DESC LIMIT 10;";

		$resultado = mysqli_query($conn, $consulta);
		
		if (mysqli_num_rows($resultado) > 0) {
			
			while ($row = $resultado->fetch_assoc()) {

					?>
					<aside class="thumbnail" id="<?php echo $row['id']; ?>">
						<p>El usuario <span id="nomComentario"><?php echo $row['usuario']; ?></span> ha comentado: </p>
						<div class="thumbnail">
							<p><span id="estComentario"><?php echo $row['foto']; ?></span></p>
						</div>
							<?php if (isset($_SESSION['username'])) {
								if ($_SESSION['username'] == $row['usuario'] || $_SESSION['username'] == "admin") {
									?>
										<input type="button" value="Eliminar" class=" eliminar btn btn-danger btn-sm my-1 my-sm-0" onclick="eliminar('<?php echo $row['id']; ?>')">

						<?php  } 
							} ?>
							
					</aside>
					<?php

			}

		} else {

			echo " No hay comentarios.";

		}

	$conn->close();
	

?>