<?php
session_start();
require 'database.php';

// Validar y obtener los datos del formulario
if (
    isset($_POST['NO_EMPLEADO_8'], $_POST['AREA_ADSCRIPCION'], $_POST['TEL_OFICINA'], $_POST['DOMICILIO_OFICINA'],
          $_POST['CARGO_FUNCION'], $_POST['JEFE_INMEDIATO'], $_POST['ACTUALIZACION'], $_POST['CVE_DIRECCION'],
          $_POST['DIRECCION'], $_POST['CVE_AREA'])
) {
    $no_empleado_8 = $_POST['NO_EMPLEADO_8'];
    $area_adscripcion = $_POST['AREA_ADSCRIPCION'];
    $tel_oficina = $_POST['TEL_OFICINA'];
    $domicilio_oficina = $_POST['DOMICILIO_OFICINA'];
    $cargo_funcion = $_POST['CARGO_FUNCION'];
    $jefe_inmediato = $_POST['JEFE_INMEDIATO'];
    $actualizacion = $_POST['ACTUALIZACION'];
    $cve_direccion = $_POST['CVE_DIRECCION'];
    $direccion = $_POST['DIRECCION'];
    $cve_area = $_POST['CVE_AREA'];

    // Insertar datos en la base de datos utilizando una sentencia preparada
    $stmt = $conn->prepare("INSERT INTO dato_laborales_personal_c (NO_EMPLEADO, AREA_ADSCRIPCION, TEL_OFICINA, DOMICILIO_OFICINA, 
    CARGO_FUNCION, JEFE_INMEDIATO, ACTUALIZACION, CVE_DIRECCION, DIRECCION, CVE_AREA) 
                            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

    $stmt->bind_param("ssssssssss", $no_empleado_8, $area_adscripcion, $tel_oficina, $domicilio_oficina, $cargo_funcion,
                     $jefe_inmediato, $actualizacion, $cve_direccion, $direccion, $cve_area);

    if ($stmt->execute()) {
        echo "Registro exitoso.";
    } else {
        echo "Error al insertar datos: " . $stmt->error;
    }

    $stmt->close();
} else {
    echo "Error: Datos incompletos o incorrectos.";
}

exit;
?>
