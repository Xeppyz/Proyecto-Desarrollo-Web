<?php

require_once("conexion.php");
require_once("../entidades/tbl_kermesse.php");

class dt_tbl_kermesse extends Conexion
{
    private $myCon;

    public function listarKermesse()
    {
        try {
            $sql = "SELECT * FROM tbl_kermesse where estado<>3;";
            $result = array();
            $stm = $this->conectar()->prepare($sql);
            $stm->execute();

            foreach ($stm->fetchAll(PDO::FETCH_OBJ) as $r) {
                $tk = new tbl_kermesse();

                $tk->setIdKermesse($r->id_kermesse);
                $tk->setIdParroquia($r->idParroquia);
                $tk->setNombre($r->nombre);
                $tk->setfInicio($r->fInicio);
                $tk->setfFinal($r->fFinal);
                $tk->setDescripcion($r->descripcion);
                $tk->setUsuarioCreacion($r->usuario_creacion);
                $tk->setFechaCreacion($r->fecha_creacion);
                $tk->setUsuarioModificacion($r->usuario_modificacion);
                $tk->setFechaModificacion($r->fecha_modificacion);
                $tk->setUsuarioEliminacion($r->usuario_eliminacion);
                $tk->setFechaEliminacion($r->fecha_eliminacion);

                $result[] = $tk;
            }
            return $result;
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function guardarKermesse(tbl_kermesse $tk)
    {
        $date = date('Y-m-d H:i:s');

        try {
            $sql = "INSERT INTO tbl_kermesse (idParroquia, nombre, fInicio, fFinal, descripcion, estado, 
                          usuario_creacion, fecha_creacion) VALUES (?,?,?,?,?,1,1,?)";
            $query = $this->conectar()->prepare($sql)->execute(array(
                $tk->getIdParroquia(),
                $tk->getNombre(),
                $tk->getfInicio(),
                $tk->getfFinal(),
                $tk->getDescripcion(),
                $date
            ));
            var_dump($query);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function mostrarKermesse($id_kermesse)
    {
        try {
            $sql = "SELECT * FROM tbl_kermesse where estado <>3 and id_kermesse=?;";
            $stm = $this->conectar()->prepare($sql);
            $stm->execute(array($id_kermesse));

            $r = $stm->fetch(PDO::FETCH_OBJ);
            $tk = new tbl_kermesse();

            $tk->setIdKermesse($r->id_kermesse);
            $tk->setIdParroquia($r->id_parroquia);
            $tk->setNombre($r->nombre);
            $tk->setfInicio($r->fInicio);
            $tk->setfFinal($r->fFinal);
            $tk->setDescripcion($r->descripcion);
            $tk->setEstado($r->estado);
            $tk->setUsuarioCreacion($r->usuario_creacion);
            $tk->setFechaCreacion($r->fecha_creacion);
            $tk->setUsuarioModificacion($r->usuario_modificacion);
            $tk->setFechaModificacion($r->fecha_modificacion);
            $tk->setUsuarioEliminacion($r->usuario_eliminacion);
            $tk->setFechaEliminacion($r->fecha_eliminacion);

            return $tk;
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function editarKermesse(tbl_kermesse $tk)
    {
        $date = date('Y-m-d H:i:s');

        try {
            $sql = $sql = "UPDATE tbl_kermesse SET nombre = ?, fInicio = ?,  fFinal = ?, descripcion = ?, estado = 2, usuario_modificacion = 1, fecha_modificacion = ? WHERE id_kermesse = ?";
            $query = $this->conectar()->prepare($sql);

            $query->execute(array(
                $tk->getNombre(),
                $tk->getfInicio(),
                $tk->getfFinal(),
                $tk->getDescripcion(),
                $date,
                $tk->getIdKermesse()
            ));

        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function eliminarKermesse($id_kermesse)
    {
        $date = date('Y-m-d H:i:s');

        try {
            $sql = "UPDATE tbl_kermesse SET estado = 3, usuario_eliminacion = 1, fecha_eliminacion = ? where id_kermesse = ?";
            $query = $this->conectar()->prepare($sql);

            $query->execute(array(
                $date,
                $id_kermesse
            ));

        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}