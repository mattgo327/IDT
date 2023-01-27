<?php 
//# Conectamos con MySQL 
$mysqli = new mysqli('localhost','root', '','clase39');
$codigo=$_POST['codigo'];
$nombre = $_POST['nombre']; 
$descripcion = $_POST['descripcion']; 
$precio = $_POST['precio']; 
$ruta="../../../../imagenes_productos/";//ruta carpeta donde queremos copiar las imágenes  
$uploadfile_temporal=$_FILES['imagen']['tmp_name'];  
$uploadfile_nombre=$_FILES['imagen']['name'];     
$sql="INSERT INTO productos (codigo,nombre,descripcion,precio,imagen)    
VALUES ('$codigo','$nombre.','$descripcion','$precio','$uploadfile_nombre')";             
$ret=$mysqli->query($sql);             
$res="Registro NO guardado";             
if($ret==1){                 
    if (is_uploaded_file($uploadfile_temporal))                         
    {                              
        move_uploaded_file($uploadfile_temporal,                                     
        $ruta.$uploadfile_nombre);                          
    }                 
        $res="Registro guardado";             
    }             
    echo($res); 