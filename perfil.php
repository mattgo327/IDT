<?php
    session_start();
    if(isset($_SESSION["acceso"]) && $_SESSION["acceso"]== "true"){
        echo "Hola {$_SESSION['nombre']}, como estas? ";
        echo "Deseas cerrar sesion? <a href='./php/CerrarSesion.php'>Salir</a>";
    }else{
        echo "Hola, debes iniciar sesion!";
    }