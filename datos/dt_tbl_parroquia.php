<?php

require_once("conexion.php");
require_once("../entidades/tbl_parroquia.php");
class dt_tbl_parroquia extends Conexion
{
    private $myCon;

    public function listarParroquia()
    {
        try
        {
            $sql = "SELECT * FROM tbl_parroquia where estado<>3;";
            $result = array();
            $stm = $this->conectar()->prepare($sql);
            $stm->execute();

            foreach($stm->fetchAll(PDO::FETCH_OBJ) as $r)
            {
                $tp = new tbl_parroquia();
                $tp->setIdParroquia($r->id_parroquia);
                $tp->setNombre($r->nombre);
                $tp->setDireccion($r->direccion);
                $tp->setTelefono($r->telefono);
                $tp->setParroco($r->parroco);
                $tp->setLogo($r->logo);
                $tp->setSitioWeb($r->sitioWeb);

                $result[] = $tp;
            }
            return $result;
        } catch (Exception $e)
        {
            die($e->getMessage());
        }
    }

    public function guardarParroquia(tbl_parroquia $tp)
    {
        try
        {

            $sql = "INSERT INTO tbl_parroquia (nombre, direccion, telefono, parraco, logo, sitioWeb) VALUES 
                    (?,?,?,?,?,)";
            $query = $this->conectar()->prepare($sql)->execute(array(
                $tp->getNombre(),
                $tp->getDireccion(),
                $tp->getTelefono(),
                $tp->getParroco(),
                $tp->getLogo(),
            $tp->getSitioWeb()));

            var_dump($query);

        }
        catch (Exception $e)
        {
            die($e->getMessage());
        }

    }


    public function mostrarParroquia($id_parroquia)
    {
        try
        {
            $sql = "SELECT * FROM tbl_parroquia where estado<>3 and id_parroquia = ?;";
            //$result = array();
            $stm = $this->conectar()->prepare($sql);
            $stm->execute(array($id_parroquia));

            $r = $stm->fetch(PDO::FETCH_OBJ);

            $tu = new tbl_parroquia();

            $tu->setIdParroquia($r->id_parroquia);
            $tu->setNombre($r->nombres);
            $tu->setDireccion($r->direccion);
            $tu->setTelefono($r->telefono);
            $tu->setParroco($r->parroco);
            $tu->setLogo($r->logo);
            $tu->setSitioWeb($r->sitioWeb);

            //$result[] = $tu;
            return $tu;
        }
        catch (Exception $e)
        {
            die($e->getMessage());
        }
    }


}
?>