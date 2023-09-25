<?php
session_start();
require 'database.php';

// Validar y obtener los datos del formulario
if (
    isset($_POST['NO_EMPLEADO_6'], $_POST['ACH'], $_POST['AD'], $_POST['DAS'], $_POST['PQL'])
) {
    $no_empleado_6 = $_POST['NO_EMPLEADO_6'];
    $ach = $_POST['ACH'];
    $ad = $_POST['AD'];
    $das = $_POST['DAS'];
    $pql = $_POST['PQL'];

    // Insertar datos en la base de datos utilizando una sentencia preparada
    $stmt = $conn->prepare("INSERT INTO afiliados  (NO_EMPLEADO, ACH, AD, DAS, PQL) 
                            VALUES (?, ?, ?, ?, ?)");

    $stmt->bind_param("sssss", $no_empleado_6, $ach, $ad, $das, $pql);

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
