<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
    <title>Modificación de Datos del Empleado</title>
    <style>
        /* Estilos para los campos de formulario */
        .form-group label {
            color: #4CAF50; /* Cambia el color de las etiquetas de los campos a un tono de verde elegante */
        }

        body {
            background-color: #f8f9fa;
            padding: 20px;
            font-family: Arial, sans-serif;
        }
        .container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }
        h1, h2 {
            color: #007bff;
        }
        label {
            font-weight: bold;
        }
        .form-group {
            margin-bottom: 20px;
        }
        input[type="text"],
        textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ced4da;
            border-radius: 4px;
            font-size: 16px;
        }
        .btn-primary {
            background-color: #007bff;
            color: #fff;
            font-size: 16px;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }        
        .error-message {
    color: red;
}

.custom-button {
            background-color: #007bff; /* Color de fondo */
            color: #fff; /* Color de texto */
            padding: 10px 20px; /* Espaciado interior (arriba/abajo izquierda/derecha) */
            border: none; /* Borde */
            border-radius: 4px; /* Borde redondeado */
            font-size: 16px; /* Tamaño de fuente */
            cursor: pointer; /* Cambia el cursor al pasar el ratón */
        }
        
    </style>
</head>
<body>
    <div class="container">
        <h1 id="title_generales">Modificación de Datos del Empleado</h1>

        <input type="text" id="searchField" placeholder="Buscar etiqueta..." onkeyup="searchLabels()">

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
                    <input type="text" id="nombre" name="NOMBRE" required  value="<?php echo $rowGenerales['NOMBRE']; ?>">
                </div>
                <!-- Campo de texto para el AP -->
                <div class="form-group">
                    <label for="ap" id="lap">Apellido Paterno:</label>
                    <input type="text" id="ap" name="AP" required  value="<?php echo $rowGenerales['AP']; ?>">
                </div>
                <!-- Campo de texto para el AM -->
                <div class="form-group">
                    <label for="am" id="lam">Apellido Materno:</label>
                    <input type="text" id="am" name="AM" required  value="<?php echo $rowGenerales['AM']; ?>">
                </div>
            </div>

            <div class="col-md-3">
                <!-- Segunda columna de campos -->
                <!-- Campo de texto para el FN -->
                <div class="form-group">
                    <label for="fn" id="lfn">Fecha de Nacimiento:</label>
                    <input type="text" id="fn" name="FN" required  value="<?php echo $rowGenerales['FN']; ?>">
                </div>
                <!-- Campo de texto para el EDAD -->
                <div class="form-group">
                    <label for="edad" id="ledad">Edad:</label>
                    <input type="text" id="edad" name="EDAD" required  value="<?php echo $rowGenerales['EDAD']; ?>">
                </div>
                <!-- Campo de texto para el SEXO -->
                <div class="form-group">
                    <label for="sexo" id="lsexo">Sexo:</label>
                    <input type="text" id="sexo" name="SEXO" required  value="<?php echo $rowGenerales['SEXO']; ?>">
                </div>
                <!-- Campo de texto para el CORREO -->
                <div class="form-group">
                    <label for="correo" id="lcorreo">Correo:</label>
                    <input type="text" id="correo" name="CORREO" required  value="<?php echo $rowGenerales['CORREO']; ?>">
                </div>
            </div>

            <div class="col-md-3">
                <!-- Tercera columna de campos -->
                <!-- Campo de texto para el EC -->
                <div class="form-group">
                    <label for="ec" id="lec">Estado Civil:</label>
                    <input type="text" id="ec" name="EC" required  value="<?php echo $rowGenerales['EC']; ?>">
                </div>
                <!-- Campo de texto para el SMN -->
                <div class="form-group">
                    <label for="smn" id="lsmn">Cartilla SMN:</label>
                    <input type="text" id="smn" name="SMN" required  value="<?php echo $rowGenerales['SMN']; ?>">
                </div>
                <!-- Campo de texto para el LICENCIA -->
                <div class="form-group">
                    <label for="licencia" id="llicencia">Licencia:</label>
                    <input type="text" id="licencia" name="LICENCIA" required  value="<?php echo $rowGenerales['LICENCIA']; ?>">
                </div>
                <!-- Campo de texto para el INEF -->
                <div class="form-group">
                    <label for="ine_entrente" id="linef">INE Enfrente:</label>
                    <input type="text" id="ine_entrente" name="INEF" required  value="<?php echo $rowGenerales['INEF']; ?>">
                </div>
            </div>

            <div class="col-md-3">
                <!-- Cuarta columna de campos -->
                <!-- Campo de texto para el INEA -->
                <div class="form-group">
                    <label for="ine_atras" id="linea">INE Atras:</label>
                    <input type="text" id="ine_atras" name="INEA" required  value="<?php echo $rowGenerales['INEA']; ?>">
                </div>
                <!-- Campo de texto para el LN -->
                <div class="form-group">
                    <label for="ln" id="lln">Lugar de Nacimiento:</label>
                    <input type="text" id="ln" name="LN" required  value="<?php echo $rowGenerales['LN']; ?>">
                </div>
                <!-- Campo de texto para el CALLE -->
                <div class="form-group">
                    <label for="calle" id="lcalle">Calle:</label>
                    <input type="text" id="calle" name="CALLE" required  value="<?php echo $rowGenerales['CALLE']; ?>">
                </div>
                <!-- Campo de texto para el No_ext -->
                <div class="form-group">
                    <label for="numero_exterior" id="lnumero_exterior">Número Exterior:</label>
                    <input type="text" id="numero_exterior" name="No_ext" required  value="<?php echo $rowGenerales['No_ext']; ?>">
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
                    <input type="text" id="numero_interior" name="No_int" required  value="<?php echo $rowGenerales['No_int']; ?>">
                </div>
            </div>

            <div class="col-md-3">
                <!-- Sexta columna de campos -->
                <!-- Campo de texto para el COLONIA -->
                <div class="form-group">
                    <label for="colonia" id="lcolonia">Colonia:</label>
                    <input type="text" id="colonia" name="COLONIA" required  value="<?php echo $rowGenerales['COLONIA']; ?>">
                </div>
            </div>

            <div class="col-md-3">
                <!-- Séptima columna de campos -->
                <!-- Campo de texto para el MUNICIPIO -->
                <div class="form-group">
                    <label for="municipio" id="lmunicipio">Municipio:</label>
                    <input type="text" id="municipio" name="MUNICIPIO" required  value="<?php echo $rowGenerales['MUNICIPIO']; ?>">
                </div>
            </div>

            <div class="col-md-3">
                <!-- Octava columna de campos -->
                <!-- Campo de texto para el ESTADO -->
                <div class="form-group">
                    <label for="estado" id="lestado">Estado:</label>
                    <input type="text" id="estado" name="ESTADO" required  value="<?php echo $rowGenerales['ESTADO']; ?>">
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
                    <input type="text" id="cp" name="CP" required  value="<?php echo $rowGenerales['CP']; ?>">
                </div>
            </div>

            <div class="col-md-3">
                <!-- Décima columna de campos -->
                <!-- Campo de texto para el CURP -->
                <div class="form-group">
                    <label for="curp" id="lcurp">CURP:</label>
                    <input type="text" id="curp" name="CURP" required  value="<?php echo $rowGenerales['CURP']; ?>">
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
    <form action="" method="POST">
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
                    <input type="text" id="nes" name="NES">
                </div>
                <!-- Campo de texto para APELLIDO PATERNO -->
                <div class="form-group">
                    <label for="apea">Apellido 1 Esposa:</label>
                    <input type="text" id="apea" name="APEA">
                </div>
            </div>
        </div>

        <!-- Segunda fila de campos -->
        <div class="row">
            <div class="col-md-3">
                <!-- Quinta columna de campos -->
                <!-- Campo de texto para APELLIDO MATERNO -->
                <div class="form-group">
                    <label for="dialecto">Apellido 2 Esposa:</label>
                    <input type="text" id="dialecto" name="AMEA">
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
                    <input type="text" id="ndh" name="NDH">
                </div>
                <!-- Campo de texto para APELLIDO PATERNO -->
                <div class="form-group">
                    <label for="apdh">Apellido 1 Hijo:</label>
                    <input type="text" id="apdh" name="APDH">
                </div>
            </div>

            <div class="col-md-3">
                <!-- Séptima columna de campos -->
                <!-- Campo de texto para APELLIDO MATERNO -->
                <div class="form-group">
                    <label for="amdh">Apellido 2 Hijo:</label>
                    <input type="text" id="amdh" name="AMDH">
                </div>
                <!-- Campo de texto para SEXO -->
                <div class="form-group">
                    <label for="sexoh">Sexo Hijo:</label>
                    <input type="text" id="sexoh" name="SEXOH">
                </div>
                <!-- Campo de texto para FECHA DE NACIMIENTO -->
                <div class="form-group">
                    <label for="fnh">Fecha de Nacimiento Hijo:</label>
                    <input type="text" id="fnh" name="FNH">
                </div>
            </div>

            <div class="col-md-3">
                <!-- Octava columna de campos -->
                <!-- Campo de texto para EDAD -->
                <div class="form-group">
                    <label for="edadh">Edad Hijo:</label>
                    <input type="text" id="edadh" name="EDADH">
                </div>
            </div>
        </div>

        <!-- Botón de guardar Datos Familiares -->
        <input type="submit" name="guardar" value="Guardar Datos Familiares"><br><br><br>
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
    <form action="" method="POST">
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
    <form action="" method="POST">
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
    <form action="" method="POST">
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
    <form action="" method="POST" style="display: flex; flex-wrap: wrap;">
        <div style="flex: 1; margin-right: 10px;">
            <!-- Columna 1 -->
            <!-- Campo de texto para el Número de Empleado -->
            <label for="noEmpleado">Número de Empleado:</label>
            <input type="text" id="noEmpleado" name="NO_EMPLEADO" required  value="<?php echo $rowAfiliados['NO_EMPLEADO']; ?>">
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
    <form action="" method="POST">
        <div style="display: flex; flex-wrap: wrap;">
            <div style="flex: 1; margin-right: 10px;">
                <!-- Columna 1 -->
                <label for="noEmpleado">Número de Empleado:</label>
                <input type="text" id="noEmpleado" name="NO_EMPLEADO_7" required readonly value="<?php echo $rowEmpleado['NO_EMPLEADO_7']; ?>">
                <br><br>

                <label for="direccionActual">Dirección Actual:</label>
                <input type="text" id="direccionActual" name="DIRECCION_ACTUAL" required  value="<?php echo $rowEmpleado['DIRECCION_ACTUAL']; ?>">
                <br><br>

                <label for="area">Área:</label>
                <input type="text" id="area" name="AREA1" required  value="<?php echo $rowEmpleado['AREA1']; ?>">
                <br><br>

                <label for="funcion">Función:</label>
                <input type="text" id="funcion" name="FUNCION" required  value="<?php echo $rowEmpleado['FUNCION']; ?>">
                <br><br>

                <label for="estatus">Descripción del Estatus:</label>
                <input type="text" id="estatus" name="DDE" required  value="<?php echo $rowEmpleado['DDE']; ?>">
                <br><br>
            </div>
            <div style="flex: 1; margin-right: 10px;">
                <!-- Columna 2 -->
                <label for="personalBaja">Personal que Causó Baja de la Corporación:</label>
                <input type="text" id="personalBaja" name="PQCBDLC" required  value="<?php echo $rowEmpleado['PQCBDLC']; ?>">
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
                <input type="text" id="clasificacion" name="CLASIF" required  value="<?php echo $rowEmpleado['CLASIF']; ?>">
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
                <input type="text" id="clasificacion2" name="CLASIFICACION" required  value="<?php echo $rowEmpleado['CLASIFICACION']; ?>">
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
                <input type="text" id="oficialiaMayor" name="DDOM" required  value="<?php echo $rowEmpleado['DDOM']; ?>">
                <br><br>

                <label for="imss">IMSS:</label>
                <input type="text" id="imss" name="IMSS" required  value="<?php echo $rowEmpleado['IMSS']; ?>">
                <br><br>

                <label for="credencialLOC">Credencial con LOC (SI/NO):</label>
                <input type="text" id="credencialLOC" name="CCLOC" required  value="<?php echo $rowEmpleado['CCLOC']; ?>">
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
                <input type="text" id="zona" name="ZONA" required  value="<?php echo $rowEmpleado['ZONA']; ?>">
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
    <form action="" method="POST">
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
    <form action="" method="POST">
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
    <form action="" method="POST">
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
                <input type="text" id="oficinaComision" name="OF_COMISION" required  value="<?php echo $rowComisiones['OF_COMISIóN']; ?>">
                <br><br>
            </div>
        </div>
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
    <form action="" method="POST">
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
                <input type="text" id="acuerdoComputo" name="ADC" required  value="<?php echo $rowMovimientosASDC['ADC']; ?>">
                <br><br>

                <label for="acuerdoSSP">Acuerdo SSP:</label>
                <input type="text" id="acuerdoSSP" name="ASS" required  value="<?php echo $rowMovimientosASDC['ASS']; ?>">
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
    <form action="" method="POST">
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

                <label for="gradoHomologado">GRADO HOMOLOGADO:</label>
                <input type="text" id="gradoHomologado" name="GRADO_HOMOLOGADO" required  value="<?php echo $rowDatosEmpleo['GRADO_HOMOLOGADO']; ?>">
                <br><br>

                <label for="grado">GRADO:</label>
                <input type="text" id="grado" name="GRADO" required  value="<?php echo $rowDatosEmpleo['GRADO']; ?>">
                <br><br>

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

                <label for="area">AREA:</label>
                <input type="text" id="area" name="AREA" required  value="<?php echo $rowDatosEmpleo['AREA']; ?>">
                <br><br>

                <label for="agrupamientos">AGRUPAMIENTOS:</label>
                <input type="text" id="agrupamientos" name="AGRUPAMIENTOS" required  value="<?php echo $rowDatosEmpleo['AGRUPAMIENTOS']; ?>">
                <br><br>

                <label for="descripcion">DESCRIPCIÓN:</label>
                <input type="text" id="descripcion" name="DESCRIPCION" required  value="<?php echo $rowDatosEmpleo['DESCRIPCION']; ?>">
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
    <form action="" method="POST">
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
    <form action="" method="POST">
        <div style="display: flex; flex-wrap: wrap;">
            <div style="flex: 1; margin-right: 10px;">
                <!-- Columna 1 -->
                <label for="noEmpleado">Número de Empleado:</label>
                <input type="text" id="noEmpleado" name="NO_EMPLEADO_14" required readonly value="<?php echo $rowCursos['NO_EMPLEADO_14']; ?>">
                <br><br>

                <label for="grupoAcreditable">GRUPO ACREDITABLE:</label>
                <input type="text" id="grupoAcreditable" name="GA" required  value="<?php echo $rowCursos['GA']; ?>">
                <br><br>
            </div>
            <div style="flex: 1; margin-right: 10px;">
                <!-- Columna 2 -->
                <label for="bloque">BLOQUE:</label>
                <input type="text" id="bloque" name="BLOQUE" required  value="<?php echo $rowCursos['BLOQUE']; ?>">
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

                <label for="numCursos">¿CUANTOS CURSOS TIENE?:</label>
                <input type="text" id="numCursos" name="NDE" required  value="<?php echo $rowCursos['NDE']; ?>">
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
    <form action="" method="POST">
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

    <script>
function searchLabels() {
    var input, filter, labels, label, i, txtValue;
    input = document.getElementById('searchField');
    filter = input.value.toUpperCase();
    labels = document.querySelectorAll('label[for]');

    for (i = 0; i < labels.length; i++) {
        label = labels[i];
        txtValue = label.textContent || label.innerText;

        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            label.parentElement.style.display = '';
        } else {
            label.parentElement.style.display = 'none';
        }
    }
}

</script>
</body>
</html>
