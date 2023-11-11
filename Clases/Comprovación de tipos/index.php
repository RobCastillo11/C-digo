<!DOCTYPE html>
<html>
<head>
    <title>Comprobación de Tipo de Dato</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        h1 {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
        }
        form {
            background-color: #fff;
            max-width: 400px;
            margin: 20px auto;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }
        label {
            font-weight: bold;
        }
        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        input[type="submit"] {
            background-color: #333;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
        }
        p {
            text-align: center;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <h1>Comprobación de Tipo de Dato</h1>
    <?php
    // Función para comprobar el tipo de dato
    function comprobar_tipo_de_dato($variable) {
        if (is_numeric($variable)) {
            echo "<p>La variable '$variable' es numérica.</p>";
        } else {
            echo "<p>La variable '$variable' no es numérica.</p>";
        }
    }

    // Comprobar si se ha enviado el formulario
    if (isset($_POST["variable"])) {
        $variable = $_POST["variable"];
        comprobar_tipo_de_dato($variable);
    }
    ?>

    <form method="post">
        <label for="variable">Ingrese una variable:</label>
        <input type="text" id="variable" name="variable">
        <input type="submit" value="Comprobar">
    </form>
</body>
</html>