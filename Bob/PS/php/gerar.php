<?php
require 'database.php';
require 'tcpdf/tcpdf.php';

// Verifica si se enviaron selecciones de formularios
if (isset($_POST['formularios']) && is_array($_POST['formularios']) && !empty($_POST['formularios'])) {
    $formulariosSeleccionados = $_POST['formularios'];
} else {
    // Si no se seleccionó ningún formulario, muestra un mensaje de error
    echo "Debes seleccionar al menos una opción en el formulario antes de generar el PDF.";
    exit;
}

// Consulta los datos de un empleado específico desde la base de datos
// Supongamos que tienes el ID del empleado que deseas consultar, por ejemplo, $idEmpleado
$idEmpleado = 1; // Debes cambiar esto por el ID del empleado que desees consultar

// Realiza una consulta a la base de datos para obtener los datos del empleado
$stmt = $conn->prepare("SELECT * FROM generales WHERE ID = ?");
$stmt->bind_param("i", $idEmpleado);

if ($stmt->execute()) {
    $result = $stmt->get_result();

    // Verifica si se encontraron resultados
    if ($result->num_rows > 0) {
        $rowGenerales = $result->fetch_assoc();

        // Crear una instancia de TCPDF
        $pdf = new TCPDF();
        $pdf->AddPage();

        // Estilo del título
        $pdf->SetFont('helvetica', 'B', 16);

        // Cargar la imagen del logotipo desde un archivo en tu servidor
        $logoPath = 'C:\xampp\htdocs\Bob\PS\imagenes/guardia_civil.png'; // Reemplaza con la ruta a tu imagen de logotipo
        $pdf->Image($logoPath, 10, 10, 40, 0, '', '', '', false, 300, '', false, false, 0);

        // Agregar un título al lado del logotipo
        $pdf->SetXY(8, 10); // Establecer la posición para el título
        $pdf->SetFont('helvetica', 'B', 16); // Configurar fuente y estilo
        $pdf->Cell(0, 10, 'Guardia Civil Estatal', 0, 1, 'C'); // Agregar el título

        // Agregar las tres líneas de colores debajo del título
        $pdf->SetLineWidth(2); // Ancho de la línea
        $pdf->SetDrawColor(0, 128, 0); // Color verde (R, G, B)
        $pdf->Line(10, 26, 70, 26); // Primera parte (verde)
        $pdf->SetDrawColor(255, 255, 255); // Color blanco (R, G, B)
        $pdf->Line(70, 26, 130, 26); // Segunda parte (blanco)
        $pdf->SetDrawColor(255, 0, 0); // Color rojo (R, G, B)
        $pdf->Line(130, 26, 190, 26); // Tercera parte (rojo)

        // Contenido
        $pdf->SetFont('helvetica', '', 12);
        $pdf->setY(30); // Ajusta esta posición según tus necesidades
        $html = '';

        if (in_array('datos_generales', $formulariosSeleccionados)) {
            $html .= '<h1 style="font-size: 16px; font-weight: bold; margin-top: 20px; text-align: center;">Datos Generales</h1>';
            $html .= '<p><strong>Número de Empleado:</strong> ' . $rowGenerales['NO_EMPLEADO'] . '</p>';
            $html .= '<p><strong>Nombre:</strong> ' . $rowGenerales['NOMBRE'] . '</p>';
            $html .= '<p><strong>Apellido Paterno:</strong> ' . $rowGenerales['AP'] . '</p>';
            $html .= '<p><strong>Apellido Materno:</strong> ' . $rowGenerales['AM'] . '</p>';
            $html .= '<p><strong>Fecha de Nacimiento:</strong> ' . $rowGenerales['FN'] . '</p>';
            $html .= '<p><strong>Edad:</strong> ' . $rowGenerales['EDAD'] . '</p>';
            $html .= '<p><strong>Sexo:</strong> ' . $rowGenerales['SEXO'] . '</p>';
            $html .= '<p><strong>Correo:</strong> ' . $rowGenerales['CORREO'] . '</p>';
            $html .= '<p><strong>Estado Civil:</strong> ' . $rowGenerales['EC'] . '</p>';
            $html .= '<p><strong>Cartilla SMN:</strong> ' . $rowGenerales['SMN'] . '</p>';
            $html .= '<p><strong>Licencia:</strong> ' . $rowGenerales['LICENCIA'] . '</p>';
            $html .= '<p><strong>INE Enfrente:</strong> ' . $rowGenerales['INEF'] . '</p>';
            $html .= '<p><strong>INE Atras:</strong> ' . $rowGenerales['INEA'] . '</p>';
            $html .= '<p><strong>Lugar de Nacimiento:</strong> ' . $rowGenerales['LN'] . '</p>';
            $html .= '<p><strong>Calle:</strong> ' . $rowGenerales['CALLE'] . '</p>';
            $html .= '<p><strong>Número Exterior:</strong> ' . $rowGenerales['No_ext'] . '</p>';
            $html .= '<p><strong>Número Interior:</strong> ' . $rowGenerales['No_int'] . '</p>';
            $html .= '<p><strong>Colonia:</strong> ' . $rowGenerales['COLONIA'] . '</p>';
            $html .= '<p><strong>Municipio:</strong> ' . $rowGenerales['MUNICIPIO'] . '</p>';
            $html .= '<p><strong>Estado:</strong> ' . $rowGenerales['ESTADO'] . '</p>';
            $html .= '<p><strong>Código Postal:</strong> ' . $rowGenerales['CP'] . '</p>';
            $html .= '<p><strong>CURP:</strong> ' . $rowGenerales['CURP'] . '</p>';
        }

   

                if (in_array('datos_familia', $formulariosSeleccionados)) {
                    $stmt = $conn->prepare("SELECT * FROM datos_familia WHERE ID = ?");
                    $stmt->bind_param("i", $idEmpleado);
                
                    if ($stmt->execute()) {
                        $result = $stmt->get_result();
                
                        if ($result->num_rows > 0) {
                            $rowFamilia = $result->fetch_assoc();

                    $html .= '<h2>Datos Familiares</h2>';
                    $html .= '<p><strong>Número de Empleado:</strong> ' . $rowFamilia['NO_EMPLEADO_2'] . '</p>';
                    $html .= '<p><strong>Teléfono Casa:</strong> ' . $rowFamilia['TEL_CAS'] . '</p>';
                    $html .= '<p><strong>Teléfono Celular:</strong> ' . $rowFamilia['TEL_CEL'] . '</p>';
                    $html .= '<p><strong>TS:</strong> ' . $rowFamilia['TS'] . '</p>';
                    $html .= '<p><strong>Idioma:</strong> ' . $rowFamilia['IDIOMA'] . '</p>';
                    $html .= '<p><strong>Escritura:</strong> ' . $rowFamilia['ESCRITURA'] . '</p>';
                    $html .= '<p><strong>Lectura:</strong> ' . $rowFamilia['LECTURA'] . '</p>';
                    $html .= '<p><strong>Dicción:</strong> ' . $rowFamilia['DICCION'] . '</p>';
                    $html .= '<p><strong>Dialecto:</strong> ' . $rowFamilia['DIALECTO'] . '</p>';
                    $html .= '<p><strong>Lugar de Residencia:</strong> ' . $rowFamilia['LDR'] . '</p>';
                    $html .= '<p><strong>Número de Esposas:</strong> ' . $rowFamilia['NDE'] . '</p>';
                    $html .= '<p><strong>Nombre de Esposas:</strong> ' . $rowFamilia['NES'] . '</p>';
                    $html .= '<p><strong>Apellido 1 Esposa:</strong> ' . $rowFamilia['APEA'] . '</p>';
                    $html .= '<p><strong>Apellido 2 Esposa:</strong> ' . $rowFamilia['AMEA'] . '</p>';
                    $html .= '<p><strong>Número de hijos:</strong> ' . $rowFamilia['NHS'] . '</p>';
                    $html .= '<p><strong>Nombre de hijos:</strong> ' . $rowFamilia['NDH'] . '</p>';
                    $html .= '<p><strong>Apellido 1 Hijo:</strong> ' . $rowFamilia['APDH'] . '</p>';
                    $html .= '<p><strong>Apellido 2 Hijo:</strong> ' . $rowFamilia['AMDH'] . '</p>';
                    $html .= '<p><strong>Sexo Hijo:</strong> ' . $rowFamilia['SEXOH'] . '</p>';
                    $html .= '<p><strong>Fecha de Nacimiento Hijo:</strong> ' . $rowFamilia['FNH'] . '</p>';
                    $html .= '<p><strong>Edad Hijo:</strong> ' . $rowFamilia['EDADH'] . '</p>';
                } else {
                    echo "No se encontraron datos para el ' Datos Familiares'";
                }
            } else {
                echo "Hubo un error al procesar la consulta a la base de datos para ' Datos Familiares'";
            }
        
            $stmt->close();
        }

 

        if (in_array('valucion_anual_desempeño', $formulariosSeleccionados)) {
            $stmt = $conn->prepare("SELECT * FROM valucion_anual_desempeño WHERE ID = ?");
            $stmt->bind_param("i", $idEmpleado);
        
            if ($stmt->execute()) {
                $result = $stmt->get_result();
        
                if ($result->num_rows > 0) {
                    $rowEvaluacion = $result->fetch_assoc();

            $html .= '<h2>Evaluación Anual del Desempeño</h2>';
            $html .= '<p><strong>Número de Empleado:</strong> ' . $rowEvaluacion['NO_EMPLEADO_3'] . '</p>';
            $html .= '<p><strong>Función:</strong> ' . $rowEvaluacion['FUNCION'] . '</p>';
            $html .= '<p><strong>Fecha de Evaluación 2022:</strong> ' . $rowEvaluacion['FE2022'] . '</p>';
            $html .= '<p><strong>Calificación Respecto a los Principios:</strong> ' . $rowEvaluacion['CRP'] . '</p>';
            $html .= '<p><strong>Calificación Productividad:</strong> ' . $rowEvaluacion['CPD'] . '</p>';
            $html .= '<p><strong>Calificación Cualidades y Aptitudes Profesionales:</strong> ' . $rowEvaluacion['ccap'] . '</p>';
        } else {
            echo "No se encontraron datos para el ' Evaluación Anual del Desempeño'";
        }
    } else {
        echo "Hubo un error al procesar la consulta a la base de datos para ' Evaluación Anual del Desempeño'";
    }

    $stmt->close();
}


if (in_array('datos_de_estudio', $formulariosSeleccionados)) {
    $stmt = $conn->prepare("SELECT * FROM datos_de_estudio WHERE ID = ?");
    $stmt->bind_param("i", $idEmpleado);

    if ($stmt->execute()) {
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $rowEstudio = $result->fetch_assoc();

            $html .= '<h2>Datos de Estudio</h2>';
            $html .= '<p><strong>Número de Empleado:</strong> ' . $rowEstudio['NO_EMPLEADO_4'] . '</p>';
            $html .= '<p><strong>Terminación de Estudio:</strong> ' . $rowEstudio['TDE'] . '</p>';
            $html .= '<p><strong>Estudios:</strong> ' . $rowEstudio['ESTUDIOS'] . '</p>';
            $html .= '<p><strong>Especialidad:</strong> ' . $rowEstudio['ESPECIALIDAD'] . '</p>';
            $html .= '<p><strong>Documento:</strong> ' . $rowEstudio['DOCUMENTO'] . '</p>';
            $html .= '<p><strong>INSTITUTO:</strong> ' . $rowEstudio['INSTITUTO'] . '</p>';
            $html .= '<p><strong>Curso Fuerza Metropolitana Estatal:</strong> ' . $rowEstudio['CFME'] . '</p>';
            $html .= '<p><strong>Grupo:</strong> ' . $rowEstudio['GRUPO'] . '</p>';
            $html .= '<p><strong>CUENTA CON ACADEMIA:</strong> ' . $rowEstudio['CCAC'] . '</p>';
            $html .= '<p><strong>Generación:</strong> ' . $rowEstudio['GENERACION'] . '</p>';
            $html .= '<p><strong>Tipo de Grupo:</strong> ' . $rowEstudio['TdG'] . '</p>';
            $html .= '<p><strong>Duración:</strong> ' . $rowEstudio['DURACION'] . '</p>';
            $html .= '<p><strong>Tiempo de Servicio:</strong> ' . $rowEstudio['TDS'] . '</p>';
            $html .= '<p><strong>Calificación de Armamento y Prácticas de Tiro:</strong> ' . $rowEstudio['CDAPT'] . '</p>';
            $html .= '<p><strong>Calificación de Puntería Avanzada (Fuerzas Especiales):</strong> ' . $rowEstudio['CPAF'] . '</p>';
            $html .= '<p><strong>Tallas y Domicilios Encuesta 2011:</strong> ' . $rowEstudio['TallasDomicilios'] . '</p>';
            $html .= '<p><strong>Nivel de Calificación:</strong> ' . $rowEstudio['NDC'] . '</p>';
            $html .= '<p><strong>Reprobo Examen:</strong> ' . $rowEstudio['REPROBO_EXAMEN'] . '</p>';
            $html .= '<p><strong>Egresado de la Academia:</strong> ' . $rowEstudio['EDLC'] . '</p>';
            $html .= '<p><strong>Personal Egresado de la Academia Guardia Civil Estatal 1era Generación:</strong> ' . $rowEstudio['PEAG'] . '</p>';
            $html .= '<p><strong>Curso Perito Calif:</strong> ' . $rowEstudio['CPC'] . '</p>';
        } else {
            echo "No se encontraron datos para 'Datos de Estudio'";
        }
    } else {
        echo "Hubo un error al procesar la consulta a la base de datos para 'Datos de Estudio'";
    }

    $stmt->close();
}



        // Agregar el contenido HTML al PDF
        $pdf->writeHTML($html, true, false, true, false, '');

        // Pie de página
        $pdf->SetY(-15); // Posición del pie de página
        $pdf->SetFont('helvetica', 'I', 8);
        $pdf->Cell(0, 10, 'Generado por: Guardia Civil Estatal', 0, 0, 'C');

        // Nombre del archivo PDF de salida
        $pdfFileName = 'generar.pdf';

        // Enviar el PDF al navegador
        $pdf->Output($pdfFileName, 'I');
    } else {
        echo "No se encontraron datos para el empleado con ID: $idEmpleado";
    }
} else {
    echo "Debes seleccionar al menos una opción en el formulario antes de generar el PDF.";
}

$stmt->close();
?> 