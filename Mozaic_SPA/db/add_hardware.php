<?php
    
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);


    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Conexión a la base de datos (ajusta los valores según tu configuración)
        $servername = "localhost";
        $username = "root";
        $password = "root";
        $dbname = "Mosaic_SPA";
    
        $conn = new mysqli($servername, $username, $password, $dbname);
    
        // Comprobar la conexión
        if ($conn->connect_error) {
            die("La conexión a la base de datos falló: " . $conn->connect_error);
        }
    
        // Obtener los datos enviados desde el formulario
        $producto= $_POST['producto'];
        $precio = $_POST['precio'];
    
        // Insertar los datos del producto en la base de datos
        $sql = "INSERT INTO hardware_prod (producto, precio) VALUES ('$producto', '$precio')";

        if ($conn->query($sql) === TRUE) {
            // Registro exitoso, redireccionar a la página de inicio de sesión o al panel de productos
            header("Location: thx_prod.html");
            exit();
        } else {
            // Si ocurrió un error al guardar los datos, mostrar mensaje de error
            echo "Error al registrar el usuario: " . $conn->error;
        }
    
        $conn->close();
    }


?>

