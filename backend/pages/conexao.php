<?php

    $usuario = 'root';
    $senha = '';
    $database = 'db_fabrica';
    $host = 'localhost';


    $mysqli = new mysqli($host, $usuario, $senha, $database);

    if($mysqli->error) {
        die("Falha ao conectar no banco de dados: " . $mysqli->error);
    }


?>