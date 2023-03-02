<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        require_once "conexion.php";   
        $id_facultad = $_POST["id_facultad"];
        $nombreCarrera = $_POST["nombreCarrera"];

        $my_query = "insert into carrera(id_facultad, nombreCarrera) 
        Values(". $id_facultad .", '". $nombreCarrera ."')";
        
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