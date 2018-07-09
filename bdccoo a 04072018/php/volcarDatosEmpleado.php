<?php

include("conexion.php");



$id = $_POST['usuario'];




	


	$result = $conexion->query("select *  FROM censo WHERE id='".$id."'");
	
	echo "
	<div class='container'>


		<div class='row'>
			<div class='col'>
				<table class='table'>
								<thead class='thead-light'>
									<tr>
										<th>Nº Empleado</th>
										<th>NIF</th>
										<th>Nombre</th>
										<th>Apellidos</th>
										<th>Fecha Nacimiento</th>
									</tr>
								</thead>";
					

					
								while($row = $result->fetch_array())
								{
									
								echo "<tbody>";
									echo "<tr >";
										echo "<td >" . $row['NumeroEmpleado'] . "</td>";
										echo "<td >" . $row['NIF'] . "</td>";
										echo "<td >" . $row['Nombre'] . "</td>";
										echo "<td >" . $row['Apellidos'] . "</td>";
										echo "<td >" . $row['FechaNacimiento'] . "</td>";
									echo "</tr>";
								echo "</tbody>";
								}
					

				echo "</table>";
			echo "</div>";  

		echo "</div>";
	 
/*************************************************/
	

	$result = $conexion->query("select * FROM censo WHERE id='".$id."'");

	echo "
		<div class='row'>
			<div class='col'>
				<table class='table'>
							<thead class='thead-light'>
								<tr>
									<th>Nº Oficina</th>
									<th>Nombre Oficina</th>
									<th>Categoria Prof.</th>
									<th>Antiguedad</th>
									<th>Puesto</th>
									<th>Provincia</th>
								</tr>
							</thead>";
				

				
							while($row = $result->fetch_array())
							{
								
							echo "<tbody>";
								echo "<tr >";
									echo "<td >" . $row['NumeroOficina'] . "</td>";
									echo "<td >" . $row['NombreOficina'] . "</td>";
									echo "<td >" . $row['CategoriaProfesional'] . "</td>";
									echo "<td >" . $row['PrimeraAlta'] . "</td>";
									echo "<td >" . $row['Puesto'] . "</td>";
									echo "<td >" . $row['Provincia'] . "</td>";			
								echo "</tr>";
							echo "</tbody>";
							}
				

				echo "</table>";
			echo "</div>"; 
		echo "</div>";
	
	 
/*****************DATOS AFILIATIVOS******************************/

	$resultAFI = $conexion->query("select * from censo inner join afiliacion on censo.NIF = afiliacion.NIF and censo.id='".$id."'");

echo "
	
		
		
		<div class='row mt-3'>
			<div class='col'>
				<div id='acordion' role='tablist' aria-multiselectable='true'>
					<div class='card'>
						<div class='card-header' role='tab' id='heading1'>
							<h5 class='mb-0'>
								<a href='#collapse1' data-toggle='collapse' data-parent='#acordion' aria-expanded='true' aria-controls='collapse1'>
									Datos Afiliativos
								</a>
							</h5>
						</div>

						<div id='collapse1' class='collapse' role='tabpanel' aria-labelledby='heading1'>
							<div class='card-body'>
								<div class='row' >";
										echo "
			
												<table class='table'>
															<thead class='thead-light'>
																<tr>
																	<th>Afiliado/a</th>
																	<th>Fecha Afiliación</th>
																	<th>Gestor Afiliación</th>
																	<th>CCC Afiliación</th>
																	<th>Coordinador Territorial</th>
																	<th>Correo Externo</th>
																
																</tr>
															</thead>";
												

															echo "<tbody>";
																echo "<tr >";
																	if($row = $resultAFI->fetch_array())
																	{
																		
																				echo "<td >" ."<img class='img-fluid' src='../img/verde.png' alt='vede'>" . "</td>";
																				echo "<td >" . $row['fechaAfiliacion'] . "</td>";	
																				echo "<td >" . $row['gestorAfiliacion'] . "</td>";
																				echo "<td >" . $row['CCAfiliacion'] . "</td>";
																				echo "<td >" . $row['coordinadorTerritorial'] . "</td>";
																				echo "<td >" . $row['correoExternoPropio'] . "</td>";		
																						
																	}
																	else{

																			echo "<td >" ."<img class='img-fluid' src='../img/rojo.png' alt='rojo'>" . "</td>";
																	
																	}


																echo "</tr>";
															echo "</tbody>";
												echo "</table>";
								echo "</div>"; 
		
							echo"</div>
								
							</div>
						</div>
					</div>
		
				</div>
	
		</div>";



/******************* RLT *********************************/


$resultRLT = $conexion->query("select DE.cargoComiteEmpresa as CCE,DE.comiteSS as CSS ,DE.creditoHorario as CH, DE.horasCedidas as HC, DE.totalHoras as TH, DE.situacion as SIT from censo CE inner join delegados DE on CE.NIF = DE.NIF and CE.id='".$id."'");

echo "
	
		
		
		<div class='row mt-3'>
			<div class='col'>
				<div id='acordion' role='tablist' aria-multiselectable='true'>
					<div class='card'>
						<div class='card-header' role='tab' id='heading2'>
							<h5 class='mb-0'>
								<a href='#collapse2' data-toggle='collapse' data-parent='#acordion' aria-expanded='true' aria-controls='collapse2'>
									Representación legal de los/las trabajadores/as
								</a>
							</h5>
						</div>

						<div id='collapse2' class='collapse' role='tabpanel' aria-labelledby='heading2'>
							<div class='card-body'>
								<div class='row' >";
										echo "
			
												<table class='table'>
															<thead class='thead-light'>
																<tr>
																	<th>Delegado/a</th>
																	<th>Cargo Com. Emp.</th>
																	<th>Comite S.S.</th>
																	<th>Credito Horar.</th>
																	<th>Horas Cedidas</th>
																	<th>Total Horas</th>
																	<th>Situacion</th>
																
																</tr>
															</thead>";
												

															echo "<tbody>";
																echo "<tr >";
																	if($row = $resultRLT->fetch_array())
																	{
																		
																				echo "<td >" ."<img class='img-fluid' src='../img/verde.png' alt='vede'>" . "</td>";
																				echo "<td >" . $row['CCE'] . "</td>";	
																				echo "<td >" . $row['CSS'] . "</td>";
																				echo "<td >" . $row['CH'] . "</td>";
																				echo "<td >" . $row['HC'] . "</td>";
																				echo "<td >" . $row['TH'] . "</td>";
																				echo "<td >" . $row['SIT'] . "</td>";			
																						
																	}
																	else{

																			echo "<td >" ."<img class='img-fluid' src='../img/rojo.png' alt='rojo'>" . "</td>";
																	
																	}


																echo "</tr>";
															echo "</tbody>";
												echo "</table>";
								echo "</div>"; 
		
							echo"</div>
								
							</div>
						</div>
					</div>
		
				</div>
	
		</div>";



/****************************************************/

/******************* BOTON BOLETIN AFILIACION *********************************/



echo "
	
		
		
		<div class='row mt-3'>
			<div class='col'>
				<div id='acordion' role='tablist' aria-multiselectable='true'>
					<div class='card'>
						<div class='card-header' role='tab' id='heading3'>
							<h5 class='mb-0'>
								<a href='#collapse3' data-toggle='collapse' data-parent='#acordion' aria-expanded='true' aria-controls='collapse3'>
									Boletín Afiliación
								</a>
							</h5>
						</div>

						<div id='collapse3' class='collapse' role='tabpanel' aria-labelledby='heading3'>
							<div class='card-body'>
								<div class='row' >";
										echo "
			
											<button class='btn btn-warning btn-lg btn-block' id='imprimirBA'>Imprimir Boletín de Afiliación</button>
											
												";
								echo "</div>"; 
		
							echo"</div>
								
							</div>
						</div>
					</div>
		
				</div>
	
		</div>";



/****************************************************/
	mysqli_close($conexion);



?>