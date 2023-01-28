console.log($);
function agregarUsuario() {
    var formData = $("#formPrograma").serialize();
    console.log("password", $("#password").val());
    console.log("repetir_password", $("#repetir_password").val());
    if ($("#password").val() == $("#repetir_password").val()) {
        $.ajax({
            url: "php/agregar.php",
            type: "post",
            dataType: "html",
            data: formData,
            success: function (res) {
                $("#mensajes").html(res);
            },
            error: function (e) {
                $("#mensajes").html("No se puede agregar los datos, Error:" + e.status);
            }
        });
    }
    else {
        $("#mensajes").html("Las contraseñas no coinciden");
    }
}

console.log("formPrograma", $("#formPrograma"));

$("#agregarUsuario").on("click", function (evento) {
    evento.preventDefault();
    agregarUsuario();
})

function buscarNombreUsuario() {
    var datosFormulario = $("#formBuscar").serialize();
    $.ajax({
        type: 'POST',
        url: 'php/buscarNombre.php',
        data: datosFormulario,
        dataType: 'html',
        beforeSend: function (objeto) {
            //$("#mensajes").html("Enviando datos al servidor...");
            $("#contenidoBusqueda").css("display", "none");
        },
        success: function (respuesta) {
            //$("#mensajes").html(respuesta.mensaje);
            $("#contenidoBusqueda").html(respuesta);
            $("#contenidoBusqueda").fadeIn("slow");
            $("tbody tr").on("click", function () {
                var id = $(this).find("td:first").html();
                $("#panelBuscar").html("");
                $("#cod_usuario").val(id);
                $("#nombre_usuario").focus();
                buscarIdUsuario();
                $("#buscar").fadeOut("slow");
                $("#panelPrograma").fadeIn("slow");
            });
        },
        error: function (error) {
            $("#mensajes").html("Error:" + error.responseText);
        }
    });
}
function buscarIdUsuario() {
    var datosFormulario = $("#formPrograma").serialize();
    $.ajax({
        type: 'POST',
        url: 'php/buscarId.php',
        data: datosFormulario,
        dataType: 'json',
        beforeSend: function (objeto) {
            $("#mensajes").html("Enviando datos al servidor...");
        },
        success: function (json) {
            $("#mensajes").html(json.mensaje);
            $("#nombre_usuario").val(json.nombre_usuario);
            $("#login_usuario").val(json.login_usuario);
            $("#pass_usuario").val(json.pass_usuario);
            $("#rep_pass").val(json.pass_usuario);
            $("#botonAgregar").prop('disabled', true);
            $("#botonModificar").prop('disabled', false);
            $("#botonEliminar").prop('disabled', false);
            $("#botonCancelar").prop('disabled', false);
        },
        error: function (e) {
            $("#mensajes").html("Error:" + e.responseText);
        }
    });
}
function eliminarUsuario() {
    var datosFormulario = $("#formPrograma").serialize();
    $.ajax({
        type: 'POST',
        url: 'php/eliminar.php',
        data: datosFormulario,
        dataType: 'html',
        beforeSend: function (objeto) {
            $("#mensajes").html("Enviando datos al servidor...");
        },
        success: function (res) {
            $("#mensajes").html(res);
            limpiarCampos();
            $("#botonAgregar").prop('disabled', false);
            $("#botonModificar").prop('disabled', true);
            $("#botonEliminar").prop('disabled', true);
            $("#botonCancelar").prop('disabled', true);
        },
        error: function (e) {
            $("#mensajes").html("No se pudo eliminar error" + e.responseText);
        }
    });
}
function modificarUsuario() {
    var datosFormulario = $("#formPrograma").serialize();
    if ($("#password").val() == $("#repetir_password").val()) {
        $.ajax({
            type: 'POST',
            url: 'php/modificar.php',
            data: datosFormulario,
            dataType: 'html',
            beforeSend: function (objeto) {
                $("#mensajes").html("Enviando datos al servidor...");
            },
            success: function (res) {
                $("#mensajes").html(res);
                limpiarCampos();
                $("#botonAgregar").prop('disabled', false);
                $("#botonModificar").prop('disabled', true);
                $("#botonEliminar").prop('disabled', true);
                $("#botonCancelar").prop('disabled', true);
            },
            error: function (e) {
                $("#mensajes").html("Error:" + e.responseText);
            }
        });
    } else {
        $("#mensajes").html("Las contraseñas no coinciden");

    }
}
function limpiarCampos() {
    $("#nombre").val("");
    $("#apellido").val("");
    $("#asunto").val("");
    $("#email").val("");
    $("#telefono").val("");
    $("#celular").val("");
    $("#mensaje").val("");
}

function loguearUsuario() {
    var formData = $("#login-form").serialize();
    console.log("username", $("#username").val());
    console.log("password", $("#password").val());
        $.ajax({
            url: "php/ValidarAcceso.php",
            type: "post",
            dataType: "json",
            data: formData,
            success: function (res) {
                if(res.acceso == "true"){
                    $("#respuesta").html("Hola, iniciando sesion!");
                    setTimeout(
                        function(){
                            window.location.href = "http://localhost/leccion37/IDT/IDT/perfil.php";
                        }, 2500

                        
                    )
                }else{
                    $("#respuesta").html("Credenciales invalidas");
                }
                
            },
            error: function (e) {
                $("#respuesta").html("No se puede loguear con los datos, Error:" + e.status);
            }
        });
    }
    
   

console.log("login-form", $("#login-form"));

$("#loguearUsuario").on("click", function (evento) {
    evento.preventDefault();
    loguearUsuario();
})

function agregarProducto() {
    var formData = $("#formPrograma").serialize();
        $.ajax({
            url: "frm/archivos/productos/php/agregar.php",
            type: "post",
            dataType: "html",
            data: formData,
            success: function (res) {
                $("#mensajes").html(res);
            },
            error: function (e) {
                $("#mensajes").html("No se puede agregar los datos, Error:" + e.status);
            }
        });
    }
    

console.log("formPrograma", $("#formPrograma"));

$("#agregarProducto").on("click", function (evento) {
    evento.preventDefault();
    agregarProducto();
})