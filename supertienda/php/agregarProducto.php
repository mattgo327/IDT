<?php
    header("Content-type: application/json");
    include "conexion.php";

    $cliente = $_POST["idUsuario"];
    //$_POST["precio"];
    $productoId = $_POST["producto"];

    $sqlPreConsulta = "SELECT id FROM carrito_cab where cliente = '$cliente'";
    $res = $conexion->query($sqlPreConsulta);
    if(!$res->num_rows){
        $sql = "INSERT INTO carrito_cab (cliente) values ($cliente)";
        $conexion->query($sql);
        $idCarrito = $conexion->insert_id;
    }else{
        $fila = $res->fetch_assoc();
        $idCarrito = $fila["id"];
    }
    $sqlDetalle = "INSERT INTO carrito_det (cabecera_id, producto_id, cantidad) 
    values ( $idCarrito, $productoId, 1)";
    $conexion->query($sqlDetalle);
    echo json_encode([
        "producto" => $productoId,
        "res" => "producto agregado!"
    ]);




    


