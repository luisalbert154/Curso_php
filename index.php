<?php
require_once('conex/conexion.php');



    // Intentar conectar a la base de datos
   $conex = new mysqli(HOST, USER, PASS, DB);
    if ($conex->connect_error) 
        die("Error de conexión: " . $conex->connect_error);

    echo '<h1 style="color:green ; font-size: 20px;">CONEXIÓN EXITOSA</h1>';






?>

