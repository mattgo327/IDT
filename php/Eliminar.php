<?php 
require_once('../../../../php/conexion.php'); 
$id = $_POST['cod_usuario'];            
 $sql="delete from usuarios where cod_usuario=".$id;             
 $ret=$mysqli->query($sql);             
 $res="Registro NO eliminado";             
 if($ret==1){                 
    $res="Registro eliminado";             
}              
echo($res);
?>