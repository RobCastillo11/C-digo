<?php
require '../../database.php';

if ($conn->connect_error) {
    die("La conexión falló: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $noEmpleado = $_POST['NO_EMPLEADO'];
    $playera = $_POST['PLAYERA'];
    $camisa = $_POST['CAMISA'];
    $pantalon = $_POST['PANTALON'];
    $calzado = $_POST['CALZADO'];
    $chamarra = $_POST['CHAMARRA'];
    $mcArthur = $_POST['MC_ARTHUR'];
    $kepi = $_POST['KEPI'];
    $sombrero = $_POST['SOMBRERO'];
    $falda = $_POST['FALDA'];
    $filipina = $_POST['FILIPINA'];
    $overol = $_POST['OVEROL'];
    $bata = $_POST['BATA'];

    // Actualizar los datos en la base de datos
    $sqlUpdate = "UPDATE indumentaria SET 
        PLAYERA = '$playera',
        CAMISA = '$camisa',
        PANTALON = '$pantalon',
        CALZADO = '$calzado',
        CHAMARRA = '$chamarra',
        MC_ARTHUR = '$mcArthur',
        KEPI = '$kepi',
        SOMBRERO = '$sombrero',
        FALDA = '$falda',
        FILIPINA = '$filipina',
        OVEROL = '$overol',
        BATA = '$bata'
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
