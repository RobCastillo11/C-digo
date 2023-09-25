<?php
session_start(); // Inicia la sesión

?>
<!DOCTYPE html>
<html lang="es"> 
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="../estilos/styles1.css">
  <!--Agrega tus propios estilos y scripts aquí -->

  <style>
    table, th, td{
      border: 1px solid;
    }

    table{
      width: 80%;
      border-collapse: collapse;
    }
  </style>

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
  <li><a href="#registro">Registro</a></li>
  <li><a href="#Consult">Consulta</a></li>
  <li><a href="#edit">Modificación</a></li>
  <li class="logout"><a href="logout.php">Cerrar Sesión</a></li>
</ul>
  </nav>
  
<div id="mensajeResultado1"></div> <!-- Para el formulario 1 -->
<div id="mensajeResultado2"></div>
<div id="mensajeResultado3"></div> 
<div id="mensajeResultado4"></div>
<div id="mensajeResultado5"></div>
<div id="mensajeResultado6"></div> 
<div id="mensajeResultado7"></div>
<div id="mensajeResultado8"></div>
<div id="mensajeResultado9"></div> 
<div id="mensajeResultado10"></div>
<div id="mensajeResultado11"></div>
<div id="mensajeResultado12"></div> 
<div id="mensajeResultado13"></div>
<div id="mensajeResultado14"></div> 
<div id="mensajeResultado15"></div>

  <div id="contenido">

  <div id="registro" class="pestaña">
  <div class="tab-content"> 
        <div class="form-selection">
          <label for="formSelector">Seleccione una opción:</label>
          <select id="formSelector" class="form-control">
            <option value="form1">DATOS GENERALES</option>
            <option value="form2">DATOS DE FAMILIA </option>
            <option value="form3">EVALUACION ANUAL DEL DESEMPEÑO DIRECTIVA 35.1.2</option>
            <option value="form4">DATOS DE ESTUDIO</option>
            <option value="form5">MILITARES</option>
            <option value="form6">AFILIADOS</option>
            <option value="form7">DATOS DEL EMPLEADO</option>
            <option value="form8">DATOS LABORALES DE PERSONAL COMISIONADO</option>
            <option value="form9">VESTIMENTA</option>
            <option value="form10">COMISIONES</option>
            <option value="form11">MOVIMIENTOS POR CAMBIOS DE ASDC</option>
            <option value="form12">DATOS DEL EMPLEO</option>
            <option value="form13">CATEGORIZACIÓN</option>
            <option value="form14">CURSOS Y RECONOCIMIENTOS DE CURSOS</option>
            <option value="form15">INCAPACIDAD</option>
          </select>
        <div id="form-container"></div>
      </div>


    <div id="Consult" class="pestaña contenido-oculto">
      <h2>Consulta de Empleados</h2>

      <div class="row g-4">

        <div class="col-auto">
          <label for="num_registros" class="col-form-label"->Mostrar:</label>
        </div>
        <div class="col-auto">
          <select name="num_registros" id="num_registros" class="form-select">
            <option value="10">10</option>
            <option value="25">25</option>
            <option value="50">50</option>
          </select>
        </div>

        <div class="col-auto">
          <label for="num_registros" class="col-form-label"->registros</label>
        </div>

        <div class="col-auto">
          <label for="campo" class="col-form-label"->Buscar:</label>
        </div>
        <div class="col-auto">
          <input type="text" name="campo" id="campo" class="form-control">
        </div>

      </div>

      <div class="row py-4">
        <div class="col">
          <table class="table consult">
            <thead>
              <th>No Empleado</th>
              <th>Nombre</th>
              <th>Apellido</th>
              <th>Fecha de Nacimiento</th>
              <th>Fecha de registro</th>
              <th></th>
              <th></th>
            </thead>

            <tbody id="content">

            </tbody>
          </table>

          <script>
            getData();

            document.getElementById("campo").addEventListener("keyup",getData)

            function getData() {
              let input = document.getElementById("campo").value;
              let content = document.getElementById("content");
              let url = "consulta_empleado.php";
              let formData = new FormData();
              formData.append('campo', input);

              fetch(url, {
                method: "POST",
                body: formData
              })
                .then(response => response.json())
                .then(data => {
                  // Limpiar la tabla antes de agregar nuevos datos
                  content.innerHTML = '';

                  if (data.length > 0) {
                    data.forEach(rowData => {
                      // Crear una nueva fila
                      let row = document.createElement("tr");

                      // Agregar celdas con los datos
                      let noEmpleadoCell = document.createElement("td");
                      noEmpleadoCell.textContent = rowData.NO_EMPLEADO;
                      row.appendChild(noEmpleadoCell);

                      let nombreCell = document.createElement("td");
                      nombreCell.textContent = rowData.NOMBRE;
                      row.appendChild(nombreCell);

                      let apellidoCell = document.createElement("td");
                      apellidoCell.textContent = rowData.AP;
                      row.appendChild(apellidoCell);

                      let fnCell = document.createElement("td");
                      fnCell.textContent = rowData.FN;
                      row.appendChild(fnCell);

                      let fechaRegistroCell = document.createElement("td");
                      fechaRegistroCell.textContent = rowData.fecha_registro;
                      row.appendChild(fechaRegistroCell);

                      // Agregar botón de "Editar"
                      let editarCell = document.createElement("td");
                      let editarButton = document.createElement("button");
                      editarButton.textContent = "Editar";
                      editarCell.appendChild(editarButton);
                      row.appendChild(editarCell);

                      // Agregar botón de "Eliminar"
                      let eliminarCell = document.createElement("td");
                      let eliminarButton = document.createElement("button");
                      eliminarButton.textContent = "Eliminar"; // Cambiado de "Borrar" a "Eliminar"
                      eliminarCell.appendChild(eliminarButton);
                      row.appendChild(eliminarCell);

                      // Agregar la fila a la tabla
                      content.appendChild(row);
                    });
                  } else {
                    // Si no hay resultados, mostrar un mensaje
                    let noResultsRow = document.createElement("tr");
                    let noResultsCell = document.createElement("td");
                    noResultsCell.colSpan = 7;
                    noResultsCell.textContent = "Sin resultados";
                    noResultsRow.appendChild(noResultsCell);
                    content.appendChild(noResultsRow);
                  }
                })
                .catch(err => console.log(err));
            }
          </script>
        </div>
    </div>
    
    <div id="edit" class="pestaña">
      <!-- Formulario de modificación -->
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="../js/pag1.js"></script>
</body>
</html>