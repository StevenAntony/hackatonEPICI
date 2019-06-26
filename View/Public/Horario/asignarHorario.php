<?php
include_once('../Layout/master.php');
?>

<link rel="stylesheet" href="http://localhost:2000/EPICI2019/hackatonEPICI/View/Assets/Lib/Star/vendors/iconfonts/font-awesome/css/font-awesome.min.css">
<style>
  td {
    padding: 0;
  }
</style>
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
          <select class="form-control" id="cursos">
          </select>
        </div>
      </div>
      <!-- <div class="col-md-2">
        <div class="form-group">
          <span class="small">Tipo</span>
          <select class="form-control" id="tipoCurso">
            <option value="1">Teoria</option>
            <option value="2">Practica</option>
          </select>
        </div>
      </div> -->
    </div>
    <hr>
    <div class="row">
      <div class="col-md-2">
        <div class="form-group">
          <span class="small">Ambiente</span>
          <select class="form-control" id="ambientes">
          </select>
        </div>
      </div>
      <div class="col-md-2">
        <button type="button" id="MostrarHorario" class="btn btn-primary btn-fw" style="margin-top:25px">Mostrar Horario</button>
      </div>
    </div>
    <hr>
    <div>
      <span class="small">Horario Semenestre 2019-I</span>
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
          <tbody id="tablaHA">

          </tbody>
        </table>
      </div>
    </div>
    <hr>
    <div class="row">
      <div class="col-md-2">
        <!-- <button type="button" class="btn btn-primary btn-fw">Guardar Horario</button> -->

      </div>
    </div>
  </div>
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Registrar Horario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Curso : <span class="cursoHorarioAsignar"></span>
        <!-- <div class="col-md-4"> -->
        <hr>
        <div class="row">
          <div class="col-md-4">
            Tipo
            <div class="form-group">
              <!-- <span class="small">Tipo</span> -->
              <select class="form-control" id="tipoCurso">
                <option value="horateoria">Teoria</option>
                <option value="horapractica">Practica</option>
              </select>
            </div>
          </div>
          <div class="col-md-6">
            Horario
            <div class="form-group">
              <span class="diaHorario"></span>
              <!-- <span class="small">Tipo</span> -->
              <!-- <input type="number" class="form-control" id="cantidad"  aria-label="Username" aria-describedby="colored-addon3"> -->
            </div>
          </div>
        </div>
        <!-- </div> -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary">Guardar</button>
      </div>
    </div>
  </div>
</div>

<div class="card" style="margin-top:-42px">
            <table class="table table-bordered" style="width: 25%;">
              <thead>
                <tr>
                  <th>Leyenda</th>
                </tr>
              </thead>
              <tbody>
                <tr class="table-info">
                    <td><span style="content:'';width:3px; height:3px; border:solid; color:red" ></span></td>
                    <td>No disponible por Laboratorio</td>
                </tr>
                <tr class="table-info">
                    <td><span style="content:'';width:3px; height:3px; border:solid; color:orange"></span></td>
                    <td>No disponible por horario del Docente</td>
                </tr>
                <tr class="table-info">
                    <td><span style="content:'';width:3px; height:3px; border:solid; color:green"></span></td>
                    <td>Disponible</td>
                </tr>
              </tbody>
            </table>
        </div>

<?php
include_once('../Layout/footer.php');
?>


<script src="http://localhost:2000/EPICI2019/hackatonEPICI/View/Assets/js/asignarCurso.js"></script>