<?php

require '../../Model/Docente.php';
$variable = Docente::validate($_POST['dni']);
$array = [
  'id' => '',
  'ban' => 0,
  'nombre' => ''
];
$nombre = '';

if ($variable != false) {
  foreach ($variable as $key => $e) {
    if ($key == 'IdDoc') {
      $array['id'] = $e;
      $array['ban'] = 1;
    } else {
      $nombre = $nombre . ' ' . $e;
    }
  }
}

$array['nombre'] = $nombre;

echo json_encode($array);
?>