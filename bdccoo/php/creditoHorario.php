<?php

include("conexion.php");

session_start();

$usu= $_SESSION['usuario'];

$consultarPrivilegios = $conexion->query("SELECT * FROM usuarios where usuario='".$usu."'");

$row = mysqli_fetch_array($consultarPrivilegios);

$privilegios=$row['privilegios'];


if ($privilegios!="1"){

	echo "<h7 style='color:red;text-align:center;'>NO TIENES AUTORIZACION PARA REALIZAR ESTA OPERACION.CONTACTA CON EL/LA ADMINISTRADOR/A DE LA BASE DE DATOS.</h7>";
	
}

else{


	


	//$result = $conexion->query("SELECT C.Provincia, COUNT(C.Provincia) as N_empleados ,COUNT(A.provincia) as N_afiliados ,COUNT(IF(C.Sexo='M' and A.idAfiliacion IS NOT NULL,C.Sexo,NULL)) as Mujeres, COUNT(IF(C.Sexo='H' and A.idAfiliacion IS NOT NULL,C.Sexo,NULL)) as Hombres, FORMAT(((COUNT(A.provincia)/ COUNT(C.Provincia))*100),2) as PorcentajeCenso FROM censo C LEFT JOIN afiliacion A ON C.NIF=A.NIF GROUP BY C.Provincia");

	$result = $conexion->query("SELECT provincia, entidad, nombre, apellidos,NIF, creditoHorario, horasCedidas, totalHoras FROM delegados  
ORDER BY provincia ASC");

	$result2 = $conexion->query("SELECT sum(creditoHorario) as CreditoHorario, sum(horasCedidas) as HorasCedidas, sum(totalHoras) as TotalHoras FROM `delegados`");
	
	
	echo "
	
	<div class='container'>

	<div class='row'>
		<div class='col' >

			<H3> TOTAL CREDITO HORARIO </H3>
			<table class='table'>
							<thead class='thead-light'>
								<tr>
									<th></th>
									
									<th>CREDITO HORARIO</th>
									<th>HORAS REALES</th>
									<th>CUADRE HORAS</th>
									
								</tr>
							</thead>";
				

				
							while($row2 = $result2->fetch_array())
							{
								
							echo "<tbody>";
								echo "<tr >";
									echo "<td >CREDITO HORARIO CC.OO. en G.C.C.</td>";
									
									//echo "<td >" . $row2['PorcentajeTotalCenso'] . "%</td>";
			

									echo "<td >" . $row2['CreditoHorario']. "</td>";
									
									echo "<td >" . $row2['TotalHoras'] . "</td>";

									echo "<td >" . $row2['HorasCedidas'] . "</td>";
									
									
									
								echo "</tr>";
							echo "</tbody>";
							}

			echo "</table>";

	echo "
	<div class='row '>
		<div class='col'>
			<H3 > DELEGADOS/AS Y CREDITO HORARIO </H3>
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
									<th>Modificar</th>
									
								</tr>
							</thead>
							";
				

				
							while($row = $result->fetch_array())
							{
								
						

							echo "<tbody >";

								
								
									echo "<tr >";

										


											echo "<td style='text-align:center;display: table-cell;vertical-align: middle;'>" . $row['provincia'] . "</td>";
											echo "<td style='text-align:center;display: table-cell;vertical-align: middle;'>" . $row['entidad'] . "</td>";
											echo "<td style='text-align:center;display: table-cell;vertical-align: middle;'>" . $row['nombre'] . "</td>";
											echo "<td style='text-align:center;display: table-cell;vertical-align: middle;'>" . $row['apellidos']. "</td>";
											echo "<td style='text-align:center;display: table-cell;vertical-align: middle;'>" . $row['NIF']. "</td>";
											echo "<td style='text-align:center;display: table-cell;vertical-align: middle;'>" . $row['creditoHorario']. "</td>";
											echo "<td style='text-align:center;display: table-cell;vertical-align: middle;'>" . $row['horasCedidas'] . "</td>";
											//echo "<td ><input type='text' style='width:40px;text-align:center;display: table-cell;vertical-align: middle;' placeholder=' ".$row['totalHoras']."'/></td>";
											//echo"<td ><button type='button' class='btn btn-success' style='text-align:center;display: table-cell;vertical-align: middle;'>Mod.</button></td>";

											echo "<td colspan='2' style='text-align:center;''>
										        <input type='text' style='width:40px;' placeholder=' ".$row['totalHoras']."'/>
										        <button type='button' class='btn btn-success'>Mod.</button>
										    </td>";
											
											

									echo "</tr>";

								

							echo "</tbody>";
							}

			echo "</table>";
		echo "</div>";  

		echo "</div>";
	 
/*************************************************/
	

}



	
/**************************************************/
	mysqli_close($conexion);



?>