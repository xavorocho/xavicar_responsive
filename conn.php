<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "xavicar_db";

// Crear conexión
$conn = new mysqli($host, $user, $pass, $db);

// Verificar conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
?>