<?php

class rol_opciones
{
    private $id_rol_opciones;
    private $tbl_rol_id_rol;
    private $tbl_opciones_id_opciones;

    public function getIdRolUsuario()
    {
        return $this->id_rol_opciones;
    }

    public function setIdRolUsuario($id_rol_opciones)
    {
        $this->id_rol_opciones = $id_rol_opciones;
    }

    public function getTblRolIdRol()
    {
        return $this->tbl_rol_id_rol;
    }

    public function setTblRolIdRol($tbl_rol_id_rol)
    {
        $this->tbl_rol_id_rol = $tbl_rol_id_rol;
    }

    public function getTblOpcionesIdOpciones()
    {
        return $this->tbl_opciones_id_opciones;
    }

    public function setTblOpcionesIdOpciones($tbl_opciones_id_opciones)
    {
        $this->tbl_opciones_id_opciones = $tbl_opciones_id_opciones;
    }
}
