<?php
    require 'DataBase.php';

    class CurGrup{
        
        public static function listarcurso1xgrupo($ciclo) {
            $consulta = "SELECT C.CodigoCurso, C.DescripcionCurso, G.DescripcionGrupo, D.NombreDoc, 
                D.ApPaternoDoc, D.ApMaternoDoc, G.DescripcionGrupo from Curso C INNER JOIN CurGrup CG 
                on C.IdCurso = CG.IdCurso INNER JOIN Grupo G on CG.IdGrupo = G.IdGrupo 
                INNER JOIN Docente D on CG.IdDoc = D.IdDoc INNER JOIN Ciclo Ci on C.IdCiclo = Ci.IdCiclo 
                where Ci.DescripcionCiclo = '" . $ciclo . "'";

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