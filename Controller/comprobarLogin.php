<?php
    require '../Model/Usuario.php';
    session_start();
    $usuario = $_POST['usuario'];
    $clave = $_POST['clave'];
    $data = array();
    $total = Usuario::totalUsuario($usuario,$clave);
    if($total["total"] == 0){
        $_SESSION["status"] = false;
        $data['status']='error';
        $data['data']='';
    }else{
        $variable=Usuario::mostrarUsuario($usuario,$clave);
        if($variable == false){
            $_SESSION["status"] = false;
            $data['status']='error';
            $data['data']='';
        }else{
            $_SESSION["status"] = true;
            $_SESSION["idUsuario"] = $variable['IdUsuario'];
            $data['status']='verdad';
            $data['data']=$variable;
        }
    }
    echo json_encode($data);
?>