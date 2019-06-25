<?php

    require 'DataBase.php'

    class Curso {
        public static function listarcursoxciclo($ciclo) {
            $consulta = "SELECT C.CodigoCurso, C.DescipcionCurso, C.CreditoCurso, C.TipoCur 
                from Curso C INNER JOIN Ciclo Ci on C.IdCiclo = Ci.IdCiclo where 
                Ci.DescripcionCiclo = '" .$ciclo."'";
        }
    }

?>