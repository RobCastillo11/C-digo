<?php
session_start();
require 'database.php';

// Validar y obtener los datos del formulario
if (
    isset($_POST['NO_EMPLEADO_9'], $_POST['PLAYERA'], $_POST['CAMISA'], $_POST['PANTALON'], $_POST['CALZADO'], 
         $_POST['CHAMARRA'], $_POST['MC_ARTHUR'], $_POST['KEPI'], $_POST['SOMBRERO'], $_POST['FALDA'], 
         $_POST['FILIPINA'], $_POST['OVEROL'], $_POST['BATA'])
) {
    $no_empleado_9 = $_POST['NO_EMPLEADO_9'];
    $playera = $_POST['PLAYERA'];
    $camisa = $_POST['CAMISA'];
    $pantalon = $_POST['PANTALON'];
    $calzado = $_POST['CALZADO'];
    $chamarra = $_POST['CHAMARRA'];
    $mc_arthur = $_POST['MC_ARTHUR'];
    $kepi = $_POST['KEPI'];
    $sombrero = $_POST['SOMBRERO'];
    $falda = $_POST['FALDA'];
    $filipina = $_POST['FILIPINA'];
    $overol = $_POST['OVEROL'];
    $bata = $_POST['BATA'];

    // Insertar datos en la base de datos utilizando una sentencia preparada
    $stmt = $conn->prepare("INSERT INTO indumentaria (NO_EMPLEADO, PLAYERA, CAMISA, PANTALON, CALZADO, CHAMARRA, MC_ARTHUR, KEPI, SOMBRERO, FALDA, FILIPINA, OVEROL, BATA) 
                            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

    $stmt->bind_param("sssssssssssss", $no_empleado_9, $playera, $camisa, $pantalon, $calzado, $chamarra, $mc_arthur, $kepi, $sombrero, $falda, $filipina, $overol, $bata);

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
