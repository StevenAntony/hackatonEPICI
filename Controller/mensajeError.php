<?php
    $mensajeError=$_POST['msjError'];
?>
<div class="box-body">
    <div class="alert alert-danger alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
        <h4><i class="icon fa fa-info"></i>Alerta!</h4>
<?php
echo $mensajeError;
?>
    </div>
</div>