<?php
require '../../database.php';

if ($conn->connect_error) {
    die("La conexión falló: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $noEmpleado = $_POST['NO_EMPLEADO'];
    $puesto = $_POST['PUESTO'];
    $funcion = $_POST['FUNCION'];
    $actividades = $_POST['ACTIVIDADES'];
    $descripcionEstatus = $_POST['DESCRIPCION_ESTATUS'];

    // Actualizar los datos en la base de datos
    $sqlUpdate = "UPDATE categorizacion SET 
        PUESTO = '$puesto',
        FUNCION = '$funcion',
        ACTIVIDADES = '$actividades',
        DESCRIPCION_ESTATUS = '$descripcionEstatus'
        WHERE NO_EMPLEADO = '$noEmpleado'";

    if ($conn->query($sqlUpdate) === TRUE) {
        // Redirigir de vuelta a modificar.php con el NO_EMPLEADO
        echo '<script>alert("Datos guardados");</script>';
        echo '<script>window.location.href = "../../modificar.php?NO_EMPLEADO=' . $noEmpleado . '";</script>';
        exit;
    } else {
        echo "Error al actualizar los datos: " . $conn->error;
    }
}
?>
