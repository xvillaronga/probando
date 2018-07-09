<?php

include("conexion.php");

$search = $_POST['service'];



		$result = $conexion->query("SELECT id, nombre, apellidos, NIF FROM censo WHERE apellidos like '" . $search . "%' ");
		
		
				while($row = $result->fetch_array())
					{
						
						echo '<div class="suggest-element" id="'.$row['id'].'"><a id="'.$row['apellidos'].', '.$row['nombre'].'">'.$row['apellidos'].', '.$row['nombre'].' ('.$row['NIF'].')</a></div>';
						
					}

	
	
?>