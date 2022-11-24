<?php
require_once ("conexion.php");
require_once("../entidades/tbl_productos.php");
class dt_tbl_productos extends Conexion
{
    private $myCon;

    public function listarProductos(){
        try{

        } catch (Exception $e){
            die($e->getMessage());
        }
    }
}