<?php

    if($_SERVER["REQUEST_METHOD"] == "GET"){
        require_once "conexion.php";
        $my_query = "select * from carrera";
        $result = $conn->query($my_query); // ejecutar query

        if($conn->affected_rows > 0){
            $json = "{\"data\":[";
            //esto es como un foreach loop
            while ($row = $result->fetch_assoc()) { // rows toma el valor de la fila actual
                $json = $json . json_encode($row);
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