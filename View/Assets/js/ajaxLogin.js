function redirigir_pagina(purl, pparameters, in_new_tab) {
    pparameters = (typeof pparameters == 'undefined') ? {} : pparameters;
    in_new_tab = (typeof in_new_tab == 'undefined') ? true : in_new_tab;

    var form = document.createElement("form");
    $(form).attr("id", "reg-form").attr("name", "reg-form").attr("action", purl).attr("method", "post");
    if (in_new_tab) {
        $(form).attr("target", "_blank");
    }
    $.each(pparameters, function(key) {
        $(form).append('<input type="text" name="' + key + '" value="' + this + '" />');
    });
    document.body.appendChild(form);
    form.submit();
    document.body.removeChild(form);

    return false;
}

$("#ingresar").click(function(){
    comprobarDatos(mensajeError);
});

function comprobarDatos(mensajeError){
    var usuario = $("#usuario").val();
    var clave = $("#clave").val();

    var parametros = {"usuario":usuario,"clave":clave};
    $.ajax({
        type:"POST",
        url:"../../Controller/comprobarLogin.php",
        data:parametros,
        dataType:'json',
        success:function(data){
            if(data.status == "error"){
                var mensaje = 'Usuario o Contraseña Incorrectos';
                mensajeError(mensaje);
            }else{
                redirigir_pagina("index.php","",false);
            }
        }
    });
}

function mensajeError(mensaje){
    $.ajax({
        type:"POST",
        url:"../../Controller/mensajeError.php",
        data:{"msjError":mensaje},
        success:function(data){
            $('#error').html(data); 
        }                  
    });
}