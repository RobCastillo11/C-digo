<?php
require '../../database.php';

if ($conn->connect_error) {
    die("La conexión falló: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $noEmpleado = $_POST['NO_EMPLEADO'];
    $terminacionEstudio = $_POST['TERMINACION_DE_ESTUDIO'];
    $estudios = $_POST['ESTUDIOS'];
    $especialidad = $_POST['ESPECIALIDAD'];
    $documento = $_POST['DOCUMENTO'];
    $cfme = $_POST['CFME'];
    $grupo = $_POST['GRUPO'];
    $generacion = $_POST['GENERACION'];
    $tipoGrupo = $_POST['TIPO_DE_GRUPO'];
    $duracion = $_POST['DURACION'];
    $tiempoServicio = $_POST['TIEMPO_DE_SERVICIO'];
    $calificacionArmamento = $_POST['CALIFICACION_ARMAMENTO'];
    $calificacionPunteria = $_POST['CALIFICACION_PUNTERIA'];
    $tallasDomicilios = $_POST['TALLAS_Y_DOMICILIOS'];
    $nivelCalificacion = $_POST['NIVEL_DE_CALIFICACION'];
    $reproboExamen = $_POST['REPROBO_EXAMEN'];
    $egresadoAcademia = $_POST['EGRESADO_DE_LA_ACADEMIA'];
    $personalEgresadoAcademia = $_POST['PERSONAL_EGRESADO_ACADEMIA'];
    $cursoPeritoCalif = $_POST['CURSO_PERITO_CALIF'];

    // Actualizar los datos en la base de datos
    $sqlUpdate = "UPDATE datos_de_estudio SET 
        TERMINACION_DE_ESTUDIO = '$terminacionEstudio',
        ESTUDIOS = '$estudios',
        ESPECIALIDAD = '$especialidad',
        DOCUMENTO = '$documento',
        CFME = '$cfme',
        GRUPO = '$grupo',
        GENERACION = '$generacion',
        TIPO_DE_GRUPO = '$tipoGrupo',
        DURACION = '$duracion',
        TIEMPO_DE_SERVICIO = '$tiempoServicio',
        CALIFICACION_ARMAMENTO = '$calificacionArmamento',
        CALIFICACION_PUNTERIA = '$calificacionPunteria',
        TALLAS_Y_DOMICILIOS = '$tallasDomicilios',
        NIVEL_DE_CALIFICACION = '$nivelCalificacion',
        REPROBO_EXAMEN = '$reproboExamen',
        EGRESADO_DE_LA_ACADEMIA = '$egresadoAcademia',
        PERSONAL_EGRESADO_ACADEMIA = '$personalEgresadoAcademia',
        CURSO_PERITO_CALIF = '$cursoPeritoCalif'
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
