<?php

require_once "db.php";

// Elimina caracteres extraños que me pueden molestar en las cadenas que meto en los item de los RSS
function clrAll($str) {
	$str=str_replace("&","&amp;",$str);
	$str=str_replace("\"","&quot;",$str);
	$str=str_replace("'","&apos;",$str);
	$str=str_replace(">","&gt;",$str);
	$str=str_replace("<","&lt;",$str);
	return $str;
}

//creo cabeceras desde PHP para decir que devuelvo un XML
header("Content-type: text/xml");

//comienzo a escribir el código del RSS
echo "<?xml version=\"1.0\""." encoding=\"ISO-8859-1\"?>";

//conecto con la base de datos
$Servidor = "localhost";
$usuario = "root";
$clave = "";
$bbdd = "aplicacionarticulos";
$connectid = mysql_connect($Servidor, $usuario, $clave);
mysql_select_db($bbdd);

//sentencia SQL para acceder a los últimos 10 artículos publicados
$ssql = "select * from post order by tiempo desc limit 10";
$result = mysql_query($ssql);

//Cabeceras del RSS
echo '<rss version="2.0" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:itunes="http://www.itunes.com/dtds/podcast-1.0.dtd">';
//Datos generales del Canal. Edítalos conforme a tus necesidades
echo "<channel>\n";
echo "<title>Novedades de Desarrolloweb.com</title>";
echo "<link>http://www.desarrolloweb.com</link>";
echo "<description>Ejemplo sobre cómo hacer un RSS desde PHP y trayendo los datos desde MySQL.</description>";
echo "<language>es-es</language>";
echo "<copyright>DesarrolloWeb.com</copyright>\n";

//para cada registro encontrado en la base de datos
//tengo que crear la entrada RSS en un item
while ($registro = mysql_fetch_array($result))
{
	//elimino caracteres extraños en campos susceptibles de tenerlos
	$titulo=clrAll($registro["titulo"]);			
	$desc=clrAll($registro["descripcion"]);

	echo "<item>\n";
	echo "<title>$titulo</title>\n";
	echo "<description>$desc</description>\n";
	echo "<link>" . $registro["enlace"] . "</link>\n";
	echo "<pubDate>". date ( "r" , $registro['tiempo'] )."</pubDate>\n";
	echo "</item>\n";
}

//cierro las etiquetas del XML
echo "</channel>";
echo "</rss>";

?>