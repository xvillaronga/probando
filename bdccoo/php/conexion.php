<?php




$conexion = new mysqli('localhost', 'root', '', 'bdccoo')
or die("No se puede conectar a la base de datos");
$conexion->set_charset("utf8");




if(!($conexion))
{
	echo "error de conexion";
	exit();

}



?>

