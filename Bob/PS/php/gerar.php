<?php
require 'database.php';
require 'tcpdf/tcpdf.php';

if (isset($_POST['formularios']) && is_array($_POST['formularios']) && !empty($_POST['formularios'])) {
    $formulariosSeleccionados = $_POST['formularios'];
} else {
    echo "Debes seleccionar al menos una opción en el formulario antes de generar el PDF.";
    exit;
}

$idEmpleado = 2; // Cambia esto por el ID del empleado que deseas consultar

$stmt = $conn->prepare("SELECT * FROM generales WHERE ID = ?");
$stmt->bind_param("i", $idEmpleado);

if ($stmt->execute()) {
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $rowGenerales = $result->fetch_assoc();

        // Definir una instancia de TCPDF
        $pdf = new TCPDF();

        // Configurar la página
        $pdf->AddPage();
        $pdf->SetFont('helvetica', 'B', 16);

        $logoPath = 'C:\xampp\htdocs\Bob\PS\imagenes/guardia_civil.png';
        $pdf->Image($logoPath, 10, 10, 40, 0, '', '', '', false, 300, '', false, false, 0);

        $pdf->SetXY(8, 10);
        $pdf->Cell(0, 10, 'Guardia Civil Estatal', 0, 1, 'C');

        $pdf->SetLineWidth(2);
        $pdf->SetDrawColor(0, 128, 0);
        $pdf->Line(10, 26, 70, 26);
        $pdf->SetDrawColor(255, 255, 255);
        $pdf->Line(70, 26, 130, 26);
        $pdf->SetDrawColor(255, 0, 0);
        $pdf->Line(130, 26, 190, 26);

        $pdf->SetFont('helvetica', '', 12);
        $pdf->setY(30);
        $html = '';

        if (in_array('datos_generales', $formulariosSeleccionados)) {
            $html .= '<h2>Datos Generales</h2>';
            $html .= generateDataHtml($rowGenerales, 'datos_generales');
        }

        $html .= '<p>&nbsp;</p>';
        $html .= '<p>&nbsp;</p>';

        if (in_array('datos_familia', $formulariosSeleccionados)) {
            $rowFamilia = fetchData($conn, 'datos_familia', $idEmpleado);
            if ($rowFamilia) {
                $html .= '<h2>Datos Familiares</h2>';
                $html .= generateDataHtml($rowFamilia, 'datos_familia');
            }
        }

        $html .= '<p>&nbsp;</p>';
        $html .= '<p>&nbsp;</p>';

        if (in_array('valucion_anual_desempeño', $formulariosSeleccionados)) {
            $rowEvaluacion = fetchData($conn, 'valucion_anual_desempeño', $idEmpleado);
            if ($rowEvaluacion) {
                $html .= '<h2>Evaluación Anual del Desempeño</h2>';
                $html .= generateDataHtml($rowEvaluacion, 'valucion_anual_desempeño');
            }
        }

        $html .= '<p>&nbsp;</p>';
        $html .= '<p>&nbsp;</p>';

        if (in_array('datos_de_estudio', $formulariosSeleccionados)) {
            $rowEstudio = fetchData($conn, 'datos_de_estudio', $idEmpleado);
            if ($rowEstudio) {
                $html .= '<h2>Datos de Estudio</h2>';
                $html .= generateDataHtml($rowEstudio, 'datos_de_estudio');
            }
        }

        $html .= '<p>&nbsp;</p>';
        $html .= '<p>&nbsp;</p>';

        if (in_array('militares', $formulariosSeleccionados)) {
            $rowMilitares = fetchData($conn, 'militares', $idEmpleado);
            if ($rowMilitares) {
                $html .= '<h2>Datos Militares</h2>';
                $html .= generateDataHtml($rowMilitares, 'militares');
            }
        }

        $html .= '<p>&nbsp;</p>';
        $html .= '<p>&nbsp;</p>';

        if (in_array('afiliados', $formulariosSeleccionados)) {
            $rowAfiliados = fetchData($conn, 'afiliados', $idEmpleado);
            if ($rowAfiliados) {
                $html .= '<h2>Datos de Afiliados</h2>';
                $html .= generateDataHtml($rowAfiliados, 'afiliados');
            }
        }

        $html .= '<p>&nbsp;</p>';
        $html .= '<p>&nbsp;</p>';

        if (in_array('datos_del_empleado', $formulariosSeleccionados)) {
            $rowEmpleado = fetchData($conn, 'datos_del_empleado', $idEmpleado);
            if ($rowEmpleado) {
                $html .= '<h2>Datos del Empleado</h2>';
                $html .= generateDataHtml($rowEmpleado, 'datos_del_empleado');
            }
        }

        $html .= '<p>&nbsp;</p>';
        $html .= '<p>&nbsp;</p>';

        if (in_array('dato_laborales_personal_c', $formulariosSeleccionados)) {
            $rowDataLaboralesPersonalC = fetchData($conn, 'dato_laborales_personal_c', $idEmpleado);
            if ($rowDataLaboralesPersonalC) {
                $html .= '<h2>Datos Laborales y Personales C</h2>';
                $html .= generateDataHtml($rowDataLaboralesPersonalC, 'dato_laborales_personal_c');
            }
        }

        $html .= '<p>&nbsp;</p>';
        $html .= '<p>&nbsp;</p>';
        
        if (in_array('indumentaria', $formulariosSeleccionados)) {
            $rowIndumentaria = fetchData($conn, 'indumentaria', $idEmpleado);
            if ($rowIndumentaria) {
                $html .= '<h2>Indumentaria</h2>';
                $html .= generateDataHtml($rowIndumentaria, 'indumentaria');
            }
        }

        $html .= '<p>&nbsp;</p>';
        $html .= '<p>&nbsp;</p>';
        
        if (in_array('movimiento_por_cambio_asdc', $formulariosSeleccionados)) {
            $rowCambiosAdscripcion = fetchData($conn, 'movimiento_por_cambio_asdc', $idEmpleado);
            if ($rowCambiosAdscripcion) {
                $html .= '<h2>Cambios de Adscripción</h2>';
                $html .= generateDataHtml($rowCambiosAdscripcion, 'movimiento_por_cambio_asdc');
            }
        }

        $html .= '<p>&nbsp;</p>';
        $html .= '<p>&nbsp;</p>';
        
        if (in_array('datos_del_empleo', $formulariosSeleccionados)) {
            $rowDataDelEmpleo = fetchData($conn, 'datos_del_empleo', $idEmpleado);
            if ($rowDataDelEmpleo) {
                $html .= '<h2>Datos del Empleo</h2>';
                $html .= generateDataHtml($rowDataDelEmpleo, 'datos_del_empleo');
            }
        }

        $html .= '<p>&nbsp;</p>';
        $html .= '<p>&nbsp;</p>';
        
        if (in_array('categorizacion', $formulariosSeleccionados)) {
            $rowCategorizacion = fetchData($conn, 'categorizacion', $idEmpleado);
            if ($rowCategorizacion) {
                $html .= '<h2>Categorización</h2>';
                $html .= generateDataHtml($rowCategorizacion, 'categorizacion');
            }
        }

        $html .= '<p>&nbsp;</p>';
        $html .= '<p>&nbsp;</p>';
        
        if (in_array('cursos_reconocimiento_cuerso', $formulariosSeleccionados)) {
            $rowCursosReconocimientoCuerso = fetchData($conn, 'cursos_reconocimiento_cuerso', $idEmpleado);
            if ($rowCursosReconocimientoCuerso) {
                $html .= '<h2>Cursos de Reconocimiento de Cuerso</h2>';
                $html .= generateDataHtml($rowCursosReconocimientoCuerso, 'cursos_reconocimiento_cuerso');
            }
        }

        $html .= '<p>&nbsp;</p>';
        $html .= '<p>&nbsp;</p>';
        
        if (in_array('incapacida', $formulariosSeleccionados)) {
            $rowIncapacida = fetchData($conn, 'incapacida', $idEmpleado);
            if ($rowIncapacida) {
                $html .= '<h2>Incapacidad</h2>';
                $html .= generateDataHtml($rowIncapacida, 'incapacida');
            }
        }        

        $pdf->writeHTML($html, true, false, true, false, '');

        $pdf->SetY(-15);
        $pdf->SetFont('helvetica', 'I', 8);
        $pdf->Cell(0, 10, 'Generado por: Guardia Civil Estatal', 0, 0, 'C');

        $pdfFileName = 'generar.pdf';

        ob_start();
        $pdf->Output($pdfFileName, 'D');
        $pdf_content = ob_get_clean();
        
        echo $pdf_content;
    } else {
        echo "No se encontraron datos para el empleado con ID: $idEmpleado";
    }
} else {
    echo "Hubo un error al procesar la consulta a la base de datos.";
}

$stmt->close();

function fetchData($conn, $tableName, $idEmpleado) {
    $stmt = $conn->prepare("SELECT * FROM $tableName WHERE ID = ?");
    $stmt->bind_param("i", $idEmpleado);

    if ($stmt->execute()) {
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            return $result->fetch_assoc();
        }
    }

    return false;
}

function generateDataHtml($data, $prefix) {
    $html = '';

    foreach ($data as $key => $value) {
        if ($key !== 'ID' && $key !== 'NO_EMPLEADO') {
            $html .= '<p><strong>' . ucwords(str_replace("_", " ", $key)) . ':</strong> ' . $value . '</p>';
            
        }
    }

    return $html;
}
?>

