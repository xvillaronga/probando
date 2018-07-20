<?php
/*
$conexion = new mysqli('localhost', 'root', '', 'bdccoo');
$conexion->set_charset("utf8");

//$id = $_POST['usuario'];


if(!($conexion))
{
	echo "error de conexion";
	exit();

}
else{

*/

//$id = $_POST['usuario'];

include("conexion.php");	


	//$result = $conexion->query("SELECT coordinadorTerritorial, COUNT(*) as Afiliados,COUNT(IF(sexo='M',sexo,NULL)) as Mujeres,COUNT(IF(sexo='H',sexo,NULL)) as Hombres FROM afiliacion group by coordinadorTerritorial");

	$result = $conexion->query("SELECT Af.coordinadorTerritorial as CT,Ce.Nombre as Nom, Ce.Apellidos as Cognom,Af.Afiliados,Af.Mujeres,Af.Hombres FROM ( SELECT coordinadorTerritorial, COUNT(*) as Afiliados,COUNT(IF(sexo='M',sexo,NULL)) as Mujeres,COUNT(IF(sexo='H',sexo,NULL)) as Hombres FROM afiliacion group by coordinadorTerritorial  ) Af inner join censo Ce on Af.coordinadorTerritorial=Ce.NumeroEmpleado");
	
	echo "
	<div class='container'>


	<div class='row'>
		<div class='col'>
			<table class='table'>
							<thead class='thead-light'>
								<tr>
									<th>Coordinador Territorial</th>
									<th>Nombre</th>
									<th>Apellidos</th>
									<th>Nº Afiliados</th>
									<th>Mujeres</th>
									<th>Hombres</th>
								</tr>
							</thead>";
				

				
							while($row = $result->fetch_array())
							{
								
							echo "<tbody>";
								echo "<tr >";

									echo "<td >" . $row['CT'] . "</td>";
									echo "<td >" . $row['Nom'] . "</td>";
									echo "<td >" . $row['Cognom'] . "</td>";
									echo "<td >" . $row['Afiliados'] . "</td>";
									echo "<td >" . $row['Mujeres'] . "</td>";
									echo "<td >" . $row['Hombres'] . "</td>";
									
								echo "</tr>";
							echo "</tbody>";
							}
				

			echo "</table>";
		echo "</div>";  

		echo "</div>";
	 
/*************************************************/
	





	
/**************************************************/
//	mysqli_close($conexion);
//}


?>