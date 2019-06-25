$(document).ready(function () {
  $('#buscarDocente').click(function (e) {
    e.preventDefault();

    $.ajax({
      type: "POST",
      url: 'http://localhost:2000/EPICI2019/hackatonEPICI/Controller/AsignarCurso/validarDocente.php',
      data: {dni: $('#dniDocenten').val()},
      dataType: "json",
      beforeSend: function () {

      },
      success: function (response) {
        console.log(response);
        if (response['ban'] == 1) {
          $('.dDocente').html(response['nombre']);
          $('.dDocente').attr('key', response['id']);
          mostrarCursos();
        }else{
          $('.dDocente').html('');
          $('.dDocente').attr('key', '');
        }
      }
    });

  });
  $('#MostrarHorario').click(function () {
    // alert($('#ambientes').val())
    $.ajax({
      type: "POST",
      url: 'http://localhost:2000/EPICI2019/hackatonEPICI/Controller/Horario/horarioAmbiente.php',
      data: {
        ambiente: $('#ambientes').val(),
        dni: $('#dniDocenten').val()
      },
      dataType: "json",
      // headers: {
      // 'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
      // },
      beforeSend: function () {

      },
      success: function (response) {
        // console.log(response.length);
        var html = '';
        var htmlAux = '';
        var hora = ['7:30', '8:20', '9:10', '10:00', '10:50', '11:40', '12:30', '13:20', '14:10', '15:00', '16:40', '17:30', '18:20', '19:10', '20:00', '7:30'];
        for (var i = 1; i < 16; i++) {
          html = html + '<tr><td class="py-1">' + hora[i - 1] + '</td>'
          for (var k = 1; k < 6; k++) {
            htmlAux = '';

            if (response['ambiente'].length > 0) {

              for (var j = 0; j < response['ambiente'].length; j++) {
                console.log(k + '-' + response['ambiente'][j]['Dia']);

                if (k == response['ambiente'][j]['Dia']) {
                  var horas = explode(response['ambiente'][j]['IdHora']);
                  var pos = horas.indexOf(i + "")

                  if (pos != -1) {

                    htmlAux = '<td style=" background: #bb3339;"><span class="small" style="color:#ffffff">' + response['ambiente'][j]['DescripcionCurso'] + '   (' + response['ambiente'][j]['CodigoCurso'] + '-' + response['ambiente'][j]['DescripcionGrupo'] + ')</span></td>';
                  } else {
                    if (response['disponible'].length > 0) {
                      for (var l = 0; l < response['disponible'].length; l++) {

                        if (k == response['disponible'][l]['DiaHD']) {
                          var horasHD = explode(response['disponible'][l]['IdHora']);
                          var pos = horasHD.indexOf(i + "")

                          if (pos != -1) {
                            htmlAux = '<td style=" background: #13d469;"></td>';
                          } else {
                            htmlAux = '<td style=" background: #d4b622!important"></td>';
                          }
                        } else {
                          htmlAux = '<td style=" background: #d4b622!important"></td>';
                        }
                      }
                    }else{
                      htmlAux = '<td style=" background: #d4b622;"></td>';
                    }
                    // htmlAux = '<td style=" background: #13d469;"></td>';
                  }
                } else {
                  // htmlAux = '<td style=" background: #13d469;"></td>';
                  if (response['disponible'].length > 0) {
                    for (var l = 0; l < response['disponible'].length; l++) {

                      if (k == response['disponible'][l]['DiaHD']) {
                        var horasHD = explode(response['disponible'][l]['IdHora']);
                        var pos = horasHD.indexOf(i + "")

                        if (pos != -1) {
                          htmlAux = '<td style=" background: #13d469;"></td>';
                        } else {
                          htmlAux = '<td style=" background: #d4b622!important"></td>';
                        }
                      } else {
                        htmlAux = '<td style=" background: #d4b622!important"></td>';
                      }
                    }
                  }else{
                    htmlAux = '<td style=" background: #d4b622;"></td>';
                  }
                }
              }
            }else{
              // htmlAux = '<td style=" background: #13d469;"></td>';
              if (response['disponible'].length > 0) {
                for (var l = 0; l < response['disponible'].length; l++) {

                  if (k == response['disponible'][l]['DiaHD']) {
                    var horasHD = explode(response['disponible'][l]['IdHora']);
                    var pos = horasHD.indexOf(i + "")

                    if (pos != -1) {
                      htmlAux = '<td style=" background: #13d469;"></td>';
                    } else {
                      htmlAux = '<td style=" background: #d4b622!important"></td>';
                    }
                  } else {
                    htmlAux = '<td style=" background: #d4b622!important"></td>';
                  }
                }
              } else {
                htmlAux = '<td style=" background: #d4b622;"></td>';
              }
            }
            html = html +''+htmlAux;
          }
          html = html + '</tr>';
        }

        $('#tablaHA').html(html);
      }
    });
  });


  function explode(data) {
    var a = data+'';
    var element = [];
    for (var i = 0; i < a.length; i++) {
      if (a[i] != ',') {
        element.push(a[i]);
      }
    }
    return element;
  }

  // console.log(explode('1,2,3'));
  cargarAmbiente();
});

function mostrarCursos(){
  var id = $(".dDocente").attr("key");
  var parametros = {"idDocente":id};
  $.ajax({
    type:"POST",
    url:"../../../Controller/AsignarCurso/obtenerCursos.php",
    data:parametros,
    success:function(data){
      $("#cursos").html(data);
    }
  });
}

function cargarAmbiente(){
  $.ajax({
    type:"POST",
    url:"../../../Controller/AsignarCurso/obtenerAmbiente.php",
    data:"",
    success:function(data){
      $("#ambientes").html(data);
    }
  });
}

function guardarHorario(){
  var idCurGrup = $("#cursos").attr("keyGroup");
  var idAmb = $("#ambientes").val();
  //idHora
  var idHora;
  var tipoC = $("#tipoCurso").val();
  //horatotal
  var horaTotal;
  //dia que se dara
  var dia;
  var parametros={"dia":dia,"horaTotal":horaTotal,"tipoC":tipoC,"estado":1,"idHora":idHora,"idAmb":idAmb,"idCurGrup":idCurGrup}
  $.ajax({
    type:"POST",
    url:"../../../Controller/Horario/registrarHorario.php",
    data:parametros,
    success:function(data){
      $("#ambientes").html(data);
    }
  }); 
}