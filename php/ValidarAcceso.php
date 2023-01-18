<?php 

header("Content-Type: application/json");
//print_r($_POST);


require_once('conexion.php');
$login_usuario = $_POST['username'];
$password_usuario = $_POST['password'];
$sql = "select * from usuarios where login='". $login_usuario . 
"' and password='" .$password_usuario . "'";
//echo $sql;
//exit("fin");
$ret = $conexion->query($sql);
session_start();
$_SESSION['acceso'] = "false";
if ($ret->num_rows == 1) {
    if ($fila = $ret->fetch_assoc())
    $_SESSION['acceso'] = "true";
    $_SESSION['nombre'] = $fila["nombre"];
    $_SESSION['id'] = $fila["id"];
}
$pregunta = new stdClass();
$pregunta->acceso = $_SESSION['acceso'];
$json = json_encode($pregunta);
$conexion->close();
echo $json;