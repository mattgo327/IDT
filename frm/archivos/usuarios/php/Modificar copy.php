<?php 
require_once('conexion.php'); 
$cod_usuario = $_REQUEST['cod_usuario']; 
$nombre_usuario = $_POST['nombre_usuario']; 
$login_usuario = $_POST['login_usuario']; 
$pass_usuario = $_POST['pass_usuario'];             
    $sql="update usuarios set nombre=             
    '".$nombre_usuario."',login='".$login_usuario."'             
    ,password='".$pass_usuario."' where codigo=             
    ".$cod_usuario;             
    $ret=$conexion->query($sql);             
    $res="Registro No modificado";             
    if($ret==1){                 
        $res="Registro modificado";             
    }             
    echo($res);
?>
