<?php
    if($_SERVER["REQUEST_METHOD"] == "DELETE"){
        require_once("conexion.php");
        $nombreCarrera = file_get_contents('php://input');
        echo $nombreCarrera;
        $my_query = "delete from carrera where nombre_carrera = '$nombreCarrera'";

        $result = $conn->query($my_query);
        if($result == true){
            echo "exito!";
        } else {echo "'pain...'";}
    }
?>