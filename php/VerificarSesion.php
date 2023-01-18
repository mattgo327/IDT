<?php session_start();
    header("Content-Type: application/json");
    $mensaje = "La sesión está cerrada.";
    $activo = "false";
    if (isset($_SESSION['acceso'])) {
        if ($_SESSION['acceso'] == "true") {
            $mensaje = "Sesión Abierta.";
            $activo = "true";
        }
    }
    $pregunta = new stdClass();
    $pregunta->mensaje = $mensaje;
    $pregunta->activo = $activo;
    $json = json_encode($pregunta);
    echo ($json);
