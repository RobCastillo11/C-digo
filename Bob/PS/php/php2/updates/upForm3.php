<?php
require '../../database.php';

if ($conn->connect_error) {
    die("La conexión falló: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $noEmpleado = $_POST['NO_EMPLEADO_3'];
    $funcion = $_POST['FUNCION'];
    $fe2022 = $_POST['FE2022'];
    $crp = $_POST['CRP'];
    $cpd = $_POST['CPD'];
    $ccap = $_POST['ccap'];

    // Actualizar los datos en la base de datos
    $sqlUpdate = "UPDATE valucion_anual_desempeño SET 
        FUNCION = '$funcion',
        FE2022 = '$fe2022',
        CRP = '$crp',
        CPD = '$cpd',
        ccap = '$ccap'
        WHERE NO_EMPLEADO_3 = '$noEmpleado'";

    if ($conn->query($sqlUpdate) === TRUE) {
        // Redirigir de vuelta a modificar.php con el NO_EMPLEADO_3
        echo '<script>alert("Datos guardados");</script>';
        echo '<script>window.location.href = "../../modificar.php?NO_EMPLEADO=' . $noEmpleado . '";</script>';
        exit;
    } else {
        echo "Error al actualizar los datos: " . $conn->error;
    }
}
?>
