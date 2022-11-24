<?php

require_once("conexion.php");
require_once("../entidades/tbl_parroquia.php");
class dt_tbl_parroquia extends Conexion{

    public function listarParroquias()
    {
        try
        {
            $sql = "SELECT * FROM tbl_parroquia where estado<>3;";
            $result = array();
            $stm = $this->conectar()->prepare($sql);
            $stm->execute();

            foreach($stm->fetchAll(PDO::FETCH_OBJ) as $r)
            {
                $tu = new tbl_parroquia();
                $tu->setIdParroquia($r->id_parroquia);
                $tu->setNombre($r->nombres);
                $tu->setDireccion($r->direccion);
                $tu->setTelefono($r->telefono);
                $tu->setParroco($r->parroco);
                $tu->setLogo($r->logo);
                $tu->setSitioWeb($r->sitioWeb);

                $result[] = $tu;
            }
            return $result;
        } catch (Exception $e)
        {
            die($e->getMessage());
        }
    }

    public function guardarParroquia(tbl_parroquia $tu)
    {
        try
        {

            $sql = "INSERT INTO tbl_usuario (nombres, direccion, telefono, parraco, logo, sitioWeb) VALUES 
                    (?,?,?,?,?,1)";
            $query = $this->conectar()->prepare($sql)->execute(array(
                $tu->getNombre(),
                $tu->getDireccion(),
                $tu->getTelefono(),
                $tu->getParroco(),
                $tu->getLogo(),
            $tu->getSitioWeb()));

            var_dump($query);

        }
        catch (Exception $e)
        {
            die($e->getMessage());
        }

    }

    public function editarParroquia(tbl_parroquia $tu)
    {
        try
        {
            $sql = 'UPDATE tbl_parroquia SET nombres = ?, direccion = ?, telefono = ?, parroco = ?, logo = ?, sitiWeb =?, estado = 2 where id_parroquia = ?';
            $query = $this->conectar()->prepare($sql);
            $query->execute(array(
                $tu->getNombre(),
                $tu->getDireccion(),
                $tu->getTelefono(),
                $tu->getParroco(),
                $tu->getLogo(),
                $tu->getSitioWeb()));
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

    public function eliminarParroquia($id_parroquia)
    {
        try
        {
            $sql = "DELETE FROM `dbkermesse`.`tbl_parroquia` WHERE id_parroquia = ?;";
            $query = $this->conectar()->prepare($sql);

            $query->execute(array(
                $id_parroquia
            ));

        }
        catch (Exception $e)
        {
            die($e->getMessage());
        }
    }
}
?>