<?php 

    require '../Model/Curso.php';
    $ciclo = $_POST["ciclo"];
    $total = Curso::listarcursoxciclo($ciclo);

    foreach ($total as $key) {
?>    
        <tr>
            <td class="py-1"><?php echo $key["CodigoCurso"]?></td>
            <td class="py-1"><?php echo $key["DescripcionCurso"]?></td>
            <td class="py-1"><?php echo $key["HoraP"]?></td>
            <td class="py-1"><?php echo $key["HoraT"]?></td>
            <td class="py-1"><?php echo $key["CreditoCurso"]?></td>
            <td class="py-1"><?php echo $key["TipoCur"]?></td>
        </tr>                      

<?php
} 
?>