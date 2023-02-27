<?php

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        require_once "conexion.php";
        $codigo = $_POST["codigo"];
        $my_query = "select * from facultad where codigo = ". $codigo .""; 
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