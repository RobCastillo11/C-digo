<?php
session_start(); // Inicia la sesión
require 'database.php';

// Validar y obtener los datos del formulario
if (
    isset($_POST['NO_EMPLEADO'], $_POST['NOMBRE'], $_POST['AP'], $_POST['AM'], $_POST['FN'], $_POST['EDAD'], $_POST['SEXO'], $_POST['CORREO'], $_POST['EC'], $_POST['SMN'], $_POST['LICENCIA'], $_POST['INEF'], $_POST['INEA'], $_POST['LN'], $_POST['CALLE'], $_POST['No_int'], $_POST['No_ext'], $_POST['COLONIA'], $_POST['MUNICIPIO'], $_POST['ESTADO'], $_POST['CP'], $_POST['CURP'])
) {
    $no_empleado = $_POST['NO_EMPLEADO'];
    $nombre = $_POST['NOMBRE'];
    $ap = $_POST['AP'];
    $am = $_POST['AM'];
    $fn = $_POST['FN'];
    $edad = $_POST['EDAD'];
    $sexo = $_POST['SEXO'];
    $correo = $_POST['CORREO'];
    $ec = $_POST['EC'];
    $smn = $_POST['SMN'];
    $licencia = $_POST['LICENCIA'];
    $if = $_POST['INEF'];
    $ia = $_POST['INEA'];
    $ln = $_POST['LN'];
    $calle = $_POST['CALLE'];
    $no_int = $_POST['No_int'];
    $no_ext = $_POST['No_ext'];
    $colonia = $_POST['COLONIA'];
    $municipio = $_POST['MUNICIPIO'];
    $estado = $_POST['ESTADO'];
    $cp = $_POST['CP'];
    $curp = $_POST['CURP'];

    // Insertar datos en la base de datos utilizando una sentencia preparada
    $stmt = $conn->prepare("INSERT INTO generales (NO_EMPLEADO, NOMBRE, AP, AM, FN, EDAD, SEXO, CORREO, EC, SMN, LICENCIA, INEF, INEA, LN, CALLE, No_int, No_ext, COLONIA, MUNICIPIO, ESTADO, CP, CURP) 
                            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

    $stmt->bind_param("ssssssssssssssssssssss", $no_empleado, $nombre, $ap, $am, $fn, $edad, $sexo, $correo, $ec, $smn, $licencia, $if, $ia, $ln, $calle, $no_int, $no_ext, $colonia, $municipio, $estado, $cp, $curp);

    if ($stmt->execute()) {
        $archivoJavaScript = 'js/archivo.js';
    } else {
        echo "Error al insertar datos: " . $stmt->error;
    }

    $stmt->close();
} else {
    echo "Error: Datos incompletos o incorrectos.";
}

exit;
?>
