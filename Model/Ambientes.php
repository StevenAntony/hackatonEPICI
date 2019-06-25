<?php
    require 'DataBase.php';

    class Ambientes{
        public static function mostrarAmbiente(){
            $consulta = 'SELECT IdAmb, TipoAmb, DescripcionAmb, Estado FROM ambiente';
            try {
                $comando = Database::getInstance()->getDb()->prepare($consulta);
                $comando->execute();
                return $comando->fetchAll(PDO::FETCH_ASSOC);
            } catch (PDOException $e) {
                return false;
            }
        }
    }
?>