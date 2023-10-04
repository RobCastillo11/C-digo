<?php
require '../../database.php';

if ($conn->connect_error) {
    die("La conexión falló: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $noEmpleado = $_POST['NO_EMPLEADO_14'];
    $grupoAcreditable = $_POST['GA'];
    $bloque = $_POST['BLOQUE'];
    $cursoManejoIcat = $_POST['CMI'];
    $cursoReplicador = $_POST['rpet'];
    $cursoSPA = $_POST['CSPA'];
    $juramentoCargo = $_POST['JAC'];
    $numCursos = $_POST['NDE'];
    $fecha = $_POST['FECHA1'];
    $curso = $_POST['CURSO'];
    $quienExpide = $_POST['QE'];

    // Actualizar los datos en la base de datos
    $sqlUpdate = "UPDATE cursos_reconocimiento_cuerso SET 
        GA = '$grupoAcreditable',
        BLOQUE = '$bloque',
        CMI = '$cursoManejoIcat',
        rpet = '$cursoReplicador',
        CSPA = '$cursoSPA',
        JAC = '$juramentoCargo',
        NDE = '$numCursos',
        FECHA1 = '$fecha',
        CURSO = '$curso',
        QE = '$quienExpide'
        WHERE NO_EMPLEADO_14 = '$noEmpleado'";

    if ($conn->query($sqlUpdate) === TRUE) {
        // Redirigir de vuelta a modificar.php con el NO_EMPLEADO_14
        echo '<script>alert("Datos guardados");</script>';
        echo '<script>window.location.href = "../../modificar.php?NO_EMPLEADO=' . $noEmpleado . '";</script>';
        exit;
    } else {
        echo "Error al actualizar los datos: " . $conn->error;
    }
}
?>
