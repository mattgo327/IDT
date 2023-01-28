<?php
include("configuracion.php");
    $conexion = new mysqli(
    $config["host"],
    $config["user"],
    $config["pass"],
    $config["bd"]
    );

    //var_dump($conexion);