<?php  

	@session_start();

	require_once("php-login/db.php");

		$user = $_POST['usuario'];

		$query = "DELETE FROM usuarios WHERE usuario = \"$user\"";
		

		mysqli_query($conn, $query);

		session_destroy();
		header("Location: ../principal.php");

?>

<?php  

/*
	@session_start();

	require_once("php-login/db.php");

		$user = $_SESSION['username'];

		$query = "DELETE FROM usuarios WHERE usuario = \"$user\"";
		
		mysqli_query($conn, $query);

		
		session_destroy();
		header("Location: ../principal.php");
*/

?>