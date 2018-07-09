<?php

include("conexion.php");


$result = $conexion->query("select count(*) as N_af_NO_Censo, FORMAT(((COUNT(*)/ (SELECT count(*) FROM afiliacion))*100),2) as PorcentajeSobreAfiliacion 
,COUNT(IF(Sexo='M',Sexo,NULL)) as Num_Mujeres, COUNT(IF(Sexo='H',Sexo,NULL)) as Num_Hombres from afiliacion where NIF not in (select A.NIF FROM afiliacion A inner join censo C ON C.NIF=A.NIF)");

echo "
	
	<div class='container'>

		<div class='row'>
			<div class='col' >

				<H3> DATOS TOTALES ENTIDAD </H3>
				<table class='table'>
								<thead class='thead-light'>
									<tr>
										<th>Total Afiliados Fuera de Censo</th>
										<th>%/s Afiliacion</th>
										<th>Mujeres</th>										
										<th>Hombres</th>
										
										
									</tr>
								</thead>";
					

					
								while($row = $result->fetch_array())
								{
									
								echo "<tbody>";
									echo "<tr >";
										echo "<td >" . $row['N_af_NO_Censo'] . "</td>";
										
										echo "<td >" . $row['PorcentajeSobreAfiliacion'] . "%</td>";

															

										echo "<td >" . $row['Num_Mujeres'] . "</td>";
										;
										echo "<td >" . $row['Num_Hombres'] . "</td>";
										
										
										
										
									echo "</tr>";
								echo "</tbody>";
								}

				echo "</table>";

			echo "</div>";  

		echo "</div>";

	echo "</div>";
	
/**************************************************/
	mysqli_close($conexion);



?>