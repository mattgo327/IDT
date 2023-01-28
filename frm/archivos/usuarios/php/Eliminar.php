<?php 
require_once('conexion.php'); 
$id = $_REQUEST['cod_usuario'];            
 $sql="delete from usuarios where codigo=".$id;             
 $ret=$conexion->query($sql);             
 $res="Registro NO eliminado";             
 if($ret==1){                 
    $res="Registro eliminado";             
}              
echo($res);
?>