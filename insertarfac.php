<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        require_once "conexion.php";   
        $nombre = $_POST["nombre"];
        $descripcion = $_POST["descripcion"];
        $ubicacion = $_POST["ubicacion"];

        $my_query = "insert into facultad(nombre, descripcion, ubicacion) 
        Values('". $nombre ."', '". $descripcion ."', '". $ubicacion ."')";
        
        $result = $conn->query($my_query); // ejecutar query
        if($result == true){
            echo "Registro guardado correctamente";
        }else{
            echo "Error al guardar registro";
        }
    }else{
        echo "error desconocido";
    }
?>