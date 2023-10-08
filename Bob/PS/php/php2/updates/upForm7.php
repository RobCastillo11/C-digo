<?php
require '../../database.php';

if ($conn->connect_error) {
    die("La conexión falló: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $noEmpleado7 = $_POST['NO_EMPLEADO_7'];
    $direccionActual = $_POST['DIRECCION_ACTUAL']; // Esto obtendrá el valor seleccionado en el select
    $area1 = $_POST['AREA1'];
    $funcion = $_POST['FUNCION'];
    $dde = $_POST['DDE'];
    $pqcblc = $_POST['PQCBDLC'];
    $periodo = $_POST['PERIODO'];
    $observaciones = $_POST['OBSERVACIONES'];
    $idEmpleado = $_POST['ID_EMPLEADO'];
    $clasif = $_POST['CLASIF'];
    $fechaDeIngreso = $_POST['FECHA_DE_INGRESO'];
    $cuip = $_POST['CUIP'];
    $cup = $_POST['CUP'];
    $noClasificacion = $_POST['NO_CLASIFICACION'];
    $clasificacion = $_POST['CLASIFICACION'];
    $sindicalizado = $_POST['SINDICALIZADO'];
    $adscrito = $_POST['ADSCRITO'];
    $ddom = $_POST['DDOM'];
    $imss = $_POST['IMSS'];
    $ccloc = $_POST['CCLOC'];
    $vencimientoCredencial = $_POST['VENCIMIENTO_CREDENCIAL'];
    $folioCredencial = $_POST['FOLIO_CREDENCIAL'];
    $ubicacionFisica = $_POST['UBICACION_FISICA'];
    $zona = $_POST['ZONA'];
    $fechaDeIngreso2 = $_POST['FECHA_DE_INGRESO_2'];
    $fechaConclusion = $_POST['FECHA_CONCLUSION'];
    $fechaReingreso = $_POST['FECHA_REINGRESO'];
    $cambioDeApoyo = $_POST['CAMBIO_DE_APOYO'];
    $sueldoBase = $_POST['SUELDO_BASE'];
    $prestaciones = $_POST['PRESTACIONES'];
    $compensacion = $_POST['COMPENSACION'];
    $noComp = $_POST['NO_COMP'];
    $antiguedadGrado = $_POST['ANTIGUEDAD_GRADO'];
    $columnaTemporal = $_POST['COLUMNA_TEMPORAL'];
    $promocion2005 = $_POST['PROMOCION_2005'];
    $rfc = $_POST['RFC'];
    $homoclave = $_POST['HOMOCLAVE'];
    $noCuentaBanco = $_POST['NO_CUENTA_BANCO'];

    // Actualizar los datos en la base de datos
    $sqlUpdate = "UPDATE datos_del_empleado SET 
        DIRECCION_ACTUAL = '$direccionActual',
        AREA1 = '$area1',
        FUNCION = '$funcion',
        DDE = '$dde',
        PQCBDLC = '$pqcblc',
        PERIODO = '$periodo',
        OBSERVACIONES = '$observaciones',
        ID_EMPLEADO = '$idEmpleado',
        CLASIF = '$clasif',
        FECHA_DE_INGRESO = '$fechaDeIngreso',
        CUIP = '$cuip',
        CUP = '$cup',
        NO_CLASIFICACION = '$noClasificacion',
        CLASIFICACION = '$clasificacion',
        SINDICALIZADO = '$sindicalizado',
        ADSCRITO = '$adscrito',
        DDOM = '$ddom',
        IMSS = '$imss',
        CCLOC = '$ccloc',
        VENCIMIENTO_CREDENCIAL = '$vencimientoCredencial',
        FOLIO_CREDENCIAL = '$folioCredencial',
        UBICACION_FISICA = '$ubicacionFisica',
        ZONA = '$zona',
        FECHA_DE_INGRESO_2 = '$fechaDeIngreso2',
        FECHA_CONCLUSION = '$fechaConclusion',
        FECHA_REINGRESO = '$fechaReingreso',
        CAMBIO_DE_APOYO = '$cambioDeApoyo',
        SUELDO_BASE = '$sueldoBase',
        PRESTACIONES = '$prestaciones',
        COMPENSACION = '$compensacion',
        NO_COMP = '$noComp',
        ANTIGUEDAD_GRADO = '$antiguedadGrado',
        COLUMNA_TEMPORAL = '$columnaTemporal',
        PROMOCION_2005 = '$promocion2005',
        RFC = '$rfc',
        HOMOCLAVE = '$homoclave',
        NO_CUENTA_BANCO = '$noCuentaBanco'
        WHERE NO_EMPLEADO_7 = '$noEmpleado7'";

    if ($conn->query($sqlUpdate) === TRUE) {
        // Redirigir de vuelta a modificar.php con el NO_EMPLEADO_7
        echo '<script>alert("Datos guardados");</script>';
        echo '<script>window.location.href = "../../modificar.php?NO_EMPLEADO=' . $noEmpleado7 . '";</script>';
        exit;
    } else {
        echo "Error al actualizar los datos: " . $conn->error;
    }
}
?>