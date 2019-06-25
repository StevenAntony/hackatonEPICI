<?php
    require 'DataBase.php';

    class CurGrup{
        public static function listarcursoxgrupo() {
            $consulta = "SELECT C.CodigoCurso, C.DescripcionCurso, G.DescripcionGrupo, D.NombreDoc, 
                D.ApPaternoDoc, D.ApMaternoDoc from Curso C INNER JOIN Grupo G 
                on C.IdCurso = G.IdCurso where INNER JOIN Docente D on G.IdDoc = D.IdDoc;

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