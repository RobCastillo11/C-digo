<?php
require '../../database.php';

if ($conn->connect_error) {
    die("La conexión falló: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $noEmpleado = $_POST['NO_EMPLEADO'];
    $areaAdscripcion = $_POST['AREA_ADSCRIPCION'];
    $telOficina = $_POST['TEL_OFICINA'];
    $domicilioOficina = $_POST['DOMICILIO_OFICINA'];
    $cargoFuncion = $_POST['CARGO_FUNCION'];
    $jefeInmediato = $_POST['JEFE_INMEDIATO'];
    $actualizacion = $_POST['ACTUALIZACION'];
    $claveDireccion = $_POST['CVE_DIRECCION'];
    $direccion = $_POST['DIRECCION'];
    $claveArea = $_POST['CVE_AREA'];

    // Actualizar los datos en la base de datos
    $sqlUpdate = "UPDATE dato_laborales_personal_c SET 
        AREA_ADSCRIPCION = '$areaAdscripcion',
        TEL_OFICINA = '$telOficina',
        DOMICILIO_OFICINA = '$domicilioOficina',
        CARGO_FUNCION = '$cargoFuncion',
        JEFE_INMEDIATO = '$jefeInmediato',
        ACTUALIZACION = '$actualizacion',
        CVE_DIRECCION = '$claveDireccion',
        DIRECCION = '$direccion',
        CVE_AREA = '$claveArea'
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
