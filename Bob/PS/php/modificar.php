<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../estilos/estilo_modificacion.css">

    <title>Modificación de Datos del Empleado</title>

</head>
<body>
    <div class="container">
        <h1 id="title_generales">Modificación de Datos del Empleado</h1>

        <?php
        require 'database.php';

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
            ?>

<section>
    <h2>Datos Generales</h2>
    <!-- Empieza Formulario 1 Generales-->
    <form action="php2/updates/upForm1.php" method="POST">
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
                    <input type="text" id="nombre" name="NOMBRE"  value="<?php echo $rowGenerales['NOMBRE']; ?>">
                </div>
                <!-- Campo de texto para el AP -->
                <div class="form-group">
                    <label for="ap" id="lap">Apellido Paterno:</label>
                    <input type="text" id="ap" name="AP"  value="<?php echo $rowGenerales['AP']; ?>">
                </div>
                <!-- Campo de texto para el AM -->
                <div class="form-group">
                    <label for="am" id="lam">Apellido Materno:</label>
                    <input type="text" id="am" name="AM"  value="<?php echo $rowGenerales['AM']; ?>">
                </div>
            </div>

            <div class="col-md-3">
                <!-- Segunda columna de campos -->
                <!-- Campo de texto para el FN -->
                <div class="form-group">
                    <label for="fn" id="lfn">Fecha de Nacimiento:</label>
                    <input type="text" id="fn" name="FN"  value="<?php echo $rowGenerales['FN']; ?>">
                </div>
                <!-- Campo de texto para el EDAD -->
                <div class="form-group">
                    <label for="edad" id="ledad">Edad:</label>
                    <input type="text" id="edad" name="EDAD" required readonly value="<?php echo $rowGenerales['EDAD']; ?>">
                </div>
                <!-- Campo de texto para el SEXO -->
                <div class="form-group">
                    <label for="sexo" id="lsexo">Sexo:</label>
                    <input type="text" id="sexo" name="SEXO"  value="<?php echo $rowGenerales['SEXO']; ?>">
                </div>
                <!-- Campo de texto para el CORREO -->
                <div class="form-group">
                    <label for="correo" id="lcorreo">Correo:</label>
                    <input type="text" id="correo" name="CORREO"  value="<?php echo $rowGenerales['CORREO']; ?>">
                </div>
            </div>

            <div class="col-md-3">
                <!-- Tercera columna de campos -->
                <!-- Campo de texto para el EC -->
                <div class="form-group">
                    <label for="ec" id="lec">Estado Civil:</label>
                    <input type="text" id="ec" name="EC"  value="<?php echo $rowGenerales['EC']; ?>">
                </div>
                <!-- Campo de texto para el SMN -->
                <div class="form-group">
                    <label for="smn" id="lsmn">Cartilla SMN:</label>
                    <input type="text" id="smn" name="SMN"  value="<?php echo $rowGenerales['SMN']; ?>">
                </div>
                <!-- Campo de texto para el LICENCIA -->
                <div class="form-group">
                    <label for="licencia" id="llicencia">Licencia:</label>
                    <input type="text" id="licencia" name="LICENCIA"  value="<?php echo $rowGenerales['LICENCIA']; ?>">
                </div>
                <!-- Campo de texto para el INEF -->
                <div class="form-group">
                    <label for="ine_entrente" id="linef">INE Enfrente:</label>
                    <input type="text" id="ine_entrente" name="INEF"  value="<?php echo $rowGenerales['INEF']; ?>">
                </div>
            </div>

            <div class="col-md-3">
                <!-- Cuarta columna de campos -->
                <!-- Campo de texto para el INEA -->
                <div class="form-group">
                    <label for="ine_atras" id="linea">INE Atras:</label>
                    <input type="text" id="ine_atras" name="INEA"  value="<?php echo $rowGenerales['INEA']; ?>">
                </div>
                <!-- Campo de texto para el LN -->
                <div class="form-group">
                    <label for="ln" id="lln">Lugar de Nacimiento:</label>
                    <input type="text" id="ln" name="LN"  value="<?php echo $rowGenerales['LN']; ?>">
                </div>
                <!-- Campo de texto para el CALLE -->
                <div class="form-group">
                    <label for="calle" id="lcalle">Calle:</label>
                    <input type="text" id="calle" name="CALLE"  value="<?php echo $rowGenerales['CALLE']; ?>">
                </div>
                <!-- Campo de texto para el No_ext -->
                <div class="form-group">
                    <label for="numero_exterior" id="lnumero_exterior">Número Exterior:</label>
                    <input type="text" id="numero_exterior" name="No_ext"  value="<?php echo $rowGenerales['No_ext']; ?>">
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
                    <input type="text" id="numero_interior" name="No_int"  value="<?php echo $rowGenerales['No_int']; ?>">
                </div>
            </div>

            <div class="col-md-3">
                <!-- Sexta columna de campos -->
                <!-- Campo de texto para el COLONIA -->
                <div class="form-group">
                    <label for="colonia" id="lcolonia">Colonia:</label>
                    <input type="text" id="colonia" name="COLONIA"  value="<?php echo $rowGenerales['COLONIA']; ?>">
                </div>
            </div>

            <div class="col-md-3">
                <!-- Séptima columna de campos -->
                <!-- Campo de texto para el MUNICIPIO -->
                <div class="form-group">
                    <label for="municipio" id="lmunicipio">Municipio:</label>
                    <input type="text" id="municipio" name="MUNICIPIO"  value="<?php echo $rowGenerales['MUNICIPIO']; ?>">
                </div>
            </div>

            <div class="col-md-3">
                <!-- Octava columna de campos -->
                <!-- Campo de texto para el ESTADO -->
                <div class="form-group">
                    <label for="estado" id="lestado">Estado:</label>
                    <input type="text" id="estado" name="ESTADO"  value="<?php echo $rowGenerales['ESTADO']; ?>">
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
                    <input type="text" id="cp" name="CP"  value="<?php echo $rowGenerales['CP']; ?>">
                </div>
            </div>

            <div class="col-md-3">
                <!-- Décima columna de campos -->
                <!-- Campo de texto para el CURP -->
                <div class="form-group">
                    <label for="curp" id="lcurp">CURP:</label>
                    <input type="text" id="curp" name="CURP"  value="<?php echo $rowGenerales['CURP']; ?>">
                </div>
            </div>
        </div>

            <!-- Botón de guardar CAMBIOS -->
            <input type="submit" name="guardar" value="Guardar cambios" class="custom-button"><br><br><br>
    </form>
</section>

            <?php
        } else {
            echo '<p class="error-message">Datos generales no encontrados.</p>';
        }

        // Cierra la conexión después de consultar los datos generales
        $conn->close();
        ?>


        <!--Consulta los datos familiares del empleado-->
        <?php
        require 'database.php'; // Vuelve a incluir la conexión a la base de datos

        $sqlfamilia = "SELECT * FROM datos_familia WHERE NO_EMPLEADO_2 = '$noEmpleado'";
        $resultfamilia = $conn->query($sqlfamilia);

        /*Consulta Formulario 2 Datos de Familia*/
        if ($resultfamilia->num_rows > 0) {
            $rowfamilia = $resultfamilia->fetch_assoc();
            ?>
  <section>
    <h2>Datos Familiares</h2>
    <!-- Formulario 2 Datos de Familia -->
    <form action="php2/updates/upForm2.php" method="POST">
        <div class="row">
            <div class="col-md-3">
                <!-- Primera columna de campos -->
                <!-- Campo de texto para el NO_EMPLEADO_2 -->
                <div class="form-group">
                    <label for="noEmpleado2">Número de Empleado:</label>
                    <input type="text" id="noEmpleado2" name="NO_EMPLEADO_2" required readonly value="<?php echo $rowfamilia['NO_EMPLEADO_2']; ?>">
                </div>
                <!-- Campo de texto para el TEL_CAS -->
                <div class="form-group">
                    <label for="telCas">Teléfono Casa:</label>
                    <input type="text" id="telCas" name="TEL_CAS" required  value="<?php echo $rowfamilia['TEL_CAS']; ?>">
                </div>
                <!-- Campo de texto para el TEL_CEL -->
                <div class="form-group">
                    <label for="telCel">Teléfono Celular:</label>
                    <input type="text" id="telCel" name="TEL_CEL" required  value="<?php echo $rowfamilia['TEL_CEL']; ?>">
                </div>
            </div>

            <div class="col-md-3">
                <!-- Segunda columna de campos -->
                <!-- Campo de texto para el TS -->
                <div class="form-group">
                    <label for="ts">TS:</label>
                    <input type="text" id="ts" name="TS" required  value="<?php echo $rowfamilia['TS']; ?>">
                </div>
                <!-- Campo de texto para el IDIOMA -->
                <div class="form-group">
                    <label for="idioma">Idioma:</label>
                    <input type="text" id="idioma" name="IDIOMA" required  value="<?php echo $rowfamilia['IDIOMA']; ?>">
                </div>
                <!-- Campo de texto para ESCRITURA -->
                <div class="form-group">
                    <label for="escritura">Escritura:</label>
                    <input type="text" id="escritura" name="ESCRITURA" required  value="<?php echo $rowfamilia['ESCRITURA']; ?>">
                </div>
            </div>

            <div class="col-md-3">
                <!-- Tercera columna de campos -->
                <!-- Campo de texto para LECTURA -->
                <div class="form-group">
                    <label for="lectura">Lectura:</label>
                    <input type="text" id="lectura" name="LECTURA" required  value="<?php echo $rowfamilia['LECTURA']; ?>">
                </div>
                <!-- Campo de texto para DICCION -->
                <div class="form-group">
                    <label for="diccion">Dicción:</label>
                    <input type="text" id="diccion" name="DICCION" required  value="<?php echo $rowfamilia['DICCION']; ?>">
                </div>
                <!-- Campo de texto para DIALECTO -->
                <div class="form-group">
                    <label for="dialecto">Dialecto:</label>
                    <input type="text" id="dialecto" name="DIALECTO" required  value="<?php echo $rowfamilia['DIALECTO']; ?>">
                </div>
            </div>

            <div class="col-md-3">
                <!-- Cuarta columna de campos -->
                <!-- Campo de texto para LUGAR DE RESIDENCIA -->
                <div class="form-group">
                    <label for="ldr">Lugar de Residencia:</label>
                    <input type="text" id="ldr" name="LDR" required  value="<?php echo $rowfamilia['LDR']; ?>">
                </div>
                <!-- Campo de texto para ¿CUANTAS ESPOSAS TIENE? -->
                <div class="form-group">
                    <label for="nde">Número de Esposas:</label>
                    <input type="text" id="nde" name="NDE" required  value="<?php echo $rowfamilia['NDE']; ?>">
                </div>
                <!-- Campo de texto para NOMBRE (S) DE ESPOSA -->
                <div class="form-group">
                    <label for="nes">Nombre de Esposas:</label>
                    <input type="text" id="nes" name="NES" required  value="<?php echo $rowfamilia['NES']; ?>">
                </div>
                <!-- Campo de texto para APELLIDO PATERNO -->
                <div class="form-group">
                    <label for="apea">Apellido 1 Esposa:</label>
                    <input type="text" id="apea" name="APEA" required  value="<?php echo $rowfamilia['APEA']; ?>">
                </div>
            </div>
        </div>

        <!-- Segunda fila de campos -->
        <div class="row">
            <div class="col-md-3">
                <!-- Quinta columna de campos -->
                <!-- Campo de texto para APELLIDO MATERNO -->
                <div class="form-group">
                    <label for="amea">Apellido 2 Esposa:</label>
                    <input type="text" id="amea" name="AMEA" required  value="<?php echo $rowfamilia['AMEA']; ?>">
                </div>
            </div>

            <div class="col-md-3">
                <!-- Sexta columna de campos -->
                <!-- Campo de texto para ¿CUANTOS HIJOS TIENE? -->
                <div class="form-group">
                    <label for="nhs">Número de hijos:</label>
                    <input type="text" id="nhs" name="NHS" required  value="<?php echo $rowfamilia['NHS']; ?>">
                </div>
                <!-- Campo de texto para NOMBRE (S) DE HIJO (S) -->
                <div class="form-group">
                    <label for="ndh">Nombre de hijos:</label>
                    <input type="text" id="ndh" name= "NDH" required  value="<?php echo $rowfamilia['NDH']; ?>">
                </div>
                <!-- Campo de texto para APELLIDO PATERNO -->
                <div class="form-group">
                    <label for="apdh">Apellido 1 Hijo:</label>
                    <input type="text" id="apdh" name="APDH" required  value="<?php echo $rowfamilia['APDH']; ?>">
                </div>
            </div>

            <div class="col-md-3">
                <!-- Séptima columna de campos -->
                <!-- Campo de texto para APELLIDO MATERNO -->
                <div class="form-group">
                    <label for="amdh">Apellido 2 Hijo:</label>
                    <input type="text" id="amdh" name="AMDH" required  value="<?php echo $rowfamilia['AMDH']; ?>">
                </div>
                <!-- Campo de texto para SEXO -->
                <div class="form-group">
                    <label for="sexoh">Sexo Hijo:</label>
                    <input type="text" id="sexoh" name="SEXOH" required  value="<?php echo $rowfamilia['SEXOH']; ?>">
                </div>
                <!-- Campo de texto para FECHA DE NACIMIENTO -->
                <div class="form-group">
                    <label for="fnh">Fecha de Nacimiento Hijo:</label>
                    <input type="text" id="fnh" name="FNH" required  value="<?php echo $rowfamilia['FNH']; ?>">
                </div>
            </div>

            <div class="col-md-3">
                <!-- Octava columna de campos -->
                <!-- Campo de texto para EDAD -->
                <div class="form-group">
                    <label for="edadh">Edad Hijo:</label>
                    <input type="text" id="edadh" name="EDADH" required  value="<?php echo $rowfamilia['EDADH']; ?>">
                </div>
            </div>
        </div>

           <!-- Botón de guardar CAMBIOS -->
           <input type="submit" name="guardar" value="Guardar cambios" class="custom-button"><br><br><br>
    </form>
</section>

            <?php
      } else {
        echo '<p class="error-message">Datos familiares no encontrados.</p>';
    }

        // Cierra la conexión después de consultar los datos familiares
        $conn->close();
        ?>

                <!--Consulta los datos de evaluación anual del desempeño-->
                <?php
        require 'database.php'; // Vuelve a incluir la conexión a la base de datos

        $sqlEvaluacion = "SELECT * FROM valucion_anual_desempeño WHERE NO_EMPLEADO_3 = '$noEmpleado'";
        $resultEvaluacion = $conn->query($sqlEvaluacion);

      /* Consulta Formulario de Evaluación */
    if ($resultEvaluacion->num_rows > 0) {
        $rowEvaluacion = $resultEvaluacion->fetch_assoc();
        ?>
           <section>
    <h2>Evaluación Anual del Desempeño</h2>
    <!-- Formulario de Evaluación -->
    <form action="php2/updates/upForm3.php" method="POST">
        <div class="row">
            <div class="col-md-3">
                <!-- Primera columna de campos -->
                <!-- Campo de texto para el Número de Empleado -->
                <div class="form-group">
                    <label for="noEmpleado3">Número de Empleado:</label>
                    <input type="text" id="noEmpleado3" name="NO_EMPLEADO_3" required readonly value="<?php echo $rowEvaluacion['NO_EMPLEADO_3']; ?>">
                </div>
                <!-- Campo de texto para la Función -->
                <div class="form-group">
                    <label for="funcion">Función:</label>
                    <input type="text" id="funcion" name="FUNCION" required  value="<?php echo $rowEvaluacion['FUNCION']; ?>">
                </div>
            </div>

            <div class="col-md-3">
                <!-- Segunda columna de campos -->
                <!-- Campo de texto para la Fecha de Evaluación 2022 -->
                <div class="form-group">
                    <label for="fechaEvaluacion">Fecha de Evaluación 2022:</label>
                    <input type="text" id="fechaEvaluacion" name="FE2022" required  value="<?php echo $rowEvaluacion['FE2022']; ?>">
                </div>
                <!-- Campo de texto para la Calificación Respecto a los Principios -->
                <div class="form-group">
                    <label for="calificacionPrincipios">Calificación Respecto a los Principios:</label>
                    <input type="text" id="calificacionPrincipios" name="CRP" required  value="<?php echo $rowEvaluacion['CRP']; ?>">
                </div>
            </div>

            <div class="col-md-3">
                <!-- Tercera columna de campos -->
                <!-- Campo de texto para la Calificación Productividad -->
                <div class="form-group">
                    <label for="calificacionProductividad">Calificación Productividad:</label>
                    <input type="text" id="calificacionProductividad" name="CPD" required  value="<?php echo $rowEvaluacion['CPD']; ?>">
                </div>
                <!-- Campo de texto para la Calificación Cualidades y Aptitudes Profesionales -->
                <div class="form-group">
                    <label for="calificacionCualidades">Calificación Cualidades y Aptitudes Profesionales:</label>
                    <input type="text" id="calificacionCualidades" name="ccap" required  value="<?php echo $rowEvaluacion['ccap']; ?>">
                </div>
            </div>

            <div class="col-md-3">
                <!-- Cuarta columna de campos -->
                <!-- Espacio en blanco para alinear con los otros formularios -->
                <div class="form-group">
                    <label>&nbsp;</label>
                    <br><br><br><br><br><br>
                </div>
            </div>
        </div>

          <!-- Botón de guardar CAMBIOS -->
          <input type="submit" name="guardar" value="Guardar cambios" class="custom-button"><br><br><br>
    </form>
</section>
            <?php
        } else {
            echo '<p class="error-message">Datos de Evaluación no encontrados.</p>';
        }

        // Cierra la conexión después de consultar Evaluación
        $conn->close();
        ?>


                <!-- Consulta los datos de estudio del empleado-->
                <?php
        require 'database.php'; // Vuelve a incluir la conexión a la base de datos

    // Consulta los datos de estudio del empleado
    $sqlEstudio = "SELECT * FROM datos_de_estudio WHERE NO_EMPLEADO = '$noEmpleado'";
    $resultEstudio = $conn->query($sqlEstudio);

    /* Consulta Formulario de Datos de Estudio */
    if ($resultEstudio->num_rows > 0) {
        $rowEstudio = $resultEstudio->fetch_assoc();
        ?>
     <section>
    <h2>Datos de Estudio</h2>
    <!-- Formulario de Datos de Estudio -->
    <form action="php2/updates/upForm4.php" method="POST">
        <div class="row">
            <div class="col-md-3">
                <!-- Primera columna de campos -->
                <!-- Campo de texto para el Número de Empleado -->
                <div class="form-group">
                    <label for="noEmpleado">Número de Empleado:</label>
                    <input type="text" id="noEmpleado" name="NO_EMPLEADO" required readonly value="<?php echo $rowEstudio['NO_EMPLEADO']; ?>">
                </div>
                <!-- Campo de texto para la Terminación de Estudio -->
                <div class="form-group">
                    <label for="terminacionEstudio">Terminación de Estudio:</label>
                    <input type="text" id="terminacionEstudio" name="TERMINACION_DE_ESTUDIO" required  value="<?php echo $rowEstudio['TERMINACION_DE_ESTUDIO']; ?>">
                </div>
            </div>

            <div class="col-md-3">
                <!-- Segunda columna de campos -->
                <!-- Campo de texto para los Estudios -->
                <div class="form-group">
                    <label for="estudios">Estudios:</label>
                    <input type="text" id="estudios" name="ESTUDIOS" required  value="<?php echo $rowEstudio['ESTUDIOS']; ?>">
                </div>
                <!-- Campo de texto para la Especialidad -->
                <div class="form-group">
                    <label for="especialidad">Especialidad:</label>
                    <input type="text" id="especialidad" name="ESPECIALIDAD" required  value="<?php echo $rowEstudio['ESPECIALIDAD']; ?>">
                </div>
            </div>

            <div class="col-md-3">
                <!-- Tercera columna de campos -->
                <!-- Campo de texto para el Documento -->
                <div class="form-group">
                    <label for="documento">Documento:</label>
                    <input type="text" id="documento" name="DOCUMENTO" required  value="<?php echo $rowEstudio['DOCUMENTO']; ?>">
                </div>
                <!-- Campo de texto para el Curso Fuerza Metropolitana Estatal -->
                <div class="form-group">
                    <label for="cfme">Curso Fuerza Metropolitana Estatal:</label>
                    <input type="text" id="cfme" name="CFME" required  value="<?php echo $rowEstudio['CFME']; ?>">
                </div>
            </div>

            <div class="col-md-3">
                <!-- Cuarta columna de campos -->
                <!-- Campo de texto para el Grupo -->
                <div class="form-group">
                    <label for="grupo">Grupo:</label>
                    <input type="text" id="grupo" name="GRUPO" required  value="<?php echo $rowEstudio['GRUPO']; ?>">
                </div>
                
                <!-- Campo de selección para CUENTA CON ACADEMIA -->
                <div class="form-group">
                    <label for="CCAC" class="small-label">CUENTA CON ACADEMIA:</label>
                    <select class="form-control form-control-sm small-input" id="CCAC" name="CCAC">
                        <option value="OP" <?php echo ($rowEstudio['CUENTA_CON_ACADEMIA'] == 'OP') ? 'selected' : ''; ?>>ELIGE UNA OPCIÓN</option>
                        <option value="OPERATIVA" <?php echo ($rowEstudio['CUENTA_CON_ACADEMIA'] == 'OPERATIVA') ? 'selected' : ''; ?>>OPERATIVA</option>
                        <option value="ADMINISTRATIVA" <?php echo ($rowEstudio['CUENTA_CON_ACADEMIA'] == 'ADMINISTRATIVA') ? 'selected' : ''; ?>>ADMINISTRATIVA</option>
                        <option value="NO_CURSADA" <?php echo ($rowEstudio['CUENTA_CON_ACADEMIA'] == 'NO_CURSADA') ? 'selected' : ''; ?>>NO CURSADA</option>
                        <option value="no_cuenta" <?php echo ($rowEstudio['CUENTA_CON_ACADEMIA'] == 'no_cuenta') ? 'selected' : ''; ?>>NO CUENTA</option>
                    </select>
                </div>

                <!-- Campo de texto para la Generación -->
                <div class="form-group">
                    <label for="generacion">Generación:</label>
                    <input type="text" id="generacion" name="GENERACION" required  value="<?php echo $rowEstudio['GENERACION']; ?>">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3">
                <!-- Quinta columna de campos -->
                <!-- Campo de texto para el Tipo de Grupo -->
                <div class="form-group">
                    <label for="tipoGrupo">Tipo de Grupo:</label>
                    <input type="text" id="tipoGrupo" name="TIPO_DE_GRUPO" required  value="<?php echo $rowEstudio['TIPO_DE_GRUPO']; ?>">
                </div>
                <!-- Campo de texto para la Duración -->
                <div class="form-group">
                    <label for="duracion">Duración:</label>
                    <input type="text" id="duracion" name="DURACION" required  value="<?php echo $rowEstudio['DURACION']; ?>">
                </div>
            </div>

            <div class="col-md-3">
                <!-- Sexta columna de campos -->
                <!-- Campo de texto para el Tiempo de Servicio -->
                <div class="form-group">
                    <label for="tiempoServicio">Tiempo de Servicio:</label>
                    <input type="text" id="tiempoServicio" name="TIEMPO_DE_SERVICIO" required  value="<?php echo $rowEstudio['TIEMPO_DE_SERVICIO']; ?>">
                </div>
                <!-- Campo de texto para la Calificación de Armamento y Prácticas de Tiro -->
                <div class="form-group">
                    <label for="calificacionArmamento">Calificación de Armamento y Prácticas de Tiro:</label>
                    <input type="text" id="calificacionArmamento" name="CALIFICACION_ARMAMENTO" required  value="<?php echo $rowEstudio['CALIFICACION_ARMAMENTO']; ?>">
                </div>
            </div>

            <div class="col-md-3">
                <!-- Séptima columna de campos -->
                <!-- Campo de texto para la Calificación de Puntería Avanzada (Fuerzas Especiales) -->
                <div class="form-group">
                    <label for="calificacionPunteria">Calificación de Puntería Avanzada (Fuerzas Especiales):</label>
                    <input type="text" id="calificacionPunteria" name="CALIFICACION_PUNTERIA" required  value="<?php echo $rowEstudio['CALIFICACION_PUNTERIA']; ?>">
                </div>
                <!-- Campo de texto para Tallas y Domicilios Encuesta 2011 -->
                <div class="form-group">
                    <label for="tallasDomicilios">Tallas y Domicilios Encuesta 2011:</label>
                    <input type="text" id="tallasDomicilios" name="TALLAS_Y_DOMICILIOS" required  value="<?php echo $rowEstudio['TALLAS_Y_DOMICILIOS']; ?>">
                </div>
            </div>

            <div class="col-md-3">
                <!-- Octava columna de campos -->
                <!-- Campo de texto para el Nivel de Calificación -->
                <div class="form-group">
                    <label for="nivelCalificacion">Nivel de Calificación:</label>
                    <input type="text" id="nivelCalificacion" name="NIVEL_DE_CALIFICACION" required  value="<?php echo $rowEstudio['NIVEL_DE_CALIFICACION']; ?>">
                </div>
                <!-- Campo de texto para Reprobo Examen -->
                <div class="form-group">
                    <label for="reproboExamen">Reprobo Examen:</label>
                    <input type="text" id="reproboExamen" name="REPROBO_EXAMEN" required  value="<?php echo $rowEstudio['REPROBO_EXAMEN']; ?>">
                </div>
                <!-- Campo de texto para Egresado de la Academia -->
                <div class="form-group">
                    <label for="egresadoAcademia">Egresado de la Academia:</label>
                    <input type="text" id="egresadoAcademia" name="EGRESADO_DE_LA_ACADEMIA" required  value="<?php echo $rowEstudio['EGRESADO_DE_LA_ACADEMIA']; ?>">
                </div>
                <!-- Campo de texto para Personal Egresado de la Academia Guardia Civil Estatal 1era Generación -->
                <div class="form-group">
                    <label for="personalEgresadoAcademia">Personal Egresado de la Academia Guardia Civil Estatal 1era Generación:</label>
                    <input type="text" id="personalEgresadoAcademia" name="PERSONAL_EGRESADO_ACADEMIA" required  value="<?php echo $rowEstudio['PERSONAL_EGRESADO_ACADEMIA']; ?>">
                </div>
                <!-- Campo de texto para Curso Perito Calif -->
                <div class="form-group">
                    <label for="cursoPeritoCalif">Curso Perito Calif:</label>
                    <input type="text" id="cursoPeritoCalif" name="CURSO_PERITO_CALIF" required  value="<?php echo $rowEstudio['CURSO_PERITO_CALIF']; ?>">
                </div>
            </div>
        </div>

         <!-- Botón de guardar CAMBIOS -->
         <input type="submit" name="guardar" value="Guardar cambios" class="custom-button"><br><br><br>
    </form>
</section>

            <?php
       } else {
        echo '<p class="error-message">Datos de Estudio no encontrados.</p>';
    }

        // Cierra la conexión después de consultar edatos de estudio
        $conn->close();
        ?>

                <!-- Consulta los datos militares-->
                <?php
        require 'database.php'; // Vuelve a incluir la conexión a la base de datos

   // Consulta los datos militares del empleado
   $sqlMilitares = "SELECT * FROM militares WHERE NO_EMPLEADO = '$noEmpleado'";
   $resultMilitares = $conn->query($sqlMilitares);

   /* Consulta Formulario de Datos Militares */
   if ($resultMilitares->num_rows > 0) {
       $rowMilitares = $resultMilitares->fetch_assoc();
       ?>
            <section>
    <h2>Datos Militares</h2>
    <!-- Formulario de Datos Militares -->
    <form action="php2/updates/upForm5.php" method="POST">
        <div class="row">
            <div class="col-md-3">
                <!-- Primera columna de campos -->
                <!-- Campo de texto para el Número de Empleado -->
                <div class="form-group">
                    <label for="noEmpleado">Número de Empleado:</label>
                    <input type="text" id="noEmpleado" name="NO_EMPLEADO" required readonly value="<?php echo $rowMilitares['NO_EMPLEADO']; ?>">
                </div>
            </div>

            <div class="col-md-3">
                <!-- Segunda columna de campos -->
                <!-- Campo de texto para Ex Militares -->
                <div class="form-group">
                    <label for="exMilitares">Ex Militares:</label>
                    <input type="text" id="exMilitares" name="EXMILITARES" required  value="<?php echo $rowMilitares['EXMILITARES']; ?>">
                </div>
            </div>

            <div class="col-md-3">
                <!-- Tercera columna de campos -->
                <!-- Campo de texto para Ex Militar -->
                <div class="form-group">
                    <label for="exMilitar">Ex Militar:</label>
                    <input type="text" id="exMilitar" name="EXMILITAR" required  value="<?php echo $rowMilitares['EXMILITAR']; ?>">
                </div>
            </div>

            <div class="col-md-3">
                <!-- Cuarta columna de campos -->
                <!-- Campo de texto para Grado y Arma de Servicio -->
                <div class="form-group">
                    <label for="gradoArma">Grado y Arma de Servicio:</label>
                    <input type="text" id="gradoArma" name="GAS" required  value="<?php echo $rowMilitares['GAS']; ?>">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3">
                <!-- Quinta columna de campos -->
                <!-- Campo de texto para Fecha Alta de Servicio -->
                <div class="form-group">
                    <label for="fechaAlta">Fecha Alta de Servicio:</label>
                    <input type="text" id="fechaAlta" name="FADS" required  value="<?php echo $rowMilitares['FADS']; ?>">
                </div>
            </div>

            <div class="col-md-3">
                <!-- Sexta columna de campos -->
                <!-- Campo de texto para Fecha Retiro Baja/Licencia -->
                <div class="form-group">
                    <label for="fechaRetiro">Fecha Retiro Baja/Licencia:</label>
                    <input type="text" id="fechaRetiro" name="FRBL" required  value="<?php echo $rowMilitares['FRBL']; ?>">
                </div>
            </div>

            <div class="col-md-3">
                <!-- Séptima columna de campos -->
                <!-- Campo de texto para Motivo Baja -->
                <div class="form-group">
                    <label for="motivoBaja">Motivo Baja:</label>
                    <input type="text" id="motivoBaja" name="MB" required  value="<?php echo $rowMilitares['MB']; ?>">
                </div>
            </div>
        </div>

              <!-- Botón de guardar CAMBIOS -->
              <input type="submit" name="guardar" value="Guardar cambios" class="custom-button"><br><br><br>
    </form>
</section>
            <?php
      } else {
        echo '<p class="error-message">Datos de Militares no encontrados.</p>';
    }

        // Cierra la conexión después de consultar militares
        $conn->close();
        ?>


                <!-- Consulta los datos afiliados-->
                <?php
        require 'database.php'; // Vuelve a incluir la conexión a la base de datos

   // Consulta los datos de afiliados del empleado
   $sqlAfiliados = "SELECT * FROM afiliados WHERE NO_EMPLEADO = '$noEmpleado'";
   $resultAfiliados = $conn->query($sqlAfiliados);

   /* Consulta Formulario de Datos de Afiliados */
   if ($resultAfiliados->num_rows > 0) {
       $rowAfiliados = $resultAfiliados->fetch_assoc();
       ?>
            <section>
    <h2>Datos de Afiliados</h2>
    <!-- Formulario de Datos de Afiliados en 2 columnas -->
    <form action="php2/updates/upForm6.php" method="POST" style="display: flex; flex-wrap: wrap;">
        <div style="flex: 1; margin-right: 10px;">
            <!-- Columna 1 -->
            <!-- Campo de texto para el Número de Empleado -->
            <label for="noEmpleado">Número de Empleado:</label>
            <input type="text" id="noEmpleado" name="NO_EMPLEADO" required readonly value="<?php echo $rowAfiliados['NO_EMPLEADO']; ?>">
            <br><br>

            <!-- Campo de texto para Afiliados con Horario -->
            <label for="afiliadosHorario">Afiliados con Horario:</label>
            <input type="text" id="afiliadosHorario" name="ACH" required  value="<?php echo $rowAfiliados['ACH']; ?>">
            <br><br>
        </div>
        <div style="flex: 1;">
            <!-- Columna 2 -->
            <!-- Campo de texto para Afiliados Destacados -->
            <label for="afiliadosDestacados">Afiliados Destacados:</label>
            <input type="text" id="afiliadosDestacados" name="AD" required  value="<?php echo $rowAfiliados['AD']; ?>">
            <br><br>

            <!-- Campo de texto para Desistió al Sindicato -->
            <label for="desistioSindicato">Desistió al Sindicato:</label>
            <input type="text" id="desistioSindicato" name="DAS" required  value="<?php echo $rowAfiliados['DAS']; ?>">
            <br><br>

            <!-- Campo de texto para Personal que le Corresponde Seguro Mayor -->
            <label for="seguroMayor">Personal que le Corresponde Seguro Mayor:</label>
            <input type="text" id="seguroMayor" name="PQL" required  value="<?php echo $rowAfiliados['PQL']; ?>">
            <br><br>
        </div>
                <!-- Botón de guardar CAMBIOS -->
                <input type="submit" name="guardar" value="Guardar cambios" class="custom-button"><br><br><br>
    </form>
</section>

            <?php
       } else {
        echo '<p class="error-message">Datos de Afiliados no encontrados.</p>';
    }

        // Cierra la conexión después de consultar afiliados
        $conn->close();
        ?>
        


    <!-- Consulta los datos datos del empleado-->
    <?php
        require 'database.php'; // Vuelve a incluir la conexión a la base de datos

    // Consulta los datos del empleado
    $sqlEmpleado = "SELECT * FROM datos_del_empleado WHERE NO_EMPLEADO_7 = '$noEmpleado'";
    $resultEmpleado = $conn->query($sqlEmpleado);

    /* Consulta Formulario de Datos del Empleado */
    if ($resultEmpleado->num_rows > 0) {
        $rowEmpleado = $resultEmpleado->fetch_assoc();
        ?>
           <section>
    <h2>Datos del Empleado</h2>
    <!-- Formulario de Datos del Empleado en 4 columnas -->
    <form action="php2/updates/upForm7.php" method="POST">
        <div style="display: flex; flex-wrap: wrap;">
            <div style="flex: 1; margin-right: 10px;">
                <!-- Columna 1 -->
                <label for="noEmpleado">Número de Empleado:</label>
                <input type="text" id="noEmpleado" name="NO_EMPLEADO_7" required readonly value="<?php echo $rowEmpleado['NO_EMPLEADO_7']; ?>">
                <br><br>

                <label for="DIRECCION_ACTUAL" class="small-label">DIRECCION ACTUAL:</label>
                <select class="form-control form-control-sm small-input" id="DIRECCION_ACTUAL" name="DIRECCION_ACTUAL">
                    <option value="OP">ELIGE UNA OPCIÓN</option>
                    <option value="DIRECCION GENERAL DE SEGURIDAD PUBLICA DEL ESTADO" <?php if ($rowEmpleado['DIRECCION_ACTUAL'] == 'DIRECCION GENERAL DE SEGURIDAD PUBLICA DEL ESTADO') echo 'selected'; ?>>DIRECCION GENERAL DE SEGURIDAD PUBLICA DEL ESTADO</option>
                    <option value="SECRETARIA DE SEGURIDAD Y PROTECCION CIUDADANA" <?php if ($rowEmpleado['DIRECCION_ACTUAL'] == 'SECRETARIA DE SEGURIDAD Y PROTECCION CIUDADANA') echo 'selected'; ?>>SECRETARIA DE SEGURIDAD Y PROTECCION CIUDADANA</option>
                    <option value="DIRECCION GENERAL DE TECNOLOGIA EN SEGURIDAD PUBLICA" <?php if ($rowEmpleado['DIRECCION_ACTUAL'] == 'DIRECCION GENERAL DE TECNOLOGIA EN SEGURIDAD PUBLICA') echo 'selected'; ?>>DIRECCION GENERAL DE TECNOLOGIA EN SEGURIDAD PUBLICA</option>
                </select>

                <label for="AREA1" class="small-label">ÁREA:</label>
                <select class="form-control form-control-sm small-input" id="AREA1" name="AREA1">
                    <option value="OP">ELIGE UNA OPCIÓN</option>
                    <option value="ADMINISTRACION DE POTENCIAL HUMANO" <?php if ($rowEmpleado['AREA1'] == 'ADMINISTRACION DE POTENCIAL HUMANO') echo 'selected'; ?>>ADMINISTRACION DE POTENCIAL HUMANO</option>
                    <option value="SECCION PRIMERA DE ESTADO MAYOR" <?php if ($rowEmpleado['AREA1'] == 'SECCION PRIMERA DE ESTADO MAYOR') echo 'selected'; ?>>SECCION PRIMERA DE ESTADO MAYOR</option>
                    <option value="C5" <?php if ($rowEmpleado['AREA1'] == 'C5') echo 'selected'; ?>>C5</option>
                    <option value="AGRUPAMIENTO CANINO K-9" <?php if ($rowEmpleado['AREA1'] == 'AGRUPAMIENTO CANINO K-9') echo 'selected'; ?>>AGRUPAMIENTO CANINO K-9</option>
                    <option value="AHUALULCO" <?php if ($rowEmpleado['AREA1'] == 'AHUALULCO') echo 'selected'; ?>>AHUALULCO</option>
                    <option value="ALLENDE" <?php if ($rowEmpleado['AREA1'] == 'ALLENDE') echo 'selected'; ?>>ALLENDE</option>
                    <option value="AQUISMON Y TANCANHUITZ DE SANTOS" <?php if ($rowEmpleado['AREA1'] == 'AQUISMON Y TANCANHUITZ DE SANTOS') echo 'selected'; ?>>AQUISMON Y TANCANHUITZ DE SANTOS</option>
                    <option value="ARMAMENTO MUNICIONES Y LICENCIA OFICIAL COLECTIVA" <?php if ($rowEmpleado['AREA1'] == 'ARMAMENTO MUNICIONES Y LICENCIA OFICIAL COLECTIVA') echo 'selected'; ?>>ARMAMENTO MUNICIONES Y LICENCIA OFICIAL COLECTIVA</option>
                    <option value="AXTLA DE TERRAZAS" <?php if ($rowEmpleado['AREA1'] == 'AXTLA DE TERRAZAS') echo 'selected'; ?>>AXTLA DE TERRAZAS</option>
                    <option value="CARRANZA" <?php if ($rowEmpleado['AREA1'] == 'CARRANZA') echo 'selected'; ?>>CARRANZA</option>
                    <option value="CD. DEL MAIZ" <?php if ($rowEmpleado['AREA1'] == 'CD. DEL MAIZ') echo 'selected'; ?>>CD. DEL MAIZ</option>
                    <option value="CD. VALLES" <?php if ($rowEmpleado['AREA1'] == 'CD. VALLES') echo 'selected'; ?>>CD. VALLES</option>
                    <option value="CERRITOS" <?php if ($rowEmpleado['AREA1'] == 'CERRITOS') echo 'selected'; ?>>CERRITOS</option>
                    <option value="CHARCAS" <?php if ($rowEmpleado['AREA1'] == 'CHARCAS') echo 'selected'; ?>>CHARCAS</option>
                    <option value="COMANDANCIA CIUDAD SATELITE" <?php if ($rowEmpleado['AREA1'] == 'COMANDANCIA CIUDAD SATELITE') echo 'selected'; ?>>COMANDANCIA CIUDAD SATELITE</option>
                    <option value="DEPARTAMENTO DE ENLACE Y EVALUACION" <?php if ($rowEmpleado['AREA1'] == 'DEPARTAMENTO DE ENLACE Y EVALUACION') echo 'selected'; ?>>DEPARTAMENTO DE ENLACE Y EVALUACION</option>
                    <option value="DEPARTAMENTO DE ENLACE DE EVALUACION Y GESTION DE CERTIFICACION POLICIAL" <?php if ($rowEmpleado['AREA1'] == 'DEPARTAMENTO DE ENLACE DE EVALUACION Y GESTION DE CERTIFICACION POLICIAL') echo 'selected'; ?>>DEPARTAMENTO DE ENLACE DE EVALUACION Y GESTION DE CERTIFICACION POLICIAL</option>
                    <option value="SECCION SEXTA DE ESTADO MAYOR (UNIDAD DE CONTROL Y CONFIANZA)" <?php if ($rowEmpleado['AREA1'] == 'SECCION SEXTA DE ESTADO MAYOR (UNIDAD DE CONTROL Y CONFIANZA)') echo 'selected'; ?>>SECCION SEXTA DE ESTADO MAYOR (UNIDAD DE CONTROL Y CONFIANZA)</option>
                    <option value="DEPARTAMENTO DE INFORMATICA" <?php if ($rowEmpleado['AREA1'] == 'DEPARTAMENTO DE INFORMATICA') echo 'selected'; ?>>DEPARTAMENTO DE INFORMATICA</option>
                    <option value="DIRECCION DE ENLACE ADMINISTRATIVO" <?php if ($rowEmpleado['AREA1'] == 'DIRECCION DE ENLACE ADMINISTRATIVO') echo 'selected'; ?>>DIRECCION DE ENLACE ADMINISTRATIVO</option>
                    <option value="UNIDAD DE PLANEO Y OPERACIONES" <?php if ($rowEmpleado['AREA1'] == 'UNIDAD DE PLANEO Y OPERACIONES') echo 'selected'; ?>>UNIDAD DE PLANEO Y OPERACIONES</option>
                    <option value="UNIDAD DE GUARDIA GENERAL Y REGISTRO NACIONAL DE DETENIDOS" <?php if ($rowEmpleado['AREA1'] == 'UNIDAD DE GUARDIA GENERAL Y REGISTRO NACIONAL DE DETENIDOS') echo 'selected'; ?>>UNIDAD DE GUARDIA GENERAL Y REGISTRO NACIONAL DE DETENIDOS</option>
                    <option value="DIRECCION DE PLANEO Y OPERACIÓN" <?php if ($rowEmpleado['AREA1'] == 'DIRECCION DE PLANEO Y OPERACIÓN') echo 'selected'; ?>>DIRECCION DE PLANEO Y OPERACIÓN</option>
                    <option value="SECCION TERCERA DE ESTADO MAYOR" <?php if ($rowEmpleado['AREA1'] == 'SECCION TERCERA DE ESTADO MAYOR') echo 'selected'; ?>>SECCION TERCERA DE ESTADO MAYOR</option>
                    <option value="SECCION SEGUNDA DE ESTADO MAYOR" <?php if ($rowEmpleado['AREA1'] == 'SECCION SEGUNDA DE ESTADO MAYOR') echo 'selected'; ?>>SECCION SEGUNDA DE ESTADO MAYOR</option>
                    <option value="SECCION QUINTA DE ESTADO MAYOR" <?php if ($rowEmpleado['AREA1'] == 'SECCION QUINTA DE ESTADO MAYOR') echo 'selected'; ?>>SECCION QUINTA DE ESTADO MAYOR</option>
                    <option value="COMANDANCIA DE LA GUARDIA CIVIL ESTATAL" <?php if ($rowEmpleado['AREA1'] == 'COMANDANCIA DE LA GUARDIA CIVIL ESTATAL') echo 'selected'; ?>>COMANDANCIA DE LA GUARDIA CIVIL ESTATAL</option>
                    <option value="DIRECCION GENERAL" <?php if ($rowEmpleado['AREA1'] == 'DIRECCION GENERAL') echo 'selected'; ?>>DIRECCION GENERAL</option>
                    <option value="EBANO" <?php if ($rowEmpleado['AREA1'] == 'EBANO') echo 'selected'; ?>>EBANO</option>
                    <option value="EL NARANJO" <?php if ($rowEmpleado['AREA1'] == 'EL NARANJO') echo 'selected'; ?>>EL NARANJO</option>
                    <option value="ENLACE JURIDICO" <?php if ($rowEmpleado['AREA1'] == 'ENLACE JURIDICO') echo 'selected'; ?>>ENLACE JURIDICO</option>
                    <option value="UNIDAD DE ASUNTOS JURIDICOS" <?php if ($rowEmpleado['AREA1'] == 'UNIDAD DE ASUNTOS JURIDICOS') echo 'selected'; ?>>UNIDAD DE ASUNTOS JURIDICOS</option>
                    <option value="UNIDAD DE TRANSPARENCIA DE LA GUARDIA CIVIL ESTATAL" <?php if ($rowEmpleado['AREA1'] == 'UNIDAD DE TRANSPARENCIA DE LA GUARDIA CIVIL ESTATAL') echo 'selected'; ?>>UNIDAD DE TRANSPARENCIA DE LA GUARDIA CIVIL ESTATAL</option>
                    <option value="UNIDAD DE PLANES Y PROYECTOS" <?php if ($rowEmpleado['AREA1'] == 'UNIDAD DE PLANES Y PROYECTOS') echo 'selected'; ?>>UNIDAD DE PLANES Y PROYECTOS</option>
                    <option value="ESTADO MAYOR" <?php if ($rowEmpleado['AREA1'] == 'ESTADO MAYOR') echo 'selected'; ?>>ESTADO MAYOR</option>
                    <option value="GABINETE MEDICO Y TRABAJO SOCIAL" <?php if ($rowEmpleado['AREA1'] == 'GABINETE MEDICO Y TRABAJO SOCIAL') echo 'selected'; ?>>GABINETE MEDICO Y TRABAJO SOCIAL</option>
                    <option value="GRUPO DE OPERACIONES TACTICAS" <?php if ($rowEmpleado['AREA1'] == 'GRUPO DE OPERACIONES TACTICAS') echo 'selected'; ?>>GRUPO DE OPERACIONES TACTICAS</option>
                    <option value="ITURBIDE" <?php if ($rowEmpleado['AREA1'] == 'ITURBIDE') echo 'selected'; ?>>ITURBIDE</option>
                    <option value="JEFATURA DE POLICIA DE REACCION ZONA CENTRO" <?php if ($rowEmpleado['AREA1'] == 'JEFATURA DE POLICIA DE REACCION ZONA CENTRO') echo 'selected'; ?>>JEFATURA DE POLICIA DE REACCION ZONA CENTRO</option>
                    <option value="JEFATURA DE REGION CENTRO" <?php if ($rowEmpleado['AREA1'] == 'JEFATURA DE REGION CENTRO') echo 'selected'; ?>>JEFATURA DE REGION CENTRO</option>
                    <option value="DIVISION FUERZA DE REACCION" <?php if ($rowEmpleado['AREA1'] == 'DIVISION FUERZA DE REACCION') echo 'selected'; ?>>DIVISION FUERZA DE REACCION</option>
                    <option value="JUAREZ" <?php if ($rowEmpleado['AREA1'] == 'JUAREZ') echo 'selected'; ?>>JUAREZ</option>
                    <option value="LA HINCADA" <?php if ($rowEmpleado['AREA1'] == 'LA HINCADA') echo 'selected'; ?>>LA HINCADA</option>
                    <option value="MADERO" <?php if ($rowEmpleado['AREA1'] == 'MADERO') echo 'selected'; ?>>MADERO</option>
                    <option value="MARIANO MATAMOROS" <?php if ($rowEmpleado['AREA1'] == 'MARIANO MATAMOROS') echo 'selected'; ?>>MARIANO MATAMOROS</option>
                    <option value="MATEHUALA" <?php if ($rowEmpleado['AREA1'] == 'MATEHUALA') echo 'selected'; ?>>MATEHUALA</option>
                    <option value="OBREGON" <?php if ($rowEmpleado['AREA1'] == 'OBREGON') echo 'selected'; ?>>OBREGON</option>
                    <option value="RAYON" <?php if ($rowEmpleado['AREA1'] == 'RAYON') echo 'selected'; ?>>RAYON</option>
                    <option value="SECCION CUARTA DE ESTADO MAYOR (LOGISTICA)" <?php if ($rowEmpleado['AREA1'] == 'SECCION CUARTA DE ESTADO MAYOR (LOGISTICA)') echo 'selected'; ?>>SECCION CUARTA DE ESTADO MAYOR (LOGISTICA)</option>
                    <option value="RECURSOS MATERIALES" <?php if ($rowEmpleado['AREA1'] == 'RECURSOS MATERIALES') echo 'selected'; ?>>RECURSOS MATERIALES</option>
                    <option value="UNIDAD DE MANTENIMIENTO VEHICULAR" <?php if ($rowEmpleado['AREA1'] == 'UNIDAD DE MANTENIMIENTO VEHICULAR') echo 'selected'; ?>>UNIDAD DE MANTENIMIENTO VEHICULAR</option>
                    <option value="RIOVERDE" <?php if ($rowEmpleado['AREA1'] == 'RIOVERDE') echo 'selected'; ?>>RIOVERDE</option>
                    <option value="RUBI" <?php if ($rowEmpleado['AREA1'] == 'RUBI') echo 'selected'; ?>>RUBI</option>
                    <option value="SALINAS DE HIDALGO" <?php if ($rowEmpleado['AREA1'] == 'SALINAS DE HIDALGO') echo 'selected'; ?>>SALINAS DE HIDALGO</option>
                    <option value="SECC. MOTOCICLISTAS" <?php if ($rowEmpleado['AREA1'] == 'SECC. MOTOCICLISTAS') echo 'selected'; ?>>SECC. MOTOCICLISTAS</option>
                    <option value="SECCION CAMINOS ESTATAL" <?php if ($rowEmpleado['AREA1'] == 'SECCION CAMINOS ESTATAL') echo 'selected'; ?>>SECCION CAMINOS ESTATAL</option>
                    <option value="DIVISION CARRETERAS Y CAMINOS ESTATALES DE LA SECCION QUINTA DE ESTADO MAYOR" <?php if ($rowEmpleado['AREA1'] == 'DIVISION CARRETERAS Y CAMINOS ESTATALES DE LA SECCION QUINTA DE ESTADO MAYOR') echo 'selected'; ?>>DIVISION CARRETERAS Y CAMINOS ESTATALES DE LA SECCION QUINTA DE ESTADO MAYOR</option>
                    <option value="SERVICIOS DIVERSOS" <?php if ($rowEmpleado['AREA1'] == 'SERVICIOS DIVERSOS') echo 'selected'; ?>>SERVICIOS DIVERSOS</option>
                    <option value="SERVICIOS ESPECIALES" <?php if ($rowEmpleado['AREA1'] == 'SERVICIOS ESPECIALES') echo 'selected'; ?>>SERVICIOS ESPECIALES</option>
                    <option value="STA. MARIA DEL RIO" <?php if ($rowEmpleado['AREA1'] == 'STA. MARIA DEL RIO') echo 'selected'; ?>>STA. MARIA DEL RIO</option>
                    <option value="TIERRA NUEVA" <?php if ($rowEmpleado['AREA1'] == 'TIERRA NUEVA') echo 'selected'; ?>>TIERRA NUEVA</option>
                    <option value="TAMASOPO" <?php if ($rowEmpleado['AREA1'] == 'TAMASOPO') echo 'selected'; ?>>TAMASOPO</option>
                    <option value="TAMAZUNCHALE" <?php if ($rowEmpleado['AREA1'] == 'TAMAZUNCHALE') echo 'selected'; ?>>TAMAZUNCHALE</option>
                    <option value="MATLAPA" <?php if ($rowEmpleado['AREA1'] == 'MATLAPA') echo 'selected'; ?>>MATLAPA</option>
                    <option value="TAMUIN" <?php if ($rowEmpleado['AREA1'] == 'TAMUIN') echo 'selected'; ?>>TAMUIN</option>
                    <option value="TAMUIN Y SAN VICENTE TANCUAYALAB" <?php if ($rowEmpleado['AREA1'] == 'TAMUIN Y SAN VICENTE TANCUAYALAB') echo 'selected'; ?>>TAMUIN Y SAN VICENTE TANCUAYALAB</option>
                    <option value="TANCANHUITZ DE SANTOS" <?php if ($rowEmpleado['AREA1'] == 'TANCANHUITZ DE SANTOS') echo 'selected'; ?>>TANCANHUITZ DE SANTOS</option>
                    <option value="TANQUIAN DE ESCOBEDO" <?php if ($rowEmpleado['AREA1'] == 'TANQUIAN DE ESCOBEDO') echo 'selected'; ?>>TANQUIAN DE ESCOBEDO</option>
                    <option value="UNIDAD DE ANALISIS ESTRATEGICO" <?php if ($rowEmpleado['AREA1'] == 'UNIDAD DE ANALISIS ESTRATEGICO') echo 'selected'; ?>>UNIDAD DE ANALISIS ESTRATEGICO</option>
                    <option value="UNIDAD DE POLICIA PROCESAL" <?php if ($rowEmpleado['AREA1'] == 'UNIDAD DE POLICIA PROCESAL') echo 'selected'; ?>>UNIDAD DE POLICIA PROCESAL</option>
                    <option value="UNIDAD DE POLICIA Y TRANSITO DEL ESTADO" <?php if ($rowEmpleado['AREA1'] == 'UNIDAD DE POLICIA Y TRANSITO DEL ESTADO') echo 'selected'; ?>>UNIDAD DE POLICIA Y TRANSITO DEL ESTADO</option>
                    <option value="SECCION SEPTIMA DE ESTADO MAYOR" <?php if ($rowEmpleado['AREA1'] == 'SECCION SEPTIMA DE ESTADO MAYOR') echo 'selected'; ?>>SECCION SEPTIMA DE ESTADO MAYOR</option>
                    <option value="UNIDAD ESPECIALIZADA EN VIOLENCIA DE GENERO" <?php if ($rowEmpleado['AREA1'] == 'UNIDAD ESPECIALIZADA EN VIOLENCIA DE GENERO') echo 'selected'; ?>>UNIDAD ESPECIALIZADA EN VIOLENCIA DE GENERO</option>
                    <option value="VILLA DE ARRIAGA" <?php if ($rowEmpleado['AREA1'] == 'VILLA DE ARRIAGA') echo 'selected'; ?>>VILLA DE ARRIAGA</option>
                    <option value="VILLA HIDALGO" <?php if ($rowEmpleado['AREA1'] == 'VILLA HIDALGO') echo 'selected'; ?>>VILLA HIDALGO</option>
                </select>

                <label for="funcion">Función:</label>
                <input type="text" id="funcion" name="FUNCION" required  value="<?php echo $rowEmpleado['FUNCION']; ?>">
                <br><br>

                <label for="DDE" class="small-label">DESCRIPCION DEL ESTATUS:</label>
                <select class="form-control form-control-sm small-input" id="DDE" name="DDE">
                    <option value="OP" <?php if ($rowEmpleado['DDE'] == 'OP') echo 'selected'; ?>>ELIGE UNA OPCIÓN</option>
                    <option value="ACTIVO" <?php if ($rowEmpleado['DDE'] == 'ACTIVO') echo 'selected'; ?>>ACTIVO</option>
                    <option value="P/CONTROL INCAP. MEDICA CONTINUA" <?php if ($rowEmpleado['DDE'] == 'P/CONTROL INCAP. MEDICA CONTINUA') echo 'selected'; ?>>P/CONTROL INCAP. MEDICA CONTINUA</option>
                    <option value="PERSONAL INCAPACITADO" <?php if ($rowEmpleado['DDE'] == 'PERSONAL INCAPACITADO') echo 'selected'; ?>>PERSONAL INCAPACITADO</option>
                    <option value="SE PRESENTAN DE INCAPACIDAD (PENDIENTES EN LA GUARDIA GENERAL)" <?php if ($rowEmpleado['DDE'] == 'SE PRESENTAN DE INCAPACIDAD (PENDIENTES EN LA GUARDIA GENERAL)') echo 'selected'; ?>>SE PRESENTAN DE INCAPACIDAD (PENDIENTES EN LA GUARDIA GENERAL)</option>
                    <option value="PERSONAL PENDIENTE DE DIFINIR SITUACION LABORAL POR ESTAR SUJETOS A PROCESO PENAL (MARZO 2023)" <?php if ($rowEmpleado['DDE'] == 'PERSONAL PENDIENTE DE DIFINIR SITUACION LABORAL POR ESTAR SUJETOS A PROCESO PENAL (MARZO 2023)') echo 'selected'; ?>>PERSONAL PENDIENTE DE DIFINIR SITUACION LABORAL POR ESTAR SUJETOS A PROCESO PENAL (MARZO 2023)</option>
                    <option value="PERSONAL CON TRÁMITE (POR FALTAS CONTINUAS O DISCONTINUAS A SU SERVICIO SIN CAUSA JUSTIFICADA) ACTIVOS" <?php if ($rowEmpleado['DDE'] == 'PERSONAL CON TRÁMITE (POR FALTAS CONTINUAS O DISCONTINUAS A SU SERVICIO SIN CAUSA JUSTIFICADA) ACTIVOS') echo 'selected'; ?>>PERSONAL CON TRÁMITE (POR FALTAS CONTINUAS O DISCONTINUAS A SU SERVICIO SIN CAUSA JUSTIFICADA) ACTIVOS</option>
                    <option value="PERSONAL PARA CONTROL DE LA SECCION PRIMERA PENDIENTE DE ORDEN (AMPARO)" <?php if ($rowEmpleado['DDE'] == 'PERSONAL PARA CONTROL DE LA SECCION PRIMERA PENDIENTE DE ORDEN (AMPARO)') echo 'selected'; ?>>PERSONAL PARA CONTROL DE LA SECCION PRIMERA PENDIENTE DE ORDEN (AMPARO)</option>
                    <option value="PERSONAL COMSIOMADO EN COMSIONADO (ASPE, C-4, SSP, CESESP, OTRAS DEPENDENCIAS)" <?php if ($rowEmpleado['DDE'] == 'PERSONAL COMSIOMADO EN COMSIONADO (ASPE, C-4, SSP, CESESP, OTRAS DEPENDENCIAS)') echo 'selected'; ?>>PERSONAL COMSIOMADO EN COMSIONADO (ASPE, C-4, SSP, CESESP, OTRAS DEPENDENCIAS)</option>
                    <option value="PERSONAL CON SUSPENSION POR INVALIDEZ TEMPORAL (CON MOVIMIENTO DE PERSONAL)" <?php if ($rowEmpleado['DDE'] == 'PERSONAL CON SUSPENSION POR INVALIDEZ TEMPORAL (CON MOVIMIENTO DE PERSONAL)') echo 'selected'; ?>>PERSONAL CON SUSPENSION POR INVALIDEZ TEMPORAL (CON MOVIMIENTO DE PERSONAL)</option>
                    <option value="PERSONAL QUE SE PRESENTA DE SUSPENSION POR INVALIDEZ TEMPORAL (CON MOVIMIENTO DE PERSONAL)" <?php if ($rowEmpleado['DDE'] == 'PERSONAL QUE SE PRESENTA DE SUSPENSION POR INVALIDEZ TEMPORAL (CON MOVIMIENTO DE PERSONAL)') echo 'selected'; ?>>PERSONAL QUE SE PRESENTA DE SUSPENSION POR INVALIDEZ TEMPORAL (CON MOVIMIENTO DE PERSONAL)</option>
                    <option value="PERSONAL POR INVALIDEZ TEMPORAL" <?php if ($rowEmpleado['DDE'] == 'PERSONAL POR INVALIDEZ TEMPORAL') echo 'selected'; ?>>PERSONAL POR INVALIDEZ TEMPORAL</option>
                    <option value="PERSONAL QUE SE PRESENTÓ POR TERMINO DE INVALIDEZ TEMPORAL (PENDIENTES EN LA GUARDIA GENERAL)" <?php if ($rowEmpleado['DDE'] == 'PERSONAL QUE SE PRESENTÓ POR TERMINO DE INVALIDEZ TEMPORAL (PENDIENTES EN LA GUARDIA GENERAL)') echo 'selected'; ?>>PERSONAL QUE SE PRESENTÓ POR TERMINO DE INVALIDEZ TEMPORAL (PENDIENTES EN LA GUARDIA GENERAL)</option>
                    <option value="PERSONAL CON INVALIDEZ DEFINITIVO (PENDIENTE RESOLUCION DE PENSIONES)" <?php if ($rowEmpleado['DDE'] == 'PERSONAL CON INVALIDEZ DEFINITIVO (PENDIENTE RESOLUCION DE PENSIONES)') echo 'selected'; ?>>PERSONAL CON INVALIDEZ DEFINITIVO (PENDIENTE RESOLUCION DE PENSIONES)</option>
                    <option value="PERSONAL CON TRAMITE ANTE LA UNIDAD DE ASUNTOS INTERNOS POR FALTAS CONSECUTIVAS" <?php if ($rowEmpleado['DDE'] == 'PERSONAL CON TRAMITE ANTE LA UNIDAD DE ASUNTOS INTERNOS POR FALTAS CONSECUTIVAS') echo 'selected'; ?>>PERSONAL CON TRAMITE ANTE LA UNIDAD DE ASUNTOS INTERNOS POR FALTAS CONSECUTIVAS</option>
                    <option value="PERSONAL CON TRAMITE ANTE LA UNIDAD DE ASUNTOS INTERNOS POR FALTAS CONSECUTIVAS Y SUSPENSION DE LABORES" <?php if ($rowEmpleado['DDE'] == 'PERSONAL CON TRAMITE ANTE LA UNIDAD DE ASUNTOS INTERNOS POR FALTAS CONSECUTIVAS Y SUSPENSION DE LABORES') echo 'selected'; ?>>PERSONAL CON TRAMITE ANTE LA UNIDAD DE ASUNTOS INTERNOS POR FALTAS CONSECUTIVAS Y SUSPENSION DE LABORES</option>
                    <option value="PERSONAL TURNADO A JURIDICO CON BLOQUEO DE SUELDO (NO FISICOS EN LA GUARDIA CIVIL AFILIADOS)" <?php if ($rowEmpleado['DDE'] == 'PERSONAL TURNADO A JURIDICO CON BLOQUEO DE SUELDO (NO FISICOS EN LA GUARDIA CIVIL AFILIADOS)') echo 'selected'; ?>>PERSONAL TURNADO A JURIDICO CON BLOQUEO DE SUELDO (NO FISICOS EN LA GUARDIA CIVIL AFILIADOS)</option>
                    <option value="LICENCIA PREJUBILATORIA" <?php if ($rowEmpleado['DDE'] == 'LICENCIA PREJUBILATORIA') echo 'selected'; ?>>LICENCIA PREJUBILATORIA</option>
                    <option value="LICENCIA SIN GOCE DE SUELDO" <?php if ($rowEmpleado['DDE'] == 'LICENCIA SIN GOCE DE SUELDO') echo 'selected'; ?>>LICENCIA SIN GOCE DE SUELDO</option>
                    <option value="PERSONAL PENDIENTE DE DEFINIR SITUACION LABORAL (DESAPARECIDOS)" <?php if ($rowEmpleado['DDE'] == 'PERSONAL PENDIENTE DE DEFINIR SITUACION LABORAL (DESAPARECIDOS)') echo 'selected'; ?>>PERSONAL PENDIENTE DE DEFINIR SITUACION LABORAL (DESAPARECIDOS)</option>
                    <option value="PERSONAL CON SUSPENSION POR TIEMPO DETERMINADO (SE ENCUENTRA DESAPARECIDO)" <?php if ($rowEmpleado['DDE'] == 'PERSONAL CON SUSPENSION POR TIEMPO DETERMINADO (SE ENCUENTRA DESAPARECIDO)') echo 'selected'; ?>>PERSONAL CON SUSPENSION POR TIEMPO DETERMINADO (SE ENCUENTRA DESAPARECIDO)</option>
                    <option value="SUSPENSION TEMPORAL DE LABORES" <?php if ($rowEmpleado['DDE'] == 'SUSPENSION TEMPORAL DE LABORES') echo 'selected'; ?>>SUSPENSION TEMPORAL DE LABORES</option>
                    <option value="PENDIENTE MOVIMIENTO DE PERSONAL PARA ACTIVACION" <?php if ($rowEmpleado['DDE'] == 'PENDIENTE MOVIMIENTO DE PERSONAL PARA ACTIVACION') echo 'selected'; ?>>PENDIENTE MOVIMIENTO DE PERSONAL PARA ACTIVACION</option>
                    <option value="TERMINO DE SUSPENSION TEMPORAL DE LABORES" <?php if ($rowEmpleado['DDE'] == 'TERMINO DE SUSPENSION TEMPORAL DE LABORES') echo 'selected'; ?>>TERMINO DE SUSPENSION TEMPORAL DE LABORES</option>
                    <option value="LA SSP ELABORO FORMATO DE SUSPENSION DE SUELDO CON MOTIVO DE ESTAR SUJETOS A PROCEDIMIENTO PENAL" <?php if ($rowEmpleado['DDE'] == 'LA SSP ELABORO FORMATO DE SUSPENSION DE SUELDO CON MOTIVO DE ESTAR SUJETOS A PROCEDIMIENTO PENAL') echo 'selected'; ?>>LA SSP ELABORO FORMATO DE SUSPENSION DE SUELDO CON MOTIVO DE ESTAR SUJETOS A PROCEDIMIENTO PENAL</option>
                    <option value="PERSONAL EGRESADO DE LA ACADEMIA DE LA GUARDIA CIVIL ESTATAL 1ERA GENERACION" <?php if ($rowEmpleado['DDE'] == 'PERSONAL EGRESADO DE LA ACADEMIA DE LA GUARDIA CIVIL ESTATAL 1ERA GENERACION') echo 'selected'; ?>>PERSONAL EGRESADO DE LA ACADEMIA DE LA GUARDIA CIVIL ESTATAL 1ERA GENERACION</option>
                    <option value="PERSONAL PENDIENTE DE MOVIMIENTO DE PERSONAL DE BAJA (LISTADO OTORGADO POR ELVIA DE LA SSP)" <?php if ($rowEmpleado['DDE'] == 'PERSONAL PENDIENTE DE MOVIMIENTO DE PERSONAL DE BAJA (LISTADO OTORGADO POR ELVIA DE LA SSP)') echo 'selected'; ?>>PERSONAL PENDIENTE DE MOVIMIENTO DE PERSONAL DE BAJA (LISTADO OTORGADO POR ELVIA DE LA SSP)</option>
                    <option value="PERSONAL HONORARIOS ASIMILABLES" <?php if ($rowEmpleado['DDE'] == 'PERSONAL HONORARIOS ASIMILABLES') echo 'selected'; ?>>PERSONAL HONORARIOS ASIMILABLES</option>
                    <option value="PERSONAL COMISIONADO DE OTRAS DEPENDENCIAS A LA DGSPE 'ACTIVOS' (No tomar en cuenta en Ningun Estado de Fuerza)" <?php if ($rowEmpleado['DDE'] == 'PERSONAL COMISIONADO DE OTRAS DEPENDENCIAS A LA DGSPE \'ACTIVOS\' (No tomar en cuenta en Ningun Estado de Fuerza)') echo 'selected'; ?>>PERSONAL COMISIONADO DE OTRAS DEPENDENCIAS A LA DGSPE 'ACTIVOS' (No tomar en cuenta en Ningun Estado de Fuerza)</option>
                    <option value="PERSONAL COMISIONADO DE OTRAS DEPENDENCIAS A LA DGSPE 'INACTIVOS' (No tomar en cuenta en Ningun Estado de Fuerza)" <?php if ($rowEmpleado['DDE'] == 'PERSONAL COMISIONADO DE OTRAS DEPENDENCIAS A LA DGSPE \'INACTIVOS\' (No tomar en cuenta en Ningun Estado de Fuerza)') echo 'selected'; ?>>PERSONAL COMISIONADO DE OTRAS DEPENDENCIAS A LA DGSPE 'INACTIVOS' (No tomar en cuenta en Ningun Estado de Fuerza)</option>
                    <option value="APARECE EN PLANTILLA DE OFICIALIA MAYOR Y NO LOS TENEMOS REGISTRADOS" <?php if ($rowEmpleado['DDE'] == 'APARECE EN PLANTILLA DE OFICIALIA MAYOR Y NO LOS TENEMOS REGISTRADOS') echo 'selected'; ?>>APARECE EN PLANTILLA DE OFICIALIA MAYOR Y NO LOS TENEMOS REGISTRADOS</option>
                    <option value="PERSONAL QUE CAUSA ALTA (PENDIENTE DE MOVIMIENTO DE ALTA) NO TOMAR EN CUENTA ESTADOS DE FUERZA" <?php if ($rowEmpleado['DDE'] == 'PERSONAL QUE CAUSA ALTA (PENDIENTE DE MOVIMIENTO DE ALTA) NO TOMAR EN CUENTA ESTADOS DE FUERZA') echo 'selected'; ?>>PERSONAL QUE CAUSA ALTA (PENDIENTE DE MOVIMIENTO DE ALTA) NO TOMAR EN CUENTA ESTADOS DE FUERZA</option>
                    <option value="PERSONAL SINDICALIZADO A DISPOSICIÓN DE OFICIALÍA MAYOR QUE YA NO SALE EN NOMINA A PARTIR DEL 04/03/02 (NO TOMAR EN CUENTA PLAZAS)" <?php if ($rowEmpleado['DDE'] == 'PERSONAL SINDICALIZADO A DISPOSICIÓN DE OFICIALÍA MAYOR QUE YA NO SALE EN NOMINA A PARTIR DEL 04/03/02 (NO TOMAR EN CUENTA PLAZAS)') echo 'selected'; ?>>PERSONAL SINDICALIZADO A DISPOSICIÓN DE OFICIALÍA MAYOR QUE YA NO SALE EN NOMINA A PARTIR DEL 04/03/02 (NO TOMAR EN CUENTA PLAZAS)</option>
                    <option value="PERSONAL COMISIONADO DE OFICIALIA MAYOR A LA DGPSV (TERMINO DE COMISION)" <?php if ($rowEmpleado['DDE'] == 'PERSONAL COMISIONADO DE OFICIALIA MAYOR A LA DGPSV (TERMINO DE COMISION)') echo 'selected'; ?>>PERSONAL COMISIONADO DE OFICIALIA MAYOR A LA DGPSV (TERMINO DE COMISION)</option>
                    <option value="PLAZAS EN EL CONSEJO NO TOMAR EN CUENTA PARA NADA SOLO G.N.P." <?php if ($rowEmpleado['DDE'] == 'PLAZAS EN EL CONSEJO NO TOMAR EN CUENTA PARA NADA SOLO G.N.P.') echo 'selected'; ?>>PLAZAS EN EL CONSEJO NO TOMAR EN CUENTA PARA NADA SOLO G.N.P.</option>
                    <option value="BAJAS CONSEJO (G.N.P.)" <?php if ($rowEmpleado['DDE'] == 'BAJAS CONSEJO (G.N.P.)') echo 'selected'; ?>>BAJAS CONSEJO (G.N.P.)</option>
                    <option value="ALTAS PENDIENTES NO HICIERON CURSO DE POLICIA ACREDITABLE (NO TOMAR EN CUENTA EN NINGUN ESTADO DE FUERZA)" <?php if ($rowEmpleado['DDE'] == 'ALTAS PENDIENTES NO HICIERON CURSO DE POLICIA ACREDITABLE (NO TOMAR EN CUENTA EN NINGUN ESTADO DE FUERZA)') echo 'selected'; ?>>ALTAS PENDIENTES NO HICIERON CURSO DE POLICIA ACREDITABLE (NO TOMAR EN CUENTA EN NINGUN ESTADO DE FUERZA)</option>
                    <option value="NINGUNO" <?php if ($rowEmpleado['DDE'] == 'NINGUNO') echo 'selected'; ?>>NINGUNO</option>
                </select>

            </div>
            <div style="flex: 1; margin-right: 10px;">
                <!-- Columna 2 -->
                <label for="personalBaja">Personal que Causó Baja de la Corporación:</label>
                <select class="form-control form-control-sm small-input" id="personalBaja" name="PQCBDLC">
                    <option value="OP" <?php if ($rowEmpleado['PQCBDLC'] == 'OP') echo 'selected'; ?>>ELIGE UNA OPCIÓN</option>
                    <option value="BAJAS 2009" <?php if ($rowEmpleado['PQCBDLC'] == 'BAJAS 2009') echo 'selected'; ?>>BAJAS 2009</option>
                    <option value="BAJAS 2010" <?php if ($rowEmpleado['PQCBDLC'] == 'BAJAS 2010') echo 'selected'; ?>>BAJAS 2010</option>
                    <option value="BAJAS 2011" <?php if ($rowEmpleado['PQCBDLC'] == 'BAJAS 2011') echo 'selected'; ?>>BAJAS 2011</option>
                    <option value="PERSONAL QUE CAUSA BAJA EN 2012" <?php if ($rowEmpleado['PQCBDLC'] == 'PERSONAL QUE CAUSA BAJA EN 2012') echo 'selected'; ?>>PERSONAL QUE CAUSA BAJA EN 2012</option>
                    <option value="PERSONAL QUE CAUSA BAJA EN 2013" <?php if ($rowEmpleado['PQCBDLC'] == 'PERSONAL QUE CAUSA BAJA EN 2013') echo 'selected'; ?>>PERSONAL QUE CAUSA BAJA EN 2013</option>
                    <option value="PERSONAL QUE CAUSA BAJA EN 2014" <?php if ($rowEmpleado['PQCBDLC'] == 'PERSONAL QUE CAUSA BAJA EN 2014') echo 'selected'; ?>>PERSONAL QUE CAUSA BAJA EN 2014</option>
                    <option value="PERSONAL QUE CAUSA BAJA EN 2015" <?php if ($rowEmpleado['PQCBDLC'] == 'PERSONAL QUE CAUSA BAJA EN 2015') echo 'selected'; ?>>PERSONAL QUE CAUSA BAJA EN 2015</option>
                    <option value="BAJAS 2016" <?php if ($rowEmpleado['PQCBDLC'] == 'BAJAS 2016') echo 'selected'; ?>>BAJAS 2016</option>
                    <option value="PERSONAL QUE CAUSA BAJA EN 2017" <?php if ($rowEmpleado['PQCBDLC'] == 'PERSONAL QUE CAUSA BAJA EN 2017') echo 'selected'; ?>>PERSONAL QUE CAUSA BAJA EN 2017</option>
                    <option value="BAJAS 2018" <?php if ($rowEmpleado['PQCBDLC'] == 'BAJAS 2018') echo 'selected'; ?>>BAJAS 2018</option>
                    <option value="BAJAS 2019" <?php if ($rowEmpleado['PQCBDLC'] == 'BAJAS 2019') echo 'selected'; ?>>BAJAS 2019</option>
                    <option value="BAJAS 2019 PERSONAL COMISIONADO EN LA DGSPE (NO ERAN DE LA PLANTILLA DE LA DIRECCION)" <?php if ($rowEmpleado['PQCBDLC'] == 'BAJAS 2019 PERSONAL COMISIONADO EN LA DGSPE (NO ERAN DE LA PLANTILLA DE LA DIRECCION)') echo 'selected'; ?>>BAJAS 2019 PERSONAL COMISIONADO EN LA DGSPE (NO ERAN DE LA PLANTILLA DE LA DIRECCION)</option>
                    <option value="BAJAS 2020" <?php if ($rowEmpleado['PQCBDLC'] == 'BAJAS 2020') echo 'selected'; ?>>BAJAS 2020</option>
                    <option value="BAJAS 2020 PERSONAL COMISIONADO EN LA DGSPE (NO ERAN DE LA PLANTILLA DE LA DIRECCION)" <?php if ($rowEmpleado['PQCBDLC'] == 'BAJAS 2020 PERSONAL COMISIONADO EN LA DGSPE (NO ERAN DE LA PLANTILLA DE LA DIRECCION)') echo 'selected'; ?>>BAJAS 2020 PERSONAL COMISIONADO EN LA DGSPE (NO ERAN DE LA PLANTILLA DE LA DIRECCION)</option>
                    <option value="BAJAS 2021" <?php if ($rowEmpleado['PQCBDLC'] == 'BAJAS 2021') echo 'selected'; ?>>BAJAS 2021</option>
                    <option value="BAJAS 2021 PERSONAL COMISIONADO EN LA DGSPE (SE REGRESO A LA ACADEMIA QUE ES SU ADSCRIPCION)" <?php if ($rowEmpleado['PQCBDLC'] == 'BAJAS 2021 PERSONAL COMISIONADO EN LA DGSPE (SE REGRESO A LA ACADEMIA QUE ES SU ADSCRIPCION)') echo 'selected'; ?>>BAJAS 2021 PERSONAL COMISIONADO EN LA DGSPE (SE REGRESO A LA ACADEMIA QUE ES SU ADSCRIPCION)</option>
                    <option value="BAJAS 2022" <?php if ($rowEmpleado['PQCBDLC'] == 'BAJAS 2022') echo 'selected'; ?>>BAJAS 2022</option>
                    <option value="BAJAS 2023" <?php if ($rowEmpleado['PQCBDLC'] == 'BAJAS 2023') echo 'selected'; ?>>BAJAS 2023</option>
                    <option value="PERSONAL DE HONORARIOS QUE CAUSA BAJA" <?php if ($rowEmpleado['PQCBDLC'] == 'PERSONAL DE HONORARIOS QUE CAUSA BAJA') echo 'selected'; ?>>PERSONAL DE HONORARIOS QUE CAUSA BAJA</option>
                    <option value="PERSONAL PENDIENTE DE MOVIMIENTO DE PERSONAL DE BAJA" <?php if ($rowEmpleado['PQCBDLC'] == 'PERSONAL PENDIENTE DE MOVIMIENTO DE PERSONAL DE BAJA') echo 'selected'; ?>>PERSONAL PENDIENTE DE MOVIMIENTO DE PERSONAL DE BAJA</option>
                    <option value="NINGUNO" <?php if ($rowEmpleado['PQCBDLC'] == 'NINGUNO') echo 'selected'; ?>>NINGUNO</option>
                </select>
                <br><br>

                <label for="periodo">Periodo:</label>
                <input type="text" id="periodo" name="PERIODO" required  value="<?php echo $rowEmpleado['PERIODO']; ?>">
                <br><br>

                <label for="observaciones">Observaciones:</label>
                <input type="text" id="observaciones" name="OBSERVACIONES" required  value="<?php echo $rowEmpleado['OBSERVACIONES']; ?>">
                <br><br>

                <label for="idEmpleado">ID Empleado:</label>
                <input type="text" id="idEmpleado" name="ID_EMPLEADO" required  value="<?php echo $rowEmpleado['ID_EMPLEADO']; ?>">
                <br><br>

                <label for="clasificacion">Clasificación:</label>
                <select class="form-control form-control-sm small-input" id="clasificacion" name="CLASIF">
                    <option value="OP" <?php if ($rowEmpleado['CLASIF'] == 'OP') echo 'selected'; ?>>ELIGE UNA OPCIÓN</option>
                    <option value="SIND." <?php if ($rowEmpleado['CLASIF'] == 'SIND.') echo 'selected'; ?>>SIND.</option>
                    <option value="ADMVO." <?php if ($rowEmpleado['CLASIF'] == 'ADMVO.') echo 'selected'; ?>>ADMVO.</option>
                    <option value="APOYO" <?php if ($rowEmpleado['CLASIF'] == 'APOYO') echo 'selected'; ?>>APOYO</option>
                    <option value="OPER." <?php if ($rowEmpleado['CLASIF'] == 'OPER.') echo 'selected'; ?>>OPER.</option>
                </select>
                <br><br>
            </div>
            <div style="flex: 1; margin-right: 10px;">
                <!-- Columna 3 -->
                <label for="fechaIngreso">Fecha de Ingreso:</label>
                <input type="text" id="fechaIngreso" name="FECHA_DE_INGRESO" required  value="<?php echo $rowEmpleado['FECHA_DE_INGRESO']; ?>">
                <br><br>

                <label for="cuip">CUIP:</label>
                <input type="text" id="cuip" name="CUIP" required  value="<?php echo $rowEmpleado['CUIP']; ?>">
                <br><br>

                <label for="cup">CUP:</label>
                <input type="text" id="cup" name="CUP" required  value="<?php echo $rowEmpleado['CUP']; ?>">
                <br><br>

                <label for="numClasificacion">Número de Clasificación:</label>
                <input type="text" id="numClasificacion" name="NO_CLASIFICACION" required  value="<?php echo $rowEmpleado['NO_CLASIFICACION']; ?>">
                <br><br>

                <label for="clasificacion2">Clasificación:</label>
                <select class="form-control form-control-sm small-input" id="clasificacion2" name="CLASIFICACION">
                    <option value="OP" <?php if ($rowEmpleado['CLASIFICACION'] == 'OP') echo 'selected'; ?>>ELIGE UNA OPCIÓN</option>
                    <option value="SINDICALIZADO" <?php if ($rowEmpleado['CLASIFICACION'] == 'SINDICALIZADO') echo 'selected'; ?>>SINDICALIZADO</option>
                    <option value="DE CONFIANZA" <?php if ($rowEmpleado['CLASIFICACION'] == 'DE CONFIANZA') echo 'selected'; ?>>DE CONFIANZA</option>
                </select>
                <br><br>
            </div>
            <div style="flex: 1;">
                <!-- Columna 4 -->
                <label for="sindicalizado">Sindicalizado (NO / NOMBRE DEL SINDICATO):</label>
                <input type="text" id="sindicalizado" name="SINDICALIZADO" required  value="<?php echo $rowEmpleado['SINDICALIZADO']; ?>">
                <br><br>

                <label for="adscrito">Adscrito (NO / NOMBRE DEL SINDICATO):</label>
                <input type="text" id="adscrito" name="ADSCRITO" required  value="<?php echo $rowEmpleado['ADSCRITO']; ?>">
                <br><br>

                <label for="oficialiaMayor">Dirección de Oficialía Mayor (Área):</label>
                <select class="form-control form-control-sm small-input" id="oficialiaMayor" name="DDOM">
                    <option value="OP" <?php if ($rowEmpleado['DDOM'] == 'OP') echo 'selected'; ?>>ELIGE UNA OPCIÓN</option>
                    <option value="DIRECCION DE OPERACIÓN" <?php if ($rowEmpleado['DDOM'] == 'DIRECCION DE OPERACIÓN') echo 'selected'; ?>>DIRECCION DE OPERACIÓN</option>
                    <option value="DIRECCION GENERAL DE SEGURIDAD PUBLICA DEL ESTADO" <?php if ($rowEmpleado['DDOM'] == 'DIRECCION GENERAL DE SEGURIDAD PUBLICA DEL ESTADO') echo 'selected'; ?>>DIRECCION GENERAL DE SEGURIDAD PUBLICA DEL ESTADO</option>
                    <option value="DIRECCION DE ESTADO MAYOR" <?php if ($rowEmpleado['DDOM'] == 'DIRECCION DE ESTADO MAYOR') echo 'selected'; ?>>DIRECCION DE ESTADO MAYOR</option>
                    <option value="DIRECCION DE ZONA HUASTECA" <?php if ($rowEmpleado['DDOM'] == 'DIRECCION DE ZONA HUASTECA') echo 'selected'; ?>>DIRECCION DE ZONA HUASTECA</option>
                    <option value="DIRECCION DE INSPECCION GENERAL" <?php if ($rowEmpleado['DDOM'] == 'DIRECCION DE INSPECCION GENERAL') echo 'selected'; ?>>DIRECCION DE INSPECCION GENERAL</option>
                </select>
                <br><br>

                <label for="imss">IMSS:</label>
                <input type="text" id="imss" name="IMSS" required  value="<?php echo $rowEmpleado['IMSS']; ?>">
                <br><br>

                <label for="credencialLOC">Credencial con LOC (SI/NO):</label>
                <select class="form-control form-control-sm small-input" id="credencialLOC" name="CCLOC">
                    <option value="OP" <?php if ($rowEmpleado['CCLOC'] == 'OP') echo 'selected'; ?>>ELIGE UNA OPCIÓN</option>
                    <option value="SI" <?php if ($rowEmpleado['CCLOC'] == 'SI') echo 'selected'; ?>>SI</option>
                    <option value="NO" <?php if ($rowEmpleado['CCLOC'] == 'NO') echo 'selected'; ?>>NO</option>
                    <option value="NSS" <?php if ($rowEmpleado['CCLOC'] == 'NSS') echo 'selected'; ?>>NO SE SABE</option>
                </select>
                <br><br>
                
                <label for="vencimientoCredencial">Vencimiento de Credencial:</label>
                <input type="text" id="vencimientoCredencial" name="VENCIMIENTO_CREDENCIAL" required  value="<?php echo $rowEmpleado['VENCIMIENTO_CREDENCIAL']; ?>">
                <br><br>

                <label for="folioCredencial">Folio de la Credencial:</label>
                <input type="text" id="folioCredencial" name="FOLIO_CREDENCIAL" required  value="<?php echo $rowEmpleado['FOLIO_CREDENCIAL']; ?>">
                <br><br>

                <label for="ubicacionFisica">Ubicación Física:</label>
                <input type="text" id="ubicacionFisica" name="UBICACION_FISICA" required  value="<?php echo $rowEmpleado['UBICACION_FISICA']; ?>">
                <br><br>

                <label for="zona">Zona:</label>
                <select class="form-control form-control-sm small-input" id="zona" name="ZONA">
                    <option value="OP" <?php if ($rowEmpleado['ZONA'] == 'OP') echo 'selected'; ?>>ELIGE UNA OPCIÓN</option>
                    <option value="CENTRO" <?php if ($rowEmpleado['ZONA'] == 'CENTRO') echo 'selected'; ?>>CENTRO</option>
                    <option value="HUASTECA" <?php if ($rowEmpleado['ZONA'] == 'HUASTECA') echo 'selected'; ?>>HUASTECA</option>
                    <option value="MEDIA" <?php if ($rowEmpleado['ZONA'] == 'MEDIA') echo 'selected'; ?>>MEDIA</option>
                    <option value="ALTIPLANO" <?php if ($rowEmpleado['ZONA'] == 'ALTIPLANO') echo 'selected'; ?>>ALTIPLANO</option>
                </select>
                <br><br>

                <label for="fechaIngreso2">Fecha de Ingreso (2):</label>
                <input type="text" id="fechaIngreso2" name="FECHA_DE_INGRESO_2" required  value="<?php echo $rowEmpleado['FECHA_DE_INGRESO_2']; ?>">
                <br><br>

                <label for="fechaConclusion">Fecha de Conclusión:</label>
                <input type="text" id="fechaConclusion" name="FECHA_CONCLUSION" required  value="<?php echo $rowEmpleado['FECHA_CONCLUSION']; ?>">
                <br><br>

                <label for="fechaReingreso">Fecha de Reingreso:</label>
                <input type="text" id="fechaReingreso" name="FECHA_REINGRESO" required  value="<?php echo $rowEmpleado['FECHA_REINGRESO']; ?>">
                <br><br>

                <label for="cambioApoyo">Cambio de Apoyo a Operativo:</label>
                <input type="text" id="cambioApoyo" name="CAMBIO_DE_APOYO" required  value="<?php echo $rowEmpleado['CAMBIO_DE_APOYO']; ?>">
                <br><br>

                <label for="sueldoBase">Sueldo Base:</label>
                <input type="text" id="sueldoBase" name="SUELDO_BASE" required  value="<?php echo $rowEmpleado['SUELDO_BASE']; ?>">
                <br><br>

                <label for="prestaciones">Prestaciones:</label>
                <input type="text" id="prestaciones" name="PRESTACIONES" required  value="<?php echo $rowEmpleado['PRESTACIONES']; ?>">
                <br><br>

                <label for="compensacion">Compensación:</label>
                <input type="text" id="compensacion" name="COMPENSACION" required  value="<?php echo $rowEmpleado['COMPENSACION']; ?>">
                <br><br>

                <label for="numCompensacion">Número de Compensación:</label>
                <input type="text" id="numCompensacion" name="NO_COMP" required  value="<?php echo $rowEmpleado['NO_COMP']; ?>">
                <br><br>

                <label for="antiguedadGrado">Antigüedad en el Grado:</label>
                <input type="text" id="antiguedadGrado" name="ANTIGUEDAD_GRADO" required  value="<?php echo $rowEmpleado['ANTIGUEDAD_GRADO']; ?>">
                <br><br>

                <label for="columnaTemporal">Columna Temporal:</label>
                <input type="text" id="columnaTemporal" name="COLUMNA_TEMPORAL" required  value="<?php echo $rowEmpleado['COLUMNA_TEMPORAL']; ?>">
                <br><br>

                <label for="promocion2005">Promoción 2005:</label>
                <input type="text" id="promocion2005" name="PROMOCION_2005" required  value="<?php echo $rowEmpleado['PROMOCION_2005']; ?>">
                <br><br>

                <label for="rfc">RFC:</label>
                <input type="text" id="rfc" name="RFC" required  value="<?php echo $rowEmpleado['RFC']; ?>">
                <br><br>

                <label for="homoclave">Homoclave:</label>
                <input type="text" id="homoclave" name="HOMOCLAVE" required  value="<?php echo $rowEmpleado['HOMOCLAVE']; ?>">
                <br><br>

                <label for="cuentaBanco">No. Cuenta Banco:</label>
                <input type="text" id="cuentaBanco" name="NO_CUENTA_BANCO" required  value="<?php echo $rowEmpleado['NO_CUENTA_BANCO']; ?>">
                <br><br><br><br><br>
            </div>
        </div>
                <!-- Botón de guardar CAMBIOS -->
                <input type="submit" name="guardar" value="Guardar cambios" class="custom-button"><br><br><br>
    </form>
</section>

            <?php
       } else {
        echo '<p class="error-message">Datos del Empleado no encontrados.</p>';
    }

        // Cierra la conexión después de datos del empleado
        $conn->close();
        ?>


                      <!-- Consulta los datos laborales del personal misionado-->
                      <?php
        require 'database.php'; // Vuelve a incluir la conexión a la base de datos

   // Consulta los datos laborales del personal misionado
   $sqlLaborales = "SELECT * FROM dato_laborales_personal_c WHERE NO_EMPLEADO = '$noEmpleado'";
   $resultLaborales = $conn->query($sqlLaborales);

   /* Consulta Formulario de Datos Laborales del Personal Misionado */
   if ($resultLaborales->num_rows > 0) {
       $rowLaborales = $resultLaborales->fetch_assoc();
       ?>
            <section>
    <h2>Datos Laborales del Personal Misionado</h2>
    <!-- Formulario de Datos Laborales del Personal Misionado en 4 columnas -->
    <form action="php2/updates/upForm8.php" method="POST">
        <div style="display: flex; flex-wrap: wrap;">
            <div style="flex: 1; margin-right: 10px;">
                <!-- Columna 1 -->
                <label for="noEmpleado">Número de Empleado:</label>
                <input type="text" id="noEmpleado" name="NO_EMPLEADO" required readonly value="<?php echo $rowLaborales['NO_EMPLEADO']; ?>">
                <br><br>

                <label for="areaAdscripcion">Área de Adscripción:</label>
                <input type="text" id="areaAdscripcion" name="AREA_ADSCRIPCION" required  value="<?php echo $rowLaborales['AREA_ADSCRIPCION']; ?>">
                <br><br>

                <label for="telOficina">Teléfono de Oficina:</label>
                <input type="text" id="telOficina" name="TEL_OFICINA" required  value="<?php echo $rowLaborales['TEL_OFICINA']; ?>">
                <br><br>

                <label for="domicilioOficina">Domicilio de la Dependencia u Oficina:</label>
                <input type="text" id="domicilioOficina" name="DOMICILIO_OFICINA" required  value="<?php echo $rowLaborales['DOMICILIO_OFICINA']; ?>">
                <br><br>

                <label for="cargoFuncion">Cargo o Función que Desempeña:</label>
                <input type="text" id="cargoFuncion" name="CARGO_FUNCION" required  value="<?php echo $rowLaborales['CARGO_FUNCION']; ?>">
                <br><br>
            </div>
            <div style="flex: 1; margin-right: 10px;">
                <!-- Columna 2 -->
                <label for="jefeInmediato">Nombre del Jefe Inmediato:</label>
                <input type="text" id="jefeInmediato" name="JEFE_INMEDIATO" required  value="<?php echo $rowLaborales['JEFE_INMEDIATO']; ?>">
                <br><br>

                <label for="actualizacion">Actualización:</label>
                <input type="text" id="actualizacion" name="ACTUALIZACION" required  value="<?php echo $rowLaborales['ACTUALIZACION']; ?>">
                <br><br>

                <label for="claveDireccion">Clave de Dirección:</label>
                <input type="text" id="claveDireccion" name="CVE_DIRECCION" required  value="<?php echo $rowLaborales['CVE_DIRECCION']; ?>">
                <br><br>

                <label for="direccion">Dirección:</label>
                <input type="text" id="direccion" name="DIRECCION" required  value="<?php echo $rowLaborales['DIRECCION']; ?>">
                <br><br>

                <label for="claveArea">Clave de Área:</label>
                <input type="text" id="claveArea" name="CVE_AREA" required  value="<?php echo $rowLaborales['CVE_AREA']; ?>">
                <br><br>
            </div>
        </div>
                <!-- Botón de guardar CAMBIOS -->
                <input type="submit" name="guardar" value="Guardar cambios" class="custom-button"><br><br><br>
    </form>
</section>
            <?php
       } else {
        echo '<p class="error-message">Datos laborales del personal comisionado no encontrados.</p>';
    }

        // Cierra la conexión después de datos del empleado
        $conn->close();
        ?>


<!-- Consulta los datos vestimenta-->
    <?php
        require 'database.php'; // Vuelve a incluir la conexión a la base de datos

    // Consulta los datos de vestimenta
    $sqlVestimenta = "SELECT * FROM indumentaria WHERE NO_EMPLEADO = '$noEmpleado'";
    $resultVestimenta = $conn->query($sqlVestimenta);

    /* Consulta Formulario de Datos de Vestimenta */
    if ($resultVestimenta->num_rows > 0) {
        $rowVestimenta = $resultVestimenta->fetch_assoc();
        ?>
          <section>
    <h2>Datos de Vestimenta</h2>
    <!-- Formulario de Datos de Vestimenta en 4 columnas -->
    <form action="php2/updates/upForm9.php" method="POST">
        <div style="display: flex; flex-wrap: wrap;">
            <div style="flex: 1; margin-right: 10px;">
                <!-- Columna 1 -->
                <label for="noEmpleado">Número de Empleado:</label>
                <input type="text" id="noEmpleado" name="NO_EMPLEADO" required readonly value="<?php echo $rowVestimenta['NO_EMPLEADO']; ?>">
                <br><br>

                <label for="playera">Playera:</label>
                <input type="text" id="playera" name="PLAYERA" required  value="<?php echo $rowVestimenta['PLAYERA']; ?>">
                <br><br>

                <label for="camisa">Camisa:</label>
                <input type="text" id="camisa" name="CAMISA" required  value="<?php echo $rowVestimenta['CAMISA']; ?>">
                <br><br>

                <label for="pantalon">Pantalón:</label>
                <input type="text" id="pantalon" name="PANTALON" required  value="<?php echo $rowVestimenta['PANTALON']; ?>">
                <br><br>
            </div>
            <div style="flex: 1; margin-right: 10px;">
                <!-- Columna 2 -->
                <label for="calzado">Calzado:</label>
                <input type="text" id="calzado" name="CALZADO" required  value="<?php echo $rowVestimenta['CALZADO']; ?>">
                <br><br>

                <label for="chamarra">Chamarra:</label>
                <input type="text" id="chamarra" name="CHAMARRA" required  value="<?php echo $rowVestimenta['CHAMARRA']; ?>">
                <br><br>

                <label for="mcArthur">MC Arthur:</label>
                <input type="text" id="mcArthur" name="MC_ARTHUR" required  value="<?php echo $rowVestimenta['MC_ARTHUR']; ?>">
                <br><br>

                <label for="kepi">Kepi:</label>
                <input type="text" id="kepi" name="KEPI" required  value="<?php echo $rowVestimenta['KEPI']; ?>">
                <br><br>
            </div>
            <div style="flex: 1; margin-right: 10px;">
                <!-- Columna 3 -->
                <label for="sombrero">Sombrero:</label>
                <input type="text" id="sombrero" name="SOMBRERO" required  value="<?php echo $rowVestimenta['SOMBRERO']; ?>">
                <br><br>

                <label for="falda">Falda:</label>
                <input type="text" id="falda" name="FALDA" required  value="<?php echo $rowVestimenta['FALDA']; ?>">
                <br><br>

                <label for="filipina">Filipina:</label>
                <input type="text" id="filipina" name="FILIPINA" required  value="<?php echo $rowVestimenta['FILIPINA']; ?>">
                <br><br>

                <label for="overol">Overol:</label>
                <input type="text" id="overol" name="OVEROL" required  value="<?php echo $rowVestimenta['OVEROL']; ?>">
                <br><br>
            </div>
            <div style="flex: 1;">
                <!-- Columna 4 -->
                <label for="bata">Bata:</label>
                <input type="text" id="bata" name="BATA" required  value="<?php echo $rowVestimenta['BATA']; ?>">
                <br><br>
            </div>
        </div>
                <!-- Botón de guardar CAMBIOS -->
                <input type="submit" name="guardar" value="Guardar cambios" class="custom-button"><br><br><br>
    </form>
</section>

            <?php
       } else {
        echo '<p class="error-message">Datos de Vestimenta no encontrados.</p>';
    }

        // Cierra la conexión después de consultar vestimenta
        $conn->close();
        ?>

        <!-- Consulta los datos de comisiones-->
    <?php
        require 'database.php'; // Vuelve a incluir la conexión a la base de datos

   // Consulta los datos de comisiones
   $sqlComisiones = "SELECT * FROM comisiones WHERE NO_EMPLEADO = '$noEmpleado'";
   $resultComisiones = $conn->query($sqlComisiones);

   /* Consulta Formulario de Datos de Comisiones */
   if ($resultComisiones->num_rows > 0) {
       $rowComisiones = $resultComisiones->fetch_assoc();
       ?>
           <section>
    <h2>Datos de Comisiones</h2>
    <!-- Formulario de Datos de Comisiones en 4 columnas -->
    <form action="php2/updates/upForm10.php" method="POST">
        <div style="display: flex; flex-wrap: wrap;">
            <div style="flex: 1; margin-right: 10px;">
                <!-- Columna 1 -->
                <label for="noEmpleado">Número de Empleado:</label>
                <input type="text" id="noEmpleado" name="NO_EMPLEADO" required readonly value="<?php echo $rowComisiones['NO_EMPLEADO']; ?>">
                <br><br>

                <label for="comisionLugarPersona">Comisión en Lugar o Persona:</label>
                <input type="text" id="comisionLugarPersona" name="CELP" required  value="<?php echo $rowComisiones['CELP']; ?>">
                <br><br>
            </div>
            <div style="flex: 1; margin-right: 10px;">
                <!-- Columna 2 -->
                <label for="periodo">Período:</label>
                <input type="text" id="periodo" name="PERIODO" required  value="<?php echo $rowComisiones['PERIODO']; ?>">
                <br><br>

                <label for="fechaInicioComision">Fecha de Inicio de Comisión:</label>
                <input type="text" id="fechaInicioComision" name="FDIDC" required  value="<?php echo $rowComisiones['FDIDC']; ?>">
                <br><br>
            </div>
            <div style="flex: 1; margin-right: 10px;">
                <!-- Columna 3 -->
                <label for="fechaConclusionComision">Fecha de Conclusión de Comisión:</label>
                <input type="text" id="fechaConclusionComision" name="FDCDC" required  value="<?php echo $rowComisiones['FDCDC']; ?>">
                <br><br>

                <label for="oficinaComision">Oficina de Comisión:</label>
                <input type="text" id="oficinaComision" name="OF_COMISION" required  value="<?php echo $rowComisiones['OF_COMISION']; ?>">
                <br><br>
            </div>
        </div>
                <!-- Botón de guardar CAMBIOS -->
                <input type="submit" name="guardar" value="Guardar cambios" class="custom-button"><br><br><br>
    </form>
</section>

            <?php
       } else {
        echo '<p class="error-message">Datos de Comisionado no encontrados.</p>';
    }

        // Cierra la conexión después de consultar comisiones
        $conn->close();
        ?>


        <!-- Consulta los datos de Movimientos por Cambio ASDC-->
        <?php
        require 'database.php'; // Vuelve a incluir la conexión a la base de datos

    // Consulta los datos de Movimientos por Cambio ASDC
    $sqlMovimientosASDC = "SELECT * FROM movimiento_por_cambio_asdc WHERE NO_EMPLEADO = '$noEmpleado'";
    $resultMovimientosASDC = $conn->query($sqlMovimientosASDC);

    /* Consulta Formulario de Datos de Movimientos por Cambio ASDC */
    if ($resultMovimientosASDC->num_rows > 0) {
        $rowMovimientosASDC = $resultMovimientosASDC->fetch_assoc();
        ?>
            <section>
    <h2>Datos de Movimientos por Cambio ASDC</h2>
    <!-- Formulario de Datos de Movimientos por Cambio ASDC en 4 columnas -->
    <form action="php2/updates/upForm11.php" method="POST">
        <div style="display: flex; flex-wrap: wrap;">
            <div style="flex: 1; margin-right: 10px;">
                <!-- Columna 1 -->
                <label for="noEmpleado">Número de Empleado:</label>
                <input type="text" id="noEmpleado" name="NO_EMPLEADO" required readonly value="<?php echo $rowMovimientosASDC['NO_EMPLEADO']; ?>">
                <br><br>

                <label for="fechaRecibido">Fecha de Recibido:</label>
                <input type="text" id="fechaRecibido" name="fdr" required  value="<?php echo $rowMovimientosASDC['fdr']; ?>">
                <br><br>
            </div>
            <div style="flex: 1; margin-right: 10px;">
                <!-- Columna 2 -->
                <label for="fechaCambioADSC">Fecha de Cambio CAM.ADSC.:</label>
                <input type="text" id="fechaCambioADSC" name="fdcc" required  value="<?php echo $rowMovimientosASDC['fdcc']; ?>">
                <br><br>

                <label for="presentoCambio">Se Presentó de Cambio:</label>
                <input type="text" id="presentoCambio" name="pdc" required  value="<?php echo $rowMovimientosASDC['pdc']; ?>">
                <br><br>
            </div>
            <div style="flex: 1; margin-right: 10px;">
                <!-- Columna 3 -->
                <label for="acuerdoComputo">Acuerdo de Cómputo:</label>
                <select class="form-control form-control-sm small-input" id="acuerdoComputo" name="ADC">
                    <option value="OP" <?php if ($rowMovimientosASDC['ADC'] == 'OP') echo 'selected'; ?>>ELIGE UNA OPCIÓN</option>
                    <option value="5B" <?php if ($rowMovimientosASDC['ADC'] == '5B') echo 'selected'; ?>>5B</option>
                    <option value="11" <?php if ($rowMovimientosASDC['ADC'] == '11') echo 'selected'; ?>>11</option>
                    <option value="5" <?php if ($rowMovimientosASDC['ADC'] == '5') echo 'selected'; ?>>5</option>
                    <option value="1" <?php if ($rowMovimientosASDC['ADC'] == '1') echo 'selected'; ?>>1</option>
                    <option value="1B" <?php if ($rowMovimientosASDC['ADC'] == '1B') echo 'selected'; ?>>1B</option>
                    <option value="2" <?php if ($rowMovimientosASDC['ADC'] == '2') echo 'selected'; ?>>2</option>
                    <option value="2B" <?php if ($rowMovimientosASDC['ADC'] == '2B') echo 'selected'; ?>>2B</option>
                    <option value="3" <?php if ($rowMovimientosASDC['ADC'] == '3') echo 'selected'; ?>>3</option>
                    <option value="CAMBIO SSPC/GCE/EM/SPEM/CA/00435/2023" <?php if ($rowMovimientosASDC['ADC'] == 'CAMBIO SSPC/GCE/EM/SPEM/CA/00435/2023') echo 'selected'; ?>>CAMBIO SSPC/GCE/EM/SPEM/CA/00435/2023</option>
                    <option value="4" <?php if ($rowMovimientosASDC['ADC'] == '4') echo 'selected'; ?>>4</option>
                    <option value="4B" <?php if ($rowMovimientosASDC['ADC'] == '4B') echo 'selected'; ?>>4B</option>
                    <option value="O5" <?php if ($rowMovimientosASDC['ADC'] == 'O5') echo 'selected'; ?>>O5</option>
                    <option value="4A" <?php if ($rowMovimientosASDC['ADC'] == '4A') echo 'selected'; ?>>4A</option>
                    <option value="3B" <?php if ($rowMovimientosASDC['ADC'] == '3B') echo 'selected'; ?>>3B</option>
                </select>
                <br><br>

                <label for="acuerdoSSP">Acuerdo SSP:</label>
                <select class="form-control form-control-sm small-input" id="acuerdoSSP" name="ASS">
                    <option value="OP" <?php if ($rowMovimientosASDC['ASS'] == 'OP') echo 'selected'; ?>>ELIGE UNA OPCIÓN</option>
                    <option value="SIND" <?php if ($rowMovimientosASDC['ASS'] == 'SIND') echo 'selected'; ?>>SIND</option>
                    <option value="ADMVO" <?php if ($rowMovimientosASDC['ASS'] == 'ADMVO') echo 'selected'; ?>>ADMVO</option>
                    <option value="S15" <?php if ($rowMovimientosASDC['ASS'] == 'S15') echo 'selected'; ?>>S15</option>
                    <option value="K9" <?php if ($rowMovimientosASDC['ASS'] == 'K9') echo 'selected'; ?>>K9</option>
                    <option value="AH" <?php if ($rowMovimientosASDC['ASS'] == 'AH') echo 'selected'; ?>>AH</option>
                    <option value="A1" <?php if ($rowMovimientosASDC['ASS'] == 'A1') echo 'selected'; ?>>A1</option>
                    <option value="T5" <?php if ($rowMovimientosASDC['ASS'] == 'T5') echo 'selected'; ?>>T5</option>
                    <option value="LOC" <?php if ($rowMovimientosASDC['ASS'] == 'LOC') echo 'selected'; ?>>LOC</option>
                    <option value="A4" <?php if ($rowMovimientosASDC['ASS'] == 'A4') echo 'selected'; ?>>A4</option>
                    <option value="C4" <?php if ($rowMovimientosASDC['ASS'] == 'C4') echo 'selected'; ?>>C4</option>
                    <option value="C2" <?php if ($rowMovimientosASDC['ASS'] == 'C2') echo 'selected'; ?>>C2</option>
                    <option value="C3" <?php if ($rowMovimientosASDC['ASS'] == 'C3') echo 'selected'; ?>>C3</option>
                    <option value="C6" <?php if ($rowMovimientosASDC['ASS'] == 'C6') echo 'selected'; ?>>C6</option>
                    <option value="C7" <?php if ($rowMovimientosASDC['ASS'] == 'C7') echo 'selected'; ?>>C7</option>
                    <option value="C9" <?php if ($rowMovimientosASDC['ASS'] == 'C9') echo 'selected'; ?>>C9</option>
                    <option value="DE" <?php if ($rowMovimientosASDC['ASS'] == 'DE') echo 'selected'; ?>>DE</option>
                    <option value="D1" <?php if ($rowMovimientosASDC['ASS'] == 'D1') echo 'selected'; ?>>D1</option>
                    <option value="D3" <?php if ($rowMovimientosASDC['ASS'] == 'D3') echo 'selected'; ?>>D3</option>
                    <option value="D5" <?php if ($rowMovimientosASDC['ASS'] == 'D5') echo 'selected'; ?>>D5</option>
                    <option value="SS" <?php if ($rowMovimientosASDC['ASS'] == 'SS') echo 'selected'; ?>>SS</option>
                    <option value="CGCE" <?php if ($rowMovimientosASDC['ASS'] == 'CGCE') echo 'selected'; ?>>CGCE</option>
                    <option value="D6" <?php if ($rowMovimientosASDC['ASS'] == 'D6') echo 'selected'; ?>>D6</option>
                    <option value="E1" <?php if ($rowMovimientosASDC['ASS'] == 'E1') echo 'selected'; ?>>E1</option>
                    <option value="E2" <?php if ($rowMovimientosASDC['ASS'] == 'E2') echo 'selected'; ?>>E2</option>
                    <option value="D4" <?php if ($rowMovimientosASDC['ASS'] == 'D4') echo 'selected'; ?>>D4</option>
                    <option value="AJ" <?php if ($rowMovimientosASDC['ASS'] == 'AJ') echo 'selected'; ?>>AJ</option>
                    <option value="UT" <?php if ($rowMovimientosASDC['ASS'] == 'UT') echo 'selected'; ?>>UT</option>
                    <option value="UPT" <?php if ($rowMovimientosASDC['ASS'] == 'UPT') echo 'selected'; ?>>UPT</option>
                    <option value="EM" <?php if ($rowMovimientosASDC['ASS'] == 'EM') echo 'selected'; ?>>EM</option>
                    <option value="S6" <?php if ($rowMovimientosASDC['ASS'] == 'S6') echo 'selected'; ?>>S6</option>
                    <option value="GOT" <?php if ($rowMovimientosASDC['ASS'] == 'GOT') echo 'selected'; ?>>GOT</option>
                    <option value="I1" <?php if ($rowMovimientosASDC['ASS'] == 'I1') echo 'selected'; ?>>I1</option>
                    <option value="C10" <?php if ($rowMovimientosASDC['ASS'] == 'C10') echo 'selected'; ?>>C10</option>
                    <option value="DFR" <?php if ($rowMovimientosASDC['ASS'] == 'DFR') echo 'selected'; ?>>DFR</option>
                    <option value="J1" <?php if ($rowMovimientosASDC['ASS'] == 'J1') echo 'selected'; ?>>J1</option>
                    <option value="LH" <?php if ($rowMovimientosASDC['ASS'] == 'LH') echo 'selected'; ?>>LH</option>
                    <option value="M1" <?php if ($rowMovimientosASDC['ASS'] == 'M1') echo 'selected'; ?>>M1</option>
                    <option value="M2" <?php if ($rowMovimientosASDC['ASS'] == 'M2') echo 'selected'; ?>>M2</option>
                    <option value="M3" <?php if ($rowMovimientosASDC['ASS'] == 'M3') echo 'selected'; ?>>M3</option>
                    <option value="O1" <?php if ($rowMovimientosASDC['ASS'] == 'O1') echo 'selected'; ?>>O1</option>
                    <option value="R1" <?php if ($rowMovimientosASDC['ASS'] == 'R1') echo 'selected'; ?>>R1</option>
                    <option value="S11" <?php if ($rowMovimientosASDC['ASS'] == 'S11') echo 'selected'; ?>>S11</option>
                    <option value="R5" <?php if ($rowMovimientosASDC['ASS'] == 'R5') echo 'selected'; ?>>R5</option>
                    <option value="H1" <?php if ($rowMovimientosASDC['ASS'] == 'H1') echo 'selected'; ?>>H1</option>
                    <option value="S1" <?php if ($rowMovimientosASDC['ASS'] == 'S1') echo 'selected'; ?>>S1</option>
                    <option value="S4" <?php if ($rowMovimientosASDC['ASS'] == 'S4') echo 'selected'; ?>>S4</option>
                    <option value="S5" <?php if ($rowMovimientosASDC['ASS'] == 'S5') echo 'selected'; ?>>S5</option>
                    <option value="S12" <?php if ($rowMovimientosASDC['ASS'] == 'S12') echo 'selected'; ?>>S12</option>
                    <option value="SE" <?php if ($rowMovimientosASDC['ASS'] == 'SE') echo 'selected'; ?>>SE</option>
                    <option value="S13" <?php if ($rowMovimientosASDC['ASS'] == 'S13') echo 'selected'; ?>>S13</option>
                    <option value="TN" <?php if ($rowMovimientosASDC['ASS'] == 'TN') echo 'selected'; ?>>TN</option>
                    <option value="T1" <?php if ($rowMovimientosASDC['ASS'] == 'T1') echo 'selected'; ?>>T1</option>
                    <option value="T2" <?php if ($rowMovimientosASDC['ASS'] == 'T2') echo 'selected'; ?>>T2</option>
                    <option value="T4" <?php if ($rowMovimientosASDC['ASS'] == 'T4') echo 'selected'; ?>>T4</option>
                    <option value="T3" <?php if ($rowMovimientosASDC['ASS'] == 'T3') echo 'selected'; ?>>T3</option>
                    <option value="T7" <?php if ($rowMovimientosASDC['ASS'] == 'T7') echo 'selected'; ?>>T7</option>
                    <option value="U1" <?php if ($rowMovimientosASDC['ASS'] == 'U1') echo 'selected'; ?>>U1</option>
                    <option value="UP1" <?php if ($rowMovimientosASDC['ASS'] == 'UP1') echo 'selected'; ?>>UP1</option>
                    <option value="S5TA" <?php if ($rowMovimientosASDC['ASS'] == 'S5TA') echo 'selected'; ?>>S5TA</option>
                    <option value="U2" <?php if ($rowMovimientosASDC['ASS'] == 'U2') echo 'selected'; ?>>U2</option>
                    <option value="UVG" <?php if ($rowMovimientosASDC['ASS'] == 'UVG') echo 'selected'; ?>>UVG</option>
                    <option value="V6" <?php if ($rowMovimientosASDC['ASS'] == 'V6') echo 'selected'; ?>>V6</option>
                    <option value="V5" <?php if ($rowMovimientosASDC['ASS'] == 'V5') echo 'selected'; ?>>V5</option>
                </select>
                <br><br>
            </div>
        </div>
                <!-- Botón de guardar CAMBIOS -->
                <input type="submit" name="guardar" value="Guardar cambios" class="custom-button"><br><br><br>
    </form>
</section>

            <?php
        } else {
            echo '<p class="error-message">Datos de Movimientos por Cambio ASDC no encontrados.</p>';
        }
        
        // Cierra la conexión después de consultar datos de Movimientos por Cambio ASDC
        $conn->close();
        ?>



       <!-- Consulta los datos del Empleo-->
       <?php
        require 'database.php'; // Vuelve a incluir la conexión a la base de datos

    // Consulta los datos de Datos del Empleo
    $sqlDatosEmpleo = "SELECT * FROM datos_del_empleo WHERE NO_EMPLEADO = '$noEmpleado'";
    $resultDatosEmpleo = $conn->query($sqlDatosEmpleo);

    /* Consulta Formulario de Datos del Empleo */
    if ($resultDatosEmpleo->num_rows > 0) {
        $rowDatosEmpleo = $resultDatosEmpleo->fetch_assoc();
        ?>
          <section>
    <h2>Datos del Empleo</h2>
    <!-- Formulario de Datos del Empleo en 4 columnas -->
    <form action="php2/updates/upForm12.php" method="POST">
        <div style="display: flex; flex-wrap: wrap;">
            <div style="flex: 1; margin-right: 10px;">
                <!-- Columna 1 -->
                <label for="noEmpleado">Número de Empleado:</label>
                <input type="text" id="noEmpleado" name="NO_EMPLEADO" required readonly value="<?php echo $rowDatosEmpleo['NO_EMPLEADO']; ?>">
                <br><br>

                <label for="no">NO.:</label>
                <input type="text" id="no" name="NO" required  value="<?php echo $rowDatosEmpleo['NO']; ?>">
                <br><br>

                <label for="noArchivo">NO. Archivo:</label>
                <input type="text" id="noArchivo" name="NA" required  value="<?php echo $rowDatosEmpleo['NA']; ?>">
                <br><br>

                <label for="nivel">NIVEL:</label>
                <input type="text" id="nivel" name="NIVEL" required  value="<?php echo $rowDatosEmpleo['NIVEL']; ?>">
                <br><br>
            </div>
            <div style="flex: 1; margin-right: 10px;">
                <!-- Columna 2 -->
                <label for="categoria">CATEGORIA:</label>
                <input type="text" id="categoria" name="CATEGORIA" required  value="<?php echo $rowDatosEmpleo['CATEGORIA']; ?>">
                <br><br>

                <label for="GRADO_HOMOLOGADO" class="small-label">GRADO HOMOLOGADO:</label>
                <select class="form-control form-control-sm small-input" id="GRADO_HOMOLOGADO" name="GRADO_HOMOLOGADO">
                    <option value="OP" <?php if ($rowDatosEmpleo['GRADO_HOMOLOGADO'] == 'OP') echo 'selected'; ?>>ELIGE UNA OPCIÓN</option>
                    <option value="JEFE DE GRUPO (SEGURIDAD Y CUSTODIA)" <?php if ($rowDatosEmpleo['GRADO_HOMOLOGADO'] == 'JEFE DE GRUPO (SEGURIDAD Y CUSTODIA)') echo 'selected'; ?>>JEFE DE GRUPO (SEGURIDAD Y CUSTODIA)</option>
                    <option value="POLICIA" <?php if ($rowDatosEmpleo['GRADO_HOMOLOGADO'] == 'POLICIA') echo 'selected'; ?>>POLICIA</option>
                    <option value="SECRETARIA (O) CAPTURISTA" <?php if ($rowDatosEmpleo['GRADO_HOMOLOGADO'] == 'SECRETARIA (O) CAPTURISTA') echo 'selected'; ?>>SECRETARIA (O) CAPTURISTA</option>
                    <option value="OFICIAL ADMINISTRATIVO DE SEGURIDAD &quot;B&quot;" <?php if ($rowDatosEmpleo['GRADO_HOMOLOGADO'] == 'OFICIAL ADMINISTRATIVO DE SEGURIDAD "B"') echo 'selected'; ?>>OFICIAL ADMINISTRATIVO DE SEGURIDAD "B"</option>
                    <option value="JEFE DE GRUPO" <?php if ($rowDatosEmpleo['GRADO_HOMOLOGADO'] == 'JEFE DE GRUPO') echo 'selected'; ?>>JEFE DE GRUPO</option>
                    <option value="OFICIAL DE PARTES" <?php if ($rowDatosEmpleo['GRADO_HOMOLOGADO'] == 'OFICIAL DE PARTES') echo 'selected'; ?>>OFICIAL DE PARTES</option>
                    <option value="POLICIA PRIMERO" <?php if ($rowDatosEmpleo['GRADO_HOMOLOGADO'] == 'POLICIA PRIMERO') echo 'selected'; ?>>POLICIA PRIMERO</option>
                    <option value="SUBOFICIAL" <?php if ($rowDatosEmpleo['GRADO_HOMOLOGADO'] == 'SUBOFICIAL') echo 'selected'; ?>>SUBOFICIAL</option>
                    <option value="AUXILIAR ADMINISTRATIVA (O)" <?php if ($rowDatosEmpleo['GRADO_HOMOLOGADO'] == 'AUXILIAR ADMINISTRATIVA (O)') echo 'selected'; ?>>AUXILIAR ADMINISTRATIVA (O)</option>
                    <option value="ENCARGADO DE PROGRAMA" <?php if ($rowDatosEmpleo['GRADO_HOMOLOGADO'] == 'ENCARGADO DE PROGRAMA') echo 'selected'; ?>>ENCARGADO DE PROGRAMA</option>
                    <option value="TECNICO ESPECIALIZADO" <?php if ($rowDatosEmpleo['GRADO_HOMOLOGADO'] == 'TECNICO ESPECIALIZADO') echo 'selected'; ?>>TECNICO ESPECIALIZADO</option>
                    <option value="ANALISTA JURIDICO" <?php if ($rowDatosEmpleo['GRADO_HOMOLOGADO'] == 'ANALISTA JURIDICO') echo 'selected'; ?>>ANALISTA JURIDICO</option>
                    <option value="ALMACENISTA" <?php if ($rowDatosEmpleo['GRADO_HOMOLOGADO'] == 'ALMACENISTA') echo 'selected'; ?>>ALMACENISTA</option>
                    <option value="OPERADOR DE FOTOCOPIADORA" <?php if ($rowDatosEmpleo['GRADO_HOMOLOGADO'] == 'OPERADOR DE FOTOCOPIADORA') echo 'selected'; ?>>OPERADOR DE FOTOCOPIADORA</option>
                    <option value="OFICIAL" <?php if ($rowDatosEmpleo['GRADO_HOMOLOGADO'] == 'OFICIAL') echo 'selected'; ?>>OFICIAL</option>
                    <option value="AYUDANTE GENERAL" <?php if ($rowDatosEmpleo['GRADO_HOMOLOGADO'] == 'AYUDANTE GENERAL') echo 'selected'; ?>>AYUDANTE GENERAL</option>
                    <option value="CABO DE ORDENANZA" <?php if ($rowDatosEmpleo['GRADO_HOMOLOGADO'] == 'CABO DE ORDENANZA') echo 'selected'; ?>>CABO DE ORDENANZA</option>
                    <option value="ANALISTA DE SISTEMAS COMPUTACIONALES" <?php if ($rowDatosEmpleo['GRADO_HOMOLOGADO'] == 'ANALISTA DE SISTEMAS COMPUTACIONALES') echo 'selected'; ?>>ANALISTA DE SISTEMAS COMPUTACIONALES</option>
                    <option value="CUSTODIO &quot;A&quot;" <?php if ($rowDatosEmpleo['GRADO_HOMOLOGADO'] == 'CUSTODIO "A"') echo 'selected'; ?>>CUSTODIO "A"</option>
                    <option value="SUBINSPECTOR" <?php if ($rowDatosEmpleo['GRADO_HOMOLOGADO'] == 'SUBINSPECTOR') echo 'selected'; ?>>SUBINSPECTOR</option>
                    <option value="PSICOLOGO" <?php if ($rowDatosEmpleo['GRADO_HOMOLOGADO'] == 'PSICOLOGO') echo 'selected'; ?>>PSICOLOGO</option>
                    <option value="RECEPCIONISTA" <?php if ($rowDatosEmpleo['GRADO_HOMOLOGADO'] == 'RECEPCIONISTA') echo 'selected'; ?>>RECEPCIONISTA</option>
                    <option value="AUXILIAR MEDICO" <?php if ($rowDatosEmpleo['GRADO_HOMOLOGADO'] == 'AUXILIAR MEDICO') echo 'selected'; ?>>AUXILIAR MEDICO</option>
                    <option value="MOZO DE OFICINA" <?php if ($rowDatosEmpleo['GRADO_HOMOLOGADO'] == 'MOZO DE OFICINA') echo 'selected'; ?>>MOZO DE OFICINA</option>
                    <option value="MOZO DE ORDENANZA" <?php if ($rowDatosEmpleo['GRADO_HOMOLOGADO'] == 'MOZO DE ORDENANZA') echo 'selected'; ?>>MOZO DE ORDENANZA</option>
                    <option value="TECNICO NO ESPECIALIZADO" <?php if ($rowDatosEmpleo['GRADO_HOMOLOGADO'] == 'TECNICO NO ESPECIALIZADO') echo 'selected'; ?>>TECNICO NO ESPECIALIZADO</option>
                    <option value="MECANOGRAFA" <?php if ($rowDatosEmpleo['GRADO_HOMOLOGADO'] == 'MECANOGRAFA') echo 'selected'; ?>>MECANOGRAFA</option>
                    <option value="DIRECTOR GENERAL" <?php if ($rowDatosEmpleo['GRADO_HOMOLOGADO'] == 'DIRECTOR GENERAL') echo 'selected'; ?>>DIRECTOR GENERAL</option>
                    <option value="INVESTIGADOR" <?php if ($rowDatosEmpleo['GRADO_HOMOLOGADO'] == 'INVESTIGADOR') echo 'selected'; ?>>INVESTIGADOR</option>
                    <option value="JEFE DE GRUPO SEGURIDAD Y CUSTODIA" <?php if ($rowDatosEmpleo['GRADO_HOMOLOGADO'] == 'JEFE DE GRUPO SEGURIDAD Y CUSTODIA') echo 'selected'; ?>>JEFE DE GRUPO SEGURIDAD Y CUSTODIA</option>
                    <option value="JEFE DE TURNO" <?php if ($rowDatosEmpleo['GRADO_HOMOLOGADO'] == 'JEFE DE TURNO') echo 'selected'; ?>>JEFE DE TURNO</option>
                    <option value="SECRETARIA DE SECRETARIO" <?php if ($rowDatosEmpleo['GRADO_HOMOLOGADO'] == 'SECRETARIA DE SECRETARIO') echo 'selected'; ?>>SECRETARIA DE SECRETARIO</option>
                    <option value="JEFE DE GRUPO ADMVO DE SEGURIDAD" <?php if ($rowDatosEmpleo['GRADO_HOMOLOGADO'] == 'JEFE DE GRUPO ADMVO DE SEGURIDAD') echo 'selected'; ?>>JEFE DE GRUPO ADMVO DE SEGURIDAD</option>
                    <option value="SECRETARIA DE DIRECTOR" <?php if ($rowDatosEmpleo['GRADO_HOMOLOGADO'] == 'SECRETARIA DE DIRECTOR') echo 'selected'; ?>>SECRETARIA DE DIRECTOR</option>
                    <option value="APOYO ADMINISTRATIVA (O) DE SEGURIDAD" <?php if ($rowDatosEmpleo['GRADO_HOMOLOGADO'] == 'APOYO ADMINISTRATIVA (O) DE SEGURIDAD') echo 'selected'; ?>>APOYO ADMINISTRATIVA (O) DE SEGURIDAD</option>
                    <option value="ABOGADO (O) &quot;B&quot;" <?php if ($rowDatosEmpleo['GRADO_HOMOLOGADO'] == 'ABOGADO (O) "B"') echo 'selected'; ?>>ABOGADO (O) "B"</option>
                    <option value="ENFERMERA(O) SEGURIDAD Y CUSTODIA" <?php if ($rowDatosEmpleo['GRADO_HOMOLOGADO'] == 'ENFERMERA(O) SEGURIDAD Y CUSTODIA') echo 'selected'; ?>>ENFERMERA(O) SEGURIDAD Y CUSTODIA</option>
                    <option value="ODONTOLOGO" <?php if ($rowDatosEmpleo['GRADO_HOMOLOGADO'] == 'ODONTOLOGO') echo 'selected'; ?>>ODONTOLOGO</option>
                    <option value="ENFERMERA TITULADA" <?php if ($rowDatosEmpleo['GRADO_HOMOLOGADO'] == 'ENFERMERA TITULADA') echo 'selected'; ?>>ENFERMERA TITULADA</option>
                    <option value="PELUQUERO" <?php if ($rowDatosEmpleo['GRADO_HOMOLOGADO'] == 'PELUQUERO') echo 'selected'; ?>>PELUQUERO</option>
                    <option value="JEFE DE DEPARTAMENTO" <?php if ($rowDatosEmpleo['GRADO_HOMOLOGADO'] == 'JEFE DE DEPARTAMENTO') echo 'selected'; ?>>JEFE DE DEPARTAMENTO</option>
                    <option value="MEDICO GENERAL" <?php if ($rowDatosEmpleo['GRADO_HOMOLOGADO'] == 'MEDICO GENERAL') echo 'selected'; ?>>MEDICO GENERAL</option>
                    <option value="JEFE DE OFICINA" <?php if ($rowDatosEmpleo['GRADO_HOMOLOGADO'] == 'JEFE DE OFICINA') echo 'selected'; ?>>JEFE DE OFICINA</option>
                    <option value="SUPERVISOR" <?php if ($rowDatosEmpleo['GRADO_HOMOLOGADO'] == 'SUPERVISOR') echo 'selected'; ?>>SUPERVISOR</option>
                    <option value="CHOFER DE PRIMERA" <?php if ($rowDatosEmpleo['GRADO_HOMOLOGADO'] == 'CHOFER DE PRIMERA') echo 'selected'; ?>>CHOFER DE PRIMERA</option>
                    <option value="TECNICA (O) NO ESPECIALIZADA (O)" <?php if ($rowDatosEmpleo['GRADO_HOMOLOGADO'] == 'TECNICA (O) NO ESPECIALIZADA (O)') echo 'selected'; ?>>TECNICA (O) NO ESPECIALIZADA (O)</option>
                    <option value="AUXILIAR JURIDICO" <?php if ($rowDatosEmpleo['GRADO_HOMOLOGADO'] == 'AUXILIAR JURIDICO') echo 'selected'; ?>>AUXILIAR JURIDICO</option>
                    <option value="VIGILANTE" <?php if ($rowDatosEmpleo['GRADO_HOMOLOGADO'] == 'VIGILANTE') echo 'selected'; ?>>VIGILANTE</option>
                    <option value="CAPACITADOR" <?php if ($rowDatosEmpleo['GRADO_HOMOLOGADO'] == 'CAPACITADOR') echo 'selected'; ?>>CAPACITADOR</option>
                </select>

                <label for="GRADO" class="small-label">GRADO:</label>
                <select class="form-control form-control-sm small-input" id="GRADO" name="GRADO">
                    <option value="OP" <?php if ($rowDatosEmpleo['GRADO'] == 'OP') echo 'selected'; ?>>ELIGE UNA OPCIÓN</option>
                    <option value="CAPTURISTA" <?php if ($rowDatosEmpleo['GRADO'] == 'CAPTURISTA') echo 'selected'; ?>>CAPTURISTA</option>
                    <option value="AUXILIAR EN ADMINISTRACION" <?php if ($rowDatosEmpleo['GRADO'] == 'AUXILIAR EN ADMINISTRACION') echo 'selected'; ?>>AUXILIAR EN ADMINISTRACION</option>
                    <option value="ASISTENTE ADMINISTRATIVO" <?php if ($rowDatosEmpleo['GRADO'] == 'ASISTENTE ADMINISTRATIVO') echo 'selected'; ?>>ASISTENTE ADMINISTRATIVO</option>
                    <option value="JEFE DE SECCION" <?php if ($rowDatosEmpleo['GRADO'] == 'JEFE DE SECCION') echo 'selected'; ?>>JEFE DE SECCION</option>
                    <option value="ANALISTA ESPECIALIZADO" <?php if ($rowDatosEmpleo['GRADO'] == 'ANALISTA ESPECIALIZADO') echo 'selected'; ?>>ANALISTA ESPECIALIZADO</option>
                    <option value="SUBDIRECTOR" <?php if ($rowDatosEmpleo['GRADO'] == 'SUBDIRECTOR') echo 'selected'; ?>>SUBDIRECTOR</option>
                    <option value="OFICIAL ADMINISTRATIVO DE SEGURIDAD &quot;A&quot;" <?php if ($rowDatosEmpleo['GRADO'] == 'OFICIAL ADMINISTRATIVO DE SEGURIDAD "A"') echo 'selected'; ?>>OFICIAL ADMINISTRATIVO DE SEGURIDAD "A"</option>
                    <option value="POLICIA &quot;B&quot;" <?php if ($rowDatosEmpleo['GRADO'] == 'POLICIA "B"') echo 'selected'; ?>>POLICIA "B"</option>
                    <option value="POLICIA &quot;C&quot;" <?php if ($rowDatosEmpleo['GRADO'] == 'POLICIA "C"') echo 'selected'; ?>>POLICIA "C"</option>
                    <option value="JEFE DE GRUPO (SEGURIDAD Y CUSTODIA)" <?php if ($rowDatosEmpleo['GRADO'] == 'JEFE DE GRUPO (SEGURIDAD Y CUSTODIA)') echo 'selected'; ?>>JEFE DE GRUPO (SEGURIDAD Y CUSTODIA)</option>
                    <option value="POLICIA" <?php if ($rowDatosEmpleo['GRADO'] == 'POLICIA') echo 'selected'; ?>>POLICIA</option>
                    <option value="POLICIA TERCERO" <?php if ($rowDatosEmpleo['GRADO'] == 'POLICIA TERCERO') echo 'selected'; ?>>POLICIA TERCERO</option>
                    <option value="SECRETARIA (O) CAPTURISTA" <?php if ($rowDatosEmpleo['GRADO'] == 'SECRETARIA (O) CAPTURISTA') echo 'selected'; ?>>SECRETARIA (O) CAPTURISTA</option>
                    <option value="OFICIAL ADMINISTRATIVO DE SEGURIDAD &quot;B&quot;" <?php if ($rowDatosEmpleo['GRADO'] == 'OFICIAL ADMINISTRATIVO DE SEGURIDAD "B"') echo 'selected'; ?>>OFICIAL ADMINISTRATIVO DE SEGURIDAD "B"</option>
                    <option value="JEFE DE GRUPO" <?php if ($rowDatosEmpleo['GRADO'] == 'JEFE DE GRUPO') echo 'selected'; ?>>JEFE DE GRUPO</option>
                    <option value="OFICIAL DE PARTES" <?php if ($rowDatosEmpleo['GRADO'] == 'OFICIAL DE PARTES') echo 'selected'; ?>>OFICIAL DE PARTES</option>
                    <option value="POLICIA &quot;A&quot;" <?php if ($rowDatosEmpleo['GRADO'] == 'POLICIA "A"') echo 'selected'; ?>>POLICIA "A"</option>
                    <option value="SUBOFICIAL" <?php if ($rowDatosEmpleo['GRADO'] == 'SUBOFICIAL') echo 'selected'; ?>>SUBOFICIAL</option>
                    <option value="AUXILIAR ADMINISTRATIVA (O)" <?php if ($rowDatosEmpleo['GRADO'] == 'AUXILIAR ADMINISTRATIVA (O)') echo 'selected'; ?>>AUXILIAR ADMINISTRATIVA (O)</option>
                    <option value="ENCARGADO DE PROGRAMA" <?php if ($rowDatosEmpleo['GRADO'] == 'ENCARGADO DE PROGRAMA') echo 'selected'; ?>>ENCARGADO DE PROGRAMA</option>
                    <option value="TECNICO ESPECIALIZADO" <?php if ($rowDatosEmpleo['GRADO'] == 'TECNICO ESPECIALIZADO') echo 'selected'; ?>>TECNICO ESPECIALIZADO</option>
                    <option value="ANALISTA JURIDICO" <?php if ($rowDatosEmpleo['GRADO'] == 'ANALISTA JURIDICO') echo 'selected'; ?>>ANALISTA JURIDICO</option>
                    <option value="VIGILANTE DE SEGURIDAD" <?php if ($rowDatosEmpleo['GRADO'] == 'VIGILANTE DE SEGURIDAD') echo 'selected'; ?>>VIGILANTE DE SEGURIDAD</option>
                    <option value="ALMACENISTA" <?php if ($rowDatosEmpleo['GRADO'] == 'ALMACENISTA') echo 'selected'; ?>>ALMACENISTA</option>
                    <option value="OPERADOR DE FOTOCOPIADORA" <?php if ($rowDatosEmpleo['GRADO'] == 'OPERADOR DE FOTOCOPIADORA') echo 'selected'; ?>>OPERADOR DE FOTOCOPIADORA</option>
                    <option value="OFICIAL" <?php if ($rowDatosEmpleo['GRADO'] == 'OFICIAL') echo 'selected'; ?>>OFICIAL</option>
                    <option value="POLICIA PRIMERO" <?php if ($rowDatosEmpleo['GRADO'] == 'POLICIA PRIMERO') echo 'selected'; ?>>POLICIA PRIMERO</option>
                    <option value="AYUDANTE GENERAL" <?php if ($rowDatosEmpleo['GRADO'] == 'AYUDANTE GENERAL') echo 'selected'; ?>>AYUDANTE GENERAL</option>
                    <option value="POLICIA SEGUNDO" <?php if ($rowDatosEmpleo['GRADO'] == 'POLICIA SEGUNDO') echo 'selected'; ?>>POLICIA SEGUNDO</option>
                    <option value="CABO DE ORDENANZA" <?php if ($rowDatosEmpleo['GRADO'] == 'CABO DE ORDENANZA') echo 'selected'; ?>>CABO DE ORDENANZA</option>
                    <option value="ANALISTA DE SISTEMAS COMPUTACIONALES" <?php if ($rowDatosEmpleo['GRADO'] == 'ANALISTA DE SISTEMAS COMPUTACIONALES') echo 'selected'; ?>>ANALISTA DE SISTEMAS COMPUTACIONALES</option>
                    <option value="CUSTODIO &quot;A&quot;" <?php if ($rowDatosEmpleo['GRADO'] == 'CUSTODIO "A"') echo 'selected'; ?>>CUSTODIO "A"</option>
                    <option value="PRIMER OFICIAL" <?php if ($rowDatosEmpleo['GRADO'] == 'PRIMER OFICIAL') echo 'selected'; ?>>PRIMER OFICIAL</option>
                    <option value="PSICOLOGO" <?php if ($rowDatosEmpleo['GRADO'] == 'PSICOLOGO') echo 'selected'; ?>>PSICOLOGO</option>
                    <option value="RECEPCIONISTA" <?php if ($rowDatosEmpleo['GRADO'] == 'RECEPCIONISTA') echo 'selected'; ?>>RECEPCIONISTA</option>
                    <option value="AUXILIAR MEDICO" <?php if ($rowDatosEmpleo['GRADO'] == 'AUXILIAR MEDICO') echo 'selected'; ?>>AUXILIAR MEDICO</option>
                    <option value="MOZO DE OFICINA" <?php if ($rowDatosEmpleo['GRADO'] == 'MOZO DE OFICINA') echo 'selected'; ?>>MOZO DE OFICINA</option>
                    <option value="MOZO DE ORDENANZA" <?php if ($rowDatosEmpleo['GRADO'] == 'MOZO DE ORDENANZA') echo 'selected'; ?>>MOZO DE ORDENANZA</option>
                    <option value="TECNICO NO ESPECIALIZADO" <?php if ($rowDatosEmpleo['GRADO'] == 'TECNICO NO ESPECIALIZADO') echo 'selected'; ?>>TECNICO NO ESPECIALIZADO</option>
                    <option value="MECANOGRAFA" <?php if ($rowDatosEmpleo['GRADO'] == 'MECANOGRAFA') echo 'selected'; ?>>MECANOGRAFA</option>
                    <option value="DIRECTOR GENERAL" <?php if ($rowDatosEmpleo['GRADO'] == 'DIRECTOR GENERAL') echo 'selected'; ?>>DIRECTOR GENERAL</option>
                    <option value="INVESTIGADOR" <?php if ($rowDatosEmpleo['GRADO'] == 'INVESTIGADOR') echo 'selected'; ?>>INVESTIGADOR</option>
                    <option value="JEFE DE GRUPO SEGURIDAD Y CUSTODIA" <?php if ($rowDatosEmpleo['GRADO'] == 'JEFE DE GRUPO SEGURIDAD Y CUSTODIA') echo 'selected'; ?>>JEFE DE GRUPO SEGURIDAD Y CUSTODIA</option>
                    <option value="JEFE DE TURNO" <?php if ($rowDatosEmpleo['GRADO'] == 'JEFE DE TURNO') echo 'selected'; ?>>JEFE DE TURNO</option>
                    <option value="SECRETARIA DE SECRETARIO" <?php if ($rowDatosEmpleo['GRADO'] == 'SECRETARIA DE SECRETARIO') echo 'selected'; ?>>SECRETARIA DE SECRETARIO</option>
                    <option value="JEFE DE GRUPO ADMVO DE SEGURIDAD" <?php if ($rowDatosEmpleo['GRADO'] == 'JEFE DE GRUPO ADMVO DE SEGURIDAD') echo 'selected'; ?>>JEFE DE GRUPO ADMVO DE SEGURIDAD</option>
                    <option value="SECRETARIA DE DIRECTOR" <?php if ($rowDatosEmpleo['GRADO'] == 'SECRETARIA DE DIRECTOR') echo 'selected'; ?>>SECRETARIA DE DIRECTOR</option>
                    <option value="APOYO ADMINISTRATIVA (O) DE SEGURIDAD" <?php if ($rowDatosEmpleo['GRADO'] == 'APOYO ADMINISTRATIVA (O) DE SEGURIDAD') echo 'selected'; ?>>APOYO ADMINISTRATIVA (O) DE SEGURIDAD</option>
                    <option value="ABOGADO (O) &quot;B&quot;" <?php if ($rowDatosEmpleo['GRADO'] == 'ABOGADO (O) "B"') echo 'selected'; ?>>ABOGADO (O) "B"</option>
                    <option value="ENFERMERA(O) SEGURIDAD Y CUSTODIA" <?php if ($rowDatosEmpleo['GRADO'] == 'ENFERMERA(O) SEGURIDAD Y CUSTODIA') echo 'selected'; ?>>ENFERMERA(O) SEGURIDAD Y CUSTODIA</option>
                    <option value="ODONTOLOGO" <?php if ($rowDatosEmpleo['GRADO'] == 'ODONTOLOGO') echo 'selected'; ?>>ODONTOLOGO</option>
                    <option value="ENFERMERA TITULADA" <?php if ($rowDatosEmpleo['GRADO'] == 'ENFERMERA TITULADA') echo 'selected'; ?>>ENFERMERA TITULADA</option>
                    <option value="PELUQUERO" <?php if ($rowDatosEmpleo['GRADO'] == 'PELUQUERO') echo 'selected'; ?>>PELUQUERO</option>
                    <option value="JEFE DE DEPARTAMENTO" <?php if ($rowDatosEmpleo['GRADO'] == 'JEFE DE DEPARTAMENTO') echo 'selected'; ?>>JEFE DE DEPARTAMENTO</option>
                    <option value="MEDICO GENERAL" <?php if ($rowDatosEmpleo['GRADO'] == 'MEDICO GENERAL') echo 'selected'; ?>>MEDICO GENERAL</option>
                    <option value="JEFE DE OFICINA" <?php if ($rowDatosEmpleo['GRADO'] == 'JEFE DE OFICINA') echo 'selected'; ?>>JEFE DE OFICINA</option>
                    <option value="SUPERVISOR" <?php if ($rowDatosEmpleo['GRADO'] == 'SUPERVISOR') echo 'selected'; ?>>SUPERVISOR</option>
                    <option value="CHOFER DE PRIMERA" <?php if ($rowDatosEmpleo['GRADO'] == 'CHOFER DE PRIMERA') echo 'selected'; ?>>CHOFER DE PRIMERA</option>
                    <option value="TECNICA (O) NO ESPECIALIZADA (O)" <?php if ($rowDatosEmpleo['GRADO'] == 'TECNICA (O) NO ESPECIALIZADA (O)') echo 'selected'; ?>>TECNICA (O) NO ESPECIALIZADA (O)</option>
                    <option value="AUXILIAR JURIDICO" <?php if ($rowDatosEmpleo['GRADO'] == 'AUXILIAR JURIDICO') echo 'selected'; ?>>AUXILIAR JURIDICO</option>
                    <option value="VIGILANTE" <?php if ($rowDatosEmpleo['GRADO'] == 'VIGILANTE') echo 'selected'; ?>>VIGILANTE</option>
                    <option value="CAPACITADOR" <?php if ($rowDatosEmpleo['GRADO'] == 'CAPACITADOR') echo 'selected'; ?>>CAPACITADOR</option>
                </select>


                <label for="numeroAnterior">NUMERO ANTERIOR:</label>
                <input type="text" id="numeroAnterior" name="NUMERO_ANTERIOR" required  value="<?php echo $rowDatosEmpleo['NUMERO_ANTERIOR']; ?>">
                <br><br>
            </div>
            <div style="flex: 1; margin-right: 10px;">
                <!-- Columna 3 -->
                <label for="numeroNuevo">NUMERO NUEVO:</label>
                <input type="text" id="numeroNuevo" name="NUMERO_NUEVO" required  value="<?php echo $rowDatosEmpleo['NUMERO_NUEVO']; ?>">
                <br><br>

                <label for="credencialLOC">CREDENCIAL CON LOC No. 196 (SI/NO) ACTUALIZADA 27/07/2022:</label>
                <input type="text" id="credencialLOC" name="CCLA" required  value="<?php echo $rowDatosEmpleo['CCLA']; ?>">
                <br><br>

                <label for="actualizacion2016">ACTUALIZACIÓN 2016:</label>
                <input type="text" id="actualizacion2016" name="ACTUALIZACION" required  value="<?php echo $rowDatosEmpleo['ACTUALIZACION']; ?>">
                <br><br>

                <label for="vetting">VETTING:</label>
                <input type="text" id="vetting" name="VETTING" required  value="<?php echo $rowDatosEmpleo['VETTING']; ?>">
                <br><br>
            </div>
            <div style="flex: 1;">
                <!-- Columna 4 -->
                <label for="oficialiaMayor">OFICIALIA MAYOR:</label>
                <input type="text" id="oficialiaMayor" name="OFICIALIA_MAYOR" required  value="<?php echo $rowDatosEmpleo['OFICIALIA_MAYOR']; ?>">
                <br><br>

                <label for="rnpsp">RNPSP:</label>
                <input type="text" id="rnpsp" name="RNPSP" required  value="<?php echo $rowDatosEmpleo['RNPSP']; ?>">
                <br><br>

                <label for="area" class="small-label">AREA:</label>
                <select class="form-control form-control-sm small-input" id="area" name="AREA">
                    <option value="OP" <?php if ($rowDatosEmpleo['AREA'] == 'OP') echo 'selected'; ?>>ELIGE UNA OPCIÓN</option>
                    <option value="SECCION PRIMERA DE ESTADO MAYOR" <?php if ($rowDatosEmpleo['AREA'] == 'SECCION PRIMERA DE ESTADO MAYOR') echo 'selected'; ?>>SECCION PRIMERA DE ESTADO MAYOR</option>
                    <option value="GRUPO CANINO K-9" <?php if ($rowDatosEmpleo['AREA'] == 'GRUPO CANINO K-9') echo 'selected'; ?>>GRUPO CANINO K-9</option>
                    <option value="AHUALULCO" <?php if ($rowDatosEmpleo['AREA'] == 'AHUALULCO') echo 'selected'; ?>>AHUALULCO</option>
                    <option value="ALLENDE" <?php if ($rowDatosEmpleo['AREA'] == 'ALLENDE') echo 'selected'; ?>>ALLENDE</option>
                    <option value="AQUISMON Y TANCANHUITZ DE SANTOS" <?php if ($rowDatosEmpleo['AREA'] == 'AQUISMON Y TANCANHUITZ DE SANTOS') echo 'selected'; ?>>AQUISMON Y TANCANHUITZ DE SANTOS</option>
                    <option value="UNIDAD DE ARMAMENTO, MUNICIONES Y LOC" <?php if ($rowDatosEmpleo['AREA'] == 'UNIDAD DE ARMAMENTO, MUNICIONES Y LOC') echo 'selected'; ?>>UNIDAD DE ARMAMENTO, MUNICIONES Y LOC</option>
                    <option value="AXTLA DE TERRAZAS" <?php if ($rowDatosEmpleo['AREA'] == 'AXTLA DE TERRAZAS') echo 'selected'; ?>>AXTLA DE TERRAZAS</option>
                    <option value="CARRANZA" <?php if ($rowDatosEmpleo['AREA'] == 'CARRANZA') echo 'selected'; ?>>CARRANZA</option>
                    <option value="CD. DEL MAIZ" <?php if ($rowDatosEmpleo['AREA'] == 'CD. DEL MAIZ') echo 'selected'; ?>>CD. DEL MAIZ</option>
                    <option value="CD. VALLES" <?php if ($rowDatosEmpleo['AREA'] == 'CD. VALLES') echo 'selected'; ?>>CD. VALLES</option>
                    <option value="CERRITOS" <?php if ($rowDatosEmpleo['AREA'] == 'CERRITOS') echo 'selected'; ?>>CERRITOS</option>
                    <option value="CHARCAS" <?php if ($rowDatosEmpleo['AREA'] == 'CHARCAS') echo 'selected'; ?>>CHARCAS</option>
                    <option value="COMANDANCIA CIUDAD SATELITE" <?php if ($rowDatosEmpleo['AREA'] == 'COMANDANCIA CIUDAD SATELITE') echo 'selected'; ?>>COMANDANCIA CIUDAD SATELITE</option>
                    <option value="DEPARTAMENTO DE ENLACE Y EVALUACION" <?php if ($rowDatosEmpleo['AREA'] == 'DEPARTAMENTO DE ENLACE Y EVALUACION') echo 'selected'; ?>>DEPARTAMENTO DE ENLACE Y EVALUACION</option>
                    <option value="DEPARTAMENTO DE ENLACE DE EVALUACION Y GESTION DE CERTIFICACION POLICIAL" <?php if ($rowDatosEmpleo['AREA'] == 'DEPARTAMENTO DE ENLACE DE EVALUACION Y GESTION DE CERTIFICACION POLICIAL') echo 'selected'; ?>>DEPARTAMENTO DE ENLACE DE EVALUACION Y GESTION DE CERTIFICACION POLICIAL</option>
                    <option value="UNIDAD DE CONTROL DE CONFIANZA" <?php if ($rowDatosEmpleo['AREA'] == 'UNIDAD DE CONTROL DE CONFIANZA') echo 'selected'; ?>>UNIDAD DE CONTROL DE CONFIANZA</option>
                    <option value="UNIDAD DE INFORMATICA" <?php if ($rowDatosEmpleo['AREA'] == 'UNIDAD DE INFORMATICA') echo 'selected'; ?>>UNIDAD DE INFORMATICA</option>
                    <option value="UNIDAD DE ARCHIVO GENERAL" <?php if ($rowDatosEmpleo['AREA'] == 'UNIDAD DE ARCHIVO GENERAL') echo 'selected'; ?>>UNIDAD DE ARCHIVO GENERAL</option>
                    <option value="UNIDAD DE GUARDIA GENERAL Y REGISTRO NACIONAL DE DETENIDOS" <?php if ($rowDatosEmpleo['AREA'] == 'UNIDAD DE GUARDIA GENERAL Y REGISTRO NACIONAL DE DETENIDOS') echo 'selected'; ?>>UNIDAD DE GUARDIA GENERAL Y REGISTRO NACIONAL DE DETENIDOS</option>
                    <option value="UNIDAD DE INTELIGENCIA POLICIAL" <?php if ($rowDatosEmpleo['AREA'] == 'UNIDAD DE INTELIGENCIA POLICIAL') echo 'selected'; ?>>UNIDAD DE INTELIGENCIA POLICIAL</option>
                    <option value="UNIDAD DE ANALISIS TACTICO" <?php if ($rowDatosEmpleo['AREA'] == 'UNIDAD DE ANALISIS TACTICO') echo 'selected'; ?>>UNIDAD DE ANALISIS TACTICO</option>
                    <option value="UNIDAD DE MEDIDAS DE PROTECCION Y CAUTELARES" <?php if ($rowDatosEmpleo['AREA'] == 'UNIDAD DE MEDIDAS DE PROTECCION Y CAUTELARES') echo 'selected'; ?>>UNIDAD DE MEDIDAS DE PROTECCION Y CAUTELARES</option>
                    <option value="UNIDAD DE PREVENCION DEL DELITO A TRAVES DE LA PARTICIPACION CIUDADANA" <?php if ($rowDatosEmpleo['AREA'] == 'UNIDAD DE PREVENCION DEL DELITO A TRAVES DE LA PARTICIPACION CIUDADANA') echo 'selected'; ?>>UNIDAD DE PREVENCION DEL DELITO A TRAVES DE LA PARTICIPACION CIUDADANA</option>
                    <option value="SECCION TERCERA DE ESTADO MAYOR" <?php if ($rowDatosEmpleo['AREA'] == 'SECCION TERCERA DE ESTADO MAYOR') echo 'selected'; ?>>SECCION TERCERA DE ESTADO MAYOR</option>
                    <option value="COMANDANCIA G.C.E." <?php if ($rowDatosEmpleo['AREA'] == 'COMANDANCIA G.C.E.') echo 'selected'; ?>>COMANDANCIA G.C.E.</option>
                    <option value="CENTRO DE CAPTURA A PLATAFORMA MEXICO" <?php if ($rowDatosEmpleo['AREA'] == 'CENTRO DE CAPTURA A PLATAFORMA MEXICO') echo 'selected'; ?>>CENTRO DE CAPTURA A PLATAFORMA MEXICO</option>
                    <option value="SERVICIOS ESPECIALES G.C.E." <?php if ($rowDatosEmpleo['AREA'] == 'SERVICIOS ESPECIALES G.C.E.') echo 'selected'; ?>>SERVICIOS ESPECIALES G.C.E.</option>
                    <option value="EBANO" <?php if ($rowDatosEmpleo['AREA'] == 'EBANO') echo 'selected'; ?>>EBANO</option>
                    <option value="EL NARANJO" <?php if ($rowDatosEmpleo['AREA'] == 'EL NARANJO') echo 'selected'; ?>>EL NARANJO</option>
                    <option value="UNIDAD DE ASUNTOS JURIDICOS" <?php if ($rowDatosEmpleo['AREA'] == 'UNIDAD DE ASUNTOS JURIDICOS') echo 'selected'; ?>>UNIDAD DE ASUNTOS JURIDICOS</option>
                    <option value="UNIDAD DE TRANSPARENCIA" <?php if ($rowDatosEmpleo['AREA'] == 'UNIDAD DE TRANSPARENCIA') echo 'selected'; ?>>UNIDAD DE TRANSPARENCIA</option>
                    <option value="UNIDAD DE PLANES Y PROYECTOS" <?php if ($rowDatosEmpleo['AREA'] == 'UNIDAD DE PLANES Y PROYECTOS') echo 'selected'; ?>>UNIDAD DE PLANES Y PROYECTOS</option>
                    <option value="ESTADO MAYOR" <?php if ($rowDatosEmpleo['AREA'] == 'ESTADO MAYOR') echo 'selected'; ?>>ESTADO MAYOR</option>
                    <option value="UNIDAD DE GABINETE MEDICO Y TRABAJO SOCIAL" <?php if ($rowDatosEmpleo['AREA'] == 'UNIDAD DE GABINETE MEDICO Y TRABAJO SOCIAL') echo 'selected'; ?>>UNIDAD DE GABINETE MEDICO Y TRABAJO SOCIAL</option>
                    <option value="GRUPO DE OPERACIONES TACTICAS" <?php if ($rowDatosEmpleo['AREA'] == 'GRUPO DE OPERACIONES TACTICAS') echo 'selected'; ?>>GRUPO DE OPERACIONES TACTICAS</option>
                    <option value="ITURBIDE" <?php if ($rowDatosEmpleo['AREA'] == 'ITURBIDE') echo 'selected'; ?>>ITURBIDE</option>
                    <option value="JEFATURA DE REGION CENTRO" <?php if ($rowDatosEmpleo['AREA'] == 'JEFATURA DE REGION CENTRO') echo 'selected'; ?>>JEFATURA DE REGION CENTRO</option>
                    <option value="UNIDAD DE POLICIA DE REACCION" <?php if ($rowDatosEmpleo['AREA'] == 'UNIDAD DE POLICIA DE REACCION') echo 'selected'; ?>>UNIDAD DE POLICIA DE REACCION</option>
                    <option value="JUAREZ" <?php if ($rowDatosEmpleo['AREA'] == 'JUAREZ') echo 'selected'; ?>>JUAREZ</option>
                    <option value="LA HINCADA" <?php if ($rowDatosEmpleo['AREA'] == 'LA HINCADA') echo 'selected'; ?>>LA HINCADA</option>
                    <option value="MADERO" <?php if ($rowDatosEmpleo['AREA'] == 'MADERO') echo 'selected'; ?>>MADERO</option>
                    <option value="MARIANO MATAMOROS" <?php if ($rowDatosEmpleo['AREA'] == 'MARIANO MATAMOROS') echo 'selected'; ?>>MARIANO MATAMOROS</option>
                    <option value="MATEHUALA" <?php if ($rowDatosEmpleo['AREA'] == 'MATEHUALA') echo 'selected'; ?>>MATEHUALA</option>
                    <option value="OBREGON" <?php if ($rowDatosEmpleo['AREA'] == 'OBREGON') echo 'selected'; ?>>OBREGON</option>
                    <option value="RAYON" <?php if ($rowDatosEmpleo['AREA'] == 'RAYON') echo 'selected'; ?>>RAYON</option>
                    <option value="SECCION CUARTA DE ESTADO MAYOR" <?php if ($rowDatosEmpleo['AREA'] == 'SECCION CUARTA DE ESTADO MAYOR') echo 'selected'; ?>>SECCION CUARTA DE ESTADO MAYOR</option>
                    <option value="UNIDAD DE MANTENIMIENTO VEHICULAR" <?php if ($rowDatosEmpleo['AREA'] == 'UNIDAD DE MANTENIMIENTO VEHICULAR') echo 'selected'; ?>>UNIDAD DE MANTENIMIENTO VEHICULAR</option>
                    <option value="RIOVERDE" <?php if ($rowDatosEmpleo['AREA'] == 'RIOVERDE') echo 'selected'; ?>>RIOVERDE</option>
                    <option value="RUBI" <?php if ($rowDatosEmpleo['AREA'] == 'RUBI') echo 'selected'; ?>>RUBI</option>
                    <option value="SALINAS DE HIDALGO" <?php if ($rowDatosEmpleo['AREA'] == 'SALINAS DE HIDALGO') echo 'selected'; ?>>SALINAS DE HIDALGO</option>
                    <option value="GRUPO DE MOTOCICLISTAS" <?php if ($rowDatosEmpleo['AREA'] == 'GRUPO DE MOTOCICLISTAS') echo 'selected'; ?>>GRUPO DE MOTOCICLISTAS</option>
                    <option value="DIVISION CARRETERAS Y CAMINOS ESTATALES" <?php if ($rowDatosEmpleo['AREA'] == 'DIVISION CARRETERAS Y CAMINOS ESTATALES') echo 'selected'; ?>>DIVISION CARRETERAS Y CAMINOS ESTATALES</option>
                    <option value="UNIDAD DE SERVICIOS DIVERSOS" <?php if ($rowDatosEmpleo['AREA'] == 'UNIDAD DE SERVICIOS DIVERSOS') echo 'selected'; ?>>UNIDAD DE SERVICIOS DIVERSOS</option>
                    <option value="STA. MARIA DEL RIO" <?php if ($rowDatosEmpleo['AREA'] == 'STA. MARIA DEL RIO') echo 'selected'; ?>>STA. MARIA DEL RIO</option>
                    <option value="TIERRA NUEVA" <?php if ($rowDatosEmpleo['AREA'] == 'TIERRA NUEVA') echo 'selected'; ?>>TIERRA NUEVA</option>
                    <option value="TAMASOPO" <?php if ($rowDatosEmpleo['AREA'] == 'TAMASOPO') echo 'selected'; ?>>TAMASOPO</option>
                    <option value="TAMAZUNCHALE" <?php if ($rowDatosEmpleo['AREA'] == 'TAMAZUNCHALE') echo 'selected'; ?>>TAMAZUNCHALE</option>
                    <option value="TAMUIN" <?php if ($rowDatosEmpleo['AREA'] == 'TAMUIN') echo 'selected'; ?>>TAMUIN</option>
                    <option value="TANCANHUITZ DE SANTOS" <?php if ($rowDatosEmpleo['AREA'] == 'TANCANHUITZ DE SANTOS') echo 'selected'; ?>>TANCANHUITZ DE SANTOS</option>
                    <option value="TANQUIAN DE ESCOBEDO" <?php if ($rowDatosEmpleo['AREA'] == 'TANQUIAN DE ESCOBEDO') echo 'selected'; ?>>TANQUIAN DE ESCOBEDO</option>
                    <option value="UNIDAD DE ANALISIS ESTRATEGICO" <?php if ($rowDatosEmpleo['AREA'] == 'UNIDAD DE ANALISIS ESTRATEGICO') echo 'selected'; ?>>UNIDAD DE ANALISIS ESTRATEGICO</option>
                    <option value="UNIDAD DE POLICIA PROCESAL" <?php if ($rowDatosEmpleo['AREA'] == 'UNIDAD DE POLICIA PROCESAL') echo 'selected'; ?>>UNIDAD DE POLICIA PROCESAL</option>
                    <option value="UNIDAD DE POLICIA Y TRANSITO ESTATAL" <?php if ($rowDatosEmpleo['AREA'] == 'UNIDAD DE POLICIA Y TRANSITO ESTATAL') echo 'selected'; ?>>UNIDAD DE POLICIA Y TRANSITO ESTATAL</option>
                    <option value="SECCION QUINTA DE ESTADO MAYOR" <?php if ($rowDatosEmpleo['AREA'] == 'SECCION QUINTA DE ESTADO MAYOR') echo 'selected'; ?>>SECCION QUINTA DE ESTADO MAYOR</option>
                    <option value="UNIDAD DE RECOPILACION Y ANALISIS" <?php if ($rowDatosEmpleo['AREA'] == 'UNIDAD DE RECOPILACION Y ANALISIS') echo 'selected'; ?>>UNIDAD DE RECOPILACION Y ANALISIS</option>
                    <option value="UNIDAD ESPECIALIZADA EN ATENCION A VIOLENCIA DE GENERO" <?php if ($rowDatosEmpleo['AREA'] == 'UNIDAD ESPECIALIZADA EN ATENCION A VIOLENCIA DE GENERO') echo 'selected'; ?>>UNIDAD ESPECIALIZADA EN ATENCION A VIOLENCIA DE GENERO</option>
                    <option value="VILLA DE ARRIAGA" <?php if ($rowDatosEmpleo['AREA'] == 'VILLA DE ARRIAGA') echo 'selected'; ?>>VILLA DE ARRIAGA</option>
                    <option value="VILLA HIDALGO" <?php if ($rowDatosEmpleo['AREA'] == 'VILLA HIDALGO') echo 'selected'; ?>>VILLA HIDALGO</option>
                </select>
                <br><br>

                <label for="AGRUPAMIENTOS" class="small-label">AGRUPAMIENTOS:</label>
                <select class="form-control form-control-sm small-input" id="AGRUPAMIENTOS" name="AGRUPAMIENTOS">
                    <option value="OP" <?php if ($rowDatosEmpleo['AGRUPAMIENTOS'] == 'OP') echo 'selected'; ?>>ELIGE UNA OPCIÓN</option>
                    <option value="SECCION PRIMERA DE ESTADO MAYOR" <?php if ($rowDatosEmpleo['AGRUPAMIENTOS'] == 'SECCION PRIMERA DE ESTADO MAYOR') echo 'selected'; ?>>SECCION PRIMERA DE ESTADO MAYOR</option>
                    <option value="SECCION QUINTA DE ESTADO MAYOR" <?php if ($rowDatosEmpleo['AGRUPAMIENTOS'] == 'SECCION QUINTA DE ESTADO MAYOR') echo 'selected'; ?>>SECCION QUINTA DE ESTADO MAYOR</option>
                    <option value="SECCION TERCERA DE ESTADO MAYOR" <?php if ($rowDatosEmpleo['AGRUPAMIENTOS'] == 'SECCION TERCERA DE ESTADO MAYOR') echo 'selected'; ?>>SECCION TERCERA DE ESTADO MAYOR</option>
                    <option value="SECCION CUARTA DE ESTADO MAYOR" <?php if ($rowDatosEmpleo['AGRUPAMIENTOS'] == 'SECCION CUARTA DE ESTADO MAYOR') echo 'selected'; ?>>SECCION CUARTA DE ESTADO MAYOR</option>
                    <option value="SECCION SEXTA DE ESTADO MAYOR" <?php if ($rowDatosEmpleo['AGRUPAMIENTOS'] == 'SECCION SEXTA DE ESTADO MAYOR') echo 'selected'; ?>>SECCION SEXTA DE ESTADO MAYOR</option>
                    <option value="SECCION SEGUNDA DE ESTADO MAYOR" <?php if ($rowDatosEmpleo['AGRUPAMIENTOS'] == 'SECCION SEGUNDA DE ESTADO MAYOR') echo 'selected'; ?>>SECCION SEGUNDA DE ESTADO MAYOR</option>
                    <option value="COMANDANCIA" <?php if ($rowDatosEmpleo['AGRUPAMIENTOS'] == 'COMANDANCIA') echo 'selected'; ?>>COMANDANCIA</option>
                    <option value="UNIDAD DE ASUNTOS JURIDICOS" <?php if ($rowDatosEmpleo['AGRUPAMIENTOS'] == 'UNIDAD DE ASUNTOS JURIDICOS') echo 'selected'; ?>>UNIDAD DE ASUNTOS JURIDICOS</option>
                    <option value="UNIDAD DE TRANSPARENCIA" <?php if ($rowDatosEmpleo['AGRUPAMIENTOS'] == 'UNIDAD DE TRANSPARENCIA') echo 'selected'; ?>>UNIDAD DE TRANSPARENCIA</option>
                    <option value="ESTADO MAYOR" <?php if ($rowDatosEmpleo['AGRUPAMIENTOS'] == 'ESTADO MAYOR') echo 'selected'; ?>>ESTADO MAYOR</option>
                    <option value="SECCION SEPTIMA DE ESTADO MAYOR" <?php if ($rowDatosEmpleo['AGRUPAMIENTOS'] == 'SECCION SEPTIMA DE ESTADO MAYOR') echo 'selected'; ?>>SECCION SEPTIMA DE ESTADO MAYOR</option>
                </select>
                <br><br>

                <label for="DESCRIPCION" class="small-label">DESCRIPCIÓN:</label>
                <select class="form-control form-control-sm small-input" id="DESCRIPCION" name="DESCRIPCION">
                    <option value="OP" <?php if ($rowDatosEmpleo['DESCRIPCION'] == 'OP') echo 'selected'; ?>>ELIGE UNA OPCIÓN</option>
                    <option value="SECCION PRIMERA DE ESTADO MAYOR" <?php if ($rowDatosEmpleo['DESCRIPCION'] == 'SECCION PRIMERA DE ESTADO MAYOR') echo 'selected'; ?>>SECCION PRIMERA DE ESTADO MAYOR</option>
                    <option value="SECCION QUINTA DE ESTADO MAYOR" <?php if ($rowDatosEmpleo['DESCRIPCION'] == 'SECCION QUINTA DE ESTADO MAYOR') echo 'selected'; ?>>SECCION QUINTA DE ESTADO MAYOR</option>
                    <option value="SECCION TERCERA DE ESTADO MAYOR" <?php if ($rowDatosEmpleo['DESCRIPCION'] == 'SECCION TERCERA DE ESTADO MAYOR') echo 'selected'; ?>>SECCION TERCERA DE ESTADO MAYOR</option>
                    <option value="SECCION CUARTA DE ESTADO MAYOR" <?php if ($rowDatosEmpleo['DESCRIPCION'] == 'SECCION CUARTA DE ESTADO MAYOR') echo 'selected'; ?>>SECCION CUARTA DE ESTADO MAYOR</option>
                    <option value="SECCION SEXTA DE ESTADO MAYOR" <?php if ($rowDatosEmpleo['DESCRIPCION'] == 'SECCION SEXTA DE ESTADO MAYOR') echo 'selected'; ?>>SECCION SEXTA DE ESTADO MAYOR</option>
                    <option value="SECCION SEGUNDA DE ESTADO MAYOR" <?php if ($rowDatosEmpleo['DESCRIPCION'] == 'SECCION SEGUNDA DE ESTADO MAYOR') echo 'selected'; ?>>SECCION SEGUNDA DE ESTADO MAYOR</option>
                    <option value="COMANDANCIA" <?php if ($rowDatosEmpleo['DESCRIPCION'] == 'COMANDANCIA') echo 'selected'; ?>>COMANDANCIA</option>
                    <option value="UNIDAD DE ASUNTOS JURIDICOS" <?php if ($rowDatosEmpleo['DESCRIPCION'] == 'UNIDAD DE ASUNTOS JURIDICOS') echo 'selected'; ?>>UNIDAD DE ASUNTOS JURIDICOS</option>
                    <option value="UNIDAD DE TRANSPARENCIA" <?php if ($rowDatosEmpleo['DESCRIPCION'] == 'UNIDAD DE TRANSPARENCIA') echo 'selected'; ?>>UNIDAD DE TRANSPARENCIA</option>
                    <option value="ESTADO MAYOR" <?php if ($rowDatosEmpleo['DESCRIPCION'] == 'ESTADO MAYOR') echo 'selected'; ?>>ESTADO MAYOR</option>
                    <option value="SECCION SEPTIMA DE ESTADO MAYOR" <?php if ($rowDatosEmpleo['DESCRIPCION'] == 'SECCION SEPTIMA DE ESTADO MAYOR') echo 'selected'; ?>>SECCION SEPTIMA DE ESTADO MAYOR</option>
                </select>
                <br><br>

                <label for="polizaOficialMayor">POLIZA OF.MAYOR:</label>
                <input type="text" id="polizaOficialMayor" name="POM" required  value="<?php echo $rowDatosEmpleo['POM']; ?>">
                <br><br>

                <label for="polizaGNP">POLIZA G.N.P:</label>
                <input type="text" id="polizaGNP" name="PGNP" required  value="<?php echo $rowDatosEmpleo['PGNP']; ?>">
                <br><br>

                <label for="folio">FOLIO:</label>
                <input type="text" id="folio" name="FOLIO" required  value="<?php echo $rowDatosEmpleo['FOLIO']; ?>">
                <br><br>

                <label for="comisionHyJ">COMISIÓN HONOR Y JUSTICIA:</label>
                <input type="text" id="comisionHyJ" name="CHYJ" required  value="<?php echo $rowDatosEmpleo['CHYJ']; ?>">
                <br><br>

                <label for="becarios">BECARIOS:</label>
                <input type="text" id="becarios" name="BECARIOS" required  value="<?php echo $rowDatosEmpleo['BECARIOS']; ?>">
                <br><br>

                <label for="metropolitana">METROPOLITANA:</label>
                <input type="text" id="metropolitana" name="METROPOLITANA" required  value="<?php echo $rowDatosEmpleo['METROPOLITANA']; ?>">
                <br><br>

                <label for="gruposOperacionesTacticas">GRUPOS DE OPERACIONES TÁCTICAS:</label>
                <input type="text" id="gruposOperacionesTacticas" name="GDOT" required  value="<?php echo $rowDatosEmpleo['GDOT']; ?>">
                <br><br>

                <label for="segundaCertificacion">2DA CERTIFICACION:</label>
                <input type="text" id="segundaCertificacion" name="sdC" required  value="<?php echo $rowDatosEmpleo['sdC']; ?>">
                <br><br>

                <label for="fechaProcesoEvaluacion">FECHA DE PROCESO DE EVALUACIÓN:</label>
                <input type="text" id="fechaProcesoEvaluacion" name="FDPDE" required  value="<?php echo $rowDatosEmpleo['FDPDE']; ?>">
                <br><br>

                <label for="fechaConclusion">FECHA DE CONCLUSIÓN:</label>
                <input type="text" id="fechaConclusion" name="FDC" required  value="<?php echo $rowDatosEmpleo['FDC']; ?>">
                <br><br>

                <label for="fechaEvaluacionCompetenciasBasicas">FECHA DE EVALUACION COMPETENCIAS BASICAS:</label>
                <input type="text" id="fechaEvaluacionCompetenciasBasicas" name="FECB" required  value="<?php echo $rowDatosEmpleo['FECB']; ?>">
                <br><br>

                <label for="fechaEvaluacionDesempeno">FECHA DE EVALUACION DESEMPEÑO:</label>
                <input type="text" id="fechaEvaluacionDesempeno" name="FDED" required  value="<?php echo $rowDatosEmpleo['FDED']; ?>">
                <br><br>

                <label for="fechaEmision">FECHA DE EMISIÓN:</label>
                <input type="text" id="fechaEmision" name="FDE" required  value="<?php echo $rowDatosEmpleo['FDE']; ?>">
                <br><br>
            </div>
        </div>
                <!-- Botón de guardar CAMBIOS -->
                <input type="submit" name="guardar" value="Guardar cambios" class="custom-button"><br><br><br>
    </form>
</section>

            <?php
        } else {
            echo '<p class="error-message">Datos del Empleo no encontrados.</p>';
        }

        // Cierra la conexión después de consultar datos del Empleo
        $conn->close();
        ?>


      <!-- Consulta los datos de Categorización-->
      <?php
        require 'database.php'; // Vuelve a incluir la conexión a la base de datos

    // Consulta los datos de Categorización
    $sqlCategorizacion = "SELECT * FROM categorizacion WHERE NO_EMPLEADO = '$noEmpleado'";
    $resultCategorizacion = $conn->query($sqlCategorizacion);

    /* Consulta Formulario de Categorización */
    if ($resultCategorizacion->num_rows > 0) {
        $rowCategorizacion = $resultCategorizacion->fetch_assoc();
        ?>
           <section>
    <h2>Categorización</h2>
    <!-- Formulario de Categorización en 4 columnas -->
    <form action="php2/updates/upForm13.php" method="POST">
        <div style="display: flex; flex-wrap: wrap;">
            <div style="flex: 1; margin-right: 10px;">
                <!-- Columna 1 -->
                <label for="noEmpleado">Número de Empleado:</label>
                <input type="text" id="noEmpleado" name="NO_EMPLEADO" required readonly value="<?php echo $rowCategorizacion['NO_EMPLEADO']; ?>">
                <br><br>

                <label for="puesto">PUESTO:</label>
                <input type="text" id="puesto" name="PUESTO" required  value="<?php echo $rowCategorizacion['PUESTO']; ?>">
                <br><br>

                <label for="funcion">FUNCIÓN:</label>
                <input type="text" id="funcion" name="FUNCION" required  value="<?php echo $rowCategorizacion['FUNCION']; ?>">
                <br><br>

                <label for="actividades">ACTIVIDADES:</label>
                <input type="text" id="actividades" name="ACTIVIDADES" required  value="<?php echo $rowCategorizacion['ACTIVIDADES']; ?>">
                <br><br>
            </div>
            <div style="flex: 1; margin-right: 10px;">
                <!-- Columna 2 -->
                <label for="descripcionEstatus">DESCRIPCIÓN DEL ESTATUS:</label>
                <input type="text" id="descripcionEstatus" name="DESCRIPCION_ESTATUS" required  value="<?php echo $rowCategorizacion['DESCRIPCION_ESTATUS']; ?>">
                <br><br>
            </div>
        </div>
                <!-- Botón de guardar CAMBIOS -->
                <input type="submit" name="guardar" value="Guardar cambios" class="custom-button"><br><br><br>
    </form>
</section>

            <?php
        } else {
            echo '<p class="error-message">Datos de Categorización no encontrados.</p>';
        }

        // Cierra la conexión después de consultar datos de Categorización
        $conn->close();
        ?>


      <!-- Consulta los datos de Formulario de Cursos y Reconocimientos de Cursos-->
      <?php
        require 'database.php'; // Vuelve a incluir la conexión a la base de datos

    // Consulta los datos de Cursos y Reconocimientos de Cursos
    $sqlCursos = "SELECT * FROM cursos_reconocimiento_cuerso WHERE NO_EMPLEADO_14 = '$noEmpleado'";
    $resultCursos = $conn->query($sqlCursos);

    /* Consulta Formulario de Cursos y Reconocimientos de Cursos */
    if ($resultCursos->num_rows > 0) {
        $rowCursos = $resultCursos->fetch_assoc();
        ?>
            <section>
    <h2>Cursos y Reconocimientos de Cursos</h2>
    <!-- Formulario de Cursos y Reconocimientos de Cursos en 4 columnas -->
    <form action="php2/updates/upForm14.php" method="POST">
        <div style="display: flex; flex-wrap: wrap;">
            <div style="flex: 1; margin-right: 10px;">
                <!-- Columna 1 -->
                <label for="noEmpleado">Número de Empleado:</label>
                <input type="text" id="noEmpleado" name="NO_EMPLEADO_14" required readonly value="<?php echo $rowCursos['NO_EMPLEADO_14']; ?>">
                <br><br>

                <label for="GA" class="small-label">GRUPO ACREDITABLE:</label>
                <select class="form-control form-control-sm small-input" id="GA" name="GA">
                    <option value="OP" <?php if ($rowCursos['GA'] == 'OP') echo 'selected'; ?>>ELIGE UNA OPCIÓN</option>
                    <option value="OPERACIONES" <?php if ($rowCursos['GA'] == 'OPERACIONES') echo 'selected'; ?>>OPERACIONES</option>
                    <option value="INVESTIGACION" <?php if ($rowCursos['GA'] == 'INVESTIGACION') echo 'selected'; ?>>INVESTIGACION</option>
                    <option value="ANALISIS TACTICO" <?php if ($rowCursos['GA'] == 'ANALISIS TACTICO') echo 'selected'; ?>>ANALISIS TACTICO</option>
                    <option value="INVESTIGACION MANDO" <?php if ($rowCursos['GA'] == 'INVESTIGACION MANDO') echo 'selected'; ?>>INVESTIGACION MANDO</option>
                    <option value="OPERACIONES MANDO" <?php if ($rowCursos['GA'] == 'OPERACIONES MANDO') echo 'selected'; ?>>OPERACIONES MANDO</option>
                    <option value="NINGUNO" <?php if ($rowCursos['GA'] == 'NINGUNO') echo 'selected'; ?>>NINGUNO</option>
                </select>
                <br><br>
            </div>
            <div style="flex: 1; margin-right: 10px;">
                <!-- Columna 2 -->
                <label for="BLOQUE" class="small-label">BLOQUE:</label>
                <select class="form-control form-control-sm small-input" id="BLOQUE" name="BLOQUE">
                    <option value="OP" <?php if ($rowCursos['BLOQUE'] == 'OP') echo 'selected'; ?>>ELIGE UNA OPCIÓN</option>
                    <option value="PB" <?php if ($rowCursos['BLOQUE'] == 'PB') echo 'selected'; ?>>PRIMER BLOQUE</option>
                    <option value="SB" <?php if ($rowCursos['BLOQUE'] == 'SB') echo 'selected'; ?>>SEGUNDO BLOQUE</option>
                    <option value="TB" <?php if ($rowCursos['BLOQUE'] == 'TB') echo 'selected'; ?>>TERCER BLOQUE</option>
                    <option value="NINGUNO" <?php if ($rowCursos['BLOQUE'] == 'NINGUNO') echo 'selected'; ?>>NINGUNO</option>
                </select>
                <br><br>

                <label for="cursoIcat">CURSO MANEJO ICAT:</label>
                <input type="text" id="cursoIcat" name="CMI" required  value="<?php echo $rowCursos['CMI']; ?>">
                <br><br>
            </div>
            <div style="flex: 1; margin-right: 10px;">
                <!-- Columna 3 -->
                <label for="cursoReplicador">Curso "REPLICADOR PARA EL TALLER DEL USO DE LA FUERZA Y ARMAS DE FUEGO EN SEGURIDAD PUBLICA":</label>
                <input type="text" id="cursoReplicador" name="rpet" required  value="<?php echo $rowCursos['rpet']; ?>">
                <br><br>

                <label for="cursoSPA">Curso Sistema Penal Acusatorio:</label>
                <input type="text" id="cursoSPA" name="CSPA" required  value="<?php echo $rowCursos['CSPA']; ?>">
                <br><br>
            </div>
            <div style="flex: 1;">
                <!-- Columna 4 -->
                <label for="juramentoCargo">Juramento al Cargo:</label>
                <input type="text" id="juramentoCargo" name="JAC" required  value="<?php echo $rowCursos['JAC']; ?>">
                <br><br>

                <label for="NDE" class="small-label">¿CUANTOS CURSOS TIENE?:</label>
                <select type="text" id="campo49" class="form-control form-control-sm small-input" name="NDE" required>
                    <option value="EUO" <?php if ($rowCursos['NDE'] == 'EUO') echo 'selected'; ?>>ELIGE UNA OPCIÓN</option>
                        <?php
                        for ($i = 0; $i <= 60; $i++) {
                            echo '<option value="' . $i . '" ';
                            if ($rowCursos['NDE'] == $i) {
                                echo 'selected';
                            }
                            echo '>' . $i . '</option>';
                        }
                        ?>
                </select>
                <br><br>


                <label for="fecha">FECHA:</label>
                <input type="text" id="fecha" name="FECHA1" required  value="<?php echo $rowCursos['FECHA1']; ?>">
                <br><br>

                <label for="curso">CURSO :</label>
                <input type="text" id="curso" name="CURSO" required  value="<?php echo $rowCursos['CURSO']; ?>">
                <br><br>

                <label for="quienExpide">¿QUIEN EXPIDE?:</label>
                <input type="text" id="quienExpide" name="QE" required  value="<?php echo $rowCursos['QE']; ?>">
                <br><br>
            </div>
        </div>
                <!-- Botón de guardar CAMBIOS -->
                <input type="submit" name="guardar" value="Guardar cambios" class="custom-button"><br><br><br>
    </form>
</section>

            <?php
      } else {
        echo '<p class="error-message">Datos de Formulario de Cursos y Reconocimientos de Cursos no encontrados.</p>';
    }
        
        // Cierra la conexión después de consultar datos de Formulario de Cursos y Reconocimientos de Cursos
        $conn->close();
        ?>


   <!-- Consulta los datos de de Incapacidad-->
   <?php
        require 'database.php'; // Vuelve a incluir la conexión a la base de datos

   // Consulta los datos de Incapacidad
   $sqlIncapacidad = "SELECT * FROM incapacida WHERE NO_EMPLEADO_15 = '$noEmpleado'";
   $resultIncapacidad = $conn->query($sqlIncapacidad);

   /* Consulta Formulario de Incapacidad */
   if ($resultIncapacidad->num_rows > 0) {
       $rowIncapacidad = $resultIncapacidad->fetch_assoc();
       ?>
            <section>
    <h2>Incapacidad</h2>
    <!-- Formulario de Incapacidad en 4 columnas -->
    <form action="php2/updates/upForm15.php" method="POST">
        <div style="display: flex; flex-wrap: wrap;">
            <div style="flex: 1; margin-right: 10px;">
                <!-- Columna 1 -->
                <label for="noEmpleado">Número de Empleado:</label>
                <input type="text" id="noEmpleado" name="NO_EMPLEADO_15" required readonly value="<?php echo $rowIncapacidad['NO_EMPLEADO_15']; ?>">
                <br><br>

                <label for="fechaInicio">FECHA DE INICIO DE PERSONAL INCAPACITADO:</label>
                <input type="text" id="fechaInicio" name="FECHA_INICIO_PERSONAL_INCAPACITADO" required  value="<?php echo $rowIncapacidad['FECHA_INICIO_PERSONAL_INCAPACITADO']; ?>">
                <br><br>
            </div>
            <div style="flex: 1; margin-right: 10px;">
                <!-- Columna 2 -->
                <label for="observaciones">OBSERVACIONES:</label>
                <input type="text" id="observaciones" name="OBSERVACIONES" required  value="<?php echo $rowIncapacidad['OBSERVACIONES']; ?>">
                <br><br>
            </div>
            <div style="flex: 1; margin-right: 10px;">
                <!-- Columna 3 -->
                <label for="fechaTerminacion">FECHA DE TERMINACIÓN DE PERSONAL INCAPACITADO:</label>
                <input type="text" id="fechaTerminacion" name="FECHA_TERMINACION_PERSONAL_INCAPACITADO" required  value="<?php echo $rowIncapacidad['FECHA_TERMINACION_PERSONAL_INCAPACITADO']; ?>">
                <br><br>
            </div>
            <div style="flex: 1;">
                <!-- Columna 4 -->
                <label for="incapacidadPendiente">INCAPACIDAD PENDIENTE GUARDIA GENERAL:</label>
                <input type="text" id="incapacidadPendiente" name="INCAPACIDAD_PENDIENTE_GUARDIA_GENERAL" required  value="<?php echo $rowIncapacidad['INCAPACIDAD_PENDIENTE_GUARDIA_GENERAL']; ?>">
                <br><br>
            </div>
        </div>
                <!-- Botón de guardar CAMBIOS -->
                <input type="submit" name="guardar" value="Guardar cambios" class="custom-button"><br><br><br>
    </form>
</section>

            <?php
        } else {
            echo '<p class="error-message">Datos de Incapacidad no encontrados.</p>';
        }

        // Cierra la conexión después de consultar datos de Incapacidad
        $conn->close();
        ?>
        <!-- Botón "Cerrar" -->
    <a href="pag1.php" class="btn btn-primary">Cerrar</a>
    </div>
</body>
</html>
