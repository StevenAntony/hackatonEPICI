<?php
require '../../Model/Horario.php';
session_start();
$idUsuario = $_SESSION["idUsuario"];
$dni = Horario::DniUsuario($idUsuario);
$variable2 = Horario::mostrarHorario($dni['Usuario']);
$array = [
  'disponible' =>  $variable2
];
echo json_encode($array);

?>