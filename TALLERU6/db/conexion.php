<?php 
    
    $host = 'localhost';
    $usuario = 'root';
    $contraseña = '';
    $basedatos = 'bd_tallerp5';

    $conexion = new mysqli($host,$usuario,$contraseña,$basedatos);

    if ($conexion->connect_errno){
        echo "fallos en conexión";
    }
    else{
        echo "conexión ok";
    }
?>