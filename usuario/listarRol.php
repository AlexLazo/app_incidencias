<?php 

$connection = mysqli_connect("localhost","root","","proyecto_moviles");
	
	$result = array();
	$result['rol'] = array();
	$select= "SELECT *from rol ";
	$responce = mysqli_query($connection,$select);
	
	while($row = mysqli_fetch_array($responce))
		{
			$index['id_rol']      = $row['0'];
			$index['Rol']    = $row['1'];

			array_push($result['rol'], $index);
		}
			
			$result["success"]="1";
			echo json_encode($result);
			mysqli_close($connection);

 ?>