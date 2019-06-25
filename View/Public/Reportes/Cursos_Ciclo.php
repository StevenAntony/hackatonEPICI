<?php 
    include("../Layout/master.php")
?>

    <div class="container-scroller">
        
        <div class="row">
            <div class="col-md-6">
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" style="font-size: 18px;">Ciclo: </label>
                    <div class="col-sm-9">
                        <select>
                        <option value="">SELECCIONE</option>
                            <option value="" id="1">PRIMERO</option>
                            <option value="">SEGUNDO</option>
                            <option value="">TERCERO</option>
                            <option value="">CUARTO</option>
                            <option value="">QUINTO</option>
                            <option value="">SEXTO</option>
                            <option value="">SEPTIMO</option>
                            <option value="">OCTAVO</option>
                            <option value="">NOVENO</option>
                            <option value="">DECIMO</option>
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
                            <th>Créditos</th>
                            <th>Tipo</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="py-1"><?php ?></td>
                            <td class="py-1"></td>
                            <td class="py-1"></td>
                            <td class="py-1"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

<?php 
    include("../Layout/footer.php")
?>