<?php
require 'database.php';

if ($conn->connect_error) {
    die("La conexión falló: " . $conn->connect_error);
}

$noEmpleado = $_GET['NO_EMPLEADO'];

// Consulta los datos generales del empleado
$sqlGenerales = "SELECT * FROM generales WHERE NO_EMPLEADO = '$noEmpleado'";
$resultGenerales = $conn->query($sqlGenerales);

// Consulta los datos familiares del empleado utilizando la clave foránea
$sqlFamilia = "SELECT * FROM datos_familia WHERE NO_EMPLEADO_2 = '$noEmpleado'";
$resultFamilia = $conn->query($sqlFamilia);

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

    <?php
    if ($resultGenerales->num_rows > 0) {
        $rowGenerales = $resultGenerales->fetch_assoc();
        ?>

        <!-- Formulario 1 Generales -->
        <form action="mostrar_datos.php" method="POST">
            <!-- Campo de texto para el NO_EMPLEADO -->
            <label for="noEmpleado">Número de Empleado:</label>
            <input type="text" id="noEmpleado" name="NO_EMPLEADO" required readonly value="<?php echo $rowGenerales ['NO_EMPLEADO']; ?>">
            <br><br>

            <!-- Campo de texto para el NOMBRE -->
            <label for="nombre">Nombre (s):</label>
            <input type="text" id="nombre" name="NOMBRE" required readonly value="<?php echo $rowGenerales ['NOMBRE']; ?>">
            <br><br>

            <!-- Campo de texto para el AP -->
            <label for="ap">Apellido Paterno:</label>
            <input type="text" id="ap" name="AP" required readonly value="<?php echo $rowGenerales ['AP']; ?>">
            <br><br>

            <!-- Campo de texto para el AM -->
            <label for="ap">Apellido Materno:</label>
            <input type="text" id="am" name="AM" required readonly value="<?php echo $rowGenerales ['AM']; ?>">
            <br><br>

            <!-- Campo de texto para el FN -->
            <label for="fn">Fecha de Nacimiento:</label>
            <input type="text" id="fn" name="FN" required readonly value="<?php echo $rowGenerales ['FN']; ?>">
            <br><br>

            <!-- Campo de texto para el EDAD -->
            <label for="edad">Edad:</label>
            <input type="text" id="edad" name="EDAD" required readonly value="<?php echo $rowGenerales ['EDAD']; ?>">
            <br><br>
            
            <!-- Campo de texto para el SEXO -->
            <label for="sexo">Sexo:</label>
            <input type="text" id="sexo" name="SEXO" required readonly value="<?php echo $rowGenerales ['SEXO']; ?>">
            <br><br>

            <!-- Campo de texto para el CORREO -->
            <label for="correo">Correo:</label>
            <input type="text" id="correo" name="CORREO" required readonly value="<?php echo $rowGenerales ['CORREO']; ?>">
            <br><br>

            <!-- Campo de texto para el EC -->
            <label for="ec">Estado Civil:</label>
            <input type="text" id="ec" name="EC" required readonly value="<?php echo $rowGenerales ['EC']; ?>">
            <br><br>

            <!-- Campo de texto para el SMN -->
            <label for="smn">Cartilla SMN:</label>
            <input type="text" id="smn" name="SMN" required readonly value="<?php echo $rowGenerales ['SMN']; ?>">
            <br><br>

            <!-- Campo de texto para el LICENCIA -->
            <label for="licencia">Licencia:</label>
            <input type="text" id="licencia" name="LICENCIA" required readonly value="<?php echo $rowGenerales ['LICENCIA']; ?>">
            <br><br>

            <!-- Campo de texto para el INEF -->
            <label for="ine_entrente">INE Enfrente:</label>
            <input type="text" id="ine_entrente" name="INEF" required readonly value="<?php echo $rowGenerales ['INEF']; ?>">
            <br><br>

            <!-- Campo de texto para el INEA -->
            <label for="ine_atras">INE Atras:</label>
            <input type="text" id="ine_atras" name="INEA" required readonly value="<?php echo $rowGenerales ['INEA']; ?>">
            <br><br>

            <!-- Campo de texto para el LN -->
            <label for="ln">Lugar de Nacimiento:</label>
            <input type="text" id="ln" name="LN" required readonly value="<?php echo $rowGenerales ['LN']; ?>">
            <br><br>

            <!-- Campo de texto para el CALLE -->
            <label for="calle">Calle:</label>
            <input type="text" id="calle" name="CALLE" required readonly value="<?php echo $rowGenerales ['CALLE']; ?>">
            <br><br>

            <!-- Campo de texto para el No_ext -->
            <label for="numero_exterior">Número Exterior:</label>
            <input type="text" id="numero_exterior" name="No_ext" required readonly value="<?php echo $rowGenerales ['No_ext']; ?>">
            <br><br>

            <!-- Campo de texto para el No_int -->
            <label for="numero_interior">Número Interior:</label>
            <input type="text" id="numero_interior" name="No_int" required readonly value="<?php echo $rowGenerales ['No_int']; ?>">
            <br><br>

            <!-- Campo de texto para el COLONIA -->
            <label for="colonia">Colonia:</label>
            <input type="text" id="colonia" name="COLONIA" required readonly value="<?php echo $rowGenerales ['COLONIA']; ?>">
            <br><br>

            <!-- Campo de texto para el MUNICIPIO -->
            <label for="municipio">Municipio:</label>
            <input type="text" id="municipio" name="MUNICIPIO" required readonly value="<?php echo $rowGenerales ['MUNICIPIO']; ?>">
            <br><br>

            <!-- Campo de texto para el ESTADO -->
            <label for="estado">Estado:</label>
            <input type="text" id="estado" name="ESTADO" required readonly value="<?php echo $rowGenerales ['ESTADO']; ?>">
            <br><br>

            <!-- Campo de texto para el CP -->
            <label for="cp">Códido Postal:</label>
            <input type="text" id="cp" name="CP" required readonly value="<?php echo $rowGenerales ['CP']; ?>">
            <br><br>

            <!-- Campo de texto para el CURP -->
            <label for="curp">CURP:</label>
            <input type="text" id="curp" name="CURP" required readonly value="<?php echo $rowGenerales ['CURP']; ?>">
            <br><br>

            <!-- Campo de textoarea para el CONSIDERACIONES -->
            <label for="consideraciones">Consideraciones:</label>
            <textarea rows="10" cols="50" id="consideraciones" name="CONSIDERACIONES" value="<?php echo $rowGenerales ['CONSIDERACIONES']; ?>"></textarea>
            <br><br>

            <!-- Botón de guardar CONSIDERACIONES -->
            <button type="button" >Guarar Consideraciones</button>
        </form>

        <?php
    } else {
        echo "<p>Empleado no encontrado.</p>";
    }

    if ($resultFamilia->num_rows > 0) {
        // Mostrar los datos familiares del empleado aquí, por ejemplo, en un formulario o tabla
        while ($rowFamilia = $resultFamilia->fetch_assoc()) {
            ?>

            <!-- Formulario 2 Datos de Familia -->
            <form action="mostrar_datos.php" method="POST">
                <!-- Campo de texto para el NO_EMPLEADO_2 -->
                <label for="noEmpleado2">Número de Empleado:</label>
                <input type="text" id="noEmpleado2" name="NO_EMPLEADO_2" required readonly value="<?php echo $rowFamilia['NO_EMPLEADO_2']; ?>">
                <br><br>

                <!-- Campo de texto para el TEL_CAS -->
                <label for="telCas">Teléfono Casa:</label>
                <input type="text" id="telCas" name="TEL_CAS" required readonly value="<?php echo $rowFamilia['TEL_CAS']; ?>">
                <br><br>

                <!-- Campo de texto para el TEL_CEL -->
                <label for="telCel">Teléfono Celular:</label>
                <input type="text" id="telCel" name="TEL_CEL" required readonly value="<?php echo $rowFamilia['TEL_CEL']; ?>">
                <br><br>

                <!-- Campo de texto para el TS -->
                <label for="ts">TS:</label>
                <input type="text" id="ts" name="TS" required readonly value="<?php echo $rowFamilia['TS']; ?>">
                <br><br>

                <!-- Campo de texto para el IDIOMA -->
                <label for="idioma">Idioma:</label>
                <input type="text" id="idioma" name="IDIOMA" required readonly value="<?php echo $rowFamilia['IDIOMA']; ?>">
                <br><br>

                <!-- Campo de texto para ESCRITURA -->
                <label for="escritura">Escritura:</label>
                <input type="text" id="escritura" name="ESCRITURA" required readonly value="<?php echo $rowFamilia['ESCRITURA']; ?>">
                <br><br>

                <!-- Campo de texto para LECTURA -->
                <label for="lectura">Lectura:</label>
                <input type="text" id="lectura" name="LECTURA" required readonly value="<?php echo $rowFamilia['LECTURA']; ?>">
                <br><br>

                <!-- Campo de texto para DICCION -->
                <label for="diccion">Diccion:</label>
                <input type="text" id="diccion" name="DICCION" required readonly value="<?php echo $rowFamilia['DICCION']; ?>">
                <br><br>

                <!-- Campo de texto para DIALECTO -->
                <label for="dialecto">Dialecto:</label>
                <input type="text" id="dialecto" name="DIALECTO" required readonly value="<?php echo $rowFamilia['DIALECTO']; ?>">
                <br><br>

                <!-- Otros campos de datos familiares aquí... -->

            </form>

            <?php
        }
    } else {
        echo "<p>No se encontraron datos familiares para este empleado.</p>";
    }

    $conn->close();
    ?>
</body>
</html>
