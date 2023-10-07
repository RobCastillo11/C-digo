<?php
session_start(); // Inicia la sesión
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../estilos/styles1.css">
    
    <!-- Agrega tus propios estilos y scripts aquí -->
</head>
<body>

<header>
    <div class="logo-left">
        <img src="../imagenes/guardia_civil.png" alt="Logo Izquierda">
    </div>
    <div class="logo-right">
        <img src="../imagenes/secretaria_de_suguridad.png" alt="Logo Derecha">
    </div>
</header>

<nav>
    <ul class="pestanas">
        <li><a href="javascript:void(0);" onclick="mostrarConsulta()">Consulta</a></li>
        <li class="logout"><a href="logout.php">Cerrar Sesión</a></li>
    </ul>
</nav>

    <!-- Consulta de empleado -->
    <div id="consulta" class="pestaña contenido-oculto">
        <h2>Consulta de Empleados</h2>
        <div class="row g-4">
            <!-- Tu formulario de búsqueda y selección de registros va aquí -->
            <div class="col">
                <div class="form-row">
                    <div class="col-auto">
                        <label for="num_registros" class="col-form-label">Mostrar:</label>
                    </div>
                    <div class="col-auto">
                        <select name="num_registros" id="num_registros" class="form-select">
                            <option value="10">10</option>
                            <option value="25">25</option>
                            <option value="50">50</option>
                        </select>
                    </div>
                    <div class="col-auto">
                        <label for="num_registros" class="col-form-label">registros</label>
                    </div>
                    <div class="col-5"></div>
                    <div class="col-auto">
                        <label for="campo" class="col-form-label">Buscar:</label>
                    </div>
                    <div class="col-auto">
                        <input type="text" name="campo" id="campo" class="form-control">
                    </div>
                </div>
                <table class="table consult">
                    <thead>
                    <tr>
                        <th>No Empleado</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Fecha de Nacimiento</th>
                        <th>Fecha de registro</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody id="content"></tbody>
                </table>

                <div class="row">
                    <div class="col-6">
                        <label id="lbl-total"></label>
                    </div>
                    <div class="col-6" id="nav-paginacion"></div>
                </div>
            </div>
        </div>
    </div>
    <script>

        // Función para mostrar el contenido de Consulta
        function mostrarConsulta() {
            document.getElementById('consulta').style.display = 'block';
            document.getElementById('registro').style.display = 'none';
        }

        // Al cargar la página, asegúrate de que solo se muestre el contenido de Registro inicialmente
        window.onload = function () {
            mostrarConsulta();
        };

    </script>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="../js/consulta.js"></script>
</body>
</html>