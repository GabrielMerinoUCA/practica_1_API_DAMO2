<?php

    if($_SERVER["REQUEST_METHOD"] == "GET"){
        require_once "conexion.php"; //nombreCarrera o nombre_carera
        $my_query = "Select c.nombre_carrera, f.nombre from carrera c inner join facultad f on c.id_facultad = f.codigo "; 
        //$conn->query($my_querry);
        $result = $conn->query($my_query); 
        if($conn->affected_rows > 0){
            $json = "{\"data\":[";
            while ($row = $result->fetch_assoc()) { 
                $json = $json . json_encode($row, JSON_PRETTY_PRINT);
                $json = $json . ",";
            }
            $json = substr(trim($json),0,-1);
            $json = $json . "]}";
        }

    }
    echo $json;
    $result->close();
    $conn->close();
?>