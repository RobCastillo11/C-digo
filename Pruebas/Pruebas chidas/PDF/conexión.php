<?php
// Configuración de la conexión a la base de datos
$host = "localhost"; // Nombre del servidor de la base de datos
$usuario = "root"; // Nombre de usuario de la base de datos
$contrasena = "Halo1998"; // Contraseña del usuario de la base de datos
$base_de_datos = "pruebas"; // Nombre de la base de datos

// Crear una conexión a la base de datos
$conexion = new mysqli($host, $usuario, $contrasena, $base_de_datos);

// Verificar si la conexión fue exitosa
if ($conexion->connect_error) {
    die("Error en la conexión a la base de datos: " . $conexion->connect_error);
}

// Trabaja con la conexión a la base de datos según tus necesidades.

// Cierra la conexión cuando hayas terminado de trabajar con la base de datos
$conexion->close();
?>
