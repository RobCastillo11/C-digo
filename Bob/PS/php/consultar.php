<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../estilos/styles2.css">
    <title>Consulta de Empleado</title>
</head>
<body>
    <h1>Mostrar Datos de Empleado</h1>
    

    <?php
    require 'database.php';

    if ($conn->connect_error) {
        die("La conexión falló: " . $conn->connect_error);
    }

    $noEmpleado = $_GET['NO_EMPLEADO'];

    // Consulta los datos generales del empleado
    $sqlGenerales = "SELECT * FROM generales WHERE NO_EMPLEADO = '$noEmpleado'";
    $resultGenerales = $conn->query($sqlGenerales);

    if ($resultGenerales->num_rows > 0) {
        $rowGenerales = $resultGenerales->fetch_assoc();
    } else {
        echo "<p>Empleado no encontrado.</p>";
    }

    // Consulta los datos familiares del empleado
    $sqlFamilia = "SELECT * FROM datos_familia WHERE NO_EMPLEADO_2 = '$noEmpleado'";
    $resultFamilia = $conn->query($sqlFamilia);

    if ($resultFamilia->num_rows > 0) {
        $rowFamilia = $resultFamilia->fetch_assoc();
    }

    $conn->close();
    ?>

    

    <div id="Consulta" class="pestaña">
        <div class="tab-content">
            <div class="form-selection">
                <label for="formSelector">Seleccione una opción:</label>
                <select id="formSelector" class="form-control">
                    <option value="form1">DATOS GENERALES</option>
                    <option value="form2">DATOS DE FAMILIA</option>
                    <!-- Agrega aquí más opciones según tus necesidades -->
                </select>
                <div id="form-container"></div>
            </div>
        </div>
    </div><br><br>

    <!-- Empieza Formulario 1 Generales-->
    <form action="" method="POST" id="form1">
        <?php
        // Define un array de etiquetas y campos de datos
        $campos = array(
            "NO_EMPLEADO" => "Número de Empleado",
            "NOMBRE" => "Nombre (s)",
            "AP" => "Apellido Paterno",
            "AM" => "Apellido Materno",
            "FN" => "Fecha de Nacimiento",
            "EDAD" => "Edad",
            "SEXO" => "Sexo",
            "CORREO" => "Correo",
            "EC" => "Estado Civil",
            "SMN" => "Cartilla SMN",
            "LICENCIA" => "Licencia",
            "INEF" => "INE Enfrente",
            "INEA" => "INE Atras",
            "LN" => "Lugar de Nacimiento",
            "CALLE" => "Calle",
            "No_ext" => "Número Exterior",
            "No_int" => "Número Interior",
            "COLONIA" => "Colonia",
            "MUNICIPIO" => "Municipio",
            "ESTADO" => "Estado",
            "CP" => "Código Postal",
            "CURP" => "CURP",
            "CONSIDERACIONES" => "Consideraciones"
        );

        // Itera a través de los campos y genera las etiquetas y campos de entrada
        foreach ($campos as $campo => $etiqueta) {
            echo '<label for="' . $campo . '">' . $etiqueta . ':</label>';
            echo '<input type="text" id="' . $campo . '" name="' . $campo . '" required readonly value="' . $rowGenerales[$campo] . '">';
            echo '<br><br>';
        }
        ?>
    </form>


    <form action="" method="POST" id="form2">
        <!-- Campo de texto para el NO_EMPLEADO -->
        <label for="noEmpleado_2">Número de Empleado:</label>
        <input type="text" id="noEmpleado_2" name="NO_EMPLEADO_2" required readonly value="<?php echo $rowFamilia ['NO_EMPLEADO_2']; ?>">
        <br><br>
    </form>

    <script>
        // JavaScript para mostrar/ocultar formularios según la selección del usuario
        const formSelector = document.getElementById("formSelector");
        const formContainer = document.getElementById("form-container");

        formSelector.addEventListener("change", () => {
            const selectedFormId = formSelector.value;
            const selectedForm = document.getElementById(selectedFormId);

            // Ocultar todos los formularios
            const forms = formContainer.querySelectorAll("form");
            forms.forEach(form => {
                form.style.display = "none";
            });

            // Mostrar el formulario seleccionado
            selectedForm.style.display = "block";
        });

        // Mostrar el primer formulario por defecto
        const defaultForm = document.getElementById("form1");
        defaultForm.style.display = "block";
    </script>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
