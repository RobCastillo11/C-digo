<?php
session_start();
require 'database.php';

// Validar y obtener los datos del formulario
if (
    isset($_POST['NO_EMPLEADO_2'], $_POST['TEL_CAS'], $_POST['TEL_CEL'], $_POST['TS'], $_POST['IDIOMA'], $_POST['ESCRITURA'],
        $_POST['LECTURA'], $_POST['DICCION'], $_POST['DIALECTO'], $_POST['NDE'], $_POST['NES'], $_POST['APEA'], $_POST['AMEA'],
        $_POST['NHS'], $_POST['NDH'], $_POST['APDH'], $_POST['AMDH'], $_POST['SEXOH'], $_POST['FNH'], $_POST['EDADH'], $_POST['LDR'])
) {
    $no_empleado_2 = $_POST['NO_EMPLEADO_2'];
    $tel_cas = $_POST['TEL_CAS'];
    $tel_cel = $_POST['TEL_CEL'];
    $ts = $_POST['TS'];
    $idioma = $_POST['IDIOMA'];
    $escritura = $_POST['ESCRITURA']; 
    $lectura = $_POST['LECTURA'];
    $diccion = $_POST['DICCION'];
    $dialecto = $_POST['DIALECTO'];
    $nde = $_POST['NDE'];
    $nes = $_POST['NES'];
    $apea = $_POST['APEA'];
    $amea = $_POST['AMEA'];
    $nhs = $_POST['NHS'];
    $ndh = $_POST['NDH'];
    $apdh = $_POST['APDH'];
    $amdh = $_POST['AMDH'];
    $sexoh = $_POST['SEXOH'];
    $fnh = $_POST['FNH'];
    $edadh = $_POST['EDADH'];
    $ldr = $_POST['LDR'];

    // Insertar datos en la base de datos utilizando una sentencia preparada
    $stmt = $conn->prepare("INSERT INTO datos_familia  (NO_EMPLEADO_2, TEL_CAS, TEL_CEL, TS, IDIOMA, ESCRITURA, LECTURA, DICCION, DIALECTO, 
                            NDE, NES, APEA, AMEA, NHS, NDH, APDH, AMDH, SEXOH, FNH, EDADH, LDR) 
                            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

    $stmt->bind_param("sssssssssssssssssssss", $no_empleado_2, $tel_cas, $tel_cel, $ts, $idioma, $escritura, $lectura, $diccion,
        $dialecto, $nde, $nes, $apea, $amea, $nhs, $ndh, $apdh, $amdh, $sexoh, $fnh, $edadh, $ldr);

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