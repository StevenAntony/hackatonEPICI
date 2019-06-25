<?php
  $conexion = new PDO(
    'mysql:host=localhost; dbname=epici',
    'root',
    '',
    array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\'')
  );
?>

