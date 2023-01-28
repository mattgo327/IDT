<!DOCTYPE html>
<html lang="en">
<head>
    <?php $config = require('/xampp/htdocs/leccion37/IDT/IDT/php/configuracion.php'); ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="./../../../css/bootstrap.css">venganzaaaa -->
    <link rel="stylesheet" href="/leccion37/IDT/IDT/css/bootstrap.css">
    <title>Buscar caracoles gigantes  o lo que quieras</title>
</head>
<body>
    <div id="panelBuscar" class="card border border-primary">
        <div class="card-header text-center bg-primary text-white">Buscar Usuarios</div>
        <div class="card-body">
            <form id="formBuscar">
                <input type="hidden" id="bpagina" name="bpagina" value="1" />
                <div class="row">
                    <div class="col-md-1">
                        <span>Nombre</span>
                    </div>
                    <div class="col-md-9">
                        <input id="bnombre" name="bnombre" type="text" class="form-control input-sm" placeholder="Nombre">
                    </div>
                    <div class="col-md-2">
                        <button id="botonBuscar" type="button" class="btn btn-primary btn-sm">
                            Buscar
                        </button>
                    </div>
                </div>
            </form>
            <div id="resultado">
                <table class="table table-bordered table-striped table-hover table-sm">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nombre</th>
                        </tr>
                    </thead>
                    <tbody id="contenidoBusqueda">
                    </tbody>
                </table>
                <nav>
                    <ul class="pagination justify-content-center my-0">
                        <li class="page-item" id="anterior"><a class="page-link" href="#"><span>
                                    &larr;</span> Anterior</a></li>
                        <li class="page-item" id="siguiente"><a class="page-link" href="#">Siguiente<span>
                                    &rarr;</span></a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="card-footer text-center">
            <button id="botonSalirBuscar" type="button" class="btn btn-primary btn-sm">
                Salir</button>
        </div>
    </div>
    <script>
        buscarNombreUsuario();
        $("#bnombre_usuario").focus();
        $("#botonBuscar").on("click", function () {
            $("#contenidoBusqueda").html("");
            $("#bpagina").val("1");
            buscarNombreUsuario();
            $("#bnombre_usuario").focus();
        });
        $("#anterior").on("click", function () {
            $("#contenidoBusqueda").html("");
            var pag = parseInt($("#bpagina").val());
            if (pag > 1) {
                $("#bpagina").val(pag - 1);
            }
            buscarNombreUsuario();
        });
        $("#siguiente").on("click", function () {
            $("#contenidoBusqueda").html("");
            var pag = parseInt($("#bpagina").val());
            $("#bpagina").val(pag + 1);
            buscarNombreUsuario();
        });
        $("#botonSalirBuscar").on('click', function () {
            $("#buscar").fadeOut("slow");
            $("#panelPrograma").fadeIn("slow");
        });
    </script> 
</body>
</html>
