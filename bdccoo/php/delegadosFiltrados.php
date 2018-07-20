<?php

include("conexion.php");

$id = $_POST['lugar'];

	switch ($id) {
    case "EJEST":
        
    	 $result = $conexion->query("SELECT ejeEnt, cargoEjecutiva, provincia, entidad, nombre, apellidos,NIF, totalHoras FROM delegados where ejeEnt<>'0' ORDER BY provincia ASC");

	
	
	
			echo "
			
			<div class='container'>

			";

			echo "
			<div class='row '>
				<div class='col'>
					
					<table class='table table-hover'>
								<thead class='thead-light ' >
										<tr >
											<th>Provincia</th>
											<th>Entidad</th>
											<th>Nombre</th>
											<th>Apellidos</th>
											<th>NIF</th>
											<th>Cargo Ejecutiva</th>
											
											
											
										</tr>
									</thead>
									";
						

						
									while($row = $result->fetch_array())
									{
										
								

									echo "<tbody >";

										

											echo "<tr >";

												

													echo "<td style='text-align:center;'>" . $row['provincia'] . "</td>";
													echo "<td style='text-align:center;'>" . $row['entidad'] . "</td>";
													echo "<td style='text-align:center;'>" . $row['nombre'] . "</td>";
													echo "<td style='text-align:center;'>" . $row['apellidos']. "</td>";
													echo "<td style='text-align:center;'>" . $row['NIF']. "</td>";
													echo "<td style='text-align:center;'>" . $row['cargoEjecutiva']. "</td>";
													
												

											echo "</tr>";

										echo "</div>";

									echo "</tbody>";
									}

					echo "</table>";
				echo "</div>";  

				echo "</div>";


        break;
    case "DPRL":
        
    	 $result = $conexion->query("SELECT comiteSS, provincia, entidad, nombre, apellidos,NIF, creditoHorario, horasCedidas, totalHoras FROM delegados where comiteSS<>'0' ORDER BY provincia ASC");

	
	
	
			echo "
			
			<div class='container'>

			";

			echo "
			<div class='row '>
				<div class='col'>
					
					<table class='table table-hover'>
								<thead class='thead-light ' >
										<tr >
											<th>Provincia</th>
											<th>Entidad</th>
											<th>Nombre</th>
											<th>Apellidos</th>
											<th>NIF</th>
											<th>Credito Horario</th>
											<th>Horas Cedidas</th>
											<th>Total Horas</th>
											
											
										</tr>
									</thead>
									";
						

						
									while($row = $result->fetch_array())
									{
										
								

									echo "<tbody >";

										

											echo "<tr >";

												

													echo "<td style='text-align:center;'>" . $row['provincia'] . "</td>";
													echo "<td style='text-align:center;'>" . $row['entidad'] . "</td>";
													echo "<td style='text-align:center;'>" . $row['nombre'] . "</td>";
													echo "<td style='text-align:center;'>" . $row['apellidos']. "</td>";
													echo "<td style='text-align:center;'>" . $row['NIF']. "</td>";
													echo "<td style='text-align:center;'>" . $row['creditoHorario']. "</td>";
													echo "<td style='text-align:center;'>" . $row['horasCedidas'] . "</td>";
													echo "<td style='text-align:center;'>" . $row['totalHoras'] . "</td>";
												

											echo "</tr>";

										echo "</div>";

									echo "</tbody>";
									}

					echo "</table>";
				echo "</div>";  

				echo "</div>";


        break;
    case "TODAS":

        	$result = $conexion->query("SELECT provincia, entidad, nombre, apellidos,NIF, creditoHorario, horasCedidas, totalHoras FROM delegados  
			ORDER BY provincia ASC");

	
	
	
			echo "
			
			<div class='container'>

			";

			echo "
			<div class='row '>
				<div class='col'>
					
					<table class='table table-hover'>
								<thead class='thead-light ' >
										<tr >
											<th>Provincia</th>
											<th>Entidad</th>
											<th>Nombre</th>
											<th>Apellidos</th>
											<th>NIF</th>
											<th>Credito Horario</th>
											<th>Horas Cedidas</th>
											<th>Total Horas</th>
											
											
										</tr>
									</thead>
									";
						

						
									while($row = $result->fetch_array())
									{
										
								

									echo "<tbody >";

										

											echo "<tr >";

												

													echo "<td style='text-align:center;'>" . $row['provincia'] . "</td>";
													echo "<td style='text-align:center;'>" . $row['entidad'] . "</td>";
													echo "<td style='text-align:center;'>" . $row['nombre'] . "</td>";
													echo "<td style='text-align:center;'>" . $row['apellidos']. "</td>";
													echo "<td style='text-align:center;'>" . $row['NIF']. "</td>";
													echo "<td style='text-align:center;'>" . $row['creditoHorario']. "</td>";
													echo "<td style='text-align:center;'>" . $row['horasCedidas'] . "</td>";
													echo "<td style='text-align:center;'>" . $row['totalHoras'] . "</td>";
												

											echo "</tr>";

										echo "</div>";

									echo "</tbody>";
									}

					echo "</table>";
				echo "</div>";  

				echo "</div>";
        break;
    default:
       
       $result = $conexion->query("SELECT provincia, entidad, nombre, apellidos,NIF, creditoHorario, horasCedidas, totalHoras FROM delegados where provincia='".$id."' 
			ORDER BY provincia ASC");

	
	
	
			echo "
			
			<div class='container'>

			";

			echo "
			<div class='row '>
				<div class='col'>
					
					<table class='table table-hover'>
								<thead class='thead-light ' >
										<tr >
											<th>Provincia</th>
											<th>Entidad</th>
											<th>Nombre</th>
											<th>Apellidos</th>
											<th>NIF</th>
											<th>Credito Horario</th>
											<th>Horas Cedidas</th>
											<th>Total Horas</th>
											
											
										</tr>
									</thead>
									";
						

						
									while($row = $result->fetch_array())
									{
										
								

									echo "<tbody >";

										

											echo "<tr >";

												

													echo "<td style='text-align:center;'>" . $row['provincia'] . "</td>";
													echo "<td style='text-align:center;'>" . $row['entidad'] . "</td>";
													echo "<td style='text-align:center;'>" . $row['nombre'] . "</td>";
													echo "<td style='text-align:center;'>" . $row['apellidos']. "</td>";
													echo "<td style='text-align:center;'>" . $row['NIF']. "</td>";
													echo "<td style='text-align:center;'>" . $row['creditoHorario']. "</td>";
													echo "<td style='text-align:center;'>" . $row['horasCedidas'] . "</td>";
													echo "<td style='text-align:center;'>" . $row['totalHoras'] . "</td>";
												

											echo "</tr>";

										echo "</div>";

									echo "</tbody>";
									}

					echo "</table>";
				echo "</div>";  

				echo "</div>";
	};
	
	
	/***************FIN filtros delegados**********************************/	

	/**************************************************/
	mysqli_close($conexion);

?>