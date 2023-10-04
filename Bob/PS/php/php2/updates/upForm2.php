<?php
require '../../database.php';

if ($conn->connect_error) {
    die("La conexión falló: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $noEmpleado = $_POST['NO_EMPLEADO_2'];
    $telCas = $_POST['TEL_CAS'];
    $telCel = $_POST['TEL_CEL'];
    $ts = $_POST['TS'];
    $idioma = $_POST['IDIOMA'];
    $escritura = $_POST['ESCRITURA'];
    $lectura = $_POST['LECTURA'];
    $diccion = $_POST['DICCION'];
    $dialecto = $_POST['DIALECTO'];
    $ldr = $_POST['LDR'];
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

    // Actualizar los datos en la base de datos
    $sqlUpdate = "UPDATE datos_familia SET 
        TEL_CAS = '$telCas',
        TEL_CEL = '$telCel',
        TS = '$ts',
        IDIOMA = '$idioma',
        ESCRITURA = '$escritura',
        LECTURA = '$lectura',
        DICCION = '$diccion',
        DIALECTO = '$dialecto',
        LDR = '$ldr',
        NDE = '$nde',
        NES = '$nes',
        APEA = '$apea',
        AMEA = '$amea',
        NHS = '$nhs',
        NDH = '$ndh',
        APDH = '$apdh',
        AMDH = '$amdh',
        SEXOH = '$sexoh',
        FNH = '$fnh',
        EDADH = '$edadh'
        WHERE NO_EMPLEADO_2 = '$noEmpleado'";

    if ($conn->query($sqlUpdate) === TRUE) {
        // Redirigir de vuelta a modificar.php con el NO_EMPLEADO_2
        echo '<script>alert("Datos guardados");</script>';
        echo '<script>window.location.href = "../../modificar.php?NO_EMPLEADO=' . $noEmpleado . '";</script>';
        exit;
    } else {
        echo "Error al actualizar los datos: " . $conn->error;
    }
}
?>
