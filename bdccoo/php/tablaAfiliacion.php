<?php

include("conexion.php");



//$id = $_POST['usuario'];



	


	//$result = $conexion->query("SELECT C.Provincia, COUNT(C.Provincia) as N_empleados ,COUNT(A.provincia) as N_afiliados ,COUNT(IF(C.Sexo='M' and A.idAfiliacion IS NOT NULL,C.Sexo,NULL)) as Mujeres, COUNT(IF(C.Sexo='H' and A.idAfiliacion IS NOT NULL,C.Sexo,NULL)) as Hombres, FORMAT(((COUNT(A.provincia)/ COUNT(C.Provincia))*100),2) as PorcentajeCenso FROM censo C LEFT JOIN afiliacion A ON C.NIF=A.NIF GROUP BY C.Provincia");

	$result = $conexion->query("SELECT C.Provincia, COUNT(C.Provincia) as N_empleados ,COUNT(A.provincia) as N_afiliados ,FORMAT(((COUNT(A.provincia)/ COUNT(C.Provincia))*100),2) as PorcentajeCenso ,COUNT(IF(C.Sexo='M' and A.idAfiliacion IS NOT NULL,C.Sexo,NULL)) as Mujeres,FORMAT(((COUNT(IF(C.Sexo='M' and A.idAfiliacion IS NOT NULL,C.Sexo,NULL))/ COUNT(A.provincia))*100),2) as PorcentajeMujeres ,COUNT(IF(C.Sexo='H' and A.idAfiliacion IS NOT NULL,C.Sexo,NULL)) as Hombres,FORMAT(((COUNT(IF(C.Sexo='H' and A.idAfiliacion IS NOT NULL,C.Sexo,NULL))/ COUNT(A.provincia))*100),2) as PorcentajeHombres  FROM censo C LEFT JOIN afiliacion A ON C.NIF=A.NIF GROUP BY C.Provincia");

	$result2 = $conexion->query("SELECT COUNT(A.idAfiliacion) as Num_afiliados,FORMAT(((COUNT(A.idAfiliacion)/ (SELECT count(id) FROM censo))*100),2) as PorcentajeTotalCenso  ,COUNT(IF(C.Sexo='M' and A.idAfiliacion IS NOT NULL,C.Sexo,NULL)) as Num_Mujeres,FORMAT(((COUNT(IF(C.Sexo='M' and A.idAfiliacion IS NOT NULL,C.Sexo,NULL))/ COUNT(A.idAfiliacion))*100),2) as PorcentajeTotalMujeres ,COUNT(IF(C.Sexo='H' and A.idAfiliacion IS NOT NULL,C.Sexo,NULL)) as Num_Hombres,FORMAT(((COUNT(IF(C.Sexo='H' and A.idAfiliacion IS NOT NULL,C.Sexo,NULL))/ COUNT(A.idAfiliacion))*100),2) as PorcentajeTotalHombres  FROM censo C INNER JOIN afiliacion A ON C.NIF=A.NIF");
	
	
	echo "
	
	<div class='container'>

	<div class='row'>
		<div class='col' >

			<H3> DATOS TOTALES ENTIDAD </H3>
			<table class='table'>
							<thead class='thead-light'>
								<tr>
									<th>Total Afiliados</th>
									<th>%/s Censo</th>
									<th>Mujeres</th>
									<th>% Mujeres</th>
									<th>Hombres</th>
									<th>% Hombres</th>
									
								</tr>
							</thead>";
				

				
							while($row2 = $result2->fetch_array())
							{
								
							echo "<tbody>";
								echo "<tr >";
									echo "<td >" . $row2['Num_afiliados'] . "</td>";
									
									echo "<td >" . $row2['PorcentajeTotalCenso'] . "%</td>";

														

									echo "<td >" . $row2['Num_Mujeres'] . "</td>";
									echo "<td >" . $row2['PorcentajeTotalMujeres'] . "%</td>";
									echo "<td >" . $row2['Num_Hombres'] . "</td>";
									echo "<td >" . $row2['PorcentajeTotalHombres']. "%</td>";
									
									
									
								echo "</tr>";
							echo "</tbody>";
							}

			echo "</table>";

	echo "
	<div class='row'>
		<div class='col'>
			<H3 > DESGLOSE POR PROVINCIAS </H3>
			<table class='table table-hover'>
							<thead class='thead-light ' >
								<tr >
									<th>Provincia</th>
									<th>N_empleados</th>
									<th>N_afiliados</th>
									<th>%/s Censo</th>
									<th>Mujeres</th>
									<th>% Mujeres</th>
									<th>Hombres</th>
									<th>% Hombres</th>
									
								</tr>
							</thead>";
				

				
							while($row = $result->fetch_array())
							{
								
							echo "<tbody>";
								echo "<tr >";
									echo "<td >" . $row['Provincia'] . "</td>";
									echo "<td >" . $row['N_empleados'] . "</td>";
									echo "<td >" . $row['N_afiliados'] . "</td>";

									if($row['PorcentajeCenso'] < 25 ){  

										echo "<td style='background-color:#FFE4C4'>" . $row['PorcentajeCenso'] . "%</td>";

									}
									else {

										if ($row['PorcentajeCenso'] > 60 ){

										echo "<td style='background-color:#e6ffcc'>" . $row['PorcentajeCenso'] . "%</td>";
										}
										else{

										echo "<td >" . $row['PorcentajeCenso'] . "%</td>";
										}
									}

									//echo "<td >" . $row['PorcentajeCenso'] . "%</td>";
									echo "<td >" . $row['Mujeres']. "</td>";
									echo "<td >" . $row['PorcentajeMujeres']. "%</td>";
									echo "<td >" . $row['Hombres'] . "</td>";
									echo "<td >" . $row['PorcentajeHombres']. "%</td>";
									
									
								echo "</tr>";
							echo "</tbody>";
							}

			echo "</table>";
		echo "</div>";  

		echo "</div>";
	 
/*************************************************/
	





	
/**************************************************/
	mysqli_close($conexion);



?>