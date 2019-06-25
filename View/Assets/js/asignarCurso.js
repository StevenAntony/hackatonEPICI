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