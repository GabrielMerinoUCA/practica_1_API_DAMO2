<?php
    
    if($_SERVER["REQUEST_METHOD"] == "PUT"){
        require_once("conexion.php");
        $array= json_decode(file_get_contents("php://input"));
        $id_carrera = $array[0];
        $nombre_carrera = $array[1];
        $id_facultad = $array[2];
        $my_query = "update carrera set nombre_carrera = '" . $nombre_carrera . "', id_facultad = " . $id_facultad . " where id_carrera = " . $id_carrera . "";
        $result = $conn->query($my_query);
        if($result == true) {
            echo "EXITO!";
        }else {
            echo "PAIN...";
        }
    }
?>