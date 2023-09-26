<?php
require 'database.php';

/* Arreglo de las columnas a mostrar en las tablas */
$columns = ['NO_EMPLEADO', 'NOMBRE', 'AP', 'FN', 'fecha_registro'];

/* Nombre de la tabla */
$table = "generales";

$id = 'NO_EMPLEADO';

$campo = isset($_POST['campo']) ? $conn->real_escape_string($_POST['campo']) : null;

$where = '';

if ($campo != null) {
    $where = "WHERE (";

    $cont = count($columns);
    for ($i = 0; $i < $cont; $i++) {
        $where .= $columns[$i] . " LIKE '%" . $campo . "%' OR ";
    }
    $where = substr_replace($where, "", -3);
    $where .= ")";
}

/* Limit */
$limit = isset($_POST['registros']) ? intval($_POST['registros']) : 10; // Usamos intval para asegurarnos de que sea un número entero
$pagina = isset($_POST['pagina']) ? intval($_POST['pagina']) : 1; // Cambiamos esto a 1

$inicio = ($pagina - 1) * $limit;

$sLimit = "LIMIT $inicio, $limit";

/* Consulta */
$sql = "SELECT SQL_CALC_FOUND_ROWS " . implode(", ", $columns) . " FROM $table $where $sLimit";
$resultado = $conn->query($sql);
$num_rows = $resultado->num_rows;

/* Consulta para el total de registros filtrados */
$sqlFiltro = "SELECT FOUND_ROWS()";
$resFiltro = $conn->query($sqlFiltro);
$row_filtro = $resFiltro->fetch_array();
$totalFiltro = $row_filtro[0];

/* Consulta para el total de registros totales */
$sqlTotal = "SELECT count($id) FROM $table";
$resTotal = $conn->query($sqlTotal);
$row_total = $resTotal->fetch_array();
$totalRegistros = $row_total[0];

/* Mostrando resultados */
$output = [];
$output['totalRegistros'] = $totalRegistros;
$output['totalFiltro'] = $totalFiltro;
$output['data'] = [];
$output['paginacion'] = '';

if ($num_rows > 0) {
    while ($row = $resultado->fetch_assoc()) {
        $output['data'][] = $row;
    }
} else {
    $output['data'][] = ["message" => "Sin resultados"];
}

if ($output['totalRegistros'] > 0) {
    $totalPaginas = ceil($output['totalRegistros'] / $limit);

    $output['paginacion'] .= '<nav>';
    $output['paginacion'] .= '<ul class="paginacion">';

    $numeroInicio = 1;
    
    if(($pagina - 4) > 1){
        $numeroInicio = $pagina - 4;
    }

    $numeroFin = $numeroInicio + 9;
    
    if($numeroFin > $totalPaginas){
        $numeroFin = $totalPaginas;
    }


    for ($i = $numeroInicio; $i <= $numeroFin; $i++) {
        if($pagina == $i){
            $output['paginacion'] .= '<li class="page-item active"><a class="page-link" href="#" >' . $i . '</a></li>';
        }else{
            $output['paginacion'] .= '<li class="page-item"><a class="page-link" href="#" onclick="getData('.
            $i .')">' . $i . '</a></li>';
        }
    }

    $output['paginacion'] .= '</ul>';
    $output['paginacion'] .= '</nav>';
}

// Devuelve la respuesta como JSON
header("Content-Type: application/json");
echo json_encode($output, JSON_UNESCAPED_UNICODE);
?>
