<?php
require '../php/database.php';

if ($conn->connect_error) {
    die("La conexión falló: " . $conn->connect_error);
}

$noEmpleado = $_GET['NO_EMPLEADO'];

// Consulta los datos generales del empleado
$sqlGenerales = "SELECT * FROM generales WHERE NO_EMPLEADO = '$noEmpleado'";
$resultGenerales = $conn->query($sqlGenerales);

/*Consulta Formulario 1 Datos de Generales*/
if ($resultGenerales->num_rows > 0) {
    $rowGenerales = $resultGenerales->fetch_assoc();
} else {
    echo '<p class="error-message">Datos generales no encontrados.</p>';
}
?>


<section>
    <h2>Datos Generales</h2>
    
    <!-- Empieza Formulario 1 Generales-->
    <form action="php2/cons.php" method="POST">
        <div class="row">
            <div class="col-md-3">
                <!-- Primera columna de campos -->
                <!-- Campo de texto para el NO_EMPLEADO -->
                <div class="form-group">
                    <label for="noEmpleado" id="lnoEmp">Número de Empleado:</label>
                    <input type="text" id="noEmpleado" name="NO_EMPLEADO" required readonly value="<?php echo $rowGenerales['NO_EMPLEADO']; ?>">
                </div>
                <!-- Campo de texto para el NOMBRE -->
                <div class="form-group">
                    <label for="nombre" id="lnombre">Nombre (s):</label>
                    <input type="text" id="nombre" name="NOMBRE" required readonly value="<?php echo $rowGenerales['NOMBRE']; ?>">
                </div>
                <!-- Campo de texto para el AP -->
                <div class="form-group">
                    <label for="ap" id="lap">Apellido Paterno:</label>
                    <input type="text" id="ap" name="AP" required readonly value="<?php echo $rowGenerales['AP']; ?>">
                </div>
                <!-- Campo de texto para el AM -->
                <div class="form-group">
                    <label for="am" id="lam">Apellido Materno:</label>
                    <input type="text" id="am" name="AM" required readonly value="<?php echo $rowGenerales['AM']; ?>">
                </div>
            </div>

            <div class="col-md-3">
                <!-- Segunda columna de campos -->
                <!-- Campo de texto para el FN -->
                <div class="form-group">
                    <label for="fn" id="lfn">Fecha de Nacimiento:</label>
                    <input type="text" id="fn" name="FN" required readonly value="<?php echo $rowGenerales['FN']; ?>">
                </div>
                <!-- Campo de texto para el EDAD -->
                <div class="form-group">
                    <label for="edad" id="ledad">Edad:</label>
                    <input type="text" id="edad" name="EDAD" required readonly value="<?php echo $rowGenerales['EDAD']; ?>">
                </div>
                <!-- Campo de texto para el SEXO -->
                <div class="form-group">
                    <label for="sexo" id="lsexo">Sexo:</label>
                    <input type="text" id="sexo" name="SEXO" required readonly value="<?php echo $rowGenerales['SEXO']; ?>">
                </div>
                <!-- Campo de texto para el CORREO -->
                <div class="form-group">
                    <label for="correo" id="lcorreo">Correo:</label>
                    <input type="text" id="correo" name="CORREO" required readonly value="<?php echo $rowGenerales['CORREO']; ?>">
                </div>
            </div>

            <div class="col-md-3">
                <!-- Tercera columna de campos -->
                <!-- Campo de texto para el EC -->
                <div class="form-group">
                    <label for="ec" id="lec">Estado Civil:</label>
                    <input type="text" id="ec" name="EC" required readonly value="<?php echo $rowGenerales['EC']; ?>">
                </div>
                <!-- Campo de texto para el SMN -->
                <div class="form-group">
                    <label for="smn" id="lsmn">Cartilla SMN:</label>
                    <input type="text" id="smn" name="SMN" required readonly value="<?php echo $rowGenerales['SMN']; ?>">
                </div>
                <!-- Campo de texto para el LICENCIA -->
                <div class="form-group">
                    <label for="licencia" id="llicencia">Licencia:</label>
                    <input type="text" id="licencia" name="LICENCIA" required readonly value="<?php echo $rowGenerales['LICENCIA']; ?>">
                </div>
                <!-- Campo de texto para el INEF -->
                <div class="form-group">
                    <label for="ine_entrente" id="linef">INE Enfrente:</label>
                    <input type="text" id="ine_entrente" name="INEF" required readonly value="<?php echo $rowGenerales['INEF']; ?>">
                </div>
            </div>

            <div class="col-md-3">
                <!-- Cuarta columna de campos -->
                <!-- Campo de texto para el INEA -->
                <div class="form-group">
                    <label for="ine_atras" id="linea">INE Atras:</label>
                    <input type="text" id="ine_atras" name="INEA" required readonly value="<?php echo $rowGenerales['INEA']; ?>">
                </div>
                <!-- Campo de texto para el LN -->
                <div class="form-group">
                    <label for="ln" id="lln">Lugar de Nacimiento:</label>
                    <input type="text" id="ln" name="LN" required readonly value="<?php echo $rowGenerales['LN']; ?>">
                </div>
                <!-- Campo de texto para el CALLE -->
                <div class="form-group">
                    <label for="calle" id="lcalle">Calle:</label>
                    <input type="text" id="calle" name="CALLE" required readonly value="<?php echo $rowGenerales['CALLE']; ?>">
                </div>
                <!-- Campo de texto para el No_ext -->
                <div class="form-group">
                    <label for="numero_exterior" id="lnumero_exterior">Número Exterior:</label>
                    <input type="text" id="numero_exterior" name="No_ext" required readonly value="<?php echo $rowGenerales['No_ext']; ?>">
                </div>
            </div>
        </div>

        <!-- Tercera fila de campos -->
        <div class="row">
            <div class="col-md-3">
                <!-- Quinta columna de campos -->
                <!-- Campo de texto para el No_int -->
                <div class="form-group">
                    <label for="numero_interior" id="lnumero_interior">Número Interior:</label>
                    <input type="text" id="numero_interior" name="No_int" required readonly value="<?php echo $rowGenerales['No_int']; ?>">
                </div>
            </div>

            <div class="col-md-3">
                <!-- Sexta columna de campos -->
                <!-- Campo de texto para el COLONIA -->
                <div class="form-group">
                    <label for="colonia" id="lcolonia">Colonia:</label>
                    <input type="text" id="colonia" name="COLONIA" required readonly value="<?php echo $rowGenerales['COLONIA']; ?>">
                </div>
            </div>

            <div class="col-md-3">
                <!-- Séptima columna de campos -->
                <!-- Campo de texto para el MUNICIPIO -->
                <div class="form-group">
                    <label for="municipio" id="lmunicipio">Municipio:</label>
                    <input type="text" id="municipio" name="MUNICIPIO" required readonly value="<?php echo $rowGenerales['MUNICIPIO']; ?>">
                </div>
            </div>

            <div class="col-md-3">
                <!-- Octava columna de campos -->
                <!-- Campo de texto para el ESTADO -->
                <div class="form-group">
                    <label for="estado" id="lestado">Estado:</label>
                    <input type="text" id="estado" name="ESTADO" required readonly value="<?php echo $rowGenerales['ESTADO']; ?>">
                </div>
            </div>
        </div>

        <!-- Última fila de campos -->
        <div class="row">
            <div class="col-md-3">
                <!-- Novena columna de campos -->
                <!-- Campo de texto para el CP -->
                <div class="form-group">
                    <label for="cp" id="lcp">Código Postal:</label>
                    <input type="text" id="cp" name="CP" required readonly value="<?php echo $rowGenerales['CP']; ?>">
                </div>
            </div>

            <div class="col-md-3">
                <!-- Décima columna de campos -->
                <!-- Campo de texto para el CURP -->
                <div class="form-group">
                    <label for="curp" id="lcurp">CURP:</label>
                    <input type="text" id="curp" name="CURP" required readonly value="<?php echo $rowGenerales['CURP']; ?>">
                </div>
            </div>
        </div>
    <!-- Botón de guardar Evaluación -->
    <input type="submit" name="guardar" value="Guardar Evaluación"><br><br><br>
    </form>
</section>