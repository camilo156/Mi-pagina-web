<?php

$conexion = new mysqli('localhost', 'root', 'a', 'articulos');
if ( $conexion->connect_error){ die('Error de conexiÃ³n'); }
$conexion->set_charset('utf8');

header('Access-Control-Allow-Origin: *');

$sql = $conexion->query('select * from autores');
$array = [];
while ( $fila = $sql->fetch_assoc()){
    array_push($array, $fila);
}
echo json_encode($array);

?>