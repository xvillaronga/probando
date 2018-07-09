<?php

include("conexion.php");

session_start();

$usuario=$_POST['usuario'];
$password=$_POST['password'];
$_SESSION['usuario']=$usuario;


$conexion = new mysqli('localhost', 'root', '', 'bdccoo');
$conexion->set_charset("utf8");


	
 	$result = $conexion->query("SELECT * FROM usuarios WHERE usuario = '$usuario'");

 	$row_cnt = $result->num_rows;
 	

 	if( $row_cnt == 0){
	 
	echo false;

	}
	else{

		
	
 		$result2 = $conexion->query("SELECT password FROM usuarios WHERE usuario = '$usuario'");

 		$row = mysqli_fetch_array($result2);
 		
 		
 		if ($password==$row['password']){

 			echo true;
 		}
 		else{

 			echo false;
 		}

 			
	}

	



 
?>