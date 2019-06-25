<?php


require '../../Model/Horario.php';
$variable = Horario::HorarioXAmbiente($_POST['ambiente']);
$variable2 = Horario::HorarioDisponible($_POST['dni']);
// var_dump($variable);
$array = [
  'ambiente' => $variable,
  'disponible' =>  $variable2
];
echo json_encode($array);

?>