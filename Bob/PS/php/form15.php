<?php
session_start();
require 'database.php';

// Validar y obtener los datos del formulario
if (
    isset($_POST['NO_EMPLEADO_15'], $_POST['pi'], $_POST['OBS'], $_POST['FDTD'], $_POST['IPGG'])
) {
    $NO_EMPLEADO_15 = $_POST["NO_EMPLEADO_15"];
    $pi = $_POST["pi"];
    $OBS = $_POST["OBS"];
    $FDTD = $_POST["FDTD"];
    $IPGG = $_POST["IPGG"]; 

    // Insertar datos en la base de datos utilizando una sentencia preparada
    $stmt = $conn->prepare("INSERT INTO incapacida (NO_EMPLEADO_15, FECHA_INICIO_PERSONAL_INCAPACITADO, OBSERVACIONES, FECHA_TERMINACION_PERSONAL_INCAPACITADO, INCAPACIDAD_PENDIENTE_GUARDIA_GENERAL) 
    VALUES (?, ?, ?, ?, ?)");

    $stmt->bind_param("sssss", $NO_EMPLEADO_15, $pi, $OBS, $FDTD, $IPGG);

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
