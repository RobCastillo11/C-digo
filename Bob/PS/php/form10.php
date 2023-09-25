<?php
session_start();
require 'database.php';

// Validar y obtener los datos del formulario
if (
    isset($_POST['NO_EMPLEADO_10'], $_POST['CELP'], $_POST['PERIODO'], $_POST['FDIDC'], $_POST['FDCDC'], $_POST['OF_COMISIÓN'])
) {
    $no_empleado_10 = $_POST['NO_EMPLEADO_10'];
    $celp = $_POST['CELP'];
    $periodo = $_POST['PERIODO'];
    $fdidc = $_POST['FDIDC'];
    $fdcdc = $_POST['FDCDC'];
    $of_comision = $_POST['OF_COMISIÓN'];

    // Insertar datos en la base de datos utilizando una sentencia preparada
    $stmt = $conn->prepare("INSERT INTO comisiones (NO_EMPLEADO, CELP, PERIODO, FDIDC, FDCDC, OF_COMISION) 
                            VALUES (?, ?, ?, ?, ?, ?)");

    $stmt->bind_param("ssssss", $no_empleado_10, $celp, $periodo, $fdidc, $fdcdc, $of_comision);

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
