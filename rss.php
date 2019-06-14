<?php

/* NOTA IMPORTANTE */
// Este archivo PHP debe guardarse con encoding UTF8"

/*+++++++++++++++++++++++++++++++++++++++++++++++++/
/*++++++++++++++++++ DB CONNECTION ****************/
/**************************************************/

$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$conn->select_db("proyectofinal");

/* cambiar el conjunto de caracteres a utf8 */
$conn->set_charset("utf8");

/*+++++++++++++++++++++++++++++++++++++++++++++++++/
/**************************************************/

// Elimina caracteres extraños que me pueden molestar en las cadenas que meto en los item de los RSS
function sanitize($str) {
	$str=str_replace("&","&amp;",$str);
	$str=str_replace("\"","&quot;",$str);
	$str=str_replace("'","&apos;",$str);
	$str=str_replace(">","&gt;",$str);
	$str=str_replace("<","&lt;",$str);
	return $str;
}




$sql = "SELECT * FROM fotos";


$result = $conn->query($sql);



//comienzo a escribir el código del RSS
$data = '<?xml version="1.0" encoding="UTF-8" ?>';

//Cabeceras del RSS
$data .= '<rss version="2.0">';


//Datos generales del Canal. Edítalos conforme a tus necesidades
$titulo_canal="Imagenes de JC Fotografia";         
$link_canal = "http://localhost/proyecto/php/include/rss.php";
$descripcion_canal="Aquí se muestran las fotos.";
$idioma_canal = "es-es";
$copyright_canal = "&copy; JC Fotografia";


$data .= "<channel>\n";
$data .= "<title>".sanitize($titulo_canal)."</title>";
$data .= "<link>".$link_canal."</link>";
$data .= "<description>".sanitize($descripcion_canal)."</description>";
$data .= "<language>".$idioma_canal."</language>";
$data .= "<copyright>".htmlentities($copyright_canal)."</copyright>\n";

if ($result->num_rows > 0) 
{
	
    // output data of each row
    while($row = $result->fetch_assoc()) 
    {
        //elimino caracteres extraños en campos susceptibles de tenerlos
	   $titulo = sanitize($row["titulo"]);         

	   $data .= "<item>\n";
	   $data .= "<title>".$titulo."</title>\n";
	   $data .= "</item>\n";
    }
}

//cierro las etiquetas del XML
$data .= "</channel>";
$data .= "</rss>";


//creo cabeceras desde PHP para decir que devuelvo un XML
header("Content-type: text/xml;charset=utf-8");

echo $data;

?>
