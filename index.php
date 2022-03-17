<?php


    $servidor = "148.239.60.61";
    $usuarioDB = "ids";
    $passwordDB = "ids";
    $db = "congresoDivinas";
    $connInfo = array("Database" => $db, "UID" => $usuario);
    
    $conexion = sqlsrv_connect($servidor, $connInfo);

    if ($conexion) {
        echo "conectado";
    } else {
        echo "no conectado";
        die(print_r(sqlsrv_errors()));
    }


?>
