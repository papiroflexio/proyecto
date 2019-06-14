<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">&nbsp;</a>
      <img class="navbar-brand navbar_img" src="img/logo.png"></a>
      <a class="navbar-brand" href="principal.php">&nbsp; &nbsp; JC Fotografía</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="dropdown">
        </li>
        <li><a href="principal.php">Galería</a></li>
        <li><a href="ofertas.php">Artículos</a></li>
        <li><a href="siteMap.php">Mapa del sitio</a></li>
        <?php if (isset($_SESSION['username'])) { ?>

						<li><a href="modificarUsuario.php">Perfil</a></li>

		<?php } ?>
      </ul>
    </div>
  </div>
</nav>

<div class="btn-group">
	<button type="button" class="btn btn-warning">

		<?php 
			if (isset($_SESSION['username'])) { 
				echo $_SESSION['username']; 
			} else {
				echo "<a id=\"inicioSesion\" href=\"login.php\">Inicia sesión</a>";
			}
		?>		
	</button>
	<button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">
		<span class="caret"></span>
	</button>
		<?php 
			if (isset($_SESSION['username'])) { 

				echo "<ul class=\"dropdown-menu\" role=\"menu\">	";
				echo "<li><a href=\"php/logout.php\">Cerrar Sesión</a></li>"; 

				if ($_SESSION['username'] == "admin") {
						
						echo "<li><a href=\"crearExperiencias.php\">Subir una imagen</a></li>";
						echo "<li><a href=\"crearOfertas.php\">Crear un artículo</a></li>";
						echo "<li><a href=\"usuarios.php\">Usuarios</a></li>";

					}

				echo "</ul>";

			}
		?>	
</div>