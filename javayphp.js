function showHint(str) {

	if (str.length == 0) {

		document.getElementById("txtPista").innerHTML = "";
		return;

	} else {

		var xmlhttp = XMLHttpRequest();
		xmlhttp.onreadystatechange = function () {

			if (thi.readyState == 4 && this.status == 200) {

				document.getElementById("txtPista").innerHTML = this.responseText;

			}

		}

		xmlhttp.open("GET", "seleccionador.php?q=", str , true);
		xmlhttp.send();

	}

}