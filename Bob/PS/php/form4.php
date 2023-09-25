<?php
session_start();
require 'database.php';

// Validar y obtener los datos del formulario
if (
    isset($_POST['NO_EMPLEADO_4'], $_POST['TDE'], $_POST['ESTUDIOS'], $_POST['ESPECIALIDAD'], $_POST['DOCUMENTO'], $_POST['CCAC'], $_POST['CFME'], $_POST['GRUPO'], $_POST['GENERACION'], $_POST['TdG'], $_POST['DURACION'], $_POST['TDS'], $_POST['CDAPT'], $_POST['CPAF'], $_POST['TallasDomicilios'], $_POST['NDC'], $_POST['REPROBO_EXAMEN'], $_POST['EDLC'], $_POST['PEAG'], $_POST['CPC'])
) {
    $no_empleado_4 = $_POST['NO_EMPLEADO_4'];
    $tde = $_POST['TDE'];
    $estudios = $_POST['ESTUDIOS'];
    $especialidad = $_POST['ESPECIALIDAD'];
    $documento = $_POST['DOCUMENTO'];
    $ccac = $_POST['CCAC'];
    $cfme = $_POST['CFME'];
    $grupo = $_POST['GRUPO'];
    $generacion = $_POST['GENERACION'];
    $tdg = $_POST['TdG'];
    $duracion = $_POST['DURACION'];
    $tds = $_POST['TDS'];
    $cdapt = $_POST['CDAPT'];
    $cpaf = $_POST['CPAF'];
    $tallas_domicilios = $_POST['TallasDomicilios'];
    $ndc = $_POST['NDC'];
    $reprobo_examen = $_POST['REPROBO_EXAMEN'];
    $edlc = $_POST['EDLC'];
    $peag = $_POST['PEAG'];
    $cpc = $_POST['CPC'];

    // Insertar datos en la base de datos utilizando una sentencia preparada
    $stmt = $conn->prepare("INSERT INTO datos_de_estudio  (NO_EMPLEADO, TDE, ESTUDIOS, ESPECIALIDAD, DOCUMENTO, CCAC, CFME, GRUPO, GENERACION, TdG, DURACION, TDS, CDAPT, CPAF, TallasDomicilios, NDC, REPROBO_EXAMEN, EDLC, PEAG, CPC) 
                            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

    $stmt->bind_param("ssssssssssssssssssss", $no_empleado_4, $tde, $estudios, $especialidad, $documento, $ccac, $cfme, $grupo, $generacion, $tdg, $duracion, $tds, $cdapt, $cpaf, $tallas_domicilios, $ndc, $reprobo_examen, $edlc, $peag, $cpc);

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