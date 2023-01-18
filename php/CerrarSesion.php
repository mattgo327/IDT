<?php session_start();
$mensaje = "";
if (isset($_SESSION['acceso'])) {
    session_destroy();
    $mensaje = "Sesión Cerrada.";
}else{
    echo "Accion Invalida";
}
/*$pregunta = new stdClass();
$pregunta->mensaje = $mensaje;
$json = json_encode($pregunta);*/
echo $mensaje;
header("Location: http://localhost/leccion37/IDT/IDT/login.php");
