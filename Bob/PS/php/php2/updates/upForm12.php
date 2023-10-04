<?php
require '../../database.php';

if ($conn->connect_error) {
    die("La conexión falló: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $noEmpleado = $_POST['NO_EMPLEADO'];
    $no = $_POST['NO'];
    $noArchivo = $_POST['NA'];
    $nivel = $_POST['NIVEL'];
    $categoria = $_POST['CATEGORIA'];
    $gradoHomologado = $_POST['GRADO_HOMOLOGADO'];
    $grado = $_POST['GRADO'];
    $numeroAnterior = $_POST['NUMERO_ANTERIOR'];
    $numeroNuevo = $_POST['NUMERO_NUEVO'];
    $credencialLOC = $_POST['CCLA'];
    $actualizacion2016 = $_POST['ACTUALIZACION'];
    $vetting = $_POST['VETTING'];
    $oficialiaMayor = $_POST['OFICIALIA_MAYOR'];
    $rnpsp = $_POST['RNPSP'];
    $area = $_POST['AREA'];
    $agrupamientos = $_POST['AGRUPAMIENTOS'];
    $descripcion = $_POST['DESCRIPCION'];
    $polizaOficialMayor = $_POST['POM'];
    $polizaGNP = $_POST['PGNP'];
    $folio = $_POST['FOLIO'];
    $comisionHyJ = $_POST['CHYJ'];
    $becarios = $_POST['BECARIOS'];
    $metropolitana = $_POST['METROPOLITANA'];
    $gruposOperacionesTacticas = $_POST['GDOT'];
    $segundaCertificacion = $_POST['sdC'];
    $fechaProcesoEvaluacion = $_POST['FDPDE'];
    $fechaConclusion = $_POST['FDC'];
    $fechaEvaluacionCompetenciasBasicas = $_POST['FECB'];
    $fechaEvaluacionDesempeno = $_POST['FDED'];
    $fechaEmision = $_POST['FDE'];

    // Actualizar los datos en la base de datos
    $sqlUpdate = "UPDATE datos_del_empleo SET 
        NO = '$no',
        NA = '$noArchivo',
        NIVEL = '$nivel',
        CATEGORIA = '$categoria',
        GRADO_HOMOLOGADO = '$gradoHomologado',
        GRADO = '$grado',
        NUMERO_ANTERIOR = '$numeroAnterior',
        NUMERO_NUEVO = '$numeroNuevo',
        CCLA = '$credencialLOC',
        ACTUALIZACION = '$actualizacion2016',
        VETTING = '$vetting',
        OFICIALIA_MAYOR = '$oficialiaMayor',
        RNPSP = '$rnpsp',
        AREA = '$area',
        AGRUPAMIENTOS = '$agrupamientos',
        DESCRIPCION = '$descripcion',
        POM = '$polizaOficialMayor',
        PGNP = '$polizaGNP',
        FOLIO = '$folio',
        CHYJ = '$comisionHyJ',
        BECARIOS = '$becarios',
        METROPOLITANA = '$metropolitana',
        GDOT = '$gruposOperacionesTacticas',
        sdC = '$segundaCertificacion',
        FDPDE = '$fechaProcesoEvaluacion',
        FDC = '$fechaConclusion',
        FECB = '$fechaEvaluacionCompetenciasBasicas',
        FDED = '$fechaEvaluacionDesempeno',
        FDE = '$fechaEmision'
        WHERE NO_EMPLEADO = '$noEmpleado'";

    if ($conn->query($sqlUpdate) === TRUE) {
        // Redirigir de vuelta a modificar.php con el NO_EMPLEADO
        echo '<script>alert("Datos guardados");</script>';
        echo '<script>window.location.href = "../../modificar.php?NO_EMPLEADO=' . $noEmpleado . '";</script>';
        exit;
    } else {
        echo "Error al actualizar los datos: " . $conn->error;
    }
}
?>
