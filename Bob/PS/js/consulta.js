let paginaActual = 1;
getData(paginaActual);

document.getElementById("campo").addEventListener("keyup", function () {
    getData(1);
}, false);

document.getElementById("num_registros").addEventListener("change", function () {
    getData(paginaActual);
}, false);

// Función AJAX
function getData(pagina) {
    let input = document.getElementById("campo").value;
    let num_registros = document.getElementById("num_registros").value;
    let content = document.getElementById("content");
    let lblTotal = document.getElementById("lbl-total");
    let navPaginacion = document.getElementById("nav-paginacion");

    if (pagina != null) {
        paginaActual = pagina;
    }

    let url = "consulta_empleado.php";
    let formData = new FormData();
    formData.append('campo', input);
    formData.append('registros', num_registros);
    formData.append('pagina', paginaActual);

    // Limpiar la tabla antes de agregar nuevos datos
    content.innerHTML = '';

    fetch(url, {
        method: "POST",
        body: formData
    }).then(Response => Response.json())
        .then(data => {
        if (data.data.length > 0) {
            data.data.forEach(rowData => {
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

                // Agregar botón de "Modificar"
                let modificarCell = document.createElement("td");
                let modificarButton = document.createElement("button");
                modificarButton.textContent = "Modificar";
                modificarButton.id = "modificarButton"; // Asignar un ID al botón
                modificarButton.className = "btn btn-primary"; // Agregar la clase "btn btn-primary" al botón
                modificarButton.addEventListener("click", function () {
                    // Redireccionar a la página de modificar con el ID de empleado
                    window.location.href = "modificar.php?NO_EMPLEADO=" + rowData.NO_EMPLEADO;
                });
                modificarCell.appendChild(modificarButton);
                row.appendChild(modificarCell);

                // Agregar botón de "Consultar"
                let consultarCell = document.createElement("td");
                let consultarButton = document.createElement("button");
                consultarButton.textContent = "Consultar";
                consultarButton.id = "consultarButton"; // Asignar un ID al botón
                consultarButton.className = "btn btn-primary"; // Agregar la clase "btn btn-primary" al botón
                consultarButton.addEventListener("click", function () {
                    // Redireccionar a la página de consultar con el ID de empleado
                    window.location.href = "consultar.php?NO_EMPLEADO=" + rowData.NO_EMPLEADO;
                });
                consultarCell.appendChild(consultarButton);
                row.appendChild(consultarCell);

                // Agregar la fila a la tabla
                content.appendChild(row);
            });

            // Mostrar el número de registros y la paginación
            lblTotal.textContent = 'Mostrando ' + data.totalFiltro +
            ' de ' + data.totalRegistros + ' registros ';
            navPaginacion.innerHTML = data.paginacion;
        } else {
            // Si no hay resultados, mostrar un mensaje
            let noResultsRow = document.createElement("tr");
            let noResultsCell = document.createElement("td");
            noResultsCell.colSpan = 7;
            noResultsCell.textContent = "Sin resultados";
            noResultsRow.appendChild(noResultsCell);
            content.appendChild(noResultsRow);
            lblTotal.textContent = ''; // Ocultar el mensaje de registros
            navPaginacion.innerHTML = ''; // Ocultar la paginación
        }

        // Actualizar la paginación aquí si es necesario

        }).catch(err => console.log(err));
}

