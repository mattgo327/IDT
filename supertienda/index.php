<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <style>
        .resolucion {
            width: 100%;
            aspect-ratio: 16/9;
        }
    </style>
    <script src="./js/persistencia.js"></script>
</head>

<body>
    <header class="text-center">
        <h1>SUPER TIENDA</h1>
        <?php
        include "php/conexion.php";
        $sql = "SELECT * FROM productos";
        $respuesta = $conexion->query($sql);
        $productos = [];
        while ($fila = $respuesta->fetch_assoc()) {
            $productos[] = $fila;
            //array_push($productosm, $fila);
        }
        //print_r($productos);
        ?>
    </header>
    <main class="container bg-primary">
        <section class="bg-success row">
            <?php
            foreach ($productos as $key => $value) {
                //echo "la key es $key y el nombre del prudcuto es: ". $value["descripcion"];

                echo "
                    
                    <article class='col-sm-4 bg-warning'>
                <div class='text-center'
                >{$value['descripcion']} <span>estado</span> </div>
                <figure class='text-center bg-white'>
                    <img class='w-100 resolucion' src='img/{$value['imagen']}' alt='{$value['descripcion']}'>
                </figure>
                <div class='text-center'><span>COD: {$value['codigo']}</span></div>
                <div class='text-center mb-2'>
                    <button class='btn btn-secondary btn-comprar' 
                    data-producto='{$value['id']}' data-precio='{$value['precio']}'>
                        <span class='price' data-producto='{$value['id']}' data-precio='{$value['precio']}'>
                            Comprar a Gs. " . number_format($value['precio'], 0, '.', '.') . "
                        </span>
                    </button>
                </div>
            </article>
                    
                    ";
            }
            ?>
            <!-- <article class="col-sm-4 bg-warning">
                <div class="text-center"
                >Notebook HUAWEI <span>estado</span> </div>
                <figure class="text-center">
                    <img src="https://www.tupi.com.py/imagen_articulo/71338__320__320__NOTEBOOK-HUAWEI-CORE-I5-8GB-RAM-512DE-DISCO-DURO-SSD-MATEBOOK-D14-2021" alt="NOTEBOOK-HUAWEI">
                </figure>
                <div class="text-center"><span>COD: 1324</span></div>
                <div class="text-center mb-2">
                    <button class="btn btn-alert">
                        <span class="price">
                            Comprar a Gs. 10.000
                        </span>
                    </button>
                </div>
            </article> -->
        </section>
    </main>
    <script>
        function getRandomInt(max) {
            return Math.floor(Math.random() * max) + 1;
        }

        let comprobar = obtener("superTiendaCliente");

        if (comprobar === null) {
            const idUsuario = getRandomInt(10000);
            console.log("idUsuario: ", idUsuario);
            guardar("superTiendaCliente", idUsuario)
        }

        //;
        console.log("comprobar", comprobar);

        const btnsComprar = document.querySelectorAll(".btn-comprar")
        console.log("los botones", btnsComprar);

        for (let index = 0; index < btnsComprar.length; index++) {
            btnsComprar[index].addEventListener("click", (e) => {


                alert("Vas a comprar tal producto? ")

                let aComprar = []
                let idCliente = obtener("superTiendaCliente");
                let producto = e.target.dataset.producto;
                aComprar = `idUsuario=${idCliente}&producto=${producto}`



                console.log("el evento (e) ", e)
                // e.target.dataset.precio // producto
                fetch("php/agregarProducto.php", {
                    method: 'POST',
                    //mode: 'cors', // no-cors, *cors, same-origin
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded',
                    },
                    body: aComprar
                }).then(
                    res => res.json()
                ).then(
                    respuesta => {
                        console.log("Hola Matias, soy la respuesta: ", respuesta);
                    }
                )
            })

        }

        /*btnsComprar.addEventListener("click", (e) => {


            alert("Vas a comprar tal producto? ")
            
            let aComprar = []
            let idCliente =obtener("superTiendaCliente");
            let producto = e.target.dataset.producto;
            aComprar = `idUsuario=${idCliente}&producto=${producto}`

            
            
            console.log("el evento (e) ", e)
            // e.target.dataset.precio // producto
            fetch("php/agregarProducto.php", {
                method: 'POST',
                //mode: 'cors', // no-cors, *cors, same-origin
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                },
                body:aComprar
            }).then(
                res => res.json()
                ).then(
                    respuesta => {
                        console.log("Hola Matias, soy la respuesta: ",respuesta);
                    }
                )
            })


    */
    </script>
</body>

</html>