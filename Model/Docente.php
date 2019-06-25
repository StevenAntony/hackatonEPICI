<?php
    require 'DataBase.php';

    class Docente{
        public static function validate($dni){
            $consulta = 'SELECT `IdUsuario`, `Usuario`, `Contrasenia`, `TipoUsuario`, `Estado` FROM `usuario` WHERE 1';
            try {
                $comando = Database::getInstance()->getDb()->prepare($consulta);

            } catch (PDOException $e) {
                return false;
            }
        }
    }
