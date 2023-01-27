<?php 
//# Conectamos con MySQL 
require_once('../../../../php/conexion.php'); 
$result=$mysqli->query("SELECT * FROM productos WHERE nombre like '%".$_POST["bnombre"]."%'"); 
$tabla=""; 
while($row=$result->fetch_array(MYSQLI_ASSOC)){      
    $tabla = $tabla."<tr>"                                 
    ."<td>".$row["id"]."</td>"                                 
    ."<td>".$row["nombre"]."</td>"                                 
    ."</tr>"; } $pregunta = new stdClass();  
    $pregunta->mensaje = "Datos encontrados"; 
    $pregunta->contenido = $tabla; 
    $json = json_encode($pregunta); 
    echo($json); 
    ?> 
