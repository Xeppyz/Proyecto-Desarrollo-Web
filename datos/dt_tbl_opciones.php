<?php
require_once("conexion.php");
require_once("../entidades/tbl_opciones.php");
class dt_tbl_opciones extends Conexion
{
    private $myCon;

    public function listarOpciones(){
        try
        {
            $sql = "SELECT * FROM tbl_opciones where estado<>3;";
            $result = array();
            $stm = $this->conectar()->prepare($sql);
            $stm->execute();

            foreach($stm->fetchAll(PDO::FETCH_OBJ) as $r)
            {
                $to = new tbl_opciones();

                $to->setIdOpciones($r->id_opciones);
                $to->setOpcionDescripcion($r->opcion_descripcion);
                $to->setEstado($r->estado);

                $result[] = $to;
            }
            return $result;
        }
        catch (Exception $e)
        {
            die($e->getMessage());
        }
    }

    public function guardarOpciones(tbl_opciones $to)
    {
        try
        {
            $sql = "INSERT INTO tbl_opciones (opcion_descripcion, estado) VALUES (?,1)";
            $query = $this->conectar()->prepare($sql)->execute(array(
                $to->getOpcionDescripcion()
            ));
            var_dump($query);
        }
        catch (Exception $e)
        {
            die($e->getMessage());
        }
    }

    public function mostrarOpciones($id_opciones)
    {
        try
        {
            $sql = "SELECT * FROM tbl_opciones where estado<>3 and id_opciones=?;";
            $stm = $this->conectar()->prepare($sql);
            $stm->execute(array($id_opciones));

            $r = $stm->fetch(PDO::FETCH_OBJ);
            $to = new tbl_opciones();

            $to->setIdOpciones($r->id_opciones);
            $to->setOpcionDescripcion($r->opcion_descripcion);
            $to->setEstado($r->estado);

            return $to;
        }
        catch (Exception $e)
        {
            die($e->getMessage());
        }
    }

    public function editarOpciones(tbl_opciones $to)
    {
        try
        {
            $sql = "UPDATE tbl_opciones SET opcion_descripcion = ?, estado = 2 where id_opciones = ?";
            $query = $this->conectar()->prepare($sql);

            $query->execute(array(
                $to->getOpcionDescripcion(),
                $to->getIdOpciones(),

            ));

        }
        catch (Exception $e)
        {
            die($e->getMessage());
        }
    }

    public function eliminarOpciones($id_opciones)
    {
        try
        {
            $sql = "UPDATE tbl_opciones SET estado = 3 where id_opciones = ?";
            $query = $this->conectar()->prepare($sql);

            $query->execute(array(
                $id_opciones
            ));

        }
        catch (Exception $e)
        {
            die($e->getMessage());
        }
    }
}