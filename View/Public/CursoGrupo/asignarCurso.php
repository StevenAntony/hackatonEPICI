<?php
include_once('../Layout/master.php');
?>

<link rel="stylesheet" href="http://localhost:2000/EPICI2019/hackatonEPICI/View/Assets/Lib/Star/vendors/iconfonts/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="http://localhost:2000/EPICI2019/hackatonEPICI/View/Assets/Lib/Star/vendors/icheck/skins/all.css">
<style>
  /* .input-helper::before {
    background: red !important;
  } */
  .form-check.form-check-flat label input:checked+.input-helper:before {
    background-color: red !important;
    border: none;
  }
</style>
<div class="card">
  <div class="card-body">
    <h4 class="card-title">Asignar Curso - Semenestre 2019-I</h4>
    <hr>

    <div class="row">
      <div class="col-md-3">
        <div class="form-group">
          <span class="small">Buscar Docente</span>
          <div class="input-group">
            <input type="text" class="form-control" id="dniDocente" placeholder="DNI" aria-label="Username" aria-describedby="colored-addon3">
            <div class="input-group-append bg-primary border-primary" style="cursor: pointer" id="buscarDocente">
              <span class="input-group-text bg-transparent">
                <i class="fa fa-search text-white"></i>
              </span>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        Docente: <span class="dDocente" key=""></span>
      </div>
    </div>
    <hr>
    <?php
    $ciclo = ['I', 'II', 'III', 'IV', 'V', 'VI', 'VII', 'VIII', 'IX', 'X'];
    ?>
    <div class="row">
      <div class="col-md-1">
        <div class="form-group">
          <span class="small">Ciclo</span>
          <select class="form-control">
            <?php
            for ($i = 0; $i < 10; $i++) {
              echo "<option>" . $ciclo[$i] . "</option>";
            }
            ?>
          </select>
        </div>
      </div>
      <div class="col-md-3">
        <div class="form-group">
          <span class="small">Curso</span>
          <select class="form-control">
            <option>Programacion Avanzada(CL20)</option>
            <option>Diseño Grafico (DG03)</option>
            <option>Electronica Digital(ED05)</option>
            <option>Matematica Basica (MB05)</option>
          </select>
        </div>
      </div>
      <div class="col-md-2">
        <div class="form-group">
          <span class="small">Grupo</span>
          <select class="form-control">
            <option>Grupo A</option>
            <option>Grupo B</option>
          </select>
        </div>
      </div>
      <div class="col-md-1">
        <button type="button" class="btn btn-success" style="margin-top: 24px;"><i class="fa fa-plus text-white"></i></button>
      </div>
    </div>

    <hr>
    <div class="row">
      <div class="col-md-6">
        <span class="small">CURSOS ASIGNADOS</span>
        <div class="form-group" style="border: 1px solid #eae9e9;padding: 10px;">
          <div class="form-check form-check-flat">
            <label class="form-check-label">
              <input type="checkbox" class="form-check-input"> Programacion Avanzada(CL20) - GRUPO A
              <i class="input-helper"></i></label>
          </div>
          <div class="form-check form-check-flat">
            <label class="form-check-label">
              <input type="checkbox" class="form-check-input"> Diseño Grafico (DG03) - GRUPO B
              <i class="input-helper"></i></label>
          </div>
          <!-- <div class="form-check form-check-flat">
            <label class="form-check-label">
              <input type="checkbox" class="form-check-input"> Checked
              <i class="input-helper"></i></label>
          </div>
          <div class="form-check form-check-flat">
            <label class="form-check-label">
              <input type="checkbox" class="form-check-input"> Checked
              <i class="input-helper"></i></label>
          </div> -->
        </div>
      </div>
      <div class="col-md-1">
        <button type="button" class="btn btn-danger" style="margin-top: 24px;"><i class="fa fa-minus text-white"></i></button>
      </div>
    </div>

    <hr>

    <div class="row">
      <div class="col-md-2">
        <button type="button" class="btn btn-primary btn-fw">Registrar</button>
      </div>
    </div>
  </div>
  <?php
  include_once('../Layout/footer.php');
  ?>

  <script src="http://localhost:2000/EPICI2019/hackatonEPICI/View/Assets/js/ajaxCurso.js"></script>