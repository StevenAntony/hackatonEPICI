<?php
    require '../../Model/Docente.php';
    $idDocenta = $_POST["idDocente"];
    $listaCurso = Docente::mostrarCurso($idDocenta);
    foreach ($listaCurso as $key) {
?>
    <option><?php echo $key["DescripcionCurso"]; ?> (<?php echo $key["CodigoCurso"];?>) - Grupo <?php if($key["IdGrupo"]==1){echo "A";}else{echo "B";}?></option>
<?php
    }
?>