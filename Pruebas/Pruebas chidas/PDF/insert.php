<?php
// Incluye el archivo de conexión
require 'conexión.php';

// Obtiene los datos del formulario
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$mensaje = $_POST['mensaje'];

// Prepara la consulta SQL para insertar datos
$sql = "INSERT INTO generales (nombre, apellido, mensaje) VALUES (?, ?, ?)";

// Prepara una declaración
$stmt = $conexion->prepare($sql);

if ($stmt) {
    // Vincula los parámetros
    $stmt->bind_param("sss", $nombre, $apellido, $mensaje);

    // Ejecuta la consulta y verifica si se realizó con éxito
    if ($stmt->execute()) {
        echo "Los datos se insertaron correctamente.";
    } else {
        echo "Error al insertar datos: " . $stmt->error;
    }

    // Cierra la declaración
    $stmt->close();
} else {
    echo "Error al preparar la consulta: " . $conexion->error;
}

// Cierra la conexión a la base de datos
$conexion->close();
?>
