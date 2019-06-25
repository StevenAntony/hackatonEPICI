<?php
    require 'DataBase.php';

    class Docente{
        public static function validate($dni){
            $consulta = 'SELECT `IdDoc`,`NombreDoc`, `ApPaternoDoc`, `ApMaternoDoc` FROM `docente` WHERE `DNIDoc` ='.$dni.'';
            try {
                $comando = Database::getInstance()->getDb()->prepare($consulta);
                $comando->execute();
                return $comando->fetch(PDO::FETCH_ASSOC);
            } catch (PDOException $e) {
                return false;
            }
        }
        public static function mostrarCurso ($id){
            $consulta = 'SELECT C.CodigoCurso,C.TipoCur,C.DescripcionCurso,CG.IdGrupo FROM docente D inner join curgrup CG on D.IdDoc = CG.IdDoc inner join curso C on CG.IdCurGrup = C.IdCurso WHERE D.IdDoc= '.$id;
            try {
                $comando = Database::getInstance()->getDb()->prepare($consulta);
                $comando->execute();
                return $comando->fetchAll(PDO::FETCH_ASSOC);
            } catch (PDOException $e) {
                return false;
            }
        }
    }
