<?php

if($_SERVER["REQUEST_METHOD"] == "GET"){
    require_once('conexion.php');
    $my_query = 'select * from estudiante';

    require_once('retornoGenerico.php');

    $result->close();
    $mysql->close();
}

?>