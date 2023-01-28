<?php # Conectamos con MySQL 
require_once('conexion.php'); 
$id = $_REQUEST['cod_usuario'];            
 $sql="select * from usuarios where codigo=".$id;             
 $ret=$conexion->query($sql);             
 $row=$ret->fetch_array(MYSQLI_ASSOC); 
 $objeto = new stdClass(); 
 $objeto->mensaje = "Registro encontrado"; 
 $objeto->nombre_usuario = $row["nombre"]; 
 $objeto->pass_usuario = $row["password"]; 
 $objeto->login_usuario = $row["login"]; 
 $json = json_encode($objeto); 
 echo($json); 
?>