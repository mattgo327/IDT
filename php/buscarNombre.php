<?php

$nombreBusqueda = isset($_POST['bnombre']) ? $_POST['bnombre'] : "sdsadas";


$mysqli = new mysqli('localhost','root', '','clase39');
//$offset = ((int)($_POST['bpagina']) - 1) * 10;
$sql="SELECT * FROM usuarios WHERE
nombre like '%".$nombreBusqueda."%' LIMIT 10";
$result=$mysqli->query($sql);
$tabla="";
while($row=$result->fetch_assoc()){
 $tabla = $tabla."<tr>"
 ."<td>".$row["codigo"]."</td>"
 ."<td>".$row["nombre"]."</td>"
 ."</tr>";
}
if($tabla==""){
 $tabla="<tr><td colspan='2'>No hay registros...</td></tr>";
}
echo $tabla;
/* $objeto = new stdClass();
$objeto->mensaje = "Datos encontrados";
$objeto->contenido = $tabla;
$json = json_encode($objeto);
echo($json); */
?>