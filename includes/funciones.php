<?php


function obtener_servicios(){
    global $db;
    try {
        //importar las credenciales
        require 'database.php';
        //consultar SQL
        $sql = "SELECT * FROM servicios;";
        //realizar la consulta
        $consulta = mysqli_query($db,$sql);
        return $consulta;

    }catch (\Throwable $th){
        var_dump($th);
    }
}
obtener_servicios();
