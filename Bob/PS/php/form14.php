<?php
session_start();
require 'database.php';

// Validar y obtener los datos del formulario
if (
    isset($_POST['NO_EMPLEADO_14'], $_POST['GA'], $_POST['BLOQUE'], $_POST['CMI'], $_POST['rpet'], $_POST['CSPA'], $_POST['JAC'], $_POST['NDE'], $_POST['FECHA1'], $_POST['CURSO'], $_POST['QE'])
) {
    $NO_EMPLEADO_14 = $_POST["NO_EMPLEADO_14"];
    $GA = $_POST["GA"];
    $BLOQUE = $_POST["BLOQUE"];
    $CMI = $_POST["CMI"];
    $rpet = $_POST["rpet"];
    $CSPA = $_POST["CSPA"];
    $JAC = $_POST["JAC"];
    $NDE = $_POST["NDE"];
    $FECHA1 = $_POST["FECHA1"];
    $CURSO = $_POST["CURSO"];
    $QE = $_POST["QE"];

    // Insertar datos en la base de datos utilizando una sentencia preparada
    $stmt = $conn->prepare("INSERT INTO cursos_reconocimiento_cuerso (NO_EMPLEADO_14, GA, BLOQUE, CMI, rpet, CSPA, JAC, NDE, FECHA1, CURSO, QE) 
    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

    $stmt->bind_param("sssssssssss", $NO_EMPLEADO_14, $GA, $BLOQUE, $CMI, $rpet, $CSPA, $JAC, $NDE, $FECHA1, $CURSO, $QE);

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
