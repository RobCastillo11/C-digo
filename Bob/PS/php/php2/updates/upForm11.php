<?php
require '../../database.php';

if ($conn->connect_error) {
    die("La conexión falló: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $noEmpleado = $_POST['NO_EMPLEADO'];
    $fechaRecibido = $_POST['fdr'];
    $fechaCambioADSC = $_POST['fdcc'];
    $presentoCambio = $_POST['pdc'];
    $acuerdoComputo = $_POST['ADC'];
    $acuerdoSSP = $_POST['ASS'];

    // Actualizar los datos en la base de datos
    $sqlUpdate = "UPDATE movimiento_por_cambio_asdc SET 
        fdr = '$fechaRecibido',
        fdcc = '$fechaCambioADSC',
        pdc = '$presentoCambio',
        ADC = '$acuerdoComputo',
        ASS = '$acuerdoSSP'
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