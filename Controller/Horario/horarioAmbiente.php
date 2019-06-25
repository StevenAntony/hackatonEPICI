<?php


require '../../Model/Horario.php';
$variable = Horario::HorarioXAmbiente(5);

// var_dump($variable);
echo json_encode($variable);

?>