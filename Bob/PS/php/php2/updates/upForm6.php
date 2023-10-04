<?php
require '../../database.php';

if ($conn->connect_error) {
    die("La conexión falló: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $noEmpleado = $_POST['NO_EMPLEADO'];
    $afiliadosHorario = $_POST['ACH'];
    $afiliadosDestacados = $_POST['AD'];
    $desistioSindicato = $_POST['DAS'];
    $seguroMayor = $_POST['PQL'];

    // Actualizar los datos en la base de datos
    $sqlUpdate = "UPDATE afiliados SET 
        ACH = '$afiliadosHorario',
        AD = '$afiliadosDestacados',
        DAS = '$desistioSindicato',
        PQL = '$seguroMayor'
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
