<?php

class vw_rol_opcion
{
    private $id_rol_opcion;
    private $id_rol;
    private $rol_descripcion;
    private $id_opciones;
    private $opcion_descripcion;

    public function getIdRolOpcion()
    {
        return $this->id_rol_opcion;
    }

    public function setIdRolOpcion($id_rol_opcion)
    {
        $this->id_rol_opcion = $id_rol_opcion;
    }

    public function getIdRol(){
        return $this->id_rol;
    }

    public function setIdRol($id_rol){
        $this->id_rol = $id_rol;
    }

    public function getRolDescripcion(){
        return $this->rol_descripcion;
    }

    public function setRolDescripcion($rol_descripcion){
        $this->rol_descripcion = $rol_descripcion;
    }

    public function getIdOpciones()
    {
        return $this->id_opciones;
    }

    public function setIdOpciones($id_opciones): void
    {
        $this->id_opciones = $id_opciones;
    }

    public function getOpcionDescripcion()
    {
        return $this->opcion_descripcion;
    }

    public function setOpcionDescripcion($opcion_descripcion): void
    {
        $this->opcion_descripcion = $opcion_descripcion;
    }
}