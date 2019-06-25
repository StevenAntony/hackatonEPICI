<?php
    require 'DataBase.php';
    
    class Usuario{
        public static function mostrarUsuario($usuario,$contrasenia){
            $consulta = 'SELECT `IdUsuario`, `Contrasenia`, `TipoUsuario`, `Estado` FROM `usuario` WHERE Usuario = '.$usuario.' AND Contrasenia = '.$contrasenia;
            try {
                $comando = Database::getInstance()->getDb()->prepare($consulta);
                $comando->execute();
                return $comando->fetch(PDO::FETCH_ASSOC);
            } catch (PDOException $e) {
                return false;
            }
        }
    }
?>