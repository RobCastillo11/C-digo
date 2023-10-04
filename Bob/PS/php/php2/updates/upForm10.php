<?php
require '../../database.php';

if ($conn->connect_error) {
    die("La conexión falló: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $noEmpleado = $_POST['NO_EMPLEADO'];
    $comisionLugarPersona = $_POST['CELP'];
    $periodo = $_POST['PERIODO'];
    $fechaInicioComision = $_POST['FDIDC'];
    $fechaConclusionComision = $_POST['FDCDC'];
    $oficinaComision = $_POST['OF_COMISION'];

    // Actualizar los datos en la base de datos
    $sqlUpdate = "UPDATE comisiones SET 
        CELP = '$comisionLugarPersona',
        PERIODO = '$periodo',
        FDIDC = '$fechaInicioComision',
        FDCDC = '$fechaConclusionComision',
        OF_COMISION = '$oficinaComision'
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
