$(document).ready(function () {
    Horario();
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
function Horario() {
    // alert($('#ambientes').val())
    $.ajax({
      type: "POST",
      url: 'http://localhost:2000/EPICI2019/hackatonEPICI/Controller/Horario/horarioAmbiente.php',
      data: "",
      dataType: "json",
      success: function (response) {
        // console.log(response.length);
        var html = '';
        var htmlAux = '';
        var ban = 0;
        var ban2 = 0;
        var hora = ['7:30', '8:20', '9:10', '10:00', '10:50', '11:40', '12:30', '13:20', '14:10', '15:00', '16:40', '17:30', '18:20', '19:10', '20:00', '7:30'];
        for (var i = 1; i < 16; i++) {
          html = html + '<tr><td class="py-1">' + hora[i - 1] + '</td>'
          for (var k = 1; k < 6; k++) {
            htmlAux = '';
            ban = 0;
            ban2 = 0;
                    if (response['disponible'].length > 0) {
                        for (var l = 0; l < response['disponible'].length; l++) {
                          if (ban2 == 0) {
                            if (k == response['disponible'][l]['Dia']) {
                              var horasHD = explode(response['disponible'][l]['IdHora']);
                              var pos = horasHD.indexOf(i + "");

                              if (pos != -1) {
                                htmlAux = '';
                                htmlAux = '<td style=" background: #13d469;"><span class="small" style="color:#ffffff">' + response['disponible'][l]['DescripcionCurso'] + '   (' + response['disponible'][l]['CodigoCurso'] + '-';
                                    if(response['disponible'][l]['IdGrupo'] == 1)
                                    { 
                                        htmlAux = htmlAux + "A";
                                    }else{
                                        htmlAux = htmlAux + "B";
                                    } 
                                htmlAux = htmlAux + ')</span></td>';                                
                                ban2 = 1;
                              } else {
                                htmlAux = '';
                                htmlAux = '<td></td>';
                              }
                            } else {
                              htmlAux = '';
                              htmlAux = '<td></td>';
                            }
                          }
                        }
                      }else{
                        htmlAux = '<td></td>';
                      }
            html = html + '' + htmlAux;
          }
          console.log(html);

          html = html + '</tr>';
        }
        $('#tablaHA').html(html);
      }
    });
};