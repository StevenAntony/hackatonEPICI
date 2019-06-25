<?php
    require 'DataBase.php';
    
    class Usuario{
        public static function mostrarUsuario($usuario,$contraseña){
            $consulta = 'SELECT `IdUsuario`, `Usuario`, `Contrasenia`, `TipoUsuario`, `Estado` FROM `usuario` WHERE 1';
            try {
                $comando = Database::getInstance()->getDb()->prepare($consulta);
            
            } catch (PDOException $e) {
                return false;
            }
        }
    }
?>