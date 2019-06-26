<?php
    require 'DataBase.php';
    class Horario{
        public static function HorarioXAmbiente($idAmbiente){
            $consulta = 'SELECT * FROM `ambiente` a INNER JOIN `horario` h ON a.idAmb = h.idAmb INNER JOIN `curgrup` cg ON cg.IdCurGrup = h.IdCurGrup INNER JOIN `curso` c ON cg.idCurso = c.idCurso INNER JOIN `docente` d ON cg.idDoc = d.idDoc INNER JOIN `grupo` g ON cg.IdGrupo = g.IdGrupo WHERE a.idAmb ='. $idAmbiente.'';
            try {
                $comando = Database::getInstance()->getDb()->prepare($consulta);
                $comando->execute();
                return $comando->fetchAll(PDO::FETCH_ASSOC);
            } catch (PDOException $e) {
                return false;
            }
        }
    public static function HorarioDisponible($dni)
    {
        $consulta = 'SELECT * FROM `docente` d INNER JOIN `horariodispo` hd ON d.IdDoc = hd.IdDoc  WHERE d.DNIDoc =' . $dni . '';
        try {
            $comando = Database::getInstance()->getDb()->prepare($consulta);
            $comando->execute();
            return $comando->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            return false;
        }
    }

    public static function mostrarHorario($dniDocente){
        $consulta = 'SELECT H.Dia,H.IdHora,C.DescripcionCurso,C.CodigoCurso,CG.IdGrupo FROM docente D inner join  curgrup CG on D.IdDoc = CG.IdDoc INNER JOIN curso C on CG.IdCurso = C.IdCurso INNER JOIN horario H on H.IdCurGrup = CG.IdCurGrup INNER JOIN ambiente A on H.IdAmb = A.IdAmb WHERE D.DNIDoc ='.$dniDocente;
        try {
            $comando = Database::getInstance()->getDb()->prepare($consulta);
            $comando->execute();
            return $comando->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            return false;
        }
    }

    public static function registrarHorario($dia,$horaTotal,$tipoC,$estado,$idHora,$idAmb,$idCurGrup){
        $consulta = 'INSERT INTO horario(Dia, HoraTotal, TipoC, Estado, IdHora, IdAmb, IdCurGrup) VALUES ('.$dia.','.$horaTotal.','.$tipoC.','.$estado.','.$idHora.','.$idAmb.','.$idCurGrup.')';
        try {
            $comando = Database::getInstance()->getDb()->prepare($consulta);
            $comando->execute();
        } catch (PDOException $e) {
            return false;
        }
    }

    public static function DniUsuario($idUsuario){
        $consulta = 'SELECT Usuario FROM usuario WHERE IdUsuario = '.$idUsuario;
        try{
            $comando = Database::getInstance()->getDb()->prepare($consulta);
            $comando->execute();
            return $comando->fetch(PDO::FETCH_ASSOC);
        }catch(PDOException $e){
            return false;
        }
    }
}
?>