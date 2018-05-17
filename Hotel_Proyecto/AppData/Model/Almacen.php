<?php
/**
 * Created by PhpStorm.
 * User: joseluis
 * Date: 16/05/2018
 * Time: 12:07 PM
 */

namespace AppData\Model;


class Almacen
{
    private $id_almacen;
    private $id_herramienta;
    private $id_equiposegu;

    private $conexion;

    function __construct()
    {
        $this->conexion=new conexion();
    }

    function add(){

    }
    function get(){
        $sql="select*from almacen";
        $datos=$this->conexion->queryResultado($sql);
        return $datos;
    }
    function update(){

    }
    function delete(){

    }
}