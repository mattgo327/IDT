<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS Only-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" 
    crossorigin="anonymous" defer></script>
    <script src="js/jquery-3.3.1.min.js" defer></script>
    <script src="js/funciones.js" defer></script>
    </svg>
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
            Formulario de Productos
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
                    <label for="nombre" class="text-capitalize">Nombre</label>
                </div>

                <div class="col-sm-3">
                    <input
                        type="text"
                        name="nombre"
                        id="nombre"
                        class="form-control"
                        placeholder="Nombre"
                    />
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-sm-2 text-r">
                    <label for="precio" class="text-capitalize"
                        >Precio</label
                    >
                </div>

                <div class="col-sm-3">
                    <input
                        type="text"
                        name="precio"
                        id="precio"
                        class="form-control"
                        placeholder="Precio"
                    />
                </div>
            </div>
        </div>
        <div class="form-group">
        <div class="row">
                    <div class="col-sm-2 text-r">
                        <label for="descripcion">
                            Descripcion
                        </label>
                    </div>
                    <div class="col-8">
                        <div class="row">
                            <div class="col-12 ">
                                <textarea class="form-control" id="descripcion" rows="6" placeholder="Descripcion"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        <br>
        <div class="form-group">
        <div class="row">
                    <div class="col-sm-2 text-r">
                        <label for="Imagen">
                            Imagen
                        </label>
                    </div>
                    <div class="col-sm-3 ">
                        <div class="row ">
                            <div class="col-12  card bg-primary  mb-3 text-white ptb">
                                
                                    <div class="row">
                                        <div class="col-6">
                                           <button class="btn btn-light">Seleccionar archivo</button>
                                        </div>
                                        <div class="col-sm-6 text-center">Ningun archivo seleccionado
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
        </div>

        <div class="card-footer bb-azul">
            <div class="row">
                <div class="col-sm-6"></div>
                <div class="col-sm-6">
                    <div class="text-center">
                        <button class="btn btn-primary" id="agregarProducto">Agregar</button>
                        <button class="btn btn-primary" disabled>
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