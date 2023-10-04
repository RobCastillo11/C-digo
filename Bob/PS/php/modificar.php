<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../estilos/styles1.css">
    <title>Modificación de Datos del Empleado</title>
</head>
<body>
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
                <!-- Campo de texto para el NO_EMPLEADO -->
                <label for="noEmpleado" id="lnoEmp">Número de Empleado:</label>
                <input type="text" id="noEmpleado" name="NO_EMPLEADO" required readonly value="<?php echo $rowGenerales ['NO_EMPLEADO']; ?>">
                <br><br>

                <!-- Campo de texto para el NOMBRE -->
                <label for="nombre" id="lnombre">Nombre (s):</label>
                <input type="text" id="nombre" name="NOMBRE" value="<?php echo $rowGenerales ['NOMBRE']; ?>">
                <br><br>

                <!-- Campo de texto para el AP -->
                <label for="ap" id="lap">Apellido Paterno:</label>
                <input type="text" id="ap" name="AP" value="<?php echo $rowGenerales ['AP']; ?>">
                <br><br>

                <!-- Campo de texto para el AM -->
                <label for="am" id="lam">Apellido Materno:</label>
                <input type="text" id="am" name="AM" value="<?php echo $rowGenerales ['AM']; ?>">
                <br><br>

                <!-- Campo de texto para el FN -->
                <label for="fn" id="lfn">Fecha de Nacimiento:</label>
                <input type="text" id="fn" name="FN" value="<?php echo $rowGenerales ['FN']; ?>">
                <br><br>

                <!-- Campo de texto para el EDAD -->
                <label for="edad" id="ledad">Edad:</label>
                <input type="text" id="edad" name="EDAD" value="<?php echo $rowGenerales ['EDAD']; ?>">
                <br><br>

                <!-- Campo de texto para el SEXO -->
                <label for="sexo" id="lsexo">Sexo:</label>
                <input type="text" id="sexo" name="SEXO" value="<?php echo $rowGenerales ['SEXO']; ?>">
                <br><br>

                <!-- Campo de texto para el CORREO -->
                <label for="correo" id="lcorreo">Correo:</label>
                <input type="text" id="correo" name="CORREO" value="<?php echo $rowGenerales ['CORREO']; ?>">
                <br><br>

                <!-- Campo de texto para el EC -->
                <label for="ec" id="lec">Estado Civil:</label>
                <input type="text" id="ec" name="EC" value="<?php echo $rowGenerales ['EC']; ?>">
                <br><br>

                <!-- Campo de texto para el SMN -->
                <label for="smn" id="lsmn">Cartilla SMN:</label>
                <input type="text" id="smn" name="SMN" value="<?php echo $rowGenerales ['SMN']; ?>">
                <br><br>

                <!-- Campo de texto para el LICENCIA -->
                <label for="licencia" id="llicencia">Licencia:</label>
                <input type="text" id="licencia" name="LICENCIA" value="<?php echo $rowGenerales ['LICENCIA']; ?>">
                <br><br>

                <!-- Campo de texto para el INEF -->
                <label for="ine_entrente" id="linef">INE Enfrente:</label>
                <input type="text" id="ine_entrente" name="INEF" value="<?php echo $rowGenerales ['INEF']; ?>">
                <br><br>

                <!-- Campo de texto para el INEA -->
                <label for="ine_atras" id="linea">INE Atras:</label>
                <input type="text" id="ine_atras" name="INEA" value="<?php echo $rowGenerales ['INEA']; ?>">
                <br><br>

                <!-- Campo de texto para el LN -->
                <label for="ln" id="lln">Lugar de Nacimiento:</label>
                <input type="text" id="ln" name="LN" value="<?php echo $rowGenerales ['LN']; ?>">
                <br><br>

                <!-- Campo de texto para el CALLE -->
                <label for="calle" id="lcalle">Calle:</label>
                <input type="text" id="calle" name="CALLE" value="<?php echo $rowGenerales ['CALLE']; ?>">
                <br><br>

                <!-- Campo de texto para el No_ext -->
                <label for="numero_exterior" id="lnumero_exterior">Número Exterior:</label>
                <input type="text" id="numero_exterior" name="No_ext" value="<?php echo $rowGenerales ['No_ext']; ?>">
                <br><br>

                <!-- Campo de texto para el No_int -->
                <label for="numero_interior" id="lnumero_interior">Número Interior:</label>
                <input type="text" id="numero_interior" name="No_int" value="<?php echo $rowGenerales ['No_int']; ?>">
                <br><br>

                <!-- Campo de texto para el COLONIA -->
                <label for="colonia" id="lcolonia">Colonia:</label>
                <input type="text" id="colonia" name="COLONIA" value="<?php echo $rowGenerales ['COLONIA']; ?>">
                <br><br>

                <!-- Campo de texto para el MUNICIPIO -->
                <label for="municipio" id="lmunicipio">Municipio:</label>
                <input type="text" id="municipio" name="MUNICIPIO" value="<?php echo $rowGenerales ['MUNICIPIO']; ?>">
                <br><br>

                <!-- Campo de texto para el ESTADO -->
                <label for="estado" id="lestado">Estado:</label>
                <input type="text" id="estado" name="ESTADO" value="<?php echo $rowGenerales ['ESTADO']; ?>">
                <br><br>

                <!-- Campo de texto para el CP -->
                <label for="cp" id="lcp">Códido Postal:</label>
                <input type="text" id="cp" name="CP" value="<?php echo $rowGenerales ['CP']; ?>">
                <br><br>

                <!-- Campo de texto para el CURP -->
                <label for="curp" id="lcurp">CURP:</label>
                <input type="text" id="curp" name="CURP" value="<?php echo $rowGenerales ['CURP']; ?>">
                <br><br>

                <!-- Botón de guardar CAMBIOS -->
                <input type="submit" name="guardar" value="Guardar Cambios"><br><br><br><br><br>
            
            </form>
        </section>
    <?php
    } else {
        echo "<p>Empleado no encontrado.</p>";
    }

    // Consulta los datos familiares del empleado
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
                    <!-- Campo de texto para el NO_EMPLEADO_2 -->
                    <label for="noEmpleado2">Número de Empleado:</label>
                    <input type="text" id="noEmpleado2" name="NO_EMPLEADO_2" required readonly value="<?php echo $rowfamilia['NO_EMPLEADO_2']; ?>">
                    <br><br>

                    <!-- Campo de texto para el TEL_CAS -->
                    <label for="telCas">Teléfono Casa:</label>
                    <input type="text" id="telCas" name="TEL_CAS" value="<?php echo $rowfamilia['TEL_CAS']; ?>">
                    <br><br>

                    <!-- Campo de texto para el TEL_CEL -->
                    <label for="telCel">Teléfono Celular:</label>
                    <input type="text" id="telCel" name="TEL_CEL" value="<?php echo $rowfamilia['TEL_CEL']; ?>">
                    <br><br>

                    <!-- Campo de texto para el TS -->
                    <label for="ts">TS:</label>
                    <input type="text" id="ts" name="TS" value="<?php echo $rowfamilia['TS']; ?>">
                    <br><br>

                    <!-- Campo de texto para el IDIOMA -->
                    <label for="idioma">Idioma:</label>
                    <input type="text" id="idioma" name="IDIOMA" value="<?php echo $rowfamilia['IDIOMA']; ?>">
                    <br><br>

                    <!-- Campo de texto para ESCRITURA -->
                    <label for="escritura">Escritura:</label>
                    <input type="text" id="escritura" name="ESCRITURA" value="<?php echo $rowfamilia['ESCRITURA']; ?>">
                    <br><br>

                    <!-- Campo de texto para LECTURA -->
                    <label for="lectura">Lectura:</label>
                    <input type="text" id="lectura" name="LECTURA" value="<?php echo $rowfamilia['LECTURA']; ?>">
                    <br><br>

                    <!-- Campo de texto para DICCION -->
                    <label for="diccion">Diccion:</label>
                    <input type="text" id="diccion" name="DICCION" value="<?php echo $rowfamilia['DICCION']; ?>">
                    <br><br>

                    <!-- Campo de texto para DIALECTO -->
                    <label for="dialecto">Dialecto:</label>
                    <input type="text" id="dialecto" name="DIALECTO" value="<?php echo $rowfamilia['DIALECTO']; ?>">
                    <br><br>

                    <!-- Campo de texto para LUGAR DE RESIDENCIA -->
                    <label for="ldr">Lugar de Residencia:</label>
                    <input type="text" id="ldr" name="LDR" value="<?php echo $rowfamilia['LDR']; ?>">
                    <br><br>

                    <!-- Campo de texto para ¿CUANTAS ESPOSAS TIENE?: -->
                    <label for="nde">Número de Esposas:</label>
                    <input type="text" id="nde" name="NDP" value="<?php echo $rowfamilia['NDE']; ?>">
                    <br><br>

                    <!-- Campo de texto para NOMBRE (S) DE ESPOSA: -->
                    <label for="nes">Nombre de Esposas:</label>
                    <input type="text" id="nes" name="NES" value="<?php echo $rowfamilia['NES']; ?>">
                    <br><br>

                    <!-- Campo de texto para APELLIDO PATERNO : -->
                    <label for="apea">Apellido 1 Esposa:</label>
                    <input type="text" id="apea" name="APEA" value="<?php echo $rowfamilia['APEA']; ?>">
                    <br><br>

                    <!-- Campo de texto para APELLIDO MATERNO: -->
                    <label for="dialecto">Apellido 2 Esposa:</label>
                    <input type="text" id="dialecto" name="DIALECTO" value="<?php echo $rowfamilia['AMEA']; ?>">
                    <br><br>

                    <!-- Campo de texto para ¿CUANTOS HIJOS TIENE?: -->
                    <label for="nhs">Número de hijos:</label>
                    <input type="text" id="nhs" name="NHS" value="<?php echo $rowfamilia['NHS']; ?>">
                    <br><br>

                    <!-- Campo de texto para NOMBRE (S) DE HIJO (S): -->
                    <label for="ndh">Nombre de hijos:</label>
                    <input type="text" id="ndh" name="NDH" value="<?php echo $rowfamilia['NDH']; ?>">
                    <br><br>

                    <!-- Campo de texto para APELLIDO PATERNO: -->
                    <label for="apdh">Apellido 1 Hijo:</label>
                    <input type="text" id="apdh" name="APDH" value="<?php echo $rowfamilia['APDH']; ?>">
                    <br><br>

                    <!-- Campo de texto para APELLIDO MATERNO: -->
                    <label for="amdh">Apellido 2 Hijo:</label>
                    <input type="text" id="amdh" name="AMDH" value="<?php echo $rowfamilia['AMDH']; ?>">
                    <br><br>

                    <!-- Campo de texto para SEXO -->
                    <label for="sexoh">Sexo Hijo:</label>
                    <input type="text" id="sexoh" name="SEXOH" value="<?php echo $rowfamilia['SEXOH']; ?>">
                    <br><br>

                    <!-- Campo de texto para FECHA DE NACIMIENTO: -->
                    <label for="fnh">Fecha de Nacimiento Hijo:</label>
                    <input type="text" id="fnh" name="FNH" value="<?php echo $rowfamilia['FNH']; ?>">
                    <br><br>

                    <!-- Campo de texto para EDAD -->
                    <label for="edadh">Edad Hijo:</label>
                    <input type="text" id="edadh" name="EDADH" value="<?php echo $rowfamilia['EDADH']; ?>">
                    <br><br>

                    <!-- Botón de guardar CAMBIOS -->
                    <input type="submit" name="guardar" value="Guardar Cambios"><br><br><br><br><br>

                </form>
            </section>
        <?php
    }else {
        echo "<p>Empleado no encontrado.</p>";
    }

    // Consulta los datos de evaluación anual del desempeño
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
                    <!-- Campo de texto para el Número de Empleado -->
                    <label for="noEmpleado3">Número de Empleado:</label>
                    <input type="text" id="noEmpleado3" name="NO_EMPLEADO_3" required readonly value="<?php echo $rowEvaluacion['NO_EMPLEADO_3']; ?>">
                    <br><br>

                    <!-- Campo de texto para la Función -->
                    <label for="funcion">Función:</label>
                    <input type="text" id="funcion" name="FUNCION" value="<?php echo $rowEvaluacion['FUNCION']; ?>">
                    <br><br>

                    <!-- Campo de texto para la Fecha de Evaluación 2022 -->
                    <label for="fechaEvaluacion">Fecha de Evaluación 2022:</label>
                    <input type="text" id="fechaEvaluacion" name="FE2022" value="<?php echo $rowEvaluacion['FE2022']; ?>">
                    <br><br>

                    <!-- Campo de texto para la Calificación Respecto a los Principios -->
                    <label for="calificacionPrincipios">Calificación Respecto a los Principios:</label>
                    <input type="text" id="calificacionPrincipios" name="CRP" value="<?php echo $rowEvaluacion['CRP']; ?>">
                    <br><br>

                    <!-- Campo de texto para la Calificación Productividad -->
                    <label for="calificacionProductividad">Calificación Productividad:</label>
                    <input type="text" id="calificacionProductividad" name="CPD" value="<?php echo $rowEvaluacion['CPD']; ?>">
                    <br><br>

                    <!-- Campo de texto para la Calificación Cualidades y Aptitudes Profesionales -->
                    <label for="calificacionCualidades">Calificación Cualidades y Aptitudes Profesionales:</label>
                    <input type="text" id="calificacionCualidades" name="ccap" value="<?php echo $rowEvaluacion['ccap']; ?>">
                    <br><br>

                    <!-- Botón de guardar CAMBIOS -->
                    <input type="submit" name="guardar" value="Guardar Cambios"><br><br><br><br><br>
                </form>
            </section>
        <?php
    } else {
        echo "<p>Empleado no encontrado.</p>";
    }

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
                <!-- Campo de texto para el Número de Empleado -->
                <label for="noEmpleado">Número de Empleado:</label>
                <input type="text" id="noEmpleado" name="NO_EMPLEADO" required readonly value="<?php echo $rowEstudio['NO_EMPLEADO']; ?>">
                <br><br>

                <!-- Campo de texto para la Terminación de Estudio -->
                <label for="terminacionEstudio">Terminación de Estudio:</label>
                <input type="text" id="terminacionEstudio" name="TERMINACION_DE_ESTUDIO" value="<?php echo $rowEstudio['TERMINACION_DE_ESTUDIO']; ?>">
                <br><br>

                <!-- Campo de texto para los Estudios -->
                <label for="estudios">Estudios:</label>
                <input type="text" id="estudios" name="ESTUDIOS" value="<?php echo $rowEstudio['ESTUDIOS']; ?>">
                <br><br>

                <!-- Campo de texto para la Especialidad -->
                <label for="especialidad">Especialidad:</label>
                <input type="text" id="especialidad" name="ESPECIALIDAD" value="<?php echo $rowEstudio['ESPECIALIDAD']; ?>">
                <br><br>

                <!-- Campo de texto para el Documento -->
                <label for="documento">Documento:</label>
                <input type="text" id="documento" name="DOCUMENTO" value="<?php echo $rowEstudio['DOCUMENTO']; ?>">
                <br><br>

                <!-- Campo de texto para el Curso Fuerza Metropolitana Estatal -->
                <label for="cfme">Curso Fuerza Metropolitana Estatal:</label>
                <input type="text" id="cfme" name="CFME" value="<?php echo $rowEstudio['CFME']; ?>">
                <br><br>

                <!-- Campo de texto para el Grupo -->
                <label for="grupo">Grupo:</label>
                <input type="text" id="grupo" name="GRUPO" value="<?php echo $rowEstudio['GRUPO']; ?>">
                <br><br>

                <!-- Campo de texto para la Generación -->
                <label for="generacion">Generación:</label>
                <input type="text" id="generacion" name="GENERACION" value="<?php echo $rowEstudio['GENERACION']; ?>">
                <br><br>

                <!-- Campo de texto para el Tipo de Grupo -->
                <label for="tipoGrupo">Tipo de Grupo:</label>
                <input type="text" id="tipoGrupo" name="TIPO_DE_GRUPO" value="<?php echo $rowEstudio['TIPO_DE_GRUPO']; ?>">
                <br><br>

                <!-- Campo de texto para la Duración -->
                <label for="duracion">Duración:</label>
                <input type="text" id="duracion" name="DURACION" value="<?php echo $rowEstudio['DURACION']; ?>">
                <br><br>

                <!-- Campo de texto para el Tiempo de Servicio -->
                <label for="tiempoServicio">Tiempo de Servicio:</label>
                <input type="text" id="tiempoServicio" name="TIEMPO_DE_SERVICIO" value="<?php echo $rowEstudio['TIEMPO_DE_SERVICIO']; ?>">
                <br><br>

                <!-- Campo de texto para la Calificación de Armamento y Prácticas de Tiro -->
                <label for="calificacionArmamento">Calificación de Armamento y Prácticas de Tiro:</label>
                <input type="text" id="calificacionArmamento" name="CALIFICACION_ARMAMENTO" value="<?php echo $rowEstudio['CALIFICACION_ARMAMENTO']; ?>">
                <br><br>

                <!-- Campo de texto para la Calificación de Puntería Avanzada (Fuerzas Especiales) -->
                <label for="calificacionPunteria">Calificación de Puntería Avanzada (Fuerzas Especiales):</label>
                <input type="text" id="calificacionPunteria" name="CALIFICACION_PUNTERIA" value="<?php echo $rowEstudio['CALIFICACION_PUNTERIA']; ?>">
                <br><br>

                <!-- Campo de texto para Tallas y Domicilios Encuesta 2011 -->
                <label for="tallasDomicilios">Tallas y Domicilios Encuesta 2011:</label>
                <input type="text" id="tallasDomicilios" name="TALLAS_Y_DOMICILIOS" value="<?php echo $rowEstudio['TALLAS_Y_DOMICILIOS']; ?>">
                <br><br>

                <!-- Campo de texto para el Nivel de Calificación -->
                <label for="nivelCalificacion">Nivel de Calificación:</label>
                <input type="text" id="nivelCalificacion" name="NIVEL_DE_CALIFICACION" value="<?php echo $rowEstudio['NIVEL_DE_CALIFICACION']; ?>">
                <br><br>

                <!-- Campo de texto para Reprobo Examen -->
                <label for="reproboExamen">Reprobo Examen:</label>
                <input type="text" id="reproboExamen" name="REPROBO_EXAMEN" value="<?php echo $rowEstudio['REPROBO_EXAMEN']; ?>">
                <br><br>

                <!-- Campo de texto para Egresado de la Academia -->
                <label for="egresadoAcademia">Egresado de la Academia:</label>
                <input type="text" id="egresadoAcademia" name="EGRESADO_DE_LA_ACADEMIA" value="<?php echo $rowEstudio['EGRESADO_DE_LA_ACADEMIA']; ?>">
                <br><br>

                <!-- Campo de texto para Personal Egresado de la Academia Guardia Civil Estatal 1era Generación -->
                <label for="personalEgresadoAcademia">Personal Egresado de la Academia Guardia Civil Estatal 1era Generación:</label>
                <input type="text" id="personalEgresadoAcademia" name="PERSONAL_EGRESADO_ACADEMIA" value="<?php echo $rowEstudio['PERSONAL_EGRESADO_ACADEMIA']; ?>">
                <br><br>

                <!-- Campo de texto para Curso Perito Calif -->
                <label for="cursoPeritoCalif">Curso Perito Calif:</label>
                <input type="text" id="cursoPeritoCalif" name="CURSO_PERITO_CALIF" value="<?php echo $rowEstudio['CURSO_PERITO_CALIF']; ?>">
                <br><br>

                <!-- Botón de guardar CAMBIOS -->
                <input type="submit" name="guardar" value="Guardar Cambios"><br><br><br><br><br>
            </form>
        </section>
        <?php
    } else {
        echo "<p>Empleado no encontrado.</p>";
    }

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
                <!-- Campo de texto para el Número de Empleado -->
                <label for="noEmpleado">Número de Empleado:</label>
                <input type="text" id="noEmpleado" name="NO_EMPLEADO" required readonly value="<?php echo $rowMilitares['NO_EMPLEADO']; ?>">
                <br><br>

                <!-- Campo de texto para Ex Militares -->
                <label for="exMilitares">Ex Militares:</label>
                <input type="text" id="exMilitares" name="EXMILITARES" value="<?php echo $rowMilitares['EXMILITARES']; ?>">
                <br><br>

                <!-- Campo de texto para Ex Militar -->
                <label for="exMilitar">Ex Militar:</label>
                <input type="text" id="exMilitar" name="EXMILITAR" value="<?php echo $rowMilitares['EXMILITAR']; ?>">
                <br><br>

                <!-- Campo de texto para Grado y Arma de Servicio -->
                <label for="gradoArma">Grado y Arma de Servicio:</label>
                <input type="text" id="gradoArma" name="GAS" value="<?php echo $rowMilitares['GAS']; ?>">
                <br><br>

                <!-- Campo de texto para Fecha Alta de Servicio -->
                <label for="fechaAlta">Fecha Alta de Servicio:</label>
                <input type="text" id="fechaAlta" name="FADS" value="<?php echo $rowMilitares['FADS']; ?>">
                <br><br>

                <!-- Campo de texto para Fecha Retiro Baja/Licencia -->
                <label for="fechaRetiro">Fecha Retiro Baja/Licencia:</label>
                <input type="text" id="fechaRetiro" name="FRBL" value="<?php echo $rowMilitares['FRBL']; ?>">
                <br><br>

                <!-- Campo de texto para Motivo Baja -->
                <label for="motivoBaja">Motivo Baja:</label>
                <input type="text" id="motivoBaja" name="MB" value="<?php echo $rowMilitares['MB']; ?>">
                <br><br>

                <!-- Botón de guardar CAMBIOS -->
                <input type="submit" name="guardar" value="Guardar Cambios"><br><br><br><br><br>
            </form>
        </section>
        <?php
    } else {
        echo "<p>Empleado no encontrado.</p>";
    }

    // Consulta los datos de afiliados del empleado
    $sqlAfiliados = "SELECT * FROM afiliados WHERE NO_EMPLEADO = '$noEmpleado'";
    $resultAfiliados = $conn->query($sqlAfiliados);

    /* Consulta Formulario de Datos de Afiliados */
    if ($resultAfiliados->num_rows > 0) {
        $rowAfiliados = $resultAfiliados->fetch_assoc();
        ?>
        <section>
            <h2>Datos de Afiliados</h2>
            <!-- Formulario de Datos de Afiliados -->
            <form action="php2/updates/upForm6.php" method="POST">
                <!-- Campo de texto para el Número de Empleado -->
                <label for="noEmpleado">Número de Empleado:</label>
                <input type="text" id="noEmpleado" name="NO_EMPLEADO" required readonly value="<?php echo $rowAfiliados['NO_EMPLEADO']; ?>">
                <br><br>

                <!-- Campo de texto para Afiliados con Horario -->
                <label for="afiliadosHorario">Afiliados con Horario:</label>
                <input type="text" id="afiliadosHorario" name="ACH" value="<?php echo $rowAfiliados['ACH']; ?>">
                <br><br>

                <!-- Campo de texto para Afiliados Destacados -->
                <label for="afiliadosDestacados">Afiliados Destacados:</label>
                <input type="text" id="afiliadosDestacados" name="AD" value="<?php echo $rowAfiliados['AD']; ?>">
                <br><br>

                <!-- Campo de texto para Desistió al Sindicato -->
                <label for="desistioSindicato">Desistió al Sindicato:</label>
                <input type="text" id="desistioSindicato" name="DAS" value="<?php echo $rowAfiliados['DAS']; ?>">
                <br><br>

                <!-- Campo de texto para Personal que le Corresponde Seguro Mayor -->
                <label for="seguroMayor">Personal que le Corresponde Seguro Mayor:</label>
                <input type="text" id="seguroMayor" name="PQL" value="<?php echo $rowAfiliados['PQL']; ?>">
                <br><br>

                <!-- Botón de guardar CAMBIOS -->
                <input type="submit" name="guardar" value="Guardar Cambios"><br><br><br><br><br>
            </form>
        </section>
        <?php
    } else {
        echo "<p>Empleado no encontrado.</p>";
    }

    // Consulta los datos del empleado
    $sqlEmpleado = "SELECT * FROM datos_del_empleado WHERE NO_EMPLEADO_7 = '$noEmpleado'";
    $resultEmpleado = $conn->query($sqlEmpleado);

    /* Consulta Formulario de Datos del Empleado */
    if ($resultEmpleado->num_rows > 0) {
        $rowEmpleado = $resultEmpleado->fetch_assoc();
        ?>
        <section>
            <h2>Datos del Empleado</h2>
            <!-- Formulario de Datos del Empleado -->
            <form action="php2/updates/upForm7.php" method="POST">
                <!-- Campo de texto para el Número de Empleado -->
                <label for="noEmpleado">Número de Empleado:</label>
                <input type="text" id="noEmpleado" name="NO_EMPLEADO_7" required readonly value="<?php echo $rowEmpleado['NO_EMPLEADO_7']; ?>">
                <br><br>

                <!-- Campo de texto para la Dirección Actual -->
                <label for="direccionActual">Dirección Actual:</label>
                <input type="text" id="direccionActual" name="DIRECCION_ACTUAL" value="<?php echo $rowEmpleado['DIRECCION_ACTUAL']; ?>">
                <br><br>

                <!-- Campo de texto para Área -->
                <label for="area">Área:</label>
                <input type="text" id="area" name="AREA1" value="<?php echo $rowEmpleado['AREA1']; ?>">
                <br><br>

                <!-- Campo de texto para Función -->
                <label for="funcion">Función:</label>
                <input type="text" id="funcion" name="FUNCION" value="<?php echo $rowEmpleado['FUNCION']; ?>">
                <br><br>

                <!-- Campo de texto para Descripción del Estatus -->
                <label for="estatus">Descripción del Estatus:</label>
                <input type="text" id="estatus" name="DDE" value="<?php echo $rowEmpleado['DDE']; ?>">
                <br><br>

                <!-- Campo de texto para Personal que Causó Baja de la Corporación -->
                <label for="personalBaja">Personal que Causó Baja de la Corporación:</label>
                <input type="text" id="personalBaja" name="PQCBDLC" value="<?php echo $rowEmpleado['PQCBDLC']; ?>">
                <br><br>

                <!-- Campo de texto para Periodo -->
                <label for="periodo">Periodo:</label>
                <input type="text" id="periodo" name="PERIODO" value="<?php echo $rowEmpleado['PERIODO']; ?>">
                <br><br>

                <!-- Campo de texto para Observaciones -->
                <label for="observaciones">Observaciones:</label>
                <input type="text" id="observaciones" name="OBSERVACIONES" value="<?php echo $rowEmpleado['OBSERVACIONES']; ?>">
                <br><br>

                <!-- Campo de texto para ID Empleado -->
                <label for="idEmpleado">ID Empleado:</label>
                <input type="text" id="idEmpleado" name="ID_EMPLEADO" value="<?php echo $rowEmpleado['ID_EMPLEADO']; ?>">
                <br><br>

                <!-- Campo de texto para Clasificación -->
                <label for="clasificacion">Clasificación:</label>
                <input type="text" id="clasificacion" name="CLASIF" value="<?php echo $rowEmpleado['CLASIF']; ?>">
                <br><br>

                <!-- Campo de texto para Fecha de Ingreso -->
                <label for="fechaIngreso">Fecha de Ingreso:</label>
                <input type="text" id="fechaIngreso" name="FECHA_DE_INGRESO" value="<?php echo $rowEmpleado['FECHA_DE_INGRESO']; ?>">
                <br><br>

                <!-- Campo de texto para CUIP -->
                <label for="cuip">CUIP:</label>
                <input type="text" id="cuip" name="CUIP" value="<?php echo $rowEmpleado['CUIP']; ?>">
                <br><br>

                <!-- Campo de texto para CUP -->
                <label for="cup">CUP:</label>
                <input type="text" id="cup" name="CUP" value="<?php echo $rowEmpleado['CUP']; ?>">
                <br><br>

                <!-- Campo de texto para Número de Clasificación -->
                <label for="numClasificacion">Número de Clasificación:</label>
                <input type="text" id="numClasificacion" name="NO_CLASIFICACION" value="<?php echo $rowEmpleado['NO_CLASIFICACION']; ?>">
                <br><br>

                <!-- Campo de texto para Clasificación -->
                <label for="clasificacion2">Clasificación:</label>
                <input type="text" id="clasificacion2" name="CLASIFICACION" value="<?php echo $rowEmpleado['CLASIFICACION']; ?>">
                <br><br>

                <!-- Campo de texto para Sindicalizado -->
                <label for="sindicalizado">Sindicalizado (NO / NOMBRE DEL SINDICATO):</label>
                <input type="text" id="sindicalizado" name="SINDICALIZADO" value="<?php echo $rowEmpleado['SINDICALIZADO']; ?>">
                <br><br>

                <!-- Campo de texto para Adscrito -->
                <label for="adscrito">Adscrito (NO / NOMBRE DEL SINDICATO):</label>
                <input type="text" id="adscrito" name="ADSCRITO" value="<?php echo $rowEmpleado['ADSCRITO']; ?>">
                <br><br>

                <!-- Campo de texto para Dirección de Oficialía Mayor (Área) -->
                <label for="oficialiaMayor">Dirección de Oficialía Mayor (Área):</label>
                <input type="text" id="oficialiaMayor" name="DDOM" value="<?php echo $rowEmpleado['DDOM']; ?>">
                <br><br>

                <!-- Campo de texto para IMSS -->
                <label for="imss">IMSS:</label>
                <input type="text" id="imss" name="IMSS" value="<?php echo $rowEmpleado['IMSS']; ?>">
                <br><br>

                <!-- Campo de texto para Credencial con LOC (SI/NO) -->
                <label for="credencialLOC">Credencial con LOC (SI/NO):</label>
                <input type="text" id="credencialLOC" name="CCLOC" value="<?php echo $rowEmpleado['CCLOC']; ?>">
                <br><br>

                <!-- Campo de texto para Vencimiento de Credencial -->
                <label for="vencimientoCredencial">Vencimiento de Credencial:</label>
                <input type="text" id="vencimientoCredencial" name="VENCIMIENTO_CREDENCIAL" value="<?php echo $rowEmpleado['VENCIMIENTO_CREDENCIAL']; ?>">
                <br><br>

                <!-- Campo de texto para Folio de la Credencial -->
                <label for="folioCredencial">Folio de la Credencial:</label>
                <input type="text" id="folioCredencial" name="FOLIO_CREDENCIAL" value="<?php echo $rowEmpleado['FOLIO_CREDENCIAL']; ?>">
                <br><br>

                <!-- Campo de texto para Ubicación Física -->
                <label for="ubicacionFisica">Ubicación Física:</label>
                <input type="text" id="ubicacionFisica" name="UBICACION_FISICA" value="<?php echo $rowEmpleado['UBICACION_FISICA']; ?>">
                <br><br>

                <!-- Campo de texto para Zona -->
                <label for="zona">Zona:</label>
                <input type="text" id="zona" name="ZONA" value="<?php echo $rowEmpleado['ZONA']; ?>">
                <br><br>

                <!-- Campo de texto para Fecha de Ingreso (2) -->
                <label for="fechaIngreso2">Fecha de Ingreso (2):</label>
                <input type="text" id="fechaIngreso2" name="FECHA_DE_INGRESO_2" value="<?php echo $rowEmpleado['FECHA_DE_INGRESO_2']; ?>">
                <br><br>

                <!-- Campo de texto para Fecha de Conclusión -->
                <label for="fechaConclusion">Fecha de Conclusión:</label>
                <input type="text" id="fechaConclusion" name="FECHA_CONCLUSION" value="<?php echo $rowEmpleado['FECHA_CONCLUSION']; ?>">
                <br><br>

                <!-- Campo de texto para Fecha de Reingreso -->
                <label for="fechaReingreso">Fecha de Reingreso:</label>
                <input type="text" id="fechaReingreso" name="FECHA_REINGRESO" value="<?php echo $rowEmpleado['FECHA_REINGRESO']; ?>">
                <br><br>

                <!-- Campo de texto para Cambio de Apoyo a Operativo -->
                <label for="cambioApoyo">Cambio de Apoyo a Operativo:</label>
                <input type="text" id="cambioApoyo" name="CAMBIO_DE_APOYO" value="<?php echo $rowEmpleado['CAMBIO_DE_APOYO']; ?>">
                <br><br>

                <!-- Campo de texto para Sueldo Base -->
                <label for="sueldoBase">Sueldo Base:</label>
                <input type="text" id="sueldoBase" name="SUELDO_BASE" value="<?php echo $rowEmpleado['SUELDO_BASE']; ?>">
                <br><br>

                <!-- Campo de texto para Prestaciones -->
                <label for="prestaciones">Prestaciones:</label>
                <input type="text" id="prestaciones" name="PRESTACIONES" value="<?php echo $rowEmpleado['PRESTACIONES']; ?>">
                <br><br>

                <!-- Campo de texto para Compensación -->
                <label for="compensacion">Compensación:</label>
                <input type="text" id="compensacion" name="COMPENSACION" value="<?php echo $rowEmpleado['COMPENSACION']; ?>">
                <br><br>

                <!-- Campo de texto para Número de Compensación -->
                <label for="numCompensacion">Número de Compensación:</label>
                <input type="text" id="numCompensacion" name="NO_COMP" value="<?php echo $rowEmpleado['NO_COMP']; ?>">
                <br><br>

                <!-- Campo de texto para Antigüedad en el Grado -->
                <label for="antiguedadGrado">Antigüedad en el Grado:</label>
                <input type="text" id="antiguedadGrado" name="ANTIGUEDAD_GRADO" value="<?php echo $rowEmpleado['ANTIGUEDAD_GRADO']; ?>">
                <br><br>

                <!-- Campo de texto para Columna Temporal -->
                <label for="columnaTemporal">Columna Temporal:</label>
                <input type="text" id="columnaTemporal" name="COLUMNA_TEMPORAL" value="<?php echo $rowEmpleado['COLUMNA_TEMPORAL']; ?>">
                <br><br>

                <!-- Campo de texto para Promoción 2005 -->
                <label for="promocion2005">Promoción 2005:</label>
                <input type="text" id="promocion2005" name="PROMOCION_2005" value="<?php echo $rowEmpleado['PROMOCION_2005']; ?>">
                <br><br>

                <!-- Campo de texto para RFC -->
                <label for="rfc">RFC:</label>
                <input type="text" id="rfc" name="RFC" value="<?php echo $rowEmpleado['RFC']; ?>">
                <br><br>

                <!-- Campo de texto para Homoclave -->
                <label for="homoclave">Homoclave:</label>
                <input type="text" id="homoclave" name="HOMOCLAVE" value="<?php echo $rowEmpleado['HOMOCLAVE']; ?>">
                <br><br>

                <!-- Campo de texto para Número de Cuenta Banco -->
                <label for="cuentaBanco">No. Cuenta Banco:</label>
                <input type="text" id="cuentaBanco" name="NO_CUENTA_BANCO" value="<?php echo $rowEmpleado['NO_CUENTA_BANCO']; ?>">
                <br><br>

                <!-- Botón de guardar CAMBIOS -->
                <input type="submit" name="guardar" value="Guardar Cambios"><br><br><br><br><br>
            </form>
        </section>
        <?php
    } else {
        echo "<p>Empleado no encontrado.</p>";
    }

    // Consulta los datos laborales del personal misionado
    $sqlLaborales = "SELECT * FROM dato_laborales_personal_c WHERE NO_EMPLEADO = '$noEmpleado'";
    $resultLaborales = $conn->query($sqlLaborales);

    /* Consulta Formulario de Datos Laborales del Personal Misionado */
    if ($resultLaborales->num_rows > 0) {
        $rowLaborales = $resultLaborales->fetch_assoc();
        ?>
        <section>
            <h2>Datos Laborales del Personal Misionado</h2>
            <!-- Formulario de Datos Laborales del Personal Misionado -->
            <form action="php2/updates/upForm8.php" method="POST">
                <!-- Campo de texto para el Número de Empleado -->
                <label for="noEmpleado">Número de Empleado:</label>
                <input type="text" id="noEmpleado" name="NO_EMPLEADO" required readonly value="<?php echo $rowLaborales['NO_EMPLEADO']; ?>">
                <br><br>

                <!-- Campo de texto para Área de Adscripción -->
                <label for="areaAdscripcion">Área de Adscripción:</label>
                <input type="text" id="areaAdscripcion" name="AREA_ADSCRIPCION" value="<?php echo $rowLaborales['AREA_ADSCRIPCION']; ?>">
                <br><br>

                <!-- Campo de texto para Teléfono de Oficina -->
                <label for="telOficina">Teléfono de Oficina:</label>
                <input type="text" id="telOficina" name="TEL_OFICINA" value="<?php echo $rowLaborales['TEL_OFICINA']; ?>">
                <br><br>

                <!-- Campo de texto para Domicilio de la Dependencia u Oficina -->
                <label for="domicilioOficina">Domicilio de la Dependencia u Oficina:</label>
                <input type="text" id="domicilioOficina" name="DOMICILIO_OFICINA" value="<?php echo $rowLaborales['DOMICILIO_OFICINA']; ?>">
                <br><br>

                <!-- Campo de texto para Cargo o Función que Desempeña -->
                <label for="cargoFuncion">Cargo o Función que Desempeña:</label>
                <input type="text" id="cargoFuncion" name="CARGO_FUNCION" value="<?php echo $rowLaborales['CARGO_FUNCION']; ?>">
                <br><br>

                <!-- Campo de texto para Nombre del Jefe Inmediato -->
                <label for="jefeInmediato">Nombre del Jefe Inmediato:</label>
                <input type="text" id="jefeInmediato" name="JEFE_INMEDIATO" value="<?php echo $rowLaborales['JEFE_INMEDIATO']; ?>">
                <br><br>

                <!-- Campo de texto para Actualización -->
                <label for="actualizacion">Actualización:</label>
                <input type="text" id="actualizacion" name="ACTUALIZACION" value="<?php echo $rowLaborales['ACTUALIZACION']; ?>">
                <br><br>

                <!-- Campo de texto para Clave de Dirección -->
                <label for="claveDireccion">Clave de Dirección:</label>
                <input type="text" id="claveDireccion" name="CVE_DIRECCION" value="<?php echo $rowLaborales['CVE_DIRECCION']; ?>">
                <br><br>

                <!-- Campo de texto para Dirección -->
                <label for="direccion">Dirección:</label>
                <input type="text" id="direccion" name="DIRECCION" value="<?php echo $rowLaborales['DIRECCION']; ?>">
                <br><br>

                <!-- Campo de texto para Clave de Área -->
                <label for="claveArea">Clave de Área:</label>
                <input type="text" id="claveArea" name="CVE_AREA" value="<?php echo $rowLaborales['CVE_AREA']; ?>">
                <br><br>

                <!-- Botón de guardar CAMBIOS -->
                <input type="submit" name="guardar" value="Guardar Cambios"><br><br><br><br><br>
            </form>
        </section>
        <?php
    } else {
        echo "<p>Empleado no encontrado.</p>";
    }

    // Consulta los datos de vestimenta
    $sqlVestimenta = "SELECT * FROM indumentaria WHERE NO_EMPLEADO = '$noEmpleado'";
    $resultVestimenta = $conn->query($sqlVestimenta);

    /* Consulta Formulario de Datos de Vestimenta */
    if ($resultVestimenta->num_rows > 0) {
        $rowVestimenta = $resultVestimenta->fetch_assoc();
        ?>
        <section>
            <h2>Datos de Vestimenta</h2>
            <!-- Formulario de Datos de Vestimenta -->
            <form action="php2/updates/upForm9.php" method="POST">
                <!-- Campo de texto para el Número de Empleado -->
                <label for="noEmpleado">Número de Empleado:</label>
                <input type="text" id="noEmpleado" name="NO_EMPLEADO" required readonly value="<?php echo $rowVestimenta['NO_EMPLEADO']; ?>">
                <br><br>

                <!-- Campo de texto para Playera -->
                <label for="playera">Playera:</label>
                <input type="text" id="playera" name="PLAYERA" value="<?php echo $rowVestimenta['PLAYERA']; ?>">
                <br><br>

                <!-- Campo de texto para Camisa -->
                <label for="camisa">Camisa:</label>
                <input type="text" id="camisa" name="CAMISA" value="<?php echo $rowVestimenta['CAMISA']; ?>">
                <br><br>

                <!-- Campo de texto para Pantalón -->
                <label for="pantalon">Pantalón:</label>
                <input type="text" id="pantalon" name="PANTALON" value="<?php echo $rowVestimenta['PANTALON']; ?>">
                <br><br>

                <!-- Campo de texto para Calzado -->
                <label for="calzado">Calzado:</label>
                <input type="text" id="calzado" name="CALZADO" value="<?php echo $rowVestimenta['CALZADO']; ?>">
                <br><br>

                <!-- Campo de texto para Chamarra -->
                <label for="chamarra">Chamarra:</label>
                <input type="text" id="chamarra" name="CHAMARRA" value="<?php echo $rowVestimenta['CHAMARRA']; ?>">
                <br><br>

                <!-- Campo de texto para MC Arthur -->
                <label for="mcArthur">MC Arthur:</label>
                <input type="text" id="mcArthur" name="MC_ARTHUR" value="<?php echo $rowVestimenta['MC_ARTHUR']; ?>">
                <br><br>

                <!-- Campo de texto para Kepi -->
                <label for="kepi">Kepi:</label>
                <input type="text" id="kepi" name="KEPI" value="<?php echo $rowVestimenta['KEPI']; ?>">
                <br><br>

                <!-- Campo de texto para Sombrero -->
                <label for="sombrero">Sombrero:</label>
                <input type="text" id="sombrero" name="SOMBRERO" value="<?php echo $rowVestimenta['SOMBRERO']; ?>">
                <br><br>

                <!-- Campo de texto para Falda -->
                <label for="falda">Falda:</label>
                <input type="text" id="falda" name="FALDA" value="<?php echo $rowVestimenta['FALDA']; ?>">
                <br><br>

                <!-- Campo de texto para Filipina -->
                <label for="filipina">Filipina:</label>
                <input type="text" id="filipina" name="FILIPINA" value="<?php echo $rowVestimenta['FILIPINA']; ?>">
                <br><br>

                <!-- Campo de texto para Overol -->
                <label for="overol">Overol:</label>
                <input type="text" id="overol" name="OVEROL" value="<?php echo $rowVestimenta['OVEROL']; ?>">
                <br><br>

                <!-- Campo de texto para Bata -->
                <label for="bata">Bata:</label>
                <input type="text" id="bata" name="BATA" value="<?php echo $rowVestimenta['BATA']; ?>">
                <br><br>

                <!-- Botón de guardar CAMBIOS -->
                <input type="submit" name="guardar" value="Guardar Cambios"><br><br><br><br><br>
            </form>
        </section>
        <?php
    } else {
        echo "<p>Empleado no encontrado.</p>";
    }

    // Consulta los datos de comisiones
    $sqlComisiones = "SELECT * FROM comisiones WHERE NO_EMPLEADO = '$noEmpleado'";
    $resultComisiones = $conn->query($sqlComisiones);

    /* Consulta Formulario de Datos de Comisiones */
    if ($resultComisiones->num_rows > 0) {
        $rowComisiones = $resultComisiones->fetch_assoc();
        ?>
        <section>
            <h2>Datos de Comisiones</h2>
            <!-- Formulario de Datos de Comisiones -->
            <form action="php2/updates/upForm10.php" method="POST">
                <!-- Campo de texto para el Número de Empleado -->
                <label for="noEmpleado">Número de Empleado:</label>
                <input type="text" id="noEmpleado" name="NO_EMPLEADO" required readonly value="<?php echo $rowComisiones['NO_EMPLEADO']; ?>">
                <br><br>

                <!-- Campo de texto para Comisión en Lugar o Persona -->
                <label for="comisionLugarPersona">Comisión en Lugar o Persona:</label>
                <input type="text" id="comisionLugarPersona" name="CELP" value="<?php echo $rowComisiones['CELP']; ?>">
                <br><br>

                <!-- Campo de texto para Período -->
                <label for="periodo">Período:</label>
                <input type="text" id="periodo" name="PERIODO" value="<?php echo $rowComisiones['PERIODO']; ?>">
                <br><br>

                <!-- Campo de texto para Fecha de Inicio de Comisión -->
                <label for="fechaInicioComision">Fecha de Inicio de Comisión:</label>
                <input type="text" id="fechaInicioComision" name="FDIDC" value="<?php echo $rowComisiones['FDIDC']; ?>">
                <br><br>

                <!-- Campo de texto para Fecha de Conclusión de Comisión -->
                <label for="fechaConclusionComision">Fecha de Conclusión de Comisión:</label>
                <input type="text" id="fechaConclusionComision" name="FDCDC" value="<?php echo $rowComisiones['FDCDC']; ?>">
                <br><br>

                <!-- Campo de texto para Oficina de Comisión -->
                <label for="oficinaComision">Oficina de Comisión:</label>
                <input type="text" id="oficinaComision" name="OF_COMISION" value="<?php echo $rowComisiones['OF_COMISION']; ?>">
                <br><br>

                <!-- Botón de guardar CAMBIOS -->
                <input type="submit" name="guardar" value="Guardar Cambios"><br><br><br><br><br>
            </form>
        </section>
        <?php
    } else {
        echo "<p>Empleado no encontrado.</p>";
    }

    // Consulta los datos de Movimientos por Cambio ASDC
    $sqlMovimientosASDC = "SELECT * FROM movimiento_por_cambio_asdc WHERE NO_EMPLEADO = '$noEmpleado'";
    $resultMovimientosASDC = $conn->query($sqlMovimientosASDC);

    /* Consulta Formulario de Datos de Movimientos por Cambio ASDC */
    if ($resultMovimientosASDC->num_rows > 0) {
        $rowMovimientosASDC = $resultMovimientosASDC->fetch_assoc();
        ?>
        <section>
            <h2>Datos de Movimientos por Cambio ASDC</h2>
            <!-- Formulario de Datos de Movimientos por Cambio ASDC -->
            <form action="php2/updates/upForm11.php" method="POST">
                <!-- Campo de texto para el Número de Empleado -->
                <label for="noEmpleado">Número de Empleado:</label>
                <input type="text" id="noEmpleado" name="NO_EMPLEADO" required readonly value="<?php echo $rowMovimientosASDC['NO_EMPLEADO']; ?>">
                <br><br>

                <!-- Campo de texto para Fecha de Recibido -->
                <label for="fechaRecibido">Fecha de Recibido:</label>
                <input type="text" id="fechaRecibido" name="fdr" value="<?php echo $rowMovimientosASDC['fdr']; ?>">
                <br><br>

                <!-- Campo de texto para Fecha de Cambio CAM.ADSC. -->
                <label for="fechaCambioADSC">Fecha de Cambio CAM.ADSC.:</label>
                <input type="text" id="fechaCambioADSC" name="fdcc" value="<?php echo $rowMovimientosASDC['fdcc']; ?>">
                <br><br>

                <!-- Campo de texto para se Presento de Cambio -->
                <label for="presentoCambio">Se Presento de Cambio:</label>
                <input type="text" id="presentoCambio" name="pdc" value="<?php echo $rowMovimientosASDC['pdc']; ?>">
                <br><br>

                <!-- Campo de texto para Acuerdo de Computo -->
                <label for="acuerdoComputo">Acuerdo de Computo:</label>
                <input type="text" id="acuerdoComputo" name="ADC" value="<?php echo $rowMovimientosASDC['ADC']; ?>">
                <br><br>

                <!-- Campo de texto para Acuerdo SSP -->
                <label for="acuerdoSSP">Acuerdo SSP:</label>
                <input type="text" id="acuerdoSSP" name="ASS" value="<?php echo $rowMovimientosASDC['ASS']; ?>">
                <br><br>

                <!-- Botón de guardar CAMBIOS -->
                <input type="submit" name="guardar" value="Guardar Cambios"><br><br><br><br><br>
            </form>
        </section>
        <?php
    } else {
        echo "<p>Empleado no encontrado.</p>";
    }

    // Consulta los datos de Datos del Empleo
    $sqlDatosEmpleo = "SELECT * FROM datos_del_empleo WHERE NO_EMPLEADO = '$noEmpleado'";
    $resultDatosEmpleo = $conn->query($sqlDatosEmpleo);

    /* Consulta Formulario de Datos del Empleo */
    if ($resultDatosEmpleo->num_rows > 0) {
        $rowDatosEmpleo = $resultDatosEmpleo->fetch_assoc();
        ?>
        <section>
            <h2>Datos del Empleo</h2>
            <!-- Formulario de Datos del Empleo -->
            <form action="php2/updates/upForm12.php" method="POST">
                <!-- Campo de texto para el Número de Empleado -->
                <label for="noEmpleado">Número de Empleado:</label>
                <input type="text" id="noEmpleado" name="NO_EMPLEADO" required readonly value="<?php echo $rowDatosEmpleo['NO_EMPLEADO']; ?>">
                <br><br>

                <!-- Campo de texto para NO. -->
                <label for="no">NO.:</label>
                <input type="text" id="no" name="NO" value="<?php echo $rowDatosEmpleo['NO']; ?>">
                <br><br>

                <!-- Campo de texto para NO. Archivo -->
                <label for="noArchivo">NO. Archivo:</label>
                <input type="text" id="noArchivo" name="NA" value="<?php echo $rowDatosEmpleo['NA']; ?>">
                <br><br>

                <!-- Campo de texto para NIVEL -->
                <label for="nivel">NIVEL:</label>
                <input type="text" id="nivel" name="NIVEL" value="<?php echo $rowDatosEmpleo['NIVEL']; ?>">
                <br><br>

                <!-- Campo de texto para CATEGORIA -->
                <label for="categoria">CATEGORIA:</label>
                <input type="text" id="categoria" name="CATEGORIA" value="<?php echo $rowDatosEmpleo['CATEGORIA']; ?>">
                <br><br>

                <!-- Campo de texto para GRADO HOMOLOGADO -->
                <label for="gradoHomologado">GRADO HOMOLOGADO:</label>
                <input type="text" id="gradoHomologado" name="GRADO_HOMOLOGADO" value="<?php echo $rowDatosEmpleo['GRADO_HOMOLOGADO']; ?>">
                <br><br>

                <!-- Campo de texto para GRADO -->
                <label for="grado">GRADO:</label>
                <input type="text" id="grado" name="GRADO" value="<?php echo $rowDatosEmpleo['GRADO']; ?>">
                <br><br>

                <!-- Campo de texto para NUMERO ANTERIOR -->
                <label for="numeroAnterior">NUMERO ANTERIOR:</label>
                <input type="text" id="numeroAnterior" name="NUMERO_ANTERIOR" value="<?php echo $rowDatosEmpleo['NUMERO_ANTERIOR']; ?>">
                <br><br>

                <!-- Campo de texto para NUMERO NUEVO -->
                <label for="numeroNuevo">NUMERO NUEVO:</label>
                <input type="text" id="numeroNuevo" name="NUMERO_NUEVO" value="<?php echo $rowDatosEmpleo['NUMERO_NUEVO']; ?>">
                <br><br>

                <!-- Campo de texto para CREDENCIAL CON LOC No. 196 (SI/NO) ACTUALIZADA 27/07/2022 -->
                <label for="credencialLOC">CREDENCIAL CON LOC No. 196 (SI/NO) ACTUALIZADA 27/07/2022:</label>
                <input type="text" id="credencialLOC" name="CCLA" value="<?php echo $rowDatosEmpleo['CCLA']; ?>">
                <br><br>

                <!-- Campo de texto para ACTUALIZACIÓN 2016 -->
                <label for="actualizacion2016">ACTUALIZACIÓN 2016:</label>
                <input type="text" id="actualizacion2016" name="ACTUALIZACION" value="<?php echo $rowDatosEmpleo['ACTUALIZACION']; ?>">
                <br><br>

                <!-- Campo de texto para VETTING -->
                <label for="vetting">VETTING:</label>
                <input type="text" id="vetting" name="VETTING" value="<?php echo $rowDatosEmpleo['VETTING']; ?>">
                <br><br>

                <!-- Campo de texto para OFICIALIA MAYOR -->
                <label for="oficialiaMayor">OFICIALIA MAYOR:</label>
                <input type="text" id="oficialiaMayor" name="OFICIALIA_MAYOR" value="<?php echo $rowDatosEmpleo['OFICIALIA_MAYOR']; ?>">
                <br><br>

                <!-- Campo de texto para RNPSP -->
                <label for="rnpsp">RNPSP:</label>
                <input type="text" id="rnpsp" name="RNPSP" value="<?php echo $rowDatosEmpleo['RNPSP']; ?>">
                <br><br>

                <!-- Campo de texto para AREA -->
                <label for="area">AREA:</label>
                <input type="text" id="area" name="AREA" value="<?php echo $rowDatosEmpleo['AREA']; ?>">
                <br><br>

                <!-- Campo de texto para AGRUPAMIENTOS -->
                <label for="agrupamientos">AGRUPAMIENTOS:</label>
                <input type="text" id="agrupamientos" name="AGRUPAMIENTOS" value="<?php echo $rowDatosEmpleo['AGRUPAMIENTOS']; ?>">
                <br><br>

                <!-- Campo de texto para DESCRIPCIÓN -->
                <label for="descripcion">DESCRIPCIÓN:</label>
                <input type="text" id="descripcion" name="DESCRIPCION" value="<?php echo $rowDatosEmpleo['DESCRIPCION']; ?>">
                <br><br>

                <!-- Campo de texto para POLIZA OF.MAYOR -->
                <label for="polizaOficialMayor">POLIZA OF.MAYOR:</label>
                <input type="text" id="polizaOficialMayor" name="POM" value="<?php echo $rowDatosEmpleo['POM']; ?>">
                <br><br>

                <!-- Campo de texto para POLIZA G.N.P -->
                <label for="polizaGNP">POLIZA G.N.P:</label>
                <input type="text" id="polizaGNP" name="PGNP" value="<?php echo $rowDatosEmpleo['PGNP']; ?>">
                <br><br>

                <!-- Campo de texto para FOLIO -->
                <label for="folio">FOLIO:</label>
                <input type="text" id="folio" name="FOLIO" value="<?php echo $rowDatosEmpleo['FOLIO']; ?>">
                <br><br>

                <!-- Campo de texto para COMISIÓN HONOR Y JUSTICIA -->
                <label for="comisionHyJ">COMISIÓN HONOR Y JUSTICIA:</label>
                <input type="text" id="comisionHyJ" name="CHYJ" value="<?php echo $rowDatosEmpleo['CHYJ']; ?>">
                <br><br>

                <!-- Campo de texto para BECARIOS -->
                <label for="becarios">BECARIOS:</label>
                <input type="text" id="becarios" name="BECARIOS" value="<?php echo $rowDatosEmpleo['BECARIOS']; ?>">
                <br><br>

                <!-- Campo de texto para METROPOLITANA -->
                <label for="metropolitana">METROPOLITANA:</label>
                <input type="text" id="metropolitana" name="METROPOLITANA" value="<?php echo $rowDatosEmpleo['METROPOLITANA']; ?>">
                <br><br>

                <!-- Campo de texto para GRUPOS DE OPERACIONES TÁCTICAS -->
                <label for="gruposOperacionesTacticas">GRUPOS DE OPERACIONES TÁCTICAS:</label>
                <input type="text" id="gruposOperacionesTacticas" name="GDOT" value="<?php echo $rowDatosEmpleo['GDOT']; ?>">
                <br><br>

                <!-- Campo de texto para 2DA CERTIFICACION -->
                <label for="segundaCertificacion">2DA CERTIFICACION:</label>
                <input type="text" id="segundaCertificacion" name="sdC" value="<?php echo $rowDatosEmpleo['sdC']; ?>">
                <br><br>

                <!-- Campo de texto para FECHA DE PROCESO DE EVALUACIÓN -->
                <label for="fechaProcesoEvaluacion">FECHA DE PROCESO DE EVALUACIÓN:</label>
                <input type="text" id="fechaProcesoEvaluacion" name="FDPDE" value="<?php echo $rowDatosEmpleo['FDPDE']; ?>">
                <br><br>

                <!-- Campo de texto para FECHA DE CONCLUSIÓN -->
                <label for="fechaConclusion">FECHA DE CONCLUSIÓN:</label>
                <input type="text" id="fechaConclusion" name="FDC" value="<?php echo $rowDatosEmpleo['FDC']; ?>">
                <br><br>

                <!-- Campo de texto para FECHA DE EVALUACION COMPETENCIAS BASICAS -->
                <label for="fechaEvaluacionCompetenciasBasicas">FECHA DE EVALUACION COMPETENCIAS BASICAS:</label>
                <input type="text" id="fechaEvaluacionCompetenciasBasicas" name="FECB" value="<?php echo $rowDatosEmpleo['FECB']; ?>">
                <br><br>

                <!-- Campo de texto para FECHA DE EVALUACION DESEMPEÑO -->
                <label for="fechaEvaluacionDesempeno">FECHA DE EVALUACION DESEMPEÑO:</label>
                <input type="text" id="fechaEvaluacionDesempeno" name="FDED" value="<?php echo $rowDatosEmpleo['FDED']; ?>">
                <br><br>

                <!-- Campo de texto para FECHA DE EMISION -->
                <label for="fechaEmision">FECHA DE EMISION:</label>
                <input type="text" id="fechaEmision" name="FDE" value="<?php echo $rowDatosEmpleo['FDE']; ?>">
                <br><br>

                <!-- Botón de guardar CAMBIOS -->
                <input type="submit" name="guardar" value="Guardar Cambios"><br><br><br><br><br>
            </form>
        </section>
        <?php
    } else {
        echo "<p>Empleado no encontrado.</p>";
    }

    // Consulta los datos de Categorización
    $sqlCategorizacion = "SELECT * FROM categorizacion WHERE NO_EMPLEADO = '$noEmpleado'";
    $resultCategorizacion = $conn->query($sqlCategorizacion);

    /* Consulta Formulario de Categorización */
    if ($resultCategorizacion->num_rows > 0) {
        $rowCategorizacion = $resultCategorizacion->fetch_assoc();
        ?>
        <section>
            <h2>Categorización</h2>
            <!-- Formulario de Categorización -->
            <form action="php2/updates/upForm13.php" method="POST">
                <!-- Campo de texto para el Número de Empleado -->
                <label for="noEmpleado">Número de Empleado:</label>
                <input type="text" id="noEmpleado" name="NO_EMPLEADO" required readonly value="<?php echo $rowCategorizacion['NO_EMPLEADO']; ?>">
                <br><br>

                <!-- Campo de texto para PUESTO -->
                <label for="puesto">PUESTO:</label>
                <input type="text" id="puesto" name="PUESTO" value="<?php echo $rowCategorizacion['PUESTO']; ?>">
                <br><br>

                <!-- Campo de texto para FUNCIÓN -->
                <label for="funcion">FUNCIÓN:</label>
                <input type="text" id="funcion" name="FUNCION" value="<?php echo $rowCategorizacion['FUNCION']; ?>">
                <br><br>

                <!-- Campo de texto para ACTIVIDADES -->
                <label for="actividades">ACTIVIDADES:</label>
                <input type="text" id="actividades" name="ACTIVIDADES" value="<?php echo $rowCategorizacion['ACTIVIDADES']; ?>">
                <br><br>

                <!-- Campo de texto para DESCRIPCIÓN DEL ESTATUS -->
                <label for="descripcionEstatus">DESCRIPCIÓN DEL ESTATUS:</label>
                <input type="text" id="descripcionEstatus" name="DESCRIPCION_ESTATUS" value="<?php echo $rowCategorizacion['DESCRIPCION_ESTATUS']; ?>">
                <br><br>

                <!-- Botón de guardar CAMBIOS -->
                <input type="submit" name="guardar" value="Guardar Cambios"><br><br><br><br><br>
            </form>
        </section>
        <?php
    } else {
        echo "<p>Empleado no encontrado.</p>";
    }

    // Consulta los datos de Cursos y Reconocimientos de Cursos
    $sqlCursos = "SELECT * FROM cursos_reconocimiento_cuerso WHERE NO_EMPLEADO_14 = '$noEmpleado'";
    $resultCursos = $conn->query($sqlCursos);

    /* Consulta Formulario de Cursos y Reconocimientos de Cursos */
    if ($resultCursos->num_rows > 0) {
        $rowCursos = $resultCursos->fetch_assoc();
        ?>
        <section>
            <h2>Cursos y Reconocimientos de Cursos</h2>
            <!-- Formulario de Cursos y Reconocimientos de Cursos -->
            <form action="php2/updates/upForm14.php" method="POST">
                <!-- Campo de texto para el Número de Empleado -->
                <label for="noEmpleado">Número de Empleado:</label>
                <input type="text" id="noEmpleado" name="NO_EMPLEADO_14" required readonly value="<?php echo $rowCursos['NO_EMPLEADO_14']; ?>">
                <br><br>

                <!-- Campo de texto para GRUPO ACREDITABLE -->
                <label for="grupoAcreditable">GRUPO ACREDITABLE:</label>
                <input type="text" id="grupoAcreditable" name="GA" value="<?php echo $rowCursos['GA']; ?>">
                <br><br>

                <!-- Campo de texto para BLOQUE -->
                <label for="bloque">BLOQUE:</label>
                <input type="text" id="bloque" name="BLOQUE" value="<?php echo $rowCursos['BLOQUE']; ?>">
                <br><br>

                <!-- Campo de texto para CURSO MANEJO ICAT -->
                <label for="cursoIcat">CURSO MANEJO ICAT:</label>
                <input type="text" id="cursoIcat" name="CMI" value="<?php echo $rowCursos['CMI']; ?>">
                <br><br>

                <!-- Campo de texto para CURSO "REPLICADOR PARA EL TALLER DEL USO DE LA FUERZA Y ARMAS DE FUEGO EN SEGURIDAD PUBLICA" -->
                <label for="cursoReplicador">Curso "REPLICADOR PARA EL TALLER DEL USO DE LA FUERZA Y ARMAS DE FUEGO EN SEGURIDAD PUBLICA":</label>
                <input type="text" id="cursoReplicador" name="rpet" value="<?php echo $rowCursos['rpet']; ?>">
                <br><br>

                <!-- Campo de texto para Curso Sistema Penal Acusatorio -->
                <label for="cursoSPA">Curso Sistema Penal Acusatorio:</label>
                <input type="text" id="cursoSPA" name="CSPA" value="<?php echo $rowCursos['CSPA']; ?>">
                <br><br>

                <!-- Campo de texto para Juramento al Cargo -->
                <label for="juramentoCargo">Juramento al Cargo:</label>
                <input type="text" id="juramentoCargo" name="JAC" value="<?php echo $rowCursos['JAC']; ?>">
                <br><br>

                <!-- Campo de texto para ¿CUANTOS CURSOS TIENE? -->
                <label for="numCursos">¿CUANTOS CURSOS TIENE?:</label>
                <input type="text" id="numCursos" name="NDE" value="<?php echo $rowCursos['NDE']; ?>">
                <br><br>

                <!-- Campo de texto para FECHA -->
                <label for="fecha">FECHA:</label>
                <input type="text" id="fecha" name="FECHA1" value="<?php echo $rowCursos['FECHA1']; ?>">
                <br><br>

                <!-- Campo de texto para CURSO -->
                <label for="curso">CURSO :</label>
                <input type="text" id="curso" name="CURSO" value="<?php echo $rowCursos['CURSO']; ?>">
                <br><br>

                <!-- Campo de texto para ¿QUIEN EXPIDE? -->
                <label for="quienExpide">¿QUIEN EXPIDE?:</label>
                <input type="text" id="quienExpide" name="QE" value="<?php echo $rowCursos['QE']; ?>">
                <br><br>

                <!-- Botón de guardar CAMBIOS -->
                <input type="submit" name="guardar" value="Guardar Cambios"><br><br><br><br><br>
            </form>
        </section>
        <?php
    } else {
        echo "<p>Empleado no encontrado.</p>";
    }

    // Consulta los datos de Incapacidad
    $sqlIncapacidad = "SELECT * FROM incapacida WHERE NO_EMPLEADO_15 = '$noEmpleado'";
    $resultIncapacidad = $conn->query($sqlIncapacidad);

    /* Consulta Formulario de Incapacidad */
    if ($resultIncapacidad->num_rows > 0) {
        $rowIncapacidad = $resultIncapacidad->fetch_assoc();
        ?>
        <section>
            <h2>Incapacidad</h2>
            <!-- Formulario de Incapacidad -->
            <form action="php2/updates/upForm15.php" method="POST">
                <!-- Campo de texto para el Número de Empleado -->
                <label for="noEmpleado">Número de Empleado:</label>
                <input type="text" id="noEmpleado" name="NO_EMPLEADO_15" required readonly value="<?php echo $rowIncapacidad['NO_EMPLEADO_15']; ?>">
                <br><br>

                <!-- Campo de texto para FECHA DE INICIO DE PERSONAL INCAPACITADO -->
                <label for="fechaInicio">FECHA DE INICIO DE PERSONAL INCAPACITADO:</label>
                <input type="text" id="fechaInicio" name="FECHA_INICIO_PERSONAL_INCAPACITADO" value="<?php echo $rowIncapacidad['FECHA_INICIO_PERSONAL_INCAPACITADO']; ?>">
                <br><br>

                <!-- Campo de texto para OBSERVACIONES -->
                <label for="observaciones">OBSERVACIONES:</label>
                <input type="text" id="observaciones" name="OBSERVACIONES" value="<?php echo $rowIncapacidad['OBSERVACIONES']; ?>">
                <br><br>

                <!-- Campo de texto para FECHA DE TERMINACIÓN DE PERSONAL INCAPACITADO -->
                <label for="fechaTerminacion">FECHA DE TERMINACIÓN DE PERSONAL INCAPACITADO:</label>
                <input type="text" id="fechaTerminacion" name="FECHA_TERMINACION_PERSONAL_INCAPACITADO" value="<?php echo $rowIncapacidad['FECHA_TERMINACION_PERSONAL_INCAPACITADO']; ?>">
                <br><br>

                <!-- Campo de texto para INCAPACIDAD PENDIENTE GUARDIA GENERAL -->
                <label for="incapacidadPendiente">INCAPACIDAD PENDIENTE GUARDIA GENERAL:</label>
                <input type="text" id="incapacidadPendiente" name="INCAPACIDAD_PENDIENTE_GUARDIA_GENERAL" value="<?php echo $rowIncapacidad['INCAPACIDAD_PENDIENTE_GUARDIA_GENERAL']; ?>">
                <br><br>

                <!-- Botón de guardar CAMBIOS -->
                <input type="submit" name="guardar" value="Guardar Cambios"><br><br><br><br><br>
            </form>
        </section>
        <?php
    } else {
        echo "<p>Empleado no encontrado.</p>";
    }

    $conn->close();
    ?>

</body>
</html>
