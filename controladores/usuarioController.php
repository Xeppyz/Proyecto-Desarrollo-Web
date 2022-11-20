<?php
require_once('../entidades/tbl_usuario.php');
require_once("../datos/dt_tbl_usuario.php");

class usuarioController{
    
    public static function guardarUsuario()
    {
        try{
$nombre = $_REQUEST['nombre'];
$apellido = $_REQUEST['apellido'];
$email = $_REQUEST['email'];
$usuario = $_REQUEST['usuario'];
$pwd = $_REQUEST['pwd'];

$tu = new tbl_usuario();

$dtu = new dt_tbl_usuario();

$tu ->setNombres($nombre);
$tu->setApellidos($apellido);
$tu->setEmail($email);
$tu->setUsuario($usuario);
$tu->setPwd($pwd);

$dtu->guardarUsuario($tu);
header("Location: agregar_usuario.php");

        }
        catch(Exception $e){
            die($e->getMessage());

        }
    }
}