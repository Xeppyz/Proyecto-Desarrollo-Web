<?php

require_once("conexion.php");
require_once("../entidades/tbl_comunidad.php");

class dt_tbl_comunidad extends Conexion
{
    private $myCon;

    public function listarComunidad(){
        try
        {
            $sql = "SELECT * FROM tbl_comunidad where estado<>3;";
            $result = array();
            $stm = $this->conectar()->prepare($sql);
            $stm->execute();

            foreach($stm->fetchAll(PDO::FETCH_OBJ) as $r)
            {
                $tc = new tbl_comunidad();

                $tc->setIdComunidad($r->id_comunidad);
                $tc->setNombre($r->nombre);
                $tc->setResponsable($r->responsable);
                $tc->setDescContribucion($r->desc_contribucion);
                $tc->setEstado($r->estado);

                $result[] = $tc;
            }
            return $result;
        }
        catch (Exception $e)
        {
            die($e->getMessage());
        }
    }

    public function guardarComunidad(tbl_comunidad $tc)
    {
        try
        {
            $sql = "INSERT INTO tbl_comunidad (nombre, responsable, desc_contribucion, estado) VALUES (?,?,?,1)";
            $query = $this->conectar()->prepare($sql)->execute(array(
                $tc->getNombre(),
                $tc->getResponsable(),
                $tc->getDescContribucion()
            ));
            var_dump($query);
        }
        catch (Exception $e)
        {
            die($e->getMessage());
        }
    }

    public function mostrarComunidad($id_comunidad)
    {
        try
        {
            $sql = "SELECT * FROM tbl_comunidad where estado<>3 and id_comunidad=?;";
            $stm = $this->conectar()->prepare($sql);
            $stm->execute(array($id_comunidad));

            $r = $stm->fetch(PDO::FETCH_OBJ);
            $tc = new tbl_comunidad();

            $tc->setIdComunidad($r->id_comunidad);
            $tc->setNombre($r->nombre);
            $tc->setResponsable($r->responsable);
            $tc->setDescContribucion($r->desc_contribucion);

            return $tc;
        }
        catch (Exception $e)
        {
            die($e->getMessage());
        }
    }

    public function editarComunidad(tbl_comunidad $tc)
    {
        try
        {
            $sql = "UPDATE tbl_comunidad SET nombre = ?, responsable = ?, desc_contribucion = ?, estado = 2 where id_usuario = ?";
            $query = $this->conectar()->prepare($sql);

            $query->execute(array(
                $tc->getNombre(),
                $tc->getResponsable(),
                $tc->getDescContribucion(),
                $tc->getEstado(),
                $tc->getIdComunidad()
            ));

        }
        catch (Exception $e)
        {
            die($e->getMessage());
        }
    }

    public function eliminarComunidad($id_comunidad)
    {
        try
        {
            $sql = "UPDATE tbl_comunidad SET estado = 3 where id_comunidad = ?";
            $query = $this->conectar()->prepare($sql);

            $query->execute(array(
                $id_comunidad
            ));

        }
        catch (Exception $e)
        {
            die($e->getMessage());
        }
    }
}