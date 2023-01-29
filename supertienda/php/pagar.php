<?php
    header("Content-type: application/json");
    include "conexion.php";
    $data = file_get_contents("php://input");
    error_log(
        "\n".json_encode($_POST)." extra: ".$data."\n",
        3,
        "losPagadores.log"
    );

    $documento = $_POST["doc"];
    $tipo_doc = $_POST["tipo_doc"];
    $cliente = $_POST["nombre"];
    $fecha = $_POST["fecha"];
    $monto = $_POST["monto"];
    $productos = $_POST["producto"];
    $cantidads = $_POST["cantidad"];
    $precios = $_POST["precio"];
    $monto_productos = $_POST["monto_producto"];
    
    // Para tipo venta: 0 es contado | 1 es credito
    $sql = "INSERT INTO factura_cab (documento, tipo_doc, cliente, monto_total, fecha, tipo_venta) values ('$documento','$tipo_doc', '$cliente', $monto, $fecha,0)";

    //$res1 = $conexion->query($sql);
    //$idFacturaCab = $conexion->insert_id;
    $sqlDetalle = "INSERT INTO factura_det (cabecera_id, cantidad, precio_unit, producto_id, total_producto)
    values ";
    $sqlTmp = "";
    for ($i=0; $i < sizeof($productos); $i++) { 
        $sqlTmp .= "($idFacturaCab,{$cantidads[$i]},{$precios[$i]},
        {$productos[$i]},{$monto_productos[$i]}),";

    }
    $sqlTmp = substr($sqlTmp,0,-1);
    $ejecutar = $sqlDetalle.$sqlTmp;
    $conexion->query($ejecutar);


    echo json_encode(["respuesta" => "pagado"]);