<?php
    require 'DataBase.php';
    class Horario{
        public static function HorarioXAmbiente($idAmbiente){
            $consulta = 'SELECT * FROM `ambiente` a INNER JOIN `horario` h ON a.idAmb = h.idAmb INNER JOIN `curgrup` cg ON cg.IdCurGrup = h.IdCurGrup INNER JOIN `curso` c ON cg.idCurso = c.idCurso INNER JOIN `docente` d ON cg.idDoc = d.idDoc  WHERE a.idAmb ='. $idAmbiente.'';
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