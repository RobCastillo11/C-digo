<?php
session_start();
require 'database.php';

// Validar y obtener los datos del formulario
if (
    isset(
        $_POST['NO_EMPLEADO_7'], 
        $_POST['DIRECCION_ACTUAL'], 
        $_POST['AREA1'], 
        $_POST['FUNCION'], 
        $_POST['DDE'],
        $_POST['PQCBDLC'], 
        $_POST['PERIODO'], 
        $_POST['OBSERVACIONES'], 
        $_POST['ID_EMPLEADO'], 
        $_POST['CLASIF'],
        $_POST['FECHA_DE_INGRESO'], 
        $_POST['CUIP'], 
        $_POST['CUP'], 
        $_POST['NO_CLASIFICACION'], 
        $_POST['CLASIFICACION'],
        $_POST['SINDICALIZADO'], 
        $_POST['ADSCRITO'], 
        $_POST['DDOM'], 
        $_POST['IMSS'], 
        $_POST['CCLOC'],
        $_POST['VENCIMIENTO_CREDENCIAL'],
        $_POST['FOLIO_CREDENCIAL'],
        $_POST['UBICACION_FISICA'], 
        $_POST['ZONA'],
        $_POST['FECHA_DE_INGRESO_2'],
        $_POST['FECHA_CONCLUSION'],
        $_POST['FECHA_REINGRESO'],
        $_POST['CAMBIO_DE_APOYO'],
        $_POST['SUELDO_BASE'],
        $_POST['PRESTACIONES'],
        $_POST['COMPENSACION'],
        $_POST['NO_COMP'],
        $_POST['ANTIGUEDAD_GRADO'],
        $_POST['COLUMNA_TEMPORAL'],
        $_POST['PROMOCION_2005'],
        $_POST['RFC'],
        $_POST['HOMOCLAVE'],
        $_POST['NO_CUENTA_BANCO'])) {
    $no_empleado_7 = $_POST['NO_EMPLEADO_7'];
    $DIRECCION_ACTUAL = $_POST['DIRECCION_ACTUAL'];
    $AREA1 = $_POST['AREA1'];
    $FUNCION = $_POST['FUNCION'];
    $DDE = $_POST['DDE'];
    $PQCBDLC = $_POST['PQCBDLC'];
    $PERIODO = $_POST['PERIODO'];
    $OBSERVACIONES = $_POST['OBSERVACIONES'];
    $ID_EMPLEADO = $_POST['ID_EMPLEADO'];
    $CLASIF = $_POST['CLASIF'];
    $FECHA_DE_INGRESO = $_POST['FECHA_DE_INGRESO'];
    $CUIP = $_POST['CUIP'];
    $CUP = $_POST['CUP'];
    $NO_CLASIFICACION = $_POST['NO_CLASIFICACION'];
    $CLASIFICACION = $_POST['CLASIFICACION'];
    $SINDICALIZADO = $_POST['SINDICALIZADO'];
    $ADSCRITO = $_POST['ADSCRITO'];
    $DDOM = $_POST['DDOM'];
    $IMSS = $_POST['IMSS'];
    $CCLOC = $_POST['CCLOC'];
    $VENCIMIENTO_CREDENCIAL = $_POST['VENCIMIENTO_CREDENCIAL'];
    $FOLIO_CREDENCIAL = $_POST['FOLIO_CREDENCIAL'];
    $UBICACION_FISICA = $_POST['UBICACION_FISICA'];
    $ZONA = $_POST['ZONA'];
    $FECHA_DE_INGRESO_2 = $_POST['FECHA_DE_INGRESO_2'];
    $FECHA_CONCLUSION = $_POST['FECHA_CONCLUSION'];
    $FECHA_REINGRESO = $_POST['FECHA_REINGRESO'];
    $CAMBIO_DE_APOYO = $_POST['CAMBIO_DE_APOYO'];
    $SUELDO_BASE = $_POST['SUELDO_BASE'];
    $PRESTACIONES = $_POST['PRESTACIONES'];
    $COMPENSACION = $_POST['COMPENSACION'];
    $NO_COMP = $_POST['NO_COMP'];
    $ANTIGUEDAD_GRADO = $_POST['ANTIGUEDAD_GRADO'];
    $COLUMNA_TEMPORAL = $_POST['COLUMNA_TEMPORAL'];
    $PROMOCION_2005 = $_POST['PROMOCION_2005'];
    $RFC = $_POST['RFC'];
    $HOMOCLAVE = $_POST['HOMOCLAVE'];
    $NO_CUENTA_BANCO = $_POST['NO_CUENTA_BANCO'];

    $stmt = $conn->prepare("INSERT INTO datos_del_empleado (
        NO_EMPLEADO_7,
        DIRECCION_ACTUAL, 
        AREA1, 
        FUNCION, 
        DDE, 
        PQCBDLC, 
        PERIODO, 
        OBSERVACIONES, 
        ID_EMPLEADO, 
        CLASIF, 
        FECHA_DE_INGRESO, 
        CUIP, 
        CUP, 
        NO_CLASIFICACION, 
        CLASIFICACION, 
        SINDICALIZADO,
        ADSCRITO, 
        DDOM, 
        IMSS, 
        CCLOC, 
        VENCIMIENTO_CREDENCIAL, 
        FOLIO_CREDENCIAL, 
        UBICACION_FISICA, 
        ZONA, 
        FECHA_DE_INGRESO_2, 
        FECHA_CONCLUSION, 
        FECHA_REINGRESO, 
        CAMBIO_DE_APOYO, 
        SUELDO_BASE, 
        PRESTACIONES, 
        COMPENSACION,
        NO_COMP, 
        ANTIGUEDAD_GRADO, 
        COLUMNA_TEMPORAL, 
        PROMOCION_2005, 
        RFC, 
        HOMOCLAVE, 
        NO_CUENTA_BANCO) 
    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

$stmt->bind_param("ssssssssssssssssssssssssssssssssssssss", 
    $no_empleado_7, 
    $DIRECCION_ACTUAL, 
    $AREA1, $FUNCION, 
    $DDE, $PQCBDLC, 
    $PERIODO, 
    $OBSERVACIONES,
     $ID_EMPLEADO,  
     $CLASIF, 
     $FECHA_DE_INGRESO, 
     $CUIP, 
     $CUP, 
     $NO_CLASIFICACION,
    $CLASIFICACION, 
    $SINDICALIZADO, 
    $ADSCRITO, 
    $DDOM,
     $IMSS, 
    $CCLOC, 
    $VENCIMIENTO_CREDENCIAL,
     $FOLIO_CREDENCIAL, 
     $UBICACION_FISICA, 
    $ZONA, 
    $FECHA_DE_INGRESO_2, 
    $FECHA_CONCLUSION, 
    $FECHA_REINGRESO, 
    $CAMBIO_DE_APOYO, 
    $SUELDO_BASE, 
    $PRESTACIONES, 
    $COMPENSACION, 
    $NO_COMP, 
    $ANTIGUEDAD_GRADO,
     $COLUMNA_TEMPORAL, 
     $PROMOCION_2005, 
     $RFC, 
     $HOMOCLAVE, 
     $NO_CUENTA_BANCO);

    

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
