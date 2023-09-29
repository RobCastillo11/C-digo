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

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta de Empleado</title>
</head>
<body>
    <h1>Mostrar Datos de Empleado</h1>
    <!-- Empieza Formulario 1 Generales-->
    <form id="form1" class="small-form" data-form-id="1" method="POST">
        <!-- Campo de texto para el NO_EMPLEADO -->
        <label for="noEmpleado">Número de Empleado:</label>
        <input type="text" id="noEmpleado" name="NO_EMPLEADO" required readonly value="<?php echo $row['NO_EMPLEADO']; ?>">
        <br><br>

        <!-- Campo de texto para el NOMBRE -->
        <label for="nombre">Nombre (s):</label>
        <input type="text" id="nombre" name="NOMBRE" required readonly value="<?php echo $row['NOMBRE']; ?>">
        <br><br>

        <!-- Campo de texto para el AP -->
        <label for="ap">Apellido Paterno:</label>
        <input type="text" id="ap" name="AP" required readonly value="<?php echo $row['AP']; ?>">
        <br><br>

        <!-- Campo de texto para el AM -->
        <label for="ap">Apellido Materno:</label>
        <input type="text" id="am" name="AM" required readonly value="<?php echo $row['AM']; ?>">
        <br><br>

        <!-- Campo de texto para el FN -->
        <label for="fn">Fecha de Nacimiento:</label>
        <input type="text" id="fn" name="FN" required readonly value="<?php echo $row['FN']; ?>">
        <br><br>

        <!-- Campo de texto para el EDAD -->
        <label for="edad">Edad:</label>
        <input type="text" id="edad" name="EDAD" required readonly value="<?php echo $row['EDAD']; ?>">
        <br><br>
        
        <!-- Campo de texto para el SEXO -->
        <label for="sexo">Sexo:</label>
        <input type="text" id="sexo" name="SEXO" required readonly value="<?php echo $row['SEXO']; ?>">
        <br><br>

        <!-- Campo de texto para el CORREO -->
        <label for="correo">Correo:</label>
        <input type="text" id="correo" name="CORREO" required readonly value="<?php echo $row['CORREO']; ?>">
        <br><br>

        <!-- Campo de texto para el EC -->
        <label for="ec">Estado Civil:</label>
        <input type="text" id="ec" name="EC" required readonly value="<?php echo $row['EC']; ?>">
        <br><br>

        <!-- Campo de texto para el SMN -->
        <label for="smn">Cartilla SMN:</label>
        <input type="text" id="smn" name="SMN" required readonly value="<?php echo $row['SMN']; ?>">
        <br><br>

        <!-- Campo de texto para el LICENCIA -->
        <label for="licencia">Licencia:</label>
        <input type="text" id="licencia" name="LICENCIA" required readonly value="<?php echo $row['LICENCIA']; ?>">
        <br><br>

        <!-- Campo de texto para el INEF -->
        <label for="ine_entrente">INE Enfrente:</label>
        <input type="text" id="ine_entrente" name="INEF" required readonly value="<?php echo $row['INEF']; ?>">
        <br><br>

        <!-- Campo de texto para el INEA -->
        <label for="ine_atras">INE Atras:</label>
        <input type="text" id="ine_atras" name="INEA" required readonly value="<?php echo $row['INEA']; ?>">
        <br><br>

        <!-- Campo de texto para el LN -->
        <label for="ln">Lugar de Nacimiento:</label>
        <input type="text" id="ln" name="LN" required readonly value="<?php echo $row['LN']; ?>">
        <br><br>

        <!-- Campo de texto para el CALLE -->
        <label for="calle">Calle:</label>
        <input type="text" id="calle" name="CALLE" required readonly value="<?php echo $row['CALLE']; ?>">
        <br><br>

        <!-- Campo de texto para el No_ext -->
        <label for="numero_exterior">Número Exterior:</label>
        <input type="text" id="numero_exterior" name="No_ext" required readonly value="<?php echo $row['No_ext']; ?>">
        <br><br>

        <!-- Campo de texto para el No_int -->
        <label for="numero_interior">Número Interior:</label>
        <input type="text" id="numero_interior" name="No_int" required readonly value="<?php echo $row['No_int']; ?>">
        <br><br>

        <!-- Campo de texto para el COLONIA -->
        <label for="colonia">Colonia:</label>
        <input type="text" id="colonia" name="COLONIA" required readonly value="<?php echo $row['COLONIA']; ?>">
        <br><br>

        <!-- Campo de texto para el MUNICIPIO -->
        <label for="municipio">Municipio:</label>
        <input type="text" id="municipio" name="MUNICIPIO" required readonly value="<?php echo $row['MUNICIPIO']; ?>">
        <br><br>

        <!-- Campo de texto para el ESTADO -->
        <label for="estado">Estado:</label>
        <input type="text" id="estado" name="ESTADO" required readonly value="<?php echo $row['ESTADO']; ?>">
        <br><br>

        <!-- Campo de texto para el CP -->
        <label for="cp">Códido Postal:</label>
        <input type="text" id="cp" name="CP" required readonly value="<?php echo $row['CP']; ?>">
        <br><br>

        <!-- Campo de texto para el CURP -->
        <label for="curp">CURP:</label>
        <input type="text" id="curp" name="CURP" required readonly value="<?php echo $row['CURP']; ?>">
        <br><br>

        <!-- Campo de textoarea para el CONSIDERACIONES -->
        <label for="consideraciones">Consideraciones:</label>
        <textarea rows="10" cols="50" id="consideraciones" name="CONSIDERACIONES" value="<?php echo $row['CONSIDERACIONES']; ?>"></textarea>
        <br><br>

        <!-- Botón de guardar CONSIDERACIONES -->
        <button type="button"><img src="">Guardar</button>
    </form>
    
    <!--Empíeza formulario 2 Datos Familiares-->
    <form>

    </form>

    <?php
    } else {
        echo "<p>Empleado no encontrado.</p>";
    }

    $conn->close();
    ?>
</body>
</html>
