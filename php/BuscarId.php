<?php # Conectamos con MySQL 
require_once('../../../../php/conexion.php'); 
$id = $_POST['cod_usuario'];            
 $sql="select * from usuarios where cod_usuario=".$id;             
 $ret=$mysqli->query($sql);             
 $row=$ret->fetch_array(MYSQLI_ASSOC); 
 $objeto = new stdClass(); 
 $objeto->mensaje = "Registro encontrado"; 
 $objeto->nombre_usuario = $row["nombre_usuario"]; 
 $objeto->pass_usuario = $row["pass_usuario"]; 
 $objeto->login_usuario = $row["login_usuario"]; 
 $json = json_encode($objeto); 
 echo($json); 
?>