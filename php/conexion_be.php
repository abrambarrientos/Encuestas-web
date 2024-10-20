<?php
    $conexion = mysqli_connect("localhost", "root", "", "registro_usuarios");

    if($conexion){
        echo 'Conexion establecida'
    }else{
        echo 'Conexion no establecida'
    }
?>
