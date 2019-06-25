<?php
    require '../../Model/Horario.php';
    $dia=$_POST["dia"];
    $horaTotal=$_POST["horaTotal"];
    $tipoC=$_POST["tipoC"];
    $estado=$_POST["estado"];
    $idHora=$_POST["idHora"];
    $idAmb=$_POST["idAmb"];
    $idCurGrup=$_POT["idCurGrup"];
    $status = Horario::registrarHorario($dia,$horaTotal,$tipoC,$estado,$idHora,$idAmb,$idCurGrup);
    
?>