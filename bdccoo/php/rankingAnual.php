<?php

include("conexion.php");



//$id = $_POST['usuario'];



	


	

	$result = $conexion->query("SELECT afiliacion.gestorAfiliacion as gestor, censo.Nombre as nom ,censo.Apellidos as cognom, COUNT(*) as cantidad,   COUNT(IF(MONTH(fechaAfiliacion)='01',1,NULL)) AS Enero,
COUNT(IF(MONTH(fechaAfiliacion)='02',1,NULL)) AS Febrero, 
COUNT(IF(MONTH(fechaAfiliacion)='03',1,NULL)) AS Marzo,
COUNT(IF(MONTH(fechaAfiliacion)='04',1,NULL)) AS Abril, 
COUNT(IF(MONTH(fechaAfiliacion)='05',1,NULL)) AS Mayo,
COUNT(IF(MONTH(fechaAfiliacion)='06',1,NULL)) AS Junio, 
COUNT(IF(MONTH(fechaAfiliacion)='07',1,NULL)) AS Julio, 
COUNT(IF(MONTH(fechaAfiliacion)='08',1,NULL)) AS Agosto,
COUNT(IF(MONTH(fechaAfiliacion)='09',1,NULL)) AS Septiembre,
COUNT(IF(MONTH(fechaAfiliacion)='10',1,NULL)) AS Octubre, 
COUNT(IF(MONTH(fechaAfiliacion)='11',1,NULL)) AS Noviembre, 
COUNT(IF(MONTH(fechaAfiliacion)='12',1,NULL)) AS Diciembre 
FROM afiliacion left join censo on afiliacion.gestorAfiliacion=censo.NumeroEmpleado where YEAR(fechaAfiliacion)='2017' group by gestorAfiliacion ORDER BY cantidad DESC");


	
	
	
	
	

	echo "
	<div class='container'>
	<div class='row'>
		<div class='col'>
			<H3> RANKING ANUAL DE AFILIACION </H3>
			<table class='table table-bordered'>
							<thead class='thead-light '>
								<tr>
									<th>Puesto</th>
									<th>Nombre</th>
									<th>Apellidos</th>
									<th>#</th>

									<th>E</th>
									<th>F</th>
									<th>M</th>
									<th>A</th>
									<th>My</th>
									<th>J</th>
									<th>Jl</th>
									<th>Ag</th>
									<th>S</th>
									<th>O</th>
									<th>N</th>
									<th>D</th>
									
									
								</tr>
							</thead>";
				

				$n=0;
											
							while($row2 = $result->fetch_array())
							{
								$n++;
							echo "<tbody>";
								echo "<tr >";
									//echo "<td >" . $row2['gestor'] . "</td>";
									echo "<td >" . $n . "</td>";
									echo "<td >" . $row2['nom'] . "</td>";
									echo "<td >" . $row2['cognom'] . "</td>";
									echo "<td style='background-color: #ccffff; font-weight: bold;'>" . $row2['cantidad'] . "</td>";

									echo "<td >" . $row2['Enero'] . "</td>";
									echo "<td >" . $row2['Febrero'] . "</td>";
									echo "<td >" . $row2['Marzo'] . "</td>";
									echo "<td >" . $row2['Abril'] . "</td>";
									echo "<td >" . $row2['Mayo'] . "</td>";
									echo "<td >" . $row2['Junio'] . "</td>";
									echo "<td >" . $row2['Julio'] . "</td>";
									echo "<td >" . $row2['Agosto'] . "</td>";
									echo "<td >" . $row2['Septiembre'] . "</td>";
									echo "<td >" . $row2['Octubre'] . "</td>";
									echo "<td >" . $row2['Noviembre'] . "</td>";
									echo "<td >" . $row2['Diciembre'] . "</td>";
			
									
								echo "</tr>";
							echo "</tbody>";
							}
				
							

			echo "</table>";
		echo "</div>";  

		echo "</div>";
	echo "</div>";
	 
/*************************************************/
	





	
/**************************************************/
	mysqli_close($conexion);



?>