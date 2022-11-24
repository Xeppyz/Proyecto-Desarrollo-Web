<?php

class tbl_opciones
{
    private $id_opciones;
    private $opcion_descripcion;
    private $estado;

    /**
     * @return mixed
     */
    public function getIdOpciones()
    {
        return $this->id_opciones;
    }

    /**
     * @param mixed $id_opciones
     */
    public function setIdOpciones($id_opciones): void
    {
        $this->id_opciones = $id_opciones;
    }

    /**
     * @return mixed
     */
    public function getOpcionDescripcion()
    {
        return $this->opcion_descripcion;
    }

    /**
     * @param mixed $opcion_descripcion
     */
    public function setOpcionDescripcion($opcion_descripcion): void
    {
        $this->opcion_descripcion = $opcion_descripcion;
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



    public function __GET($k) {return $this->$k;}
    public function __SET($k, $v) {return $this->$k = $v;}
}