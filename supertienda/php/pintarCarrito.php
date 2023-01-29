<?php
    header("Content-type: application/json");
    include "conexion.php";
    $clientId =$_REQUEST["elcliente"];

    $sql = "SELECT cab.id, cab.cliente, det.id as detalle_id, det.producto_id,
    det.cantidad, p.descripcion, p.precio
    FROM carrito_cab cab
    inner join carrito_det det
    on cab.id = det.cabecera_id
    inner join productos p
    on p.id = det.producto_id
    where cab.cliente = '$clientId'
    ";

    //echo $sql;

    $respuesta = $conexion->query($sql);
    $paraCarrito = [];
    while ($fila = $respuesta->fetch_assoc()) {
        $paraCarrito[] = $fila;
    }
    echo json_encode($paraCarrito);


?>