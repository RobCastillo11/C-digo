<?php
session_start();
require 'database.php';

// Validar y obtener los datos del formulario
if (
    isset($_POST['NO_EMPLEADO_11'], $_POST['fdr'], $_POST['fdcc'], $_POST['pdc'], $_POST['ADC'], $_POST['ASS'])
) {
    $no_empleado_11 = $_POST['NO_EMPLEADO_11'];
    $fdr = $_POST['fdr'];
    $fdcc = $_POST['fdcc'];
    $pdc = $_POST['pdc'];
    $adc = $_POST['ADC'];
    $ass = $_POST['ASS'];

    // Insertar datos en la base de datos utilizando una sentencia preparada
    $stmt = $conn->prepare("INSERT INTO cambios_adscripcion (NO_EMPLEADO, fdr, fdcc, pdc, ADC, ASS) 
                            VALUES (?, ?, ?, ?, ?, ?)");

    $stmt->bind_param("ssssss", $no_empleado_11, $fdr, $fdcc, $pdc, $adc, $ass);

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
