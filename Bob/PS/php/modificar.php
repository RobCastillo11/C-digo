<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar Datos de Empleado</title>
</head>
<body>
    <h1>Mostrar Datos de Empleado</h1>

    <?php
    require 'database.php';

    if ($conn->connect_error) {
        die("La conexión falló: " . $conn->connect_error);
    }

    $noEmpleado = $_GET['NO_EMPLEADO'];

    $sql = "SELECT * FROM generales WHERE NO_EMPLEADO = '$noEmpleado'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    ?>

    <form action="mostrar_datos.php" method="GET">
        <!-- Campo de texto para el NO_EMPLEADO -->
        <label for="noEmpleado">Número de Empleado:</label>
        <input type="text" id="noEmpleado" name="NO_EMPLEADO" required value="<?php echo $row['NO_EMPLEADO']; ?>">
        <br><br>

        <!-- Campo de texto para el NOMBRE -->
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="NOMBRE" required value="<?php echo $row['NOMBRE']; ?>">
        <br><br>

        <!-- Campo de texto para el AP -->
        <label for="ap">Apellido Paterno:</label>
        <input type="text" id="ap" name="AP" required value="<?php echo $row['AP']; ?>">
        <br><br>

        <!-- Campo de texto para el FN -->
        <label for="fn">Fecha de Nacimiento:</label>
        <input type="text" id="fn" name="FN" required value="<?php echo $row['FN']; ?>">
        <br><br>

        <!-- Botón de envío -->
        <input type="submit" value="Guardar Cambios">
    </form>

    <!-- Mostrar los datos recibidos del formulario -->
    <h2>Datos del Empleado</h2>
    <p>NO_EMPLEADO: <span id="mostrarNoEmpleado"></span></p>
    <p>NOMBRE: <span id="mostrarNombre"></span></p>
    <p>AP: <span id="mostrarAP"></span></p>
    <p>FN: <span id="mostrarFN"></span></p>

    <script>
        // JavaScript para mostrar los datos recibidos en el formulario
        const formulario = document.querySelector('form');
        const noEmpleadoInput = document.getElementById('noEmpleado');
        const nombreInput = document.getElementById('nombre');
        const apInput = document.getElementById('ap');
        const fnInput = document.getElementById('fn');
        const mostrarNoEmpleado = document.getElementById('mostrarNoEmpleado');
        const mostrarNombre = document.getElementById('mostrarNombre');
        const mostrarAP = document.getElementById('mostrarAP');
        const mostrarFN = document.getElementById('mostrarFN');

        formulario.addEventListener('submit', function (event) {
            event.preventDefault();

            // Mostrar los datos recibidos en el formulario
            mostrarNoEmpleado.textContent = noEmpleadoInput.value;
            mostrarNombre.textContent = nombreInput.value;
            mostrarAP.textContent = apInput.value;
            mostrarFN.textContent = fnInput.value;
        });
    </script>

    <?php
    } else {
        echo "<p>Empleado no encontrado.</p>";
    }

    $conn->close();
    ?>
</body>
</html>
