<?php 
    include("../Layout/master.php")
?>

<div class="container-scroller">
        
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">LISTADOS DE CURSOS Y DOCENTES</h4>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Código</th>
                            <th>Asignatura</th>
                            <th>Docente</th>
                            <th>Grupo</th>
                        </tr>
                    </thead>
                    <tbody id="tabla">
                    
                    </tbody>
                </table>
            </div>
        </div>
    </div>


<?php 
    include("../Layout/footer.php")
?>