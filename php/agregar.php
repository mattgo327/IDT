<?php
    $mysqli = new mysqli('localhost','root', '','clase39');
    $codigo = $_POST['codigo'];
    $login = $_POST['login'];
    $password = $_POST['password'];
    $nombre = $_POST['nombre'];
    $sql = "INSERT INTO usuarios (nombre, login, codigo, password) values('$nombre','$login',
    '$codigo','$password')";

    $mysqli -> query($sql);

    echo "Guardado correctamente.";