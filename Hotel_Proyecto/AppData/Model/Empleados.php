<?php
/**
 * Created by PhpStorm.
 * User: brian
 * Date: 09/05/2018
 * Time: 09:47 PM
 */

namespace AppData\Model;


class Empleados
{
    private  $tabla="Empleados";
    private $id_empleado;
    private $nombre;
    private $apellidos_p;
    private $apellidos_m;

    function __construct()
    {
        $this->conexion=new conexion();
    }

    function add(){

    }
    function get(){
        $sql="select*from Empleados";
        $datos=$this->conexion->queryResultado($sql);
        return $datos;
    }
    function update(){

    }
    function delete(){

    }
}