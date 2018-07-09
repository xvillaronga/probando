<?php

include("conexion.php");

$id = $_POST['lugar'];

	/*************************Directores de oficinas con menos de nivel 6****************************************************/

	//$result = $conexion->query("Select * from censo where (CategoriaProfesional='Grupo II - Nivel 10' or CategoriaProfesional='Grupo II - Nivel 9' or CategoriaProfesional='Grupo II - Nivel 8' or CategoriaProfesional='Grupo II - Nivel 7') and Puesto like 'Director%' order by CAST(NumeroOficina AS UNSIGNED)");
	
	$result = $conexion->query("Select * from censo where (CategoriaProfesional='Grupo II - Nivel 10' or CategoriaProfesional='Grupo II - Nivel 9' or CategoriaProfesional='Grupo II - Nivel 8' or CategoriaProfesional='Grupo II - Nivel 7') and Puesto like 'Director%' and Provincia='".$id."' order by Provincia");

	echo "
		
	
		<div class='row'>
			<div class='col'>
				<div id='acordion' role='tablist' aria-multiselectable='true'>";
		
		
	echo "
		
					<div class='card'>
						<div class='card-header' role='tab' id='heading1'>
							<h5 class='mb-0'>
								<a href='#collapse1' data-toggle='collapse' data-parent='#acordion' aria-expanded='true' aria-controls='collapse1'>
									1. Directores de oficinas con menos de nivel 6
								</a>
							</h5>
						</div>

						<div id='collapse1' class='collapse' role='tabpanel' aria-labelledby='heading1'>
							<div class='card-body'>
								<div class='row ' id='#'>";

								echo"<table class='table'>
										<thead class='thead-light'>
											<tr>
												<th>Nombre</th>
												<th>Apellidos</th>
												<th>NºOf.</th>
												<th>Nomb.Oficina</th>
												<th>Cat.Profesional</th>
												<th>Puesto</th>
												<th>FechaPuesto</th>
												<th>Provincia</th>
												
											</tr>
										</thead>";

										while($row = $result->fetch_array())
											{
												
											echo "<tbody>";
												echo "<tr >";
													echo "<td >" . $row['Nombre'] . "</td>";
													echo "<td >" . $row['Apellidos'] . "</td>";
													echo "<td >" . $row['NumeroOficina'] . "</td>";
													echo "<td >" . $row['NombreOficina'] . "</td>";
													echo "<td >" . $row['CategoriaProfesional'] . "</td>";
													echo "<td >" . $row['Puesto'] . "</td>";
													echo "<td >" . $row['FechaPuesto'] . "</td>";
													echo "<td >" . $row['Provincia'] . "</td>";
													
												echo "</tr>";
											echo "</tbody>";
											}

								echo "</table>";
							echo"	</div>
								
							</div>
						</div>
					</div>";
	/***************FIN Directores de oficinas con menos de nivel 6**********************************/	

	/************************Directores de oficinas con más de cuatro años y menos de nivel 5**********************/		
		
			$result2 = $conexion->query("Select * from censo where (CategoriaProfesional='Grupo II - Nivel 10' or CategoriaProfesional='Grupo II - Nivel 9' or CategoriaProfesional='Grupo II - Nivel 8' or CategoriaProfesional='Grupo II - Nivel 7' or CategoriaProfesional='Grupo II - Nivel 6') and (FechaPuesto < DATE_SUB(CURDATE(), INTERVAL 4 YEAR)) and Puesto like 'Director%' and Provincia='".$id."' order by Provincia");
	
	echo "
	
		
					<div class='card'>
						<div class='card-header' role='tab' id='heading2'>
							<h5 class='mb-0'>
								<a href='#collapse2' data-toggle='collapse' data-parent='#acordion' aria-expanded='true' aria-controls='collapse2'>
									2. Directores de oficinas con más de cuatro años y menos de nivel 5
								</a>
							</h5>
						</div>

						<div id='collapse2' class='collapse' role='tabpanel' aria-labelledby='heading2'>
							<div class='card-body'>
								<div class='row ' id='#'>";

								echo"<table class='table'>
										<thead class='thead-light'>
											<tr>
												<th>Nombre</th>
												<th>Apellidos</th>
												<th>NºOf.</th>
												<th>Nomb.Oficina</th>
												<th>Cat.Profesional</th>
												<th>Puesto</th>
												<th>FechaPuesto</th>
												<th>Provincia</th>
												
												
											</tr>
										</thead>";

										while($row = $result2->fetch_array())
											{
												
											echo "<tbody>";
												echo "<tr >";
													echo "<td >" . $row['Nombre'] . "</td>";
													echo "<td >" . $row['Apellidos'] . "</td>";
													echo "<td >" . $row['NumeroOficina'] . "</td>";
													echo "<td >" . $row['NombreOficina'] . "</td>";
													echo "<td >" . $row['CategoriaProfesional'] . "</td>";
													echo "<td >" . $row['Puesto'] . "</td>";
													echo "<td >" . $row['FechaPuesto'] . "</td>";
													echo "<td >" . $row['Provincia'] . "</td>";
													
												echo "</tr>";
											echo "</tbody>";
											}

								echo "</table>";
							echo"	</div>
								
							</div>
						</div>
					</div>";
	 /************************FIN Directores de oficinas con más de cuatro años y menos de nivel 5**********************/	

	
/************************Directores de oficinas con más de diez años y menos de nivel 4**********************/		
		
			$result3 = $conexion->query("	Select * from censo where (CategoriaProfesional='Grupo II - Nivel 10' or CategoriaProfesional='Grupo II - Nivel 9' or CategoriaProfesional='Grupo II - Nivel 8' or CategoriaProfesional='Grupo II - Nivel 7' or CategoriaProfesional='Grupo II - Nivel 6' or CategoriaProfesional='Grupo II - Nivel 5') and (FechaPuesto < DATE_SUB(CURDATE(), INTERVAL 10 YEAR)) and Puesto like 'Director%' and Provincia='".$id."' order by Provincia");
	
	echo "
	
		
					<div class='card'>
						<div class='card-header' role='tab' id='heading3'>
							<h5 class='mb-0'>
								<a href='#collapse3' data-toggle='collapse' data-parent='#acordion' aria-expanded='true' aria-controls='collapse3'>
									3. Directores de oficinas con más de diez años y menos de nivel 4
								</a>
							</h5>
						</div>

						<div id='collapse3' class='collapse' role='tabpanel' aria-labelledby='heading3'>
							<div class='card-body'>
								<div class='row ' id='#'>";

								echo"<table class='table'>
										<thead class='thead-light'>
											<tr>
												<th>Nombre</th>
												<th>Apellidos</th>
												<th>NºOf.</th>
												<th>Nomb.Oficina</th>
												<th>Cat.Profesional</th>
												<th>Puesto</th>
												<th>FechaPuesto</th>
												<th>Provincia</th>
												
												
											</tr>
										</thead>";

										while($row = $result3->fetch_array())
											{
												
											echo "<tbody>";
												echo "<tr >";
													echo "<td >" . $row['Nombre'] . "</td>";
													echo "<td >" . $row['Apellidos'] . "</td>";
													echo "<td >" . $row['NumeroOficina'] . "</td>";
													echo "<td >" . $row['NombreOficina'] . "</td>";
													echo "<td >" . $row['CategoriaProfesional'] . "</td>";
													echo "<td >" . $row['Puesto'] . "</td>";
													echo "<td >" . $row['FechaPuesto'] . "</td>";
													echo "<td >" . $row['Provincia'] . "</td>";
													
												echo "</tr>";
											echo "</tbody>";
											}

								echo "</table>";
							echo"	</div>
								
							</div>
						</div>
					</div>";
	 /************************FIN Directores de oficinas con más de diez años y menos de nivel 4**********************/	

/************************Oficinas sin Director**********************/		
		
			//$result4 = $conexion->query("Select NumeroOficina, NombreOficina, Provincia, Sociedad  from censo where (Sociedad not like 'BANCO%') and  NumeroOficina not in(SELECT NumeroOficina FROM censo WHERE Puesto like 'Director%' order by NumeroOficina) group by NumeroOficina order by Provincia");

			$result4 = $conexion->query("Select Ce.NumeroOficina, Ce.NombreOficina, Ce.Provincia, Ce.Sociedad  from censo Ce inner join oficinas Of on Ce.NumeroOficina=Of.NumeroOficina where (Ce.Sociedad not like 'BANCO%') and  Ce.NumeroOficina not in(SELECT NumeroOficina FROM censo WHERE Puesto like 'Director%' order by NumeroOficina) and Of.TipoCentro='NEGOCIO' and Ce.Provincia='".$id."' group by NumeroOficina order by Provincia");
	
	echo "
	
		
					<div class='card'>
						<div class='card-header' role='tab' id='heading4'>
							<h5 class='mb-0'>
								<a href='#collapse4' data-toggle='collapse' data-parent='#acordion' aria-expanded='true' aria-controls='collapse4'>
									4. Oficinas sin Director
								</a>
							</h5>
						</div>

						<div id='collapse4' class='collapse' role='tabpanel' aria-labelledby='heading4'>
							<div class='card-body'>
								<div class='row ' id='#'>";

								echo"<table class='table'>
										<thead class='thead-light'>
											<tr>
												
												<th>NumeroOficina</th>
												<th>NombreOficina</th>
												<th>Provincia</th>
												<th>Sociedad</th>
												
												
											</tr>
										</thead>";

										while($row = $result4->fetch_array())
											{
												
											echo "<tbody>";
												echo "<tr>";
												
													echo "<td>" . $row['NumeroOficina'] . "</td>";

													echo "<td>" . $row['NombreOficina'] . "</td>";
												
													echo "<td>" . $row['Provincia'] . "</td>";

													echo "<td>" . $row['Sociedad'] . "</td>";
													
												echo "</tr>";
											echo "</tbody>";
											}

								echo "</table>";
							echo"	</div>
								
							</div>
						</div>
					</div>";
	 /************************FIN Oficinas sin Director**********************/	

	/************************Interventores más de un año y menos de nivel 6**********************/		
		
			$result5 = $conexion->query("Select * from censo where (CategoriaProfesional='Grupo II - Nivel 10' or CategoriaProfesional='Grupo II - Nivel 9' or CategoriaProfesional='Grupo II - Nivel 8' or CategoriaProfesional='Grupo II - Nivel 7') and Puesto like 'Interventor%' and FechaPuesto < DATE_SUB(CURDATE(), INTERVAL 1 YEAR) and Provincia='".$id."' order by Provincia");
	
	echo "
	
					<br>
					<div class='card'>
						<div class='card-header' role='tab' id='heading5'>
							<h5 class='mb-0'>
								<a href='#collapse5' data-toggle='collapse' data-parent='#acordion' aria-expanded='true' aria-controls='collapse5'>
									5. Interventores más de un año y menos de nivel 6
								</a>
							</h5>
						</div>

						<div id='collapse5' class='collapse' role='tabpanel' aria-labelledby='heading5'>
							<div class='card-body'>
								<div class='row ' id='#'>";

								echo"<table class='table'>
										<thead class='thead-light'>
											<tr>
												<th>Nombre</th>
												<th>Apellidos</th>
												<th>NºOf.</th>
												<th>Nomb.Oficina</th>
												<th>Cat.Profesional</th>
												<th>Puesto</th>
												<th>FechaPuesto</th>
												<th>Provincia</th>
												
												
											</tr>
										</thead>";

										while($row = $result5->fetch_array())
											{
												
											echo "<tbody>";
												echo "<tr >";
													echo "<td >" . $row['Nombre'] . "</td>";
													echo "<td >" . $row['Apellidos'] . "</td>";
													echo "<td >" . $row['NumeroOficina'] . "</td>";
													echo "<td >" . $row['NombreOficina'] . "</td>";
													echo "<td >" . $row['CategoriaProfesional'] . "</td>";
													echo "<td >" . $row['Puesto'] . "</td>";
													echo "<td >" . $row['FechaPuesto'] . "</td>";
													echo "<td >" . $row['Provincia'] . "</td>";
													
												echo "</tr>";
											echo "</tbody>";
											}

								echo "</table>";
							echo"	</div>
								
							</div>
						</div>
					</div>";
	 /************************FIN Interventores más de un año y menos de nivel 6**********************/	



/************************Interventores más de diez años y menos de nivel 5**********************/		
		
			$result6 = $conexion->query("Select * from censo where (CategoriaProfesional='Grupo II - Nivel 10' or CategoriaProfesional='Grupo II - Nivel 9' or CategoriaProfesional='Grupo II - Nivel 8' or CategoriaProfesional='Grupo II - Nivel 7' or CategoriaProfesional='Grupo II - Nivel 6') and Puesto like 'Interventor%' and FechaPuesto < DATE_SUB(CURDATE(), INTERVAL 10 YEAR) and Provincia='".$id."' order by Provincia");
	
	echo "
	
		
					<div class='card'>
						<div class='card-header' role='tab' id='heading6'>
							<h5 class='mb-0'>
								<a href='#collapse6' data-toggle='collapse' data-parent='#acordion' aria-expanded='true' aria-controls='collapse6'>
									6. Interventores más de diez años y menos de nivel 5
								</a>
							</h5>
						</div>

						<div id='collapse6' class='collapse' role='tabpanel' aria-labelledby='heading6'>
							<div class='card-body'>
								<div class='row ' id='#'>";

								echo"<table class='table'>
										<thead class='thead-light'>
											<tr>
												<th>Nombre</th>
												<th>Apellidos</th>
												<th>NºOf.</th>
												<th>Nomb.Oficina</th>
												<th>Cat.Profesional</th>
												<th>Puesto</th>
												<th>FechaPuesto</th>
												<th>Provincia</th>
												
												
											</tr>
										</thead>";

										while($row = $result6->fetch_array())
											{
												
											echo "<tbody>";
												echo "<tr >";
													echo "<td >" . $row['Nombre'] . "</td>";
													echo "<td >" . $row['Apellidos'] . "</td>";
													echo "<td >" . $row['NumeroOficina'] . "</td>";
													echo "<td >" . $row['NombreOficina'] . "</td>";
													echo "<td >" . $row['CategoriaProfesional'] . "</td>";
													echo "<td >" . $row['Puesto'] . "</td>";
													echo "<td >" . $row['FechaPuesto'] . "</td>";
													echo "<td >" . $row['Provincia'] . "</td>";
													
												echo "</tr>";
											echo "</tbody>";
											}

								echo "</table>";
							echo"	</div>
								
							</div>
						</div>
					</div>";
	 /************************FIN Interventores más de un año y menos de nivel 6**********************/	

/************************Oficinas más de cuatro personas de plantilla sin interventor**********************/		
		
			//$result7 = $conexion->query("Select NumeroOficina, NombreOficina, Provincia, Sociedad from censo where (Sociedad not like 'BANCO%') and (NumeroOficina in (select NumeroOficina from(select NumeroOficina, count(*) as personal from censo group by NumeroOficina having personal>4) as MasDeCuatro )) and (NumeroOficina not in (select NumeroOficina from censo where Puesto like 'Interventor%' group by NumeroOficina)) group by NumeroOficina order by Provincia");

			$result7 = $conexion->query("select Ce.NumeroOficina, Ce.NombreOficina, Ce.Provincia, Ce.Sociedad
from(Select NumeroOficina, NombreOficina, Provincia, Sociedad from censo where (Sociedad not like 'BANCO%') and (NumeroOficina in (select NumeroOficina from(select NumeroOficina, count(*) as personal from censo group by NumeroOficina having personal>4) as MasDeCuatro )) and (NumeroOficina not in (select NumeroOficina from censo where Puesto like 'Interventor%' group by NumeroOficina)) group by NumeroOficina order by Provincia) Ce inner join oficinas Of on Ce.NumeroOficina = Of.NumeroOficina where Of.TipoCentro='NEGOCIO' and Ce.Provincia='".$id."' ORDER BY Ce.Provincia ASC");
	
	echo " 
	
		
					<div class='card'>
						<div class='card-header' role='tab' id='heading7'>
							<h5 class='mb-0'>
								<a href='#collapse7' data-toggle='collapse' data-parent='#acordion' aria-expanded='true' aria-controls='collapse7'>
									7. Oficinas más de cuatro personas de plantilla sin interventor
								</a>
							</h5>
						</div>

						<div id='collapse7' class='collapse' role='tabpanel' aria-labelledby='heading7'>
							<div class='card-body'>
								<div class='row ' id='#'>";

								echo"<table class='table'>
										<thead class='thead-light'>
											<tr>
												
												<th>NumeroOficina</th>
												<th>NombreOficina</th>
												<th>Provincia</th>
												<th>Sociedad</th>
												
												
											</tr>
										</thead>";

										while($row = $result7->fetch_array())
											{
												
											echo "<tbody>";
												echo "<tr >";
												
													echo "<td >" . $row['NumeroOficina'] . "</td>";

													echo "<td >" . $row['NombreOficina'] . "</td>";
												
													echo "<td >" . $row['Provincia'] . "</td>";

													echo "<td >" . $row['Sociedad'] . "</td>";
													
												echo "</tr>";
											echo "</tbody>";
											}

								echo "</table>";
							echo"	</div>
								
							</div>
						</div>
					</div>";
	 /************************FIN Oficinas más de cuatro personas de plantilla sin interventor**********************/	

/************************Segundos más de cuatro años y menos de nivel 6**********************/		
		
			$result8 = $conexion->query("Select * from censo where (CategoriaProfesional='Grupo II - Nivel 10' or CategoriaProfesional='Grupo II - Nivel 9' or CategoriaProfesional='Grupo II - Nivel 8' or CategoriaProfesional='Grupo II - Nivel 7') and Puesto like 'Segund%' and FechaPuesto < DATE_SUB(CURDATE(), INTERVAL 4 YEAR) and Provincia='".$id."' order by Provincia");

			
	
	echo "
	
					<br>
					<div class='card'>
						<div class='card-header' role='tab' id='heading8'>
							<h5 class='mb-0'>
								<a href='#collapse8' data-toggle='collapse' data-parent='#acordion' aria-expanded='true' aria-controls='collapse8'>
									8. Segundos más de cuatro años y menos de nivel 6
								</a>
							</h5>
						</div>

						<div id='collapse8' class='collapse' role='tabpanel' aria-labelledby='heading8'>
							<div class='card-body'>
								<div class='row ' id='#'>";

								echo"<table class='table'>
										<thead class='thead-light'>
											<tr>
												<th>Nombre</th>
												<th>Apellidos</th>
												<th>NºOf.</th>
												<th>Nomb.Oficina</th>
												<th>Cat.Profesional</th>
												<th>Puesto</th>
												<th>FechaPuesto</th>
												<th>Provincia</th>
												
												
											</tr>
										</thead>";

										while($row = $result8->fetch_array())
											{
												
											echo "<tbody>";
												echo "<tr >";
													echo "<td >" . $row['Nombre'] . "</td>";
													echo "<td >" . $row['Apellidos'] . "</td>";
													echo "<td >" . $row['NumeroOficina'] . "</td>";
													echo "<td >" . $row['NombreOficina'] . "</td>";
													echo "<td >" . $row['CategoriaProfesional'] . "</td>";
													echo "<td >" . $row['Puesto'] . "</td>";
													echo "<td >" . $row['FechaPuesto'] . "</td>";
													echo "<td >" . $row['Provincia'] . "</td>";
													
												echo "</tr>";
											echo "</tbody>";
											}

								echo "</table>";
							echo"	</div>
								
							</div>
						</div>
					</div>";
	 /************************FIN Segundos más de cuatro años y menos y menos nivel 6**********************/	

	 /************************Segundos más de diez años y menos de nivel 5**********************/		
		
			$result9 = $conexion->query("Select * from censo where (CategoriaProfesional='Grupo II - Nivel 10' or CategoriaProfesional='Grupo II - Nivel 9' or CategoriaProfesional='Grupo II - Nivel 8' or CategoriaProfesional='Grupo II - Nivel 7' or CategoriaProfesional='Grupo II - Nivel 6') and Puesto like 'Segund%' and FechaPuesto < DATE_SUB(CURDATE(), INTERVAL 10 YEAR) and Provincia='".$id."' order by Provincia");

			
	
	echo "
	
					
					<div class='card'>
						<div class='card-header' role='tab' id='heading9'>
							<h5 class='mb-0'>
								<a href='#collapse9' data-toggle='collapse' data-parent='#acordion' aria-expanded='true' aria-controls='collapse9'>
									9. Segundos más de diez años y menos de nivel 5
								</a>
							</h5>
						</div>

						<div id='collapse9' class='collapse' role='tabpanel' aria-labelledby='heading9'>
							<div class='card-body'>
								<div class='row ' id='#'>";

								echo"<table class='table'>
										<thead class='thead-light'>
											<tr>
												<th>Nombre</th>
												<th>Apellidos</th>
												<th>NºOf.</th>
												<th>Nomb.Oficina</th>
												<th>Cat.Profesional</th>
												<th>Puesto</th>
												<th>FechaPuesto</th>
												<th>Provincia</th>
												
												
											</tr>
										</thead>";

										while($row = $result9->fetch_array())
											{
												
											echo "<tbody>";
												echo "<tr >";
													echo "<td >" . $row['Nombre'] . "</td>";
													echo "<td >" . $row['Apellidos'] . "</td>";
													echo "<td >" . $row['NumeroOficina'] . "</td>";
													echo "<td >" . $row['NombreOficina'] . "</td>";
													echo "<td >" . $row['CategoriaProfesional'] . "</td>";
													echo "<td >" . $row['Puesto'] . "</td>";
													echo "<td >" . $row['FechaPuesto'] . "</td>";
													echo "<td >" . $row['Provincia'] . "</td>";
													
												echo "</tr>";
											echo "</tbody>";
											}

								echo "</table>";
							echo"	</div>
								
							</div>
						</div>
					</div>";
	 /************************FIN Segundos más de diez años y menos de nivel 5**********************/	

	 /************************Oficinas menos de cuatro personas sin segundo responsable**********************/		
		
			//$result10 = $conexion->query("Select NumeroOficina, NombreOficina, Provincia, Sociedad from censo where (Sociedad not like 'BANCO%') and (NumeroOficina in (select NumeroOficina from(select NumeroOficina, count(*) as personal from censo group by NumeroOficina having personal<4) as MenosDeCuatro )) and (NumeroOficina not in (select NumeroOficina from censo where (Puesto like 'Segund%'  or Puesto like 'Intervent%' ) group by NumeroOficina)) group by NumeroOficina order by Provincia");

			$result10 = $conexion->query("select Ce.NumeroOficina, Ce.NombreOficina, Ce.Provincia, Ce.Sociedad
from(Select NumeroOficina, NombreOficina, Provincia, Sociedad from censo where (Sociedad not like 'BANCO%') and (NumeroOficina in (select NumeroOficina from(select NumeroOficina, count(*) as personal from censo group by NumeroOficina having personal<4) as MenosDeCuatro )) and (NumeroOficina not in (select NumeroOficina from censo where (Puesto like 'Segund%'  or Puesto like 'Intervent%' ) group by NumeroOficina)) group by NumeroOficina order by Provincia) Ce inner join oficinas Of on Ce.NumeroOficina = Of.NumeroOficina where Of.TipoCentro='NEGOCIO' and Ce.Provincia='".$id."' ORDER BY Ce.Provincia ASC");
	
	echo "
	
		
					<div class='card'>
						<div class='card-header' role='tab' id='heading10'>
							<h5 class='mb-0'>
								<a href='#collapse10' data-toggle='collapse' data-parent='#acordion' aria-expanded='true' aria-controls='collapse10'>
									10. Oficinas menos de cuatro personas sin segundo responsable
								</a>
							</h5>
						</div>

						<div id='collapse10' class='collapse' role='tabpanel' aria-labelledby='heading10'>
							<div class='card-body'>
								<div class='row ' id='#'>";

								echo"<table class='table'>
										<thead class='thead-light'>
											<tr>
												
												<th>NumeroOficina</th>
												<th>NombreOficina</th>
												<th>Provincia</th>
												<th>Sociedad</th>
												
												
											</tr>
										</thead>";

										while($row = $result10->fetch_array())
											{
												
											echo "<tbody>";
												echo "<tr >";
												
													echo "<td >" . $row['NumeroOficina'] . "</td>";

													echo "<td >" . $row['NombreOficina'] . "</td>";
												
													echo "<td >" . $row['Provincia'] . "</td>";

													echo "<td >" . $row['Sociedad'] . "</td>";
													
												echo "</tr>";
											echo "</tbody>";
											}

								echo "</table>";
							echo"	</div>
								
							</div>
						</div>
					</div>";
	 /************************FIN Oficinas menos de cuatro personas sin segundo responsable**********************/	

	  /************************Gestores de empresas y particulares más de un año y menos de nivel 8*********************/		
		
			$result11 = $conexion->query("Select * from censo where (CategoriaProfesional='Grupo II - Nivel 10' or CategoriaProfesional='Grupo II - Nivel 9') and (Puesto like 'Gestor Comercial Banca%' or Puesto like 'Gestor Comercial de Banca%' )and FechaPuesto < DATE_SUB(CURDATE(), INTERVAL 1 YEAR) and Provincia='".$id."' order by Provincia");

			
	
	echo "
	
					<br>
					<div class='card'>
						<div class='card-header' role='tab' id='heading11'>
							<h5 class='mb-0'>
								<a href='#collapse11' data-toggle='collapse' data-parent='#acordion' aria-expanded='true' aria-controls='collapse11'>
									11. Gestores de empresas y particulares más de un año y menos de nivel 8
								</a>
							</h5>
						</div>

						<div id='collapse11' class='collapse' role='tabpanel' aria-labelledby='heading11'>
							<div class='card-body'>
								<div class='row ' id='#'>";

								echo"<table class='table'>
										<thead class='thead-light'>
											<tr>
												<th>Nombre</th>
												<th>Apellidos</th>
												<th>NºOf.</th>
												<th>Nomb.Oficina</th>
												<th>Cat.Profesional</th>
												<th>Puesto</th>
												<th>FechaPuesto</th>
												<th>Provincia</th>
												
												
											</tr>
										</thead>";

										while($row = $result11->fetch_array())
											{
												
											echo "<tbody>";
												echo "<tr >";
													echo "<td >" . $row['Nombre'] . "</td>";
													echo "<td >" . $row['Apellidos'] . "</td>";
													echo "<td >" . $row['NumeroOficina'] . "</td>";
													echo "<td >" . $row['NombreOficina'] . "</td>";
													echo "<td >" . $row['CategoriaProfesional'] . "</td>";
													echo "<td >" . $row['Puesto'] . "</td>";
													echo "<td >" . $row['FechaPuesto'] . "</td>";
													echo "<td >" . $row['Provincia'] . "</td>";
													
												echo "</tr>";
											echo "</tbody>";
											}

								echo "</table>";
							echo"	</div>
								
							</div>
						</div>
					</div>";
	 /************************FIN Gestores de empresas y particulares más de un año y menos de nivel 8**********************/	

 /************************Gestores de empresas y particulares más de cinco años y menos de nivel 7*********************/		
		
			$result12 = $conexion->query("Select * from censo where (CategoriaProfesional='Grupo II - Nivel 10' or CategoriaProfesional='Grupo II - Nivel 9' or CategoriaProfesional='Grupo II - Nivel 8') and (Puesto like 'Gestor Comercial Banca%' or Puesto like 'Gestor Comercial de Banca%' )and FechaPuesto < DATE_SUB(CURDATE(), INTERVAL 5 YEAR) and Provincia='".$id."' order by Provincia");

			
	
	echo "
	
					
					<div class='card'>
						<div class='card-header' role='tab' id='heading12'>
							<h5 class='mb-0'>
								<a href='#collapse12' data-toggle='collapse' data-parent='#acordion' aria-expanded='true' aria-controls='collapse12'>
									12. Gestores de empresas y particulares más de cinco años y menos de nivel 7
								</a>
							</h5>
						</div>

						<div id='collapse12' class='collapse' role='tabpanel' aria-labelledby='heading12'>
							<div class='card-body'>
								<div class='row ' id='#'>";

								echo"<table class='table'>
										<thead class='thead-light'>
											<tr>
												<th>Nombre</th>
												<th>Apellidos</th>
												<th>NºOf.</th>
												<th>Nomb.Oficina</th>
												<th>Cat.Profesional</th>
												<th>Puesto</th>
												<th>FechaPuesto</th>
												<th>Provincia</th>
												
												
											</tr>
										</thead>";

										while($row = $result12->fetch_array())
											{
												
											echo "<tbody>";
												echo "<tr >";
													echo "<td >" . $row['Nombre'] . "</td>";
													echo "<td >" . $row['Apellidos'] . "</td>";
													echo "<td >" . $row['NumeroOficina'] . "</td>";
													echo "<td >" . $row['NombreOficina'] . "</td>";
													echo "<td >" . $row['CategoriaProfesional'] . "</td>";
													echo "<td >" . $row['Puesto'] . "</td>";
													echo "<td >" . $row['FechaPuesto'] . "</td>";
													echo "<td >" . $row['Provincia'] . "</td>";
													
												echo "</tr>";
											echo "</tbody>";
											}

								echo "</table>";
							echo"	</div>
								
							</div>
						</div>
					</div>";
	 /************************FIN Gestores de empresas y particulares más de cinco años y menos de nivel 7**********************/	
	
/************************Gestores de empresas y particulares más de diez años y menos de nivel 6*********************/		
		
			$result13 = $conexion->query("Select * from censo where (CategoriaProfesional='Grupo II - Nivel 10' or CategoriaProfesional='Grupo II - Nivel 9' or CategoriaProfesional='Grupo II - Nivel 8' or CategoriaProfesional='Grupo II - Nivel 7') and (Puesto like 'Gestor Comercial Banca%' or Puesto like 'Gestor Comercial de Banca%' )and FechaPuesto < DATE_SUB(CURDATE(), INTERVAL 10 YEAR) and Provincia='".$id."' order by Provincia");

			
	
	echo "
	
					
					<div class='card'>
						<div class='card-header' role='tab' id='heading13'>
							<h5 class='mb-0'>
								<a href='#collapse13' data-toggle='collapse' data-parent='#acordion' aria-expanded='true' aria-controls='collapse13'>
									13. Gestores de empresas y particulares más de diez años y menos de nivel 6
								</a>
							</h5>
						</div>

						<div id='collapse13' class='collapse' role='tabpanel' aria-labelledby='heading13'>
							<div class='card-body'>
								<div class='row ' id='#'>";

								echo"<table class='table'>
										<thead class='thead-light'>
											<tr>
												<th>Nombre</th>
												<th>Apellidos</th>
												<th>NºOf.</th>
												<th>Nomb.Oficina</th>
												<th>Cat.Profesional</th>
												<th>Puesto</th>
												<th>FechaPuesto</th>
												<th>Provincia</th>
												
												
											</tr>
										</thead>";

										while($row = $result13->fetch_array())
											{
												
											echo "<tbody>";
												echo "<tr >";
													echo "<td >" . $row['Nombre'] . "</td>";
													echo "<td >" . $row['Apellidos'] . "</td>";
													echo "<td >" . $row['NumeroOficina'] . "</td>";
													echo "<td >" . $row['NombreOficina'] . "</td>";
													echo "<td >" . $row['CategoriaProfesional'] . "</td>";
													echo "<td >" . $row['Puesto'] . "</td>";
													echo "<td >" . $row['FechaPuesto'] . "</td>";
													echo "<td >" . $row['Provincia'] . "</td>";
													
												echo "</tr>";
											echo "</tbody>";
											}

								echo "</table>";
							echo"	</div>
								
							</div>
						</div>
					</div>";
	 /************************FIN Gestores de empresas y particulares más de diez años y menos de nivel 6**********************/	

	 /************************Gestores comerciales más de un año y menos de nivel 8*********************/		
		
			$result14 = $conexion->query("Select * from censo where (CategoriaProfesional='Grupo II - Nivel 10' or CategoriaProfesional='Grupo II - Nivel 9') and (Puesto='Gestor' or Puesto = 'Gestor Comercial Remoto' )and FechaPuesto < DATE_SUB(CURDATE(), INTERVAL 1 YEAR) and Provincia='".$id."' order by Provincia");

			
	
	echo "
	
					<br>
					<div class='card'>
						<div class='card-header' role='tab' id='heading14'>
							<h5 class='mb-0'>
								<a href='#collapse14' data-toggle='collapse' data-parent='#acordion' aria-expanded='true' aria-controls='collapse14'>
									14. Gestores comerciales más de un año y menos de nivel 8
								</a>
							</h5>
						</div>

						<div id='collapse14' class='collapse' role='tabpanel' aria-labelledby='heading14'>
							<div class='card-body'>
								<div class='row ' id='#'>";

								echo"<table class='table'>
										<thead class='thead-light'>
											<tr>
												<th>Nombre</th>
												<th>Apellidos</th>
												<th>NºOf.</th>
												<th>Nomb.Oficina</th>
												<th>Cat.Profesional</th>
												<th>Puesto</th>
												<th>FechaPuesto</th>
												<th>Provincia</th>
												
												
											</tr>
										</thead>";

										while($row = $result14->fetch_array())
											{
												
											echo "<tbody>";
												echo "<tr >";
													echo "<td >" . $row['Nombre'] . "</td>";
													echo "<td >" . $row['Apellidos'] . "</td>";
													echo "<td >" . $row['NumeroOficina'] . "</td>";
													echo "<td >" . $row['NombreOficina'] . "</td>";
													echo "<td >" . $row['CategoriaProfesional'] . "</td>";
													echo "<td >" . $row['Puesto'] . "</td>";
													echo "<td >" . $row['FechaPuesto'] . "</td>";
													echo "<td >" . $row['Provincia'] . "</td>";
													
												echo "</tr>";
											echo "</tbody>";
											}

								echo "</table>";
							echo"	</div>
								
							</div>
						</div>
					</div>";
	 /************************FIN Gestores comerciales más de un año y menos de nivel 8**********************/

	  /************************Gestores comerciales más de cinco años y menos de nivel 7*********************/		
		
			$result15 = $conexion->query("Select * from censo where (CategoriaProfesional='Grupo II - Nivel 10' or CategoriaProfesional='Grupo II - Nivel 9' or CategoriaProfesional='Grupo II - Nivel 8') and (Puesto='Gestor' or Puesto = 'Gestor Comercial Remoto')and FechaPuesto < DATE_SUB(CURDATE(), INTERVAL 5 YEAR) and Provincia='".$id."' order by Provincia");

			
	
	echo "
	
					
					<div class='card'>
						<div class='card-header' role='tab' id='heading15'>
							<h5 class='mb-0'>
								<a href='#collapse15' data-toggle='collapse' data-parent='#acordion' aria-expanded='true' aria-controls='collapse15'>
									15. Gestores comerciales más de cinco años y menos de nivel 7
								</a>
							</h5>
						</div>

						<div id='collapse15' class='collapse' role='tabpanel' aria-labelledby='heading15'>
							<div class='card-body'>
								<div class='row ' id='#'>";

								echo"<table class='table'>
										<thead class='thead-light'>
											<tr>
												<th>Nombre</th>
												<th>Apellidos</th>
												<th>NºOf.</th>
												<th>Nomb.Oficina</th>
												<th>Cat.Profesional</th>
												<th>Puesto</th>
												<th>FechaPuesto</th>
												<th>Provincia</th>
												
												
											</tr>
										</thead>";

										while($row = $result15->fetch_array())
											{
												
											echo "<tbody>";
												echo "<tr >";
													echo "<td >" . $row['Nombre'] . "</td>";
													echo "<td >" . $row['Apellidos'] . "</td>";
													echo "<td >" . $row['NumeroOficina'] . "</td>";
													echo "<td >" . $row['NombreOficina'] . "</td>";
													echo "<td >" . $row['CategoriaProfesional'] . "</td>";
													echo "<td >" . $row['Puesto'] . "</td>";
													echo "<td >" . $row['FechaPuesto'] . "</td>";
													echo "<td >" . $row['Provincia'] . "</td>";
													
												echo "</tr>";
											echo "</tbody>";
											}

								echo "</table>";
							echo"	</div>
								
							</div>
						</div>
					</div>";
	 /************************FIN Gestores comerciales más de cinco años y menos de nivel 7**********************/

	  /************************Gestores comerciales más de diez años y menos de nivel 6*********************/		
		
			$result16 = $conexion->query("Select * from censo where (CategoriaProfesional='Grupo II - Nivel 10' or CategoriaProfesional='Grupo II - Nivel 9' or CategoriaProfesional='Grupo II - Nivel 8' or CategoriaProfesional='Grupo II - Nivel 7') and (Puesto='Gestor' or Puesto = 'Gestor Comercial Remoto' )and FechaPuesto < DATE_SUB(CURDATE(), INTERVAL 10 YEAR) and Provincia='".$id."' order by Provincia");

			
	
	echo "
	
					
					<div class='card'>
						<div class='card-header' role='tab' id='heading16'>
							<h5 class='mb-0'>
								<a href='#collapse16' data-toggle='collapse' data-parent='#acordion' aria-expanded='true' aria-controls='collapse16'>
									16. Gestores comerciales más de diez años y menos de nivel 6
								</a>
							</h5>
						</div>

						<div id='collapse16' class='collapse' role='tabpanel' aria-labelledby='heading16'>
							<div class='card-body'>
								<div class='row ' id='#'>";

								echo"<table class='table'>
										<thead class='thead-light'>
											<tr>
												<th>Nombre</th>
												<th>Apellidos</th>
												<th>NºOf.</th>
												<th>Nomb.Oficina</th>
												<th>Cat.Profesional</th>
												<th>Puesto</th>
												<th>FechaPuesto</th>
												<th>Provincia</th>
												
												
											</tr>
										</thead>";

										while($row = $result16->fetch_array())
											{
												
											echo "<tbody>";
												echo "<tr >";
													echo "<td >" . $row['Nombre'] . "</td>";
													echo "<td >" . $row['Apellidos'] . "</td>";
													echo "<td >" . $row['NumeroOficina'] . "</td>";
													echo "<td >" . $row['NombreOficina'] . "</td>";
													echo "<td >" . $row['CategoriaProfesional'] . "</td>";
													echo "<td >" . $row['Puesto'] . "</td>";
													echo "<td >" . $row['FechaPuesto'] . "</td>";
													echo "<td >" . $row['Provincia'] . "</td>";
													
												echo "</tr>";
											echo "</tbody>";
											}

								echo "</table>";
							echo"	</div>
								
							</div>
						</div>
					</div>";
	 /************************FIN Gestores comerciales más de diez años y menos de nivel 6**********************/

  /************************Nivel 10 con mas de tres años de antigüedad*********************/		
		
			$result17 = $conexion->query("select * from censo where (CategoriaProfesional='Grupo II - Nivel 10')and (PrimeraAlta < DATE_SUB(CURDATE(), INTERVAL 3 YEAR)) and Provincia='".$id."' order by Provincia");

			
	
	echo "
	
					<br>
					<div class='card'>
						<div class='card-header' role='tab' id='heading17'>
							<h5 class='mb-0'>
								<a href='#collapse17' data-toggle='collapse' data-parent='#acordion' aria-expanded='true' aria-controls='collapse17'>
									17. Nivel 10 con mas de tres años de antigüedad
								</a>
							</h5>
						</div>

						<div id='collapse17' class='collapse' role='tabpanel' aria-labelledby='heading17'>
							<div class='card-body'>
								<div class='row ' id='#'>";

								echo"<table class='table'>
										<thead class='thead-light'>
											<tr>
												<th>Nombre</th>
												<th>Apellidos</th>
												<th>NºOf.</th>
												<th>Nomb.Oficina</th>
												<th>Cat.Profesional</th>
												<th>Puesto</th>
												<th>PrimeraAlta</th>
												<th>Provincia</th>
												
												
											</tr>
										</thead>";

										while($row = $result17->fetch_array())
											{
												
											echo "<tbody>";
												echo "<tr >";
													echo "<td >" . $row['Nombre'] . "</td>";
													echo "<td >" . $row['Apellidos'] . "</td>";
													echo "<td >" . $row['NumeroOficina'] . "</td>";
													echo "<td >" . $row['NombreOficina'] . "</td>";
													echo "<td >" . $row['CategoriaProfesional'] . "</td>";
													echo "<td >" . $row['Puesto'] . "</td>";
													echo "<td >" . $row['PrimeraAlta'] . "</td>";
													echo "<td >" . $row['Provincia'] . "</td>";
													
												echo "</tr>";
											echo "</tbody>";
											}

								echo "</table>";
							echo"	</div>
								
							</div>
						</div>
					</div>";
	 /************************FIN Nivel 10 con mas de tres años de antigüedad**********************/

 /************************Nivel 9 con más de nueve años de antigüedad *********************/		
		
			$result18 = $conexion->query("	select * from censo where (CategoriaProfesional='Grupo II - Nivel 9')and (PrimeraAlta < DATE_SUB(CURDATE(), INTERVAL 9 YEAR)) and Provincia='".$id."' order by Provincia");

			
	
	echo "
	
					
					<div class='card'>
						<div class='card-header' role='tab' id='heading18'>
							<h5 class='mb-0'>
								<a href='#collapse18' data-toggle='collapse' data-parent='#acordion' aria-expanded='true' aria-controls='collapse18'>
									18. Nivel 9 con más de nueve años de antigüedad 
								</a>
							</h5>
						</div>

						<div id='collapse18' class='collapse' role='tabpanel' aria-labelledby='heading18'>
							<div class='card-body'>
								<div class='row ' id='#'>";

								echo"<table class='table'>
										<thead class='thead-light'>
											<tr>
												<th>Nombre</th>
												<th>Apellidos</th>
												<th>NºOf.</th>
												<th>Nomb.Oficina</th>
												<th>Cat.Profesional</th>
												<th>Puesto</th>
												<th>PrimeraAlta</th>
												<th>Provincia</th>
												
												
											</tr>
										</thead>";

										while($row = $result18->fetch_array())
											{
												
											echo "<tbody>";
												echo "<tr >";
													echo "<td >" . $row['Nombre'] . "</td>";
													echo "<td >" . $row['Apellidos'] . "</td>";
													echo "<td >" . $row['NumeroOficina'] . "</td>";
													echo "<td >" . $row['NombreOficina'] . "</td>";
													echo "<td >" . $row['CategoriaProfesional'] . "</td>";
													echo "<td >" . $row['Puesto'] . "</td>";
													echo "<td >" . $row['PrimeraAlta'] . "</td>";
													echo "<td >" . $row['Provincia'] . "</td>";
													
												echo "</tr>";
											echo "</tbody>";
											}

								echo "</table>";
							echo"	</div>
								
							</div>
						</div>
					</div>";
	 /************************FIN Nivel 9 con más de nueve años de antigüedad **********************/

	 /************************Nivel 8 con más de quince años de antigüedad *********************/		
		
			$result19 = $conexion->query("	select * from censo where (CategoriaProfesional='Grupo II - Nivel 8')and (PrimeraAlta < DATE_SUB(CURDATE(), INTERVAL 15 YEAR)) and Provincia='".$id."' order by Provincia");

			
	
	echo "
	
					
					<div class='card'>
						<div class='card-header' role='tab' id='heading19'>
							<h5 class='mb-0'>
								<a href='#collapse19' data-toggle='collapse' data-parent='#acordion' aria-expanded='true' aria-controls='collapse19'>
									19. Nivel 8 con más de quince años de antigüedad
								</a>
							</h5>
						</div>

						<div id='collapse19' class='collapse' role='tabpanel' aria-labelledby='heading19'>
							<div class='card-body'>
								<div class='row ' id='#'>";

								echo"<table class='table'>
										<thead class='thead-light'>
											<tr>
												<th>Nombre</th>
												<th>Apellidos</th>
												<th>NºOf.</th>
												<th>Nomb.Oficina</th>
												<th>Cat.Profesional</th>
												<th>Puesto</th>
												<th>PrimeraAlta</th>
												<th>Provincia</th>
												
												
											</tr>
										</thead>";

										while($row = $result19->fetch_array())
											{
												
											echo "<tbody>";
												echo "<tr >";
													echo "<td >" . $row['Nombre'] . "</td>";
													echo "<td >" . $row['Apellidos'] . "</td>";
													echo "<td >" . $row['NumeroOficina'] . "</td>";
													echo "<td >" . $row['NombreOficina'] . "</td>";
													echo "<td >" . $row['CategoriaProfesional'] . "</td>";
													echo "<td >" . $row['Puesto'] . "</td>";
													echo "<td >" . $row['PrimeraAlta'] . "</td>";
													echo "<td >" . $row['Provincia'] . "</td>";
													
												echo "</tr>";
											echo "</tbody>";
											}

								echo "</table>";
							echo"	</div>
								
							</div>
						</div>
					</div>";
	 /************************FIN Nivel 8 con más de quince años de antigüedad **********************/

	 /************************Nivel 7 con más de veintiún años de antigüedad *********************/		
		
			$result20 = $conexion->query("	select * from censo where (CategoriaProfesional='Grupo II - Nivel 7')and (PrimeraAlta < DATE_SUB(CURDATE(), INTERVAL 21 YEAR)) and Provincia='".$id."' order by Provincia");

			
	
	echo "
	
					
					<div class='card'>
						<div class='card-header' role='tab' id='heading20'>
							<h5 class='mb-0'>
								<a href='#collapse20' data-toggle='collapse' data-parent='#acordion' aria-expanded='true' aria-controls='collapse20'>
									20. Nivel 7 con más de veintiún años de antigüedad
								</a>
							</h5>
						</div>

						<div id='collapse20' class='collapse' role='tabpanel' aria-labelledby='heading20'>
							<div class='card-body'>
								<div class='row ' id='#'>";

								echo"<table class='table'>
										<thead class='thead-light'>
											<tr>
												<th>Nombre</th>
												<th>Apellidos</th>
												<th>NºOf.</th>
												<th>Nomb.Oficina</th>
												<th>Cat.Profesional</th>
												<th>Puesto</th>
												<th>PrimeraAlta</th>
												<th>Provincia</th>
												
												
											</tr>
										</thead>";

										while($row = $result20->fetch_array())
											{
												
											echo "<tbody>";
												echo "<tr >";
													echo "<td >" . $row['Nombre'] . "</td>";
													echo "<td >" . $row['Apellidos'] . "</td>";
													echo "<td >" . $row['NumeroOficina'] . "</td>";
													echo "<td >" . $row['NombreOficina'] . "</td>";
													echo "<td >" . $row['CategoriaProfesional'] . "</td>";
													echo "<td >" . $row['Puesto'] . "</td>";
													echo "<td >" . $row['PrimeraAlta'] . "</td>";
													echo "<td >" . $row['Provincia'] . "</td>";
													
												echo "</tr>";
											echo "</tbody>";
											}

								echo "</table>";
							echo"	</div>
								
							</div>
						</div>
					</div>";
	 /************************FIN Nivel 7 con más de veintiún años de antigüedad **********************/

	 /************************Nivel 7 con más de veinticinco años de antigüedad *********************/		
		
			$result21 = $conexion->query("	select * from censo where (CategoriaProfesional='Grupo II - Nivel 7')and (PrimeraAlta < DATE_SUB(CURDATE(), INTERVAL 25 YEAR)) and Provincia='".$id."' order by Provincia");

			
	
	echo "
	
					
					<div class='card'>
						<div class='card-header' role='tab' id='heading21'>
							<h5 class='mb-0'>
								<a href='#collapse21' data-toggle='collapse' data-parent='#acordion' aria-expanded='true' aria-controls='collapse21'>
									21. Nivel 7 con más de veinticinco años de antigüedad 
								</a>
							</h5>
						</div>

						<div id='collapse21' class='collapse' role='tabpanel' aria-labelledby='heading21'>
							<div class='card-body'>
								<div class='row ' id='#'>";

								echo"<table class='table'>
										<thead class='thead-light'>
											<tr>
												<th>Nombre</th>
												<th>Apellidos</th>
												<th>NºOf.</th>
												<th>Nomb.Oficina</th>
												<th>Cat.Profesional</th>
												<th>Puesto</th>
												<th>PrimeraAlta</th>
												<th>Provincia</th>
												
												
											</tr>
										</thead>";

										while($row = $result21->fetch_array())
											{
												
											echo "<tbody>";
												echo "<tr >";
													echo "<td >" . $row['Nombre'] . "</td>";
													echo "<td >" . $row['Apellidos'] . "</td>";
													echo "<td >" . $row['NumeroOficina'] . "</td>";
													echo "<td >" . $row['NombreOficina'] . "</td>";
													echo "<td >" . $row['CategoriaProfesional'] . "</td>";
													echo "<td >" . $row['Puesto'] . "</td>";
													echo "<td >" . $row['PrimeraAlta'] . "</td>";
													echo "<td >" . $row['Provincia'] . "</td>";
													
												echo "</tr>";
											echo "</tbody>";
											}

								echo "</table>";
							echo"	</div>
								
							</div>
						</div>
					</div>";
	 /************************FIN Nivel 7 con más de veinticinco años de antigüedad  **********************/

	 /************************Oficinas con dos o menos empleados **********************/		
		
			$result22 = $conexion->query("select NumeroOficina, NombreOficina, Provincia, Sociedad from (Select NumeroOficina, NombreOficina, Provincia, Sociedad, count(*) as personal from censo group by NumeroOficina having personal<=2) as MenosDeDos where Sociedad not like 'Banco%' and Provincia='".$id."' order by Provincia");
	
	echo "
	
					<br>
					<div class='card'>
						<div class='card-header' role='tab' id='heading22'>
							<h5 class='mb-0'>
								<a href='#collapse22' data-toggle='collapse' data-parent='#acordion' aria-expanded='true' aria-controls='collapse22'>
									22. Oficinas con dos o menos empleados 
								</a>
							</h5>
						</div>

						<div id='collapse22' class='collapse' role='tabpanel' aria-labelledby='heading22'>
							<div class='card-body'>
								<div class='row ' id='#'>";

								echo"<table class='table'>
										<thead class='thead-light'>
											<tr>
												
												<th>NumeroOficina</th>
												<th>NombreOficina</th>
												<th>Provincia</th>
												<th>Sociedad</th>
												
												
											</tr>
										</thead>";

										while($row = $result22->fetch_array())
											{
												
											echo "<tbody>";
												echo "<tr >";
												
													echo "<td >" . $row['NumeroOficina'] . "</td>";

													echo "<td >" . $row['NombreOficina'] . "</td>";
												
													echo "<td >" . $row['Provincia'] . "</td>";

													echo "<td >" . $row['Sociedad'] . "</td>";
													
												echo "</tr>";
											echo "</tbody>";
											}

								echo "</table>";
							echo"	</div>
								
							</div>
						</div>
						";
	 /************************FIN Oficinas con dos o menos empleados **********************/	

/**************************************************/
	

?>