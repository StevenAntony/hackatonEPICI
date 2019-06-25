<?php
    require '../../Model/Docente.php';
    $idDocenta = $_POST["idDocente"];
    $listaCurso = Docente::mostrarCurso($idDocenta);
    foreach ($listaCurso as $key) {
?>
    <option value="<?php echo $key['IdCurso'];?>" horaTeoria="<?php echo $key['HoraT'];?>" horaPractica="<?php echo $key['HoraP'];?>" keyGroup="<?php echo $key["IdCurGrup"];?>"><?php echo $key["DescripcionCurso"]; ?> (<?php echo $key["CodigoCurso"];?>) - Grupo <?php if($key["IdGrupo"]==1){echo "A";}else{echo "B";}?></option>
<?php
    }
?>