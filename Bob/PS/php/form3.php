<?php
session_start(); // Inicia la sesión
require 'database.php';

// Validar y obtener los datos del formulario
if (
    isset($_POST['NO_EMPLEADO_3'], $_POST['FUNCION'], $_POST['FE2022'], $_POST['CRP'], $_POST['CPD'], $_POST['ccap'])
) {
    $no_empleado_3 = $_POST['NO_EMPLEADO_3'];
    $funcion = $_POST['FUNCION'];
    $fe2022 = $_POST['FE2022'];
    $crp = $_POST['CRP'];
    $cpd = $_POST['CPD'];
    $ccap = $_POST['ccap'];

    // Insertar datos en la base de datos utilizando una sentencia preparada
    $stmt = $conn->prepare("INSERT INTO valucion_anual_desempeño  (NO_EMPLEADO_3, FUNCION, FE2022, CRP, CPD, ccap) 
                            VALUES (?, ?, ?, ?, ?, ?)");

    $stmt->bind_param("ssssss", $no_empleado_3, $funcion, $fe2022, $crp, $cpd, $ccap);

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
