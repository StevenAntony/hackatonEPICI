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
    $.ajax({
      type: "POST",
      url: 'http://localhost:2000/EPICI2019/hackatonEPICI/Controller/Horario/horarioAmbiente.php',
      data: {
        ambiente: 5
      },
      dataType: "json",
      // headers: {
      // 'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
      // },
      beforeSend: function () {

      },
      success: function (response) {
        console.log(response.length);
        for (var i = 1; i < 6; i++) {
          for (var j = 0; j < response.length; j++) {
            if (i == response[j]['Dia']) {
              var horas = explode(response[j]['IdHora']);
              for (var k = 1; k < 16 ; k++) {
                console.log(horas);

                console.log(horas.indexOf(k+""));
              }
            }
          }
        }
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