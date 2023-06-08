<?php 

$connection = mysqli_connect("localhost","root","","proyecto_moviles");
	
	$result = array();
	$result['estadoempleado'] = array();
	$select= "SELECT *from estadoempleado";
	$responce = mysqli_query($connection,$select);
	
	while($row = mysqli_fetch_array($responce))
		{
			$index['id_estadoEmpleado'] = $row['0'];
			$index['Estado'] = $row['1'];

			array_push($result['estadoempleado'], $index);
		}
			
			$result["success"]="1";
			echo json_encode($result);
			mysqli_close($connection);

 ?>