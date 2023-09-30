<?php
require '../database.php';

if ($conn->connect_error) {
    die("La conexión falló: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $noEmpleado = $_POST['NO_EMPLEADO'];
    $comentario = $_POST['CONSIDERACIONES'];

    // Consulta SQL para actualizar el comentario
    $sqlUpdateComentario = "UPDATE generales SET CONSIDERACIONES = ? WHERE NO_EMPLEADO = ?";
    $stmt = $conn->prepare($sqlUpdateComentario);

    if ($stmt === false) {
        die("Error en la preparación de la consulta: " . $conn->error);
    }

    $stmt->bind_param("ss", $comentario, $noEmpleado);

    if ($stmt->execute()) {
        // Redireccionar al usuario de vuelta a consultar.php con el valor del empleado
        header("Location: ../consultar.php?NO_EMPLEADO=$noEmpleado");
        exit(); // Asegurarse de que el script se detenga después de la redirección
    } else {
        echo "Error al actualizar el comentario: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>
