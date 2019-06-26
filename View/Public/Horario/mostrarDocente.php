<?php
include_once('../Layout/master.php');
?>

<div class="card">
  <div class="card-body">
    <h4 class="card-title">Horario Semenestre 2019-I</h4>
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
</div>

<?php
include_once('../Layout/footer.php');
?>
<script src="http://localhost:2000/EPICI2019/hackatonEPICI/View/Assets/js/ajaxMostrarHorario.js"></script>