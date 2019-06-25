<?php
    require '../DataBase/Usuario.php';

    $variable=Usuario::mostrarUsuario();
    $data = new array();
    $data = ("status"=>"bien")
?>