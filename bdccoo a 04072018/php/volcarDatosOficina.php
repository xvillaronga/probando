<?php

include("conexion.php");



$id = $_POST['ofi'];




	


	$result = $conexion->query("select *  FROM oficinas WHERE id='".$id."'");
	
	echo "
	<div class='container'>


		<div class='row'>
			<div class='col'>
				<table class='table'>
								<thead class='thead-light'>
									<tr>
										<th>Nº Oficina</th>
										<th>Nombre</th>
										<th>Direccion</th>
										<th>Telefono</th>
										
										<th>Municipio</th>
										<th>Provincia</th>
									</tr>
								</thead>";
					

					
								while($row = $result->fetch_array())
								{
									
								echo "<tbody>";
									echo "<tr >";
										echo "<td >" . $row['NumeroOficina'] . "</td>";
										echo "<td >" . $row['Nombre'] . "</td>";
										echo "<td >" . $row['Direccion'] . "</td>";
										echo "<td >" . $row['Telefono'] . "</td>";
										
										echo "<td >" . $row['Municipio'] . "</td>";
										echo "<td >" . $row['Provincia'] . "</td>";
									echo "</tr>";
								echo "</tbody>";
								}
					

				echo "</table>";
			echo "</div>";  

		echo "</div>";
	 

	
/*************************************************/
	

	$result = $conexion->query("select *  FROM oficinas WHERE id='".$id."'");

	echo "
		<div class='row'>
			<div class='col'>
				<table class='table'>
							<thead class='thead-light'>
								<tr>
									<th>Apertura</th>
									<th>Zona</th>
									<th>DT</th>
									<th>T.Centro</th>
									<th>Coord.Territorial</th>
								</tr>
							</thead>";
				

				
							while($row = $result->fetch_array())
							{
								
							echo "<tbody>";
								echo "<tr >";
									echo "<td >" . $row['FechaApertura'] . "</td>";
									echo "<td >" . $row['Zona'] . "</td>";
									echo "<td >" . $row['NombreDT'] . "</td>";
									echo "<td >" . $row['TipoCentro'] . "</td>";
									echo "<td >" . $row['CoordinadorTerritorialAdjunto'] . "</td>";			
								echo "</tr>";
							echo "</tbody>";
							}
				

				echo "</table>";
			echo "</div>"; 
		echo "</div>";


/****************************************************/

/*****************EMPLEADOS ******************************/

	
	//$result2 = $conexion->query("select Ce.NumeroEmpleado as NE, Ce.Nombre as Nom, Ce.Apellidos as Cognoms, Ce.Puesto as Lloc, Ce.CategoriaProfesional as CP from censo Ce inner join oficinas Of on Ce.NumeroOficina = Of.NumeroOficina where Of.id ='".$id."' ORDER BY CP ASC");

	$result2 = $conexion->query("select Ce.NumeroEmpleado as NE, Ce.Nombre as Nom, Ce.Apellidos as Cognoms, Ce.Puesto as Lloc, Ce.CategoriaProfesional as CP
from afiliacion AF inner join censo CE on AF.NIF=CE.NIF
where AF.numeroEmpleado IN (select Ce.NumeroEmpleado as NE from censo Ce inner join oficinas Of on Ce.NumeroOficina = Of.NumeroOficina where Of.id ='".$id."' ORDER BY CP ASC) ORDER BY CP ASC
");

	$result3= $conexion->query("select Ce.NumeroEmpleado as NE, Ce.Nombre as Nom, Ce.Apellidos as Cognoms, Ce.Puesto as Lloc, Ce.CategoriaProfesional as CP from censo Ce inner join oficinas Of on Ce.NumeroOficina = Of.NumeroOficina where Of.id ='".$id."'  and Ce.NumeroEmpleado not in (select AF.numeroEmpleado from afiliacion AF
where AF.numeroEmpleado IN (select Ce.NumeroEmpleado as NE from censo Ce inner join oficinas Of on Ce.NumeroOficina = Of.NumeroOficina where Of.id ='".$id."' ORDER BY CP ASC)) ORDER BY CP ASC

");

echo "
	
		
		
		<div class='row mt-3'>
			<div class='col'>
				<div id='acordion' role='tablist' aria-multiselectable='true'>
					<div class='card'>
						<div class='card-header' role='tab' id='heading20'>
							<h5 class='mb-0'>
								<a href='#collapse20' data-toggle='collapse' data-parent='#acordion' aria-expanded='true' aria-controls='collapse20'>
									Empleados/as
								</a>
							</h5>
						</div>

						<div id='collapse20' class='collapse' role='tabpanel' aria-labelledby='heading20'>
							<div class='card-body'>
								<div class='row' >";
										echo "
												<H6 style='color:FireBrick ;''> AFILIADOS/AS </H6>
												<table class='table'>
															<thead class='thead-light'>
																<tr>
																	<th></th>
																	<th>NºEmpleado</th>
																	<th>Nombre</th>
																	<th>Apellidos</th>
																	<th>Puesto</th>
																	<th>Categoria Profesional</th>
																	
																
																</tr>
															</thead>";
												

															while($row = $result2->fetch_array())
																	{
																		
																	echo "<tbody>";
																		echo "<tr >";
																			echo "<td >" ."<img class='img-fluid' src='../img/verde.png' alt='verde'>" . "</td>";
																			echo "<td >" . $row['NE'] . "</td>";
																			echo "<td >" . $row['Nom'] . "</td>";
																			echo "<td >" . $row['Cognoms'] . "</td>";
																			echo "<td >" . $row['Lloc'] . "</td>";
																			echo "<td >" . $row['CP'] . "</td>";			
																		echo "</tr>";
																	echo "</tbody>";
																	}

												echo "</table>";
								echo "</div>"; 

								echo "
								<div class='row' >";
										echo "
												<H6 style='color:FireBrick ;''> NO AFILIADOS/AS </H6>
												<table class='table'>
															<thead class='thead-light'>
																<tr>
																	<th></th>
																	<th>NºEmpleado</th>
																	<th>Nombre</th>
																	<th>Apellidos</th>
																	<th>Puesto</th>
																	<th>Categoria Profesional</th>
																	
																
																</tr>
															</thead>";
												

															while($row = $result3->fetch_array())
																	{
																		
																	echo "<tbody>";
																		echo "<tr >";
																			echo "<td >" ."<img class='img-fluid' src='../img/rojo.png' alt='rojo'>" . "</td>";
																			echo "<td >" . $row['NE'] . "</td>";
																			echo "<td >" . $row['Nom'] . "</td>";
																			echo "<td >" . $row['Cognoms'] . "</td>";
																			echo "<td >" . $row['Lloc'] . "</td>";
																			echo "<td >" . $row['CP'] . "</td>";			
																		echo "</tr>";
																	echo "</tbody>";
																	}

												echo "</table>";
								echo "</div>"; 


		
							echo"</div>
								
							</div>
						</div>
					</div>
		
				</div>
	
		</div>";

/*************************************************/


/****************************************************/
	mysqli_close($conexion);



?>