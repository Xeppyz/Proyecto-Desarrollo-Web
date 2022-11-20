<?php

class rol_opciones
{
    private $id_rol_opciones;
    private $rol_id_rol;
    private $opciones_id_opciones;


    public function GET($k)
    {
        return $this->$k;
    }

    public function SET($k, $v)
    {
        return $this->$k = $v;
    }
}
