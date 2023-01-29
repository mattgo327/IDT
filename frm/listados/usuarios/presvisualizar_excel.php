<?php $desdeid = $_GET['d'];
$hastaid = $_GET['h'];
$previsualizar = $_GET['pre'];
if ($previsualizar == "no") {
    header('Content-Type: application/vnd.ms-excel');
    header('Content-Disposition: attachment;filename=excel.xls;');     /*recuerda cambiar tu extension a la q estas tomando xls, txt,etc*/
} //# Conectamos con MySQL require_once('../../../php/conexion.php'); $consulta="SELECT cod_usuario,nombre_usuario FROM usuarios WHERE      cod_usuario>=".$desdeid." AND cod_usuario<=".$hastaid.""; $resEmp = $mysqli->query($consulta); 
?> <html>

<body>
    <h1>IDT</h1>
    <h2>Ejemplo de Excel con PHP Y MYSQL</h2>
    <table border="1" class="table table-bordered table-striped table-hover">
        <tr>
            <td>Codigo</td>
            <td>Nombre</td>
        </tr> <?php while ($row = $resEmp->fetch_array(MYSQLI_ASSOC)) {             ?> <tr>
                <td> <?php echo $row["cod_usuario"];                      ?></td>
                <td><?php echo $row["nombre_usuario"]; ?></td>
            </tr> <?php             }             ?>
    </table>
</body>

</html>