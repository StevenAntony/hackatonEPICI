$(document).ready(function () {
  $('#buscarDocente').click(function (e) {
    e.preventDefault();

    $.ajax({
      type: "POST",
      url: 'http://localhost:2000/EPICI2019/hackatonEPICI/Controller/AsignarCurso/validarDocente.php',
      data: {
        dni: $('#dniDocenten').val()
      },
      dataType: "json",
      // headers: {
        // 'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
      // },
      beforeSend: function () {

      },
      success: function (response) {
        console.log(response);
        if (response['ban'] == 1) {
          $('.dDocente').html(response['nombre']);
          $('.dDocente').attr('key', response['id']);
        }else{
          $('.dDocente').html('');
          $('.dDocente').attr('key', '');
        }
      }
    });

  });

});