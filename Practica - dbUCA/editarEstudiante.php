<?php

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        require_once 'conexion.php';
        $nombres = $_POST["nombres"];
        $apellidos = $_POST["apellidos"];
        $carrera = $_POST["carrera"];
        $anio = $_POST["anio"];
        $my_query = "update estudiante set nombres = '".$nombres."', apellidos = '".$apellidos."', carrera = '".$carrera."', anio = '".$anio."' where id = ".$_POST["id"];
        $result = $mysql->query($my_query);

        if($result == true){
            echo 'EL ESTUDIANTE SE ACTUALIZO CORRECTAMENTE';
        } else { 
            echo 'error';
        }
    } else {
        echo 'unknown error';
    }

?>