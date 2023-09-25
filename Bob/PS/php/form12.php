<?php
session_start();
require 'database.php';

// Validar y obtener los datos del formulario
if (
    isset($_POST['NO_EMPLEADO_12'], $_POST['NO'], $_POST['NA'], $_POST['NIVEL'], $_POST['CATEGORIA'],
        $_POST['GRADO_HOMOLOGADO'], $_POST['GRADO'], $_POST['NUMERO_ANTERIOR'], $_POST['NUMERO_NUEVO'],
        $_POST['CCLA'], $_POST['ACTUALIZACION'], $_POST['VETTING'], $_POST['OFICIALIA_MAYOR'], $_POST['RNPSP'],
        $_POST['AREA'], $_POST['AGRUPAMIENTOS'], $_POST['DESCRIPCION'], $_POST['POM'], $_POST['PGNP'],
        $_POST['FOLIO'], $_POST['CHYJ'], $_POST['BECARIOS'], $_POST['METROPOLITANA'], $_POST['GDOT'],
        $_POST['sdC'], $_POST['FDPDE'], $_POST['FDC'], $_POST['FECB'], $_POST['FDED'], $_POST['FDE'])
) {
    $no_empleado_12 = $_POST['NO_EMPLEADO_12'];
    $no = $_POST['NO'];
    $na = $_POST['NA'];
    $nivel = $_POST['NIVEL'];
    $categoria = $_POST['CATEGORIA'];
    $grado_homologado = $_POST['GRADO_HOMOLOGADO'];
    $grado = $_POST['GRADO'];
    $numero_anterior = $_POST['NUMERO_ANTERIOR'];
    $numero_nuevo = $_POST['NUMERO_NUEVO'];
    $ccla = $_POST['CCLA'];
    $actualizacion = $_POST['ACTUALIZACION'];
    $vetting = $_POST['VETTING'];
    $oficialia_mayor = $_POST['OFICIALIA_MAYOR'];
    $rnpsp = $_POST['RNPSP'];
    $area = $_POST['AREA'];
    $agrupamientos = $_POST['AGRUPAMIENTOS'];
    $descripcion = $_POST['DESCRIPCION'];
    $pom = $_POST['POM'];
    $pgnp = $_POST['PGNP'];
    $folio = $_POST['FOLIO'];
    $chyj = $_POST['CHYJ'];
    $becarios = $_POST['BECARIOS'];
    $metropolitana = $_POST['METROPOLITANA'];
    $gdot = $_POST['GDOT'];
    $sdc = $_POST['sdC'];
    $fdpde = $_POST['FDPDE'];
    $fdc = $_POST['FDC'];
    $fecb = $_POST['FECB'];
    $fded = $_POST['FDED'];
    $fde = $_POST['FDE'];

    // Insertar datos en la base de datos utilizando una sentencia preparada
    $stmt = $conn->prepare("INSERT INTO datos_del_empleo (NO_EMPLEADO, NO, NA, NIVEL, CATEGORIA, GRADO_HOMOLOGADO, GRADO, NUMERO_ANTERIOR, NUMERO_NUEVO, CCLA, ACTUALIZACION, VETTING, OFICIALIA_MAYOR, RNPSP, AREA, AGRUPAMIENTOS, DESCRIPCION, POM, PGNP, FOLIO, CHYJ, BECARIOS, METROPOLITANA, GDOT, sdC, FDPDE, FDC, FECB, FDED, FDE) 
                            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

    $stmt->bind_param("ssssssssssssssssssssssssssssss", $no_empleado_12, $no, $na, $nivel, $categoria, $grado_homologado, $grado, $numero_anterior, $numero_nuevo, $ccla, $actualizacion, $vetting, $oficialia_mayor, $rnpsp, $area, $agrupamientos, $descripcion, $pom, $pgnp, $folio, $chyj, $becarios, $metropolitana, $gdot, $sdc, $fdpde, $fdc, $fecb, $fded, $fde);

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
