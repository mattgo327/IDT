<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <script src="./js/persistencia.js"></script>
</head>
<body>
    <form action="" id="miFactura">
        <table>
            <thead>
                <tr>
                    <td>
                        <input type="text" placeholder="Nombre" id="nombre" name="nombre">
                    </td>
                    <td>
                        <input type="text" placeholder="RUC/CI - CUIL/DNI" id="doc" name="doc">
                    </td>
                    <td>
                        <input type="text" placeholder="TIPO DOC" id="tipo_doc" name="tipo_doc">
                    </td>
                    <td>
                        <input type="date" name="fecha" id="fecha" value="<?php echo date("Y-m-d")?>">
                    </td>
                    <td>
                        <input type="text" name="monto" id="monto" value='0'>
                    </td>
                </tr>
                <tr>
                    <td>Producto</td>
                    <td>descripcion</td>
                    <td>Cantidad</td>
                    <td>Precio Unit</td>
                    <td>Precio Total</td>
                </tr>
            </thead>
            <tbody id="datosCarrito">

            </tbody>
        </table>
        <button id="guardarFactura">Pagar!</button>
    </form>
    <script>

function serialize (data) {
	let obj = {};
	for (let [key, value] of data) {
		if (obj[key] !== undefined) {
			if (!Array.isArray(obj[key])) {
				obj[key] = [obj[key]];
			}
			obj[key].push(value);
		} else {
			obj[key] = value;
		}
	}
	return obj;
}



        const elCliente =obtener("superTiendaCliente");
        if (elCliente === null) {
            window.location.href="http://google.com";
        }else{
            aEnviar = "elcliente="+elCliente
            fetch("php/pintarCarrito.php", {
                    method: 'POST',
                    //mode: 'cors', // no-cors, *cors, same-origin
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded',
                    },
                    body: aEnviar
                }).then(
                    res => res.json()
                ).then(
                    respuesta => {
                        console.log("cual?, este: ", respuesta);
                        let myHTML = ""
                        let sumaTotal = 0;
                        respuesta.forEach((element,index) => {
                            console.log(element.producto_id);
                            sumaTotal +=  element.precio * element.cantidad
                            myHTML += `<tr>
                    <td>
                        <input type="text" value="${element.producto_id}" id="producto" name="producto[${index}]">
                    </td>
                    <td>
                        <input type="text" value="${element.descripcion}" id="descripcion" name="descripcion[${index}]">
                    </td>
                    <td>
                        <input type="text" value="${element.cantidad}" id="cantidad" name="cantidad[${index}]">
                    </td>
                    <td>
                        <input type="text" value="${element.precio}" id="precio" name="precio[${index}]">
                    </td>
                    <td>
                        <input type="text" value="${element.precio * element.cantidad}" id="monto_producto" name="monto_producto[${index}]">
                    </td>
                    
                    <tr>`
                        });
                        document.getElementById("datosCarrito").innerHTML = myHTML
                        document.getElementById("monto").value = sumaTotal


                    }
                )
        }

        document.querySelector("#guardarFactura").addEventListener("click",(evento) => {
            evento.preventDefault();
            const formulario = document.querySelector("#miFactura")
            let toSend = []
            const formularioInputs = document.querySelectorAll("#miFactura input");

            formularioInputs.forEach((el,idx) => {
                toSend.push(encodeURIComponent(el.name)+'='+encodeURIComponent(el.value));
                //
            })

            console.log("formularioInputs",formularioInputs);
            console.log("toSend",toSend);
            toSendUrlEnc = toSend.join("&")
            
            console.log("toSendUrlEnc",toSendUrlEnc);


            const enviarFormulario = new FormData(formulario)
            console.log(enviarFormulario);
            fetch("php/pagar.php", {
                    method: 'POST',
                    //mode: 'cors', // no-cors, *cors, same-origin
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded',
                    },
                    body: toSendUrlEnc
                }).then(
                    res => res.json()
                ).then(
                    respuesta => {
                        console.log("Hola a todos, soy la respuesta: ", respuesta);
                    }
                )
        })

    </script>

</body>
</html>