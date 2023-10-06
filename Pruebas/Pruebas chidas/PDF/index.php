<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generar PDF e Insertar Datos</title>
    <link rel="stylesheet" href="styles.css"> <!-- Enlaza el archivo CSS para estilos -->

    <!-- Importa la biblioteca jsPDF -->
    <script type="text/javascript" src="jspdf.min.js"></script>
</head>
<body>
    <h1>Crear Archivos PDF e Insertar Datos</h1>
    <form id="pdfForm" action="insert.php" method="POST">
        <!-- Etiqueta y campo para el nombre -->
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br><br>
        
        <!-- Etiqueta y campo para el apellido -->
        <label for="apellido">Apellido:</label>
        <input type="text" id="apellido" name="apellido" required><br><br>
        
        <!-- Etiqueta y campo para el mensaje -->
        <label for="mensaje">Mensaje:</label>
        <input type="text" id="mensaje" name="mensaje" placeholder="Escriba su mensaje aquí" required><br><br>
        
        <!-- Botón para insertar datos -->
        <button type="button" id="insertar">Insertar</button>

        <!-- Botón para generar el PDF -->
        <button type="button" id="crearPdf">Crear PDF</button>
    </form>

    <script src="script.js"></script> <!-- Enlaza el archivo JavaScript -->
</body>
</html>
