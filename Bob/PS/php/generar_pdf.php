<?php
require_once 'tcpdf/tcpdf.php';
require_once 'database.php'; // Asegúrate de incluir tu archivo de conexión a la base de datos aquí

if (isset($_POST['generar_pdf']) && isset($_POST['formularios'])) {
    $formulariosSeleccionados = $_POST['formularios'];

    // Crear un nuevo objeto TCPDF
    $pdf = new TCPDF();
 
    

    // Establecer información del documento
    $pdf->SetCreator('Nombre del Creador');
    $pdf->SetAuthor('Nombre del Autor');
    $pdf->SetTitle('Datos del Empleado');
    $pdf->SetSubject('Datos del Empleado');

    // Agregar una página
    $pdf->AddPage();

    // Consulta y agrega los datos de los formularios seleccionados al PDF
    foreach ($formulariosSeleccionados as $formulario) {
        // Consulta los datos del formulario actual y agrega al PDF
        $sql = "SELECT * FROM generales WHERE NO_EMPLEADO = '$formulario'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
        
            // Agrega los datos del formulario al PDF
            $html = '<h1>Datos Generales</h1>';
            $html .= '<p>Número de Empleado: ' . $row['NO_EMPLEADO'] . '</p>';
            $html .= '<p>Nombre: ' . $row['NOMBRE'] . '</p>';
            $html .= '<p>Apellido Paterno: ' . $row['AP'] . '</p>';
            $html .= '<p>Apellido Materno: ' . $row['AM'] . '</p>';
            $html .= '<p>Fecha de Nacimiento: ' . $row['FN'] . '</p>';
            $html .= '<p>Edad: ' . $row['EDAD'] . '</p>';
            $html .= '<p>Sexo: ' . $row['SEXO'] . '</p>';
            $html .= '<p>Correo: ' . $row['CORREO'] . '</p>';
            $html .= '<p>Estado Civil: ' . $row['EC'] . '</p>';
            $html .= '<p>Cartilla SMN: ' . $row['SMN'] . '</p>';
            $html .= '<p>Licencia: ' . $row['LICENCIA'] . '</p>';
            $html .= '<p>INE Enfrente: ' . $row['INEF'] . '</p>';
            $html .= '<p>INE Atras: ' . $row['INEA'] . '</p>';
            $html .= '<p>Lugar de Nacimiento: ' . $row['LN'] . '</p>';
            $html .= '<p>Calle: ' . $row['CALLE'] . '</p>';
            $html .= '<p>Número Exterior: ' . $row['No_ext'] . '</p>';
            $html .= '<p>Número Interior: ' . $row['No_int'] . '</p>';
            $html .= '<p>Colonia: ' . $row['COLONIA'] . '</p>';
            $html .= '<p>Municipio: ' . $row['MUNICIPIO'] . '</p>';
            $html .= '<p>Estado: ' . $row['ESTADO'] . '</p>';
            $html .= '<p>Código Postal: ' . $row['CP'] . '</p>';
            $html .= '<p>CURP: ' . $row['CURP'] . '</p>';
            // Agrega más campos aquí...
        
            $pdf->writeHTML($html, true, false, true, false, '');
        }   
    }

    // Salida del PDF al navegador como descarga
    $pdf->Output('datos_empleado.pdf', 'D');

    $conn->close();
} else {
    echo 'Formulario no enviado o formularios no seleccionados.';
}
?>
