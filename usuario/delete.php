<?php

    $connection = mysqli_connect("localhost","root","","proyecto_moviles");
    
     $id = $_POST["id_usuario"];
     
     $sql = "DELETE FROM usuario WHERE id_usuario='$id'";
     
     $result = mysqli_query($connection,$sql);
     
     if($result){
         echo "Data Deleted";
        
     }
     else{
         echo "Failed";
     }
     mysqli_close($connection);
     


?>