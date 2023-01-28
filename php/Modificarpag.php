<?php
    include "conexion.php";
    $idUsuario = $_GET["usuario"];
    $sql = "SELECT * from usuarios where id = '$idUsuario'";
    $resp =$conexion->query($sql);
    $fila = $resp->fetch_assoc();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS Only-->
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" 
    crossorigin="anonymous" defer></script>
    <script src="js/jquery-3.3.1.min.js" defer></script>
   <script src="js/funciones.js" defer></script>
    <style>
        .quitar-puntos {
            list-style: none;
        }

        .pr-10{
            padding-right: 10rem;
        }

        .bb-azul{
            border-bottom: 3px solid #007bff;
        }

        .text-r{
            text-align: right;
        }

        @media (max-width: 575px) {
            .text-r{
                text-align: left;
            }
        }
        .bb-gris{
            border-bottom: 2px solid #969ba0;
    }
    .mt{
    margin-top: 400px;}

    </style>
</head>
<body>
    <form action="" id="formPrograma">
        <div class="card-header bg-primary text-white text-r mb-3 pr-10">
            Carga de usuario <?php echo "$idUsuario"; print_r($fila); ?>
        </div>
        <div class="form-group">
            <div class="row">
                <div class=" col-sm-2 text-r">
                    <label for="codigo" class="text-capitalize"
                        >codigo
                    </label>
                </div>
                <div class="col-sm-3">
                    <div class="row">
                        <div class="col-10 col-sm-10">
                            <input
                                type="text"
                                name="codigo"
                                id="codigo"
                                class="form-control"
                                placeholder="Codigo"
                                value="<?php echo $fila["id"]; ?>"
                            />
                        </div>
                        <div class="col-2 col-sm-2">
                            <button class="btn btn-primary">
                                <i class="bi bi-search"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-sm-2 text-r">
                    <label for="login" class="text-capitalize">login</label>
                </div>

                <div class="col-sm-3">
                    <input
                        type="text"
                        name="login"
                        id="login"
                        class="form-control"
                        placeholder="Login"
                        value="<?php echo $fila["login"]; ?>"
                    />
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-sm-2 text-r">
                    <label for="nombre" class="text-capitalize"
                        >nombre</label
                    >
                </div>

                <div class="col-sm-3">
                    <input
                        type="text"
                        name="nombre"
                        id="nombre"
                        class="form-control"
                        placeholder="Nombre"
                        value="<?php echo $fila["nombre"]; ?>"
                    />
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-sm-2 text-r">
                    <label for="password" class="text-capitalize"
                        >password</label
                    >
                </div>

                <div class="col-sm-3">
                    <input
                        type="password"
                        name="password"
                        id="password"
                        class="form-control"
                        placeholder="Password"
                    />
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-sm-2 text-r">
                    <label for="repetir_password" class="text-capitalize"
                        >Repetir password</label
                    >
                </div>

                <div class="col-sm-3">
                    <input
                        type="password"
                        name="repetir_password"
                        id="repetir_password"
                        class="form-control"
                        placeholder="Repetir Password"
                    />
                </div>
            </div>
        </div>

        <div class="card-footer bb-azul">
            <div class="row">
                <div class="col-sm-6"></div>
                <div class="col-sm-6">
                    <div class="text-center">
                        <button class="btn btn-primary" id="agregarUsuario" disabled>Agregar</button>
                        <button class="btn btn-primary" id="modificarUsuario">
                            Modificar
                        </button>
                        <button class="btn btn-primary" disabled>
                            Eliminar
                        </button>
                        <button class="btn btn-primary" disabled>
                            Cancelar
                        </button>
                        <button class="btn btn-primary">Salir</button>
                    </div>
                </div>
            </div>
            <div id="mensajes"></div>

            <!-- <li class="">
                    <button class="btn btn-primary">Agregar</button>
                </li>
                <li class="">
                    <button class="btn btn-primary" disabled>
                        Modificar
                    </button>
                </li>
                <li class="">
                    <button class="btn btn-primary" disabled>
                        Eliminar
                    </button>
                </li>
                <li class="">
                    <button class="btn btn-primary" disabled>
                        Cancelar
                    </button>
                </li>
                <li class="">
                    <button class="btn btn-primary">Salir</button>
                </li> -->
        </div>
        <div class="card-footer  bb-gris text-r mt pr-10" >
            Mensajes del sistema.
        </div>
    </form>
</body>
</html>