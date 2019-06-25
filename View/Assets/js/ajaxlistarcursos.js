$("#seleccionar").change(function(){
    
    var opcion = $("#seleccionar").val();
    var selec={"ciclo":opcion};

    $.ajax({
        type:"POST",
        url: "../../../Controller/listarcursos.php",
        data: selec,
        success:function(data){
            $("#tabla").html(data);
        }
    });
});