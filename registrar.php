<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include("conn.php");

// Verificar si vienen datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $mensaje = $_POST['mensaje'];

    $sql = "INSERT INTO contactos (nombre, email, telefono, mensaje)
            VALUES ('$nombre', '$email', '$telefono', '$mensaje')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>
                alert('Mensaje enviado correctamente');
                window.location.href='index.html';
              </script>";
    } else {
        echo "Error: " . $conn->error;
    }
}

$conn->close();
?>