<?php
// Parámetros de conexión a la base de datos
$servername = "localhost"; // Cambia esto si tu servidor no es local
$username = "root"; // Cambia esto por tu usuario de MySQL
$password = ""; // Cambia esto por tu contraseña de MySQL
$dbname = "mi_base_de_datos"; // Cambia esto por el nombre de tu base de datos

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

echo "Conexión exitosa";
?>
