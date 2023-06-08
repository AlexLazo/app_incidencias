<?php

$connection = mysqli_connect("localhost","root","","proyecto_moviles");
     $id_usuario = $_POST["id_usuario"];
     $tipoincidencia = $_POST["id_tipoIncidencia"];
     $descripcion = $_POST["descripcion"];
     $fecha = $_POST["fecha"];
     $imageData = $_POST['imagenReferencia'];

     $random = rand(0,99999999);
     $imagenPath = "fotos/$tipoincidencia$random.jpg";
     $SERVER_URL = "http://192.168.0.184/app_incidencias/$imagenPath";
     $estadoincidencia = $_POST["estadoIncidencia"];
     
     
     $sql = "INSERT INTO incidencia(id_usuario,id_tipoIncidencia,descripcion,
     fecha,imagenReferencia,estadoIncidencia) VALUES ('$id_usuario','$tipoincidencia',
     '$descripcion','$fecha','$SERVER_URL','$estadoincidencia')";
     
     $result = mysqli_query($connection,$sql);
     $error_message = mysqli_error($connection);
     
     if($result){
        file_put_contents($imagenPath, base64_decode($imageData));
         echo "Datos Insertados";
        
     }
     else{
         echo "Failed".$error_message;
     }
     mysqli_close($connection);

?>