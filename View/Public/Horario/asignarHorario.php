<?php
include_once('../Layout/master.php');
?>

<link rel="stylesheet" href="http://localhost:2000/EPICI2019/hackatonEPICI/View/Assets/Lib/Star/vendors/iconfonts/font-awesome/css/font-awesome.min.css">

<div class="card">
  <div class="card-body">
    <h4 class="card-title">Asignar Horario - Semenestre 2019-I</h4>
    <hr>

    <div class="row">
      <div class="col-md-3">
        <div class="form-group">
          <span class="small">Buscar Docente</span>
          <div class="input-group">
            <input type="text" class="form-control" id="dniDocenten" placeholder="DNI" aria-label="Username" aria-describedby="colored-addon3">
            <div class="input-group-append bg-primary border-primary" style="cursor: pointer" id="buscarDocente">
              <span class="input-group-text bg-transparent">
                <i class="fa fa-search text-white"></i>
              </span>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        Docente:
        <div class="input-group"><span class="dDocente" key=""> </span></div>
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-md-4">
          <div class="form-group">
            <span class="small">Curso</span>
            <select class="form-control">
              <option>Programacion Avanzada (CL20) - Grupo A</option>
              <option>Diseño Grafico (DG03) - Grupo B </option>
            </select>
          </div>
        </div>
        <div class="col-md-2">
          <div class="form-group">
            <span class="small">Tipo</span>
            <select class="form-control">
              <option>Teoria</option>
              <option>Practica</option>
            </select>
          </div>
        </div>
        <div class="col-md-2">
          <div class="form-group">
            <span class="small">Ambiente</span>
            <select class="form-control">
              <option>Laboratorio 01</option>
              <option>Aula 10</option>
            </select>
          </div>
        </div>
      </div>
      <hr>
      <div>
        <span class="small">Horario Semenestre 2019-I del Laboratorio 01</span>
        <div class="table-responsive">
          <table class="table table-bordered">
            <thead style="text-align: center;">
              <tr>
                <th>

                </th>
                <th>
                  Lunes
                </th>
                <th>
                  Martes
                </th>
                <th>
                  Miercoles
                </th>
                <th>
                  Jueves
                </th>
                <th>
                  Viernes
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="py-1">
                  07:30
                </td>
                <td>

                </td>
                <td>

                </td>
                <td>

                </td>
                <td>

                </td>
                <td>

                </td>
              </tr>
              <tr>
                <td class="py-1">
                  08:20
                </td>
                <td>

                </td>
                <td>

                </td>
                <td>

                </td>
                <td>

                </td>
                <td>

                </td>
              </tr>
              <tr>
                <td class="py-1">
                  09:10
                </td>
                <td>

                </td>
                <td>

                </td>
                <td>

                </td>
                <td>

                </td>
                <td>

                </td>
              </tr>
              <tr>
                <td class="py-1">
                  10:00
                </td>
                <td>

                </td>
                <td>

                </td>
                <td>

                </td>
                <td>

                </td>
                <td>

                </td>
              </tr>
              <tr>
                <td class="py-1">
                  10:50
                </td>
                <td>

                </td>
                <td>

                </td>
                <td>

                </td>
                <td>

                </td>
                <td>

                </td>
              </tr>
              <tr>
                <td class="py-1">
                  11:40
                </td>
                <td>

                </td>
                <td>

                </td>
                <td>

                </td>
                <td>

                </td>
                <td>

                </td>
              </tr>
              <tr>
                <td class="py-1">
                  12:30
                </td>
                <td>

                </td>
                <td>

                </td>
                <td>

                </td>
                <td>

                </td>
                <td>

                </td>
              </tr>
              <tr>
                <td class="py-1">
                  13:20
                </td>
                <td>

                </td>
                <td>

                </td>
                <td>

                </td>
                <td>

                </td>
                <td>

                </td>
              </tr>
              <tr>
                <td class="py-1">
                  14:10
                </td>
                <td>

                </td>
                <td>

                </td>
                <td>

                </td>
                <td>

                </td>
                <td>

                </td>
              </tr>
              <tr>
                <td class="py-1">
                  15:00
                </td>
                <td>

                </td>
                <td>

                </td>
                <td>

                </td>
                <td>

                </td>
                <td>

                </td>
              </tr>
              <tr>
                <td class="py-1">
                  15:50
                </td>
                <td>

                </td>
                <td>

                </td>
                <td>

                </td>
                <td>

                </td>
                <td>

                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-md-2">
          <button type="button" class="btn btn-primary btn-fw">Guardar Horario</button>
        </div>
      </div>
    </div>
  </div>

  <?php
  include_once('../Layout/footer.php');
  ?>


  <script src="http://localhost:2000/EPICI2019/hackatonEPICI/View/Assets/js/asignarCurso.js"></script>