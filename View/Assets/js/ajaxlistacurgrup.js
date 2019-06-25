$(document).ready(function(){
    listaGrupo();
});

function listaGrupo (){

    $op = {"ciclo":"PRIMERO"};
    $.ajax({
        type:"POST",
        url: "../../../Controller/listarcurgrup.php",
        data: $op,
        success:function(data){
            $("#tabla1").html(data);
        }
    });

    $op2={"ciclo":"SEGUNDO"};
    $.ajax({
        type:"POST",
        url: "../../../Controller/listarcurgrup.php",
        data: $op2,
        success:function(data){
            $("#tabla2").html(data);
        }
    });

    $op3={"ciclo":"TERCERO"};
    $.ajax({
        type:"POST",
        url: "../../../Controller/listarcurgrup.php",
        data: $op3,
        success:function(data){
            $("#tabla3").html(data);
        }
    });

    $op4={"ciclo":"TERCERO"};
    $.ajax({
        type:"POST",
        url: "../../../Controller/listarcurgrup.php",
        data: $op4,
        success:function(data){
            $("#tabla4").html(data);
        }
    });

    $op5={"ciclo":"TERCERO"};
    $.ajax({
        type:"POST",
        url: "../../../Controller/listarcurgrup.php",
        data: $op5,
        success:function(data){
            $("#tabla5").html(data);
        }
    });

    $op6={"ciclo":"TERCERO"};
    $.ajax({
        type:"POST",
        url: "../../../Controller/listarcurgrup.php",
        data: $op6,
        success:function(data){
            $("#tabla6").html(data);
        }
    });

    $op7={"ciclo":"TERCERO"};
    $.ajax({
        type:"POST",
        url: "../../../Controller/listarcurgrup.php",
        data: $op7,
        success:function(data){
            $("#tabla7").html(data);
        }
    });

    $op8={"ciclo":"TERCERO"};
    $.ajax({
        type:"POST",
        url: "../../../Controller/listarcurgrup.php",
        data: $op8,
        success:function(data){
            $("#tabla8").html(data);
        }
    });

    $op9={"ciclo":"TERCERO"};
    $.ajax({
        type:"POST",
        url: "../../../Controller/listarcurgrup.php",
        data: $op9,
        success:function(data){
            $("#tabla9").html(data);
        }
    });

    $op10={"ciclo":"TERCERO"};
    $.ajax({
        type:"POST",
        url: "../../../Controller/listarcurgrup.php",
        data: $op10,
        success:function(data){
            $("#tabla10").html(data);
        }
    });

}; 

