<?php 

    require '../Model/CurGrup.php';
    $ciclo = $_POST["ciclo"];
    $total1 = CurGrup::listarcurso1xgrupo($ciclo);
    foreach ($total1 as $key) {
?>    
        <tr>
            <td class="py-1"><?php echo $key["CodigoCurso"]?></td>
            <td class="py-1"><?php echo $key["DescripcionCurso"]?></td>
            <td class="py-1"><?php echo $key["NombreDoc"] ." ". $key["ApPaternoDoc"] ." ". $key["ApMaternoDoc"]?></td>
            <td class="py-1"><?php echo $key["DescripcionGrupo"]?></td>
        </tr>                      

<?php
} 
?>