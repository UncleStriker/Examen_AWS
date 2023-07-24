<?php
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "Mosaic_SPA";

    // Crea la conexión
    $conn = new mysqli($servername, $username, $password, $dbname);



    // Verifica si la conexión fue exitosa
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

?>