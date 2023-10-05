<?php
require '../../database.php';

if ($conn->connect_error) {
    die("La conexión falló: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $noEmpleado = $_POST['NO_EMPLEADO_2'];
    $telCas = $_POST['TEL_CAS'];
    $telCel = $_POST['TEL_CEL'];
    $ts = $_POST['TS'];
    $idioma = $_POST['IDIOMA'];
    $escritura = $_POST['ESCRITURA'];
    $lectura = $_POST['LECTURA'];
    $diccion = $_POST['DICCION'];
    $dialecto = $_POST['DIALECTO'];
    $ldr = $_POST['LDR'];
    $nde = isset($_POST['NDE']) ? $_POST['NDE'] : 0;
    
    // Inicializar variables para esposas y hijos
    $esposas = [];
    $hijos = [];

    // Actualizar los datos en la base de datos
    $sqlUpdate = "UPDATE datos_familia SET 
        TEL_CAS = '$telCas',
        TEL_CEL = '$telCel',
        TS = '$ts',
        IDIOMA = '$idioma',
        ESCRITURA = '$escritura',
        LECTURA = '$lectura',
        DICCION = '$diccion',
        DIALECTO = '$dialecto',
        LDR = '$ldr',
        NDE = '$nde'";
    
    // Actualizar datos de las esposas
    for ($i = 0; $i < $nde; $i++) {
        $esposa = $_POST['ESPOSA'][$i];
        $apeEsposa1 = $_POST['APE_ESPOSA1'][$i];
        $apeEsposa2 = $_POST['APE_ESPOSA2'][$i];
        $esposas[] = compact('esposa', 'apeEsposa1', 'apeEsposa2');
    }
    
    // Actualizar datos de los hijos y calcular edades
    $nhs = isset($_POST['NHS']) ? $_POST['NHS'] : 0;
    for ($i = 0; $i < $nhs; $i++) {
        $hijo = $_POST['HIJO'][$i];
        $apdh1 = $_POST['APDH1'][$i];
        $apdh2 = $_POST['APDH2'][$i];
        $sexoH = $_POST['SEXOH'][$i];
        $fnhH = $_POST['FNH'][$i];
        
        // Calcular la edad a partir de la fecha de nacimiento
        $fechaNacimiento = new DateTime($fnhH);
        $hoy = new DateTime();
        $edadHijo = $fechaNacimiento->diff($hoy)->y;
        
        $hijos[] = compact('hijo', 'apdh1', 'apdh2', 'sexoH', 'fnhH', 'edadHijo');
    }
    
    // Transformar los arrays de esposas y hijos en cadenas JSON
    $esposasJSON = json_encode($esposas);
    $hijosJSON = json_encode($hijos);
    
    // Agregar los datos JSON al SQL
    $sqlUpdate .= ", NES = '$esposasJSON', NDH = '$hijosJSON' WHERE NO_EMPLEADO_2 = '$noEmpleado'";

    if ($conn->query($sqlUpdate) === TRUE) {
        // Redirigir de vuelta a modificar.php con el NO_EMPLEADO_2
        echo '<script>alert("Datos guardados");</script>';
        echo '<script>window.location.href = "../../modificar.php?NO_EMPLEADO=' . $noEmpleado . '";</script>';
        exit;
    } else {
        echo "Error al actualizar los datos: " . $conn->error;
    }
}
?>
