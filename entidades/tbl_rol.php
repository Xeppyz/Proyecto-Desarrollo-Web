<?php
class tbl_rol{
    private $id_rol;
    private $rol_descripcion;
    private $estado;

    /**
     * @return mixed
     */
    public function getIdRol()
    {
        return $this->id_rol;
    }

    /**
     * @param mixed $id_rol
     */
    public function setIdRol($id_rol): void
    {
        $this->id_rol = $id_rol;
    }

    /**
     * @return mixed
     */
    public function getRolDescripcion()
    {
        return $this->rol_descripcion;
    }

    /**
     * @param mixed $rol_descripcion
     */
    public function setRolDescripcion($rol_descripcion): void
    {
        $this->rol_descripcion = $rol_descripcion;
    }

    /**
     * @return mixed
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * @param mixed $estado
     */
    public function setEstado($estado): void
    {
        $this->estado = $estado;
    }

}