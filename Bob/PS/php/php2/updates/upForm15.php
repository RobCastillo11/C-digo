<?php
require '../../database.php';

if ($conn->connect_error) {
    die("La conexión falló: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $noEmpleado = $_POST['NO_EMPLEADO_15'];
    $fechaInicio = $_POST['FECHA_INICIO_PERSONAL_INCAPACITADO'];
    $observaciones = $_POST['OBSERVACIONES'];
    $fechaTerminacion = $_POST['FECHA_TERMINACION_PERSONAL_INCAPACITADO'];
    $incapacidadPendiente = $_POST['INCAPACIDAD_PENDIENTE_GUARDIA_GENERAL'];

    // Actualizar los datos en la base de datos
    $sqlUpdate = "UPDATE incapacida SET 
        FECHA_INICIO_PERSONAL_INCAPACITADO = '$fechaInicio',
        OBSERVACIONES = '$observaciones',
        FECHA_TERMINACION_PERSONAL_INCAPACITADO = '$fechaTerminacion',
        INCAPACIDAD_PENDIENTE_GUARDIA_GENERAL = '$incapacidadPendiente'
        WHERE NO_EMPLEADO_15 = '$noEmpleado'";

    if ($conn->query($sqlUpdate) === TRUE) {
        // Redirigir de vuelta a modificar.php con el NO_EMPLEADO_15
        echo '<script>alert("Datos guardados");</script>';
        echo '<script>window.location.href = "../../modificar.php?NO_EMPLEADO=' . $noEmpleado . '";</script>';
        exit;
    } else {
        echo "Error al actualizar los datos: " . $conn->error;
    }
}
?>
