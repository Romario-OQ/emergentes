<?php

    include('servidor.php');

    $sensor_ph = $_GET['sensor_ph'];
    $sensor_temp = $_GET['sensor_temp'];

    $sql = "INSERT INTO data(sensor_ph, sensor_temp) VALUES (:sensor_ph, :sensor_temp)";

    $stmt = $PDO->prepare($sql);

    $stmt->bindParam(':sensor_ph', $sensor_ph);
    $stmt->bindParam(':sensor_temp', $sensor_temp);

    if($stmt->execute()){
        echo "salvado";
    }
    else{
        echo "error_salvado";
    }

?>