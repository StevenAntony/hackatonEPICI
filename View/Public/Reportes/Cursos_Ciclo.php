<?php 
    include("../Layout/master.php")
?>

    <div class="container-scroller">
        
        <div class="row">
            <div class="col-md-6">
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" style="font-size: 18px;">Ciclo: </label>
                    <div class="col-sm-9">
                        <select id="seleccionar">
                            <option value="">SELECCIONE</option>
                            <option value="PRIMERO" >PRIMERO</option>
                            <option value="SEGUNDO">SEGUNDO</option>
                            <option value="TERCERO">TERCERO</option>
                            <option value="CUARTO">CUARTO</option>
                            <option value="QUINTO">QUINTO</option>
                            <option value="SEXTO">SEXTO</option>
                            <option value="SEPTIMO">SEPTIMO</option>
                            <option value="OCTAVO">OCTAVO</option>
                            <option value="NOVENO">NOVENO</option>
                            <option value="DECIMO">DECIMO</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <h4 class="card-title">LISTADOS DE CURSOS SEGÚN CICLO</h4>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Código</th>
                            <th>Asignatura</th>
                            <th>Horas Practicas</th>
                            <th>Horas Teoricas</th>
                            <th>Créditos</th>
                            <th>Tipo</th>
                        </tr>
                    </thead>
                    <tbody id="tabla">
                    
                    </tbody>
                </table>
            </div>
        </div>

        <div class="card" style="margin-top:25px">
            <table class="table table-bordered" style="width: 25%;">
                <thead>
                    <tr>
                        <th>Leyenda</th>
                    </tr>
                </thead>
                <tbody>            
                    <tr class="table-info">
                        <td>G</td>
                        <td>Generales</td>
                    </tr>
                    <tr class="table-secondary">
                        <td>E</td>
                        <td>Especificos</td>
                    </tr>
                    <tr class="table-primary">
                        <td>ES</td>
                        <td>Especialidades</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

<?php 
    include("../Layout/footer.php")
?>

<script src="../../Assets/js/ajaxlistarcursos.js"></script>