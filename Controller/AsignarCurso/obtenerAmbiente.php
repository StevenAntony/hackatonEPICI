<?php
    require '../../Model/Ambientes.php';
    $listaAmbiente = Ambientes::mostrarAmbiente();
    foreach ($listaAmbiente as $key) {
?>
    <option keyAmbiente="<?php echo $key["IdAmb"]; ?>"><?php echo $key["TipoAmb"]." ".$key["DescripcionAmb"]; ?></option>
<?php
    }
?>