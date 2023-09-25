<?php
session_start();
require 'database.php';

// Validar y obtener los datos del formulario
if (
    isset($_POST['NO_EMPLEADO_13'], $_POST['PUESTO'], $_POST['FUNCION'], $_POST['ACTIVIDADES'], $_POST['DDE'])
) {
    $no_empleado_13 = $_POST['NO_EMPLEADO_13'];
    $puesto = $_POST['PUESTO'];
    $funcion = $_POST['FUNCION'];
    $actividades = $_POST['ACTIVIDADES'];
    $dde = $_POST['DDE'];

    // Insertar datos en la base de datos utilizando una sentencia preparada
    $stmt = $conn->prepare("INSERT INTO categorizacion (NO_EMPLEADO, PUESTO, FUNCION, ACTIVIDADES, DESCRIPCION_ESTATUS) 
                            VALUES (?, ?, ?, ?, ?)");

    $stmt->bind_param("sssss", $no_empleado_13, $puesto, $funcion, $actividades, $dde);

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
