<?php
session_start(); // Inicia la sesión
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../estilos/styles1.css">
</head>
<body>

<header>
    <div class="logo-left">
        <img src="../../../imagenes/guardia_civil.png" alt="Logo Izquierda">
    </div>
    <div class="logo-right">
        <img src="../../../imagenes/secretaria_de_suguridad.png" alt="Logo Derecha">
    </div>
</header>

<nav>
    <ul class="pestanas">
        <li><a href="javascript:void(0);" onclick="mostrarRegistro()">Registro</a></li>
        <li><a href="javascript:void(0);" onclick="mostrarConsulta()">Consulta</a></li>
        <li class="logout"><a href="../../../logout.php">Cerrar Sesión</a></li>
    </ul>
</nav>

<div id="contenido">
    <!-- INICIO BANNER -->
    <div id="inicio">
        <!-- Carrusel de fotos -->
        <div id="fotoCarousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="../../../recursos/img/1.jpeg" alt="Imagen 1">
                </div>
                <div class="carousel-item">
                    <img src="../../../recursos/img/2.jpg" alt="Imagen 2">
                </div>
                <!-- (Otros elementos del carrusel) -->
            </div>
            <ol class="carousel-indicators">
                <li data-target="#fotoCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#fotoCarousel" data-slide-to="1"></li>
                <!-- (Otros indicadores del carrusel) -->
            </ol>
            <a class="carousel-control-prev" href="#fotoCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Anterior</span>
            </a>
            <a class="carousel-control-next" href="#fotoCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" ariahidden="true"></span>
                <span class="sr-only">Siguiente</span>
            </a>
        </div>

        <!-- Mensaje -->
        <div class="mensaje">
            <p>Desde que tomó protesta como presidente municipal, Enrique Galindo Ceballos se comprometió
                con las y los ciudadanos a transformar la seguridad pública de la ciudad. Por eso hoy nace la
                <span class="mayusculas">Nueva Secretaría de Seguridad y Protección Ciudadana.</span></p>

            <p>Es un nuevo esquema de comunidad segura que implica una nueva forma de hacer las cosas, con
                una
                nueva estructura y una nueva mentalidad. Los ciudadanos participan activamente en la
                construcción de <span class="mayusculas">COMUNIDADES SEGURAS</span>, con lo que se evoluciona de lo que conocemos como
                seguridad
                pública, a <span class="mayusculas">SEGURIDAD CIUDADANA.</span></p>
        </div>
    </div>

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
      // Función para mostrar el contenido de Registro
      
        function mostrarInicio() {
            document.getElementById('inicio').style.display = 'block';
            document.getElementById('consulta').style.display = 'none';
        }
      
        function mostrarRegistro() {
            document.getElementById('inicio').style.display = 'none';
            document.getElementById('consulta').style.display = 'none';
        }

        // Función para mostrar el contenido de Consulta
        function mostrarConsulta() {
            document.getElementById('inicio').style.display = 'none';
            document.getElementById('consulta').style.display = 'block';
        }

        // Al cargar la página, asegúrate de que solo se muestre el contenido de Registro inicialmente
        window.onload = function () {
            mostrarInicio();
        };

    </script>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="../../../js/consulta.js"></script>
<script src="../../../js/pag1.js"></script>
</body>
</html>
