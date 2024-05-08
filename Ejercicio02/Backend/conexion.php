<?php
// Datos de conexión a la base de datos
$servername = "localhost"; // Cambia esto si tu servidor MySQL no está en localhost
$username = "root"; // Cambia "tu_usuario" por tu nombre de usuario de MySQL
$password = ""; // Cambia "tu_contraseña" por tu contraseña de MySQL
$database = "sistema_boletas_pago"; // Cambia "sistema_boletas_pago" si has utilizado un nombre diferente para tu base de datos

// Crear conexión
$conn = new mysqli($servername, $username, $password, $database);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
} 
?>
