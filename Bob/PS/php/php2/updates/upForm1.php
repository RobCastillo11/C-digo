<?php
require '../../database.php';

if ($conn->connect_error) {
    die("La conexión falló: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $noEmpleado = $_POST['NO_EMPLEADO'];
    $nombre = $_POST['NOMBRE'];
    $ap = $_POST['AP'];
    $am = $_POST['AM'];
    $fn = $_POST['FN']; // Fecha de Nacimiento
    $sexo = $_POST['SEXO'];
    $correo = $_POST['CORREO'];
    $ec = $_POST['EC'];
    $smn = $_POST['SMN'];
    $licencia = $_POST['LICENCIA'];
    $inef = $_POST['INEF'];
    $inea = $_POST['INEA'];
    $ln = $_POST['LN'];
    $calle = $_POST['CALLE'];
    $noExt = $_POST['No_ext'];
    $noInt = $_POST['No_int'];
    $colonia = $_POST['COLONIA'];
    $municipio = $_POST['MUNICIPIO'];
    $estado = $_POST['ESTADO'];
    $cp = $_POST['CP'];
    $curp = $_POST['CURP'];

    // Calcular la edad a partir de la fecha de nacimiento
    $fechaNacimiento = new DateTime($fn);
    $fechaActual = new DateTime();
    $edad = $fechaNacimiento->diff($fechaActual)->y;

    // Actualizar los datos en la base de datos
    $sqlUpdate = "UPDATE generales SET 
        NOMBRE = '$nombre', 
        AP = '$ap', 
        AM = '$am', 
        FN = '$fn', 
        EDAD = '$edad', 
        SEXO = '$sexo', 
        CORREO = '$correo', 
        EC = '$ec', 
        SMN = '$smn', 
        LICENCIA = '$licencia', 
        INEF = '$inef', 
        INEA = '$inea', 
        LN = '$ln', 
        CALLE = '$calle', 
        No_ext = '$noExt', 
        No_int = '$noInt', 
        COLONIA = '$colonia', 
        MUNICIPIO = '$municipio', 
        ESTADO = '$estado', 
        CP = '$cp', 
        CURP = '$curp' 
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
