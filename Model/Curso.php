<?php

    require 'DataBase.php';

    class Curso {
        public static function listarcursoxciclo($ciclo) {
            $consulta = "SELECT C.CodigoCurso, C.DescripcionCurso, C.CreditoCurso, C.TipoCur 
                from Curso C INNER JOIN Ciclo Ci on C.IdCiclo = Ci.IdCiclo where 
                Ci.DescripcionCiclo = '" .$ciclo."'";

            try{
                $comando = Database::getInstance()->getDb()->prepare($consulta);
                $comando->execute();
                return $comando->fetchAll(PDO::FETCH_ASSOC);
            } catch(PDOException $e) {
                return false;
            }
        }
    }

?>