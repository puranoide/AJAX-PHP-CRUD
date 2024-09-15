<?php
$host = "localhost"; // Cambia esto si tu host es diferente
$user = "root"; // Nombre de usuario de MySQL
$pass = ""; // Contraseña de MySQL
$dbname = "crud_db"; // Nombre de la base de datos

$conn = new mysqli($host, $user, $pass, $dbname);

// Verifica si la conexión fue exitosa
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
