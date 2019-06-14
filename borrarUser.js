function deleteUser(usuario) {

	var user = usuario;

	var dato = {
			"usuario" : usuario
	};

	//alert(user);

	$.ajax({
			data:  dato,
			url:   'php/deleteUser.php',
			type:  'post',
			success:  function (response) {
				
				location.href = "principal.php";
				sleep(3000);
				alert("Usuario eliminado.");
				
								
			}

		});
	
	//location.reload();

}


//joseca@gmail.com