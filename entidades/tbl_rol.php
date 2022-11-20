<?php
class tbl_rol{
    private $id_rol;
    private $rol_descripcion;
    private $estado;

    public function getIdRol(){
        return $this->id_rol;
    }

    public function setIdRol($id_usuario){
        $this->id_rol = $id_usuario;
    }

    public function getRolDesc(){
        return $this->rol_descripcion;
    }

    public function setRolDesc($nombres){
        $this->rol_descripcion = $nombres;
    }

    public function getEstado(){
        return $this->estado;
    }

    public function setEstado($estado){
        $this->estado = $estado;
    }
}