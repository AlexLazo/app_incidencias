<?php 

$connection = mysqli_connect("localhost","root","","proyecto_moviles");
	
	$result = array();
	$result['tipoincidencia'] = array();
	$select= "SELECT *from tipoincidencia ";
	$responce = mysqli_query($connection,$select);
	
	while($row = mysqli_fetch_array($responce))
		{
			$index['id_tipIncidencia']      = $row['0'];
			$index['TipoIncidencia']    = $row['1'];

			array_push($result['tipoincidencia'], $index);
		}
			
			$result["success"]="1";
			echo json_encode($result);
			mysqli_close($connection);

 ?>