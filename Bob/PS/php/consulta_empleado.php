<?php
    require 'database.php';

    $columns = ['NO_EMPLEADO', 'NOMBRE', 'AP', 'FN', 'fecha_registro'];
    $table = "generales";

    $campo = isset($_POST['campo']) ? $conn->real_escape_string($_POST['campo']) : null;

    $where =  '';
    
    if ($campo != null) {
        $where = "WHERE (";
    
        $cont = count($columns);
        for ($i = 0; $i < $cont; $i++) {
            $where .= $columns[$i] . " LIKE '%" . $campo . "%' OR ";
        }
        $where = substr_replace($where, "", -3);
        $where .= ")";
    }
    

    $sql = "SELECT " . implode(", ", $columns) . " FROM $table $where ";
    $resultado = $conn->query($sql);
    $num_rows = $resultado->num_rows;

    $data = [];

    if ($num_rows > 0) {
        while ($row = $resultado->fetch_assoc()) {
            $data[] = $row;
        }
    } else {
        $data[] = ["message" => "Sin resultados"];
    }

    // Devuelve la respuesta como JSON
    header("Content-Type: application/json");
    echo json_encode($data, JSON_UNESCAPED_UNICODE);

?>

