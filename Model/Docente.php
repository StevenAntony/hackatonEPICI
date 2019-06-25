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
    }
