<?php
$connection = mysqli_connect("localhost","root","","proyecto_moviles");
    
     $id_usuario = $_POST["id_usuario"];
     $nombrecompleto = $_POST["nombrecompleto"];
     $user = $_POST["user"];
     $password = $_POST["password"];
     $id_rol = $_POST["id_rol"];
     $id_estadoEmpleado = $_POST["id_estadoEmpleado"];
     
     $sql = "UPDATE usuario SET  nombrecompleto = '$nombrecompleto', user = '$user', password = '$password', id_rol = '$id_rol', 'id_estadoEmpleado' = '$id_estadoEmpleado' WHERE id_usuario = '$id_usuario'";
     
     $result = mysqli_query($connection,$sql);
     
     if($result){
         echo "Datos actualziados";
        
     }
     else{
         echo "Falló";
     }
     mysqli_close($connection);
     
        
?>