<?php
session_start();
require 'database.php';

// Validar y obtener los datos del formulario
if (
    isset($_POST['NO_EMPLEADO_5'], $_POST['EXMILITARES'], $_POST['EXMILITAR'], $_POST['GAS'], $_POST['FADS'], $_POST['FRBL'], $_POST['MB'])
) {
    $no_empleado_5 = $_POST['NO_EMPLEADO_5'];
    $exmilitares = $_POST['EXMILITARES'];
    $exmilitar = $_POST['EXMILITAR'];
    $gas = $_POST['GAS'];
    $fads = $_POST['FADS'];
    $frbl = $_POST['FRBL'];
    $mb = $_POST['MB'];

    // Insertar datos en la base de datos utilizando una sentencia preparada
    $stmt = $conn->prepare("INSERT INTO militares  (NO_EMPLEADO, EXMILITARES, EXMILITAR, GAS, FADS, FRBL, MB) 
                            VALUES (?, ?, ?, ?, ?, ?, ?)");

    $stmt->bind_param("sssssss", $no_empleado_5, $exmilitares, $exmilitar, $gas, $fads, $frbl, $mb);

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
