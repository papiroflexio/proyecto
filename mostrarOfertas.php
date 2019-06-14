<?php 

	session_start();

	require_once("db.php");

	if (isset($_POST['ord'])) {

		$ordenar = $_POST['ord'];

			$query = "SELECT * FROM ventas ORDER by $ordenar DESC";
			$resultado = $conn->query($query);

			if ($resultado->num_rows  > 0) {
				while ($row = $resultado->fetch_assoc()) {
							$imagen = str_replace("C:fakepath", "", $row['imagen']);
					?>
						<div class="col-md-8">
			              <div class="thumbnail">
			                <img src="img/<?php echo $imagen; ?>" class="img"></a><br>
			                <p><span class="patata"><?php echo $row['titulo']; ?></span></p>
			                <p><span class="patata">Precio: <?php echo $row['precio'] . "€"; ?></span></p>
			                <p><span class="patata">Subido: <?php echo $row['fecha']; ?><span></p>
			                <?php  

			                  if (isset($_SESSION['username'])) { ?>
			                  	<input type="button" value="Comprar ahora" class="btn btn-success" onclick="window.location.href='https://www.paypal.com/webapps/shoppingcart?mfid=1560126621288_bc7d9226bef3b&flowlogging_id=bc7d9226bef3b#/checkout/shoppingCart'"><br>
			                  	<?php  
			                    if ($_SESSION['username'] == "admin") { ?>
			                      <br><input type="button" value="Eliminar" class=" elOferta btn btn-danger btn-sm my-1 my-sm-0" onclick="eliminarOferta('<?php echo $row['id']; ?>')">
			                    <?php } 
			                    }
			                  ?>  
			              </div>
			            </div>				
						<?php
					}
				}
	} else {

		$query = "SELECT * FROM ventas ORDER by fecha DESC";
		$resultado = $conn->query($query);

		while ($row = $resultado->fetch_assoc()) {
					
			?>
				<div class="col-md-8">
	              <div class="thumbnail">
	                <img src="img/<?php echo $row['imagen'] . ".jpg"; ?>" class="img"></a><br>
	                <p><span class="patata"><?php echo $row['titulo']; ?></span></p>
	                <p><span class="patata">Precio: <?php echo $row['precio'] . "€"; ?></span></p>
	                <p><span class="patata">Oferta incluida: <?php echo $row['fecha']; ?><span></p>
	               	
	                	

	                <?php  

	                  if (isset($_SESSION['username'])) { ?>
	                  		<input type="button" value="Comprar ahora" class="btn btn-success" onclick="window.location.href='https://www.paypal.com/webapps/shoppingcart?mfid=1560126621288_bc7d9226bef3b&flowlogging_id=bc7d9226bef3b#/checkout/shoppingCart'"><br>
						<?php 
	                    if ($_SESSION['username'] == "admin") { ?>
	                      	<input type="button" value="Eliminar" class=" elOferta btn btn-danger btn-sm my-1 my-sm-0" onclick="eliminarOferta('<?php echo $row['id']; ?>')">
	                    <?php } 
	                    }
	                  ?>  
	              </div>
	            </div>				
				<?php
			}
	}
	
	if (isset($_POST['id'])) {
		
		$eliminar = $_POST['id'];
		$query = "DELETE FROM ventas WHERE id = $eliminar";
		if (mysqli_query($conn, $query)) {

			echo "Funciona";

		} else {

			echo "error.";

		}
	}
?>