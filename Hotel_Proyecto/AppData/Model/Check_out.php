<?php
/**
 * Created by PhpStorm.
 * User: Mutsorini
 * Date: 08/05/2018
 * Time: 02:46 PM
 */

namespace AppData\Model;


class Check_out
{
    private  $tabla="check_out";
    private $id_chekout;
    private $id_asignares;
    private $fecha_checkout;
    function __construct()
    {
        $this->conexion=new conexion();
    }

    function add(){
        
$sql="insert into checkout(id_checkout,id_asignares) values($id_checkout,$id_asignares)";
$datos=$this->conexion->queryResultado($sql);
return $datos;

    }
    function get(){
        $sql="select*from check_in";
        $datos=$this->conexion->queryResultado($sql);
        return $datos;
    }
    function update(){

    }
    function delete(){

    }

}