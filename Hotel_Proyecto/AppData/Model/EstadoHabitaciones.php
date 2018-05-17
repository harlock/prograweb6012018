<?php
/**
 * Created by PhpStorm.
 * User: JAZMIN
 * Date: 08/05/2018
 * Time: 02:43 PM
 */

namespace AppData\Model;


class EstadoHabitaciones
{
    private $tabla="estado_habitacion";
    private $id_estado;
    private $estado_ha;

    function __construct()
    {
        $this->conexion=new conexion();
    }
    function add()
    {

    }
    function get()
    {
        $sql="select * from {$this->tabla}";
        $datos=$this->conexion->queryResultados($sql);
        return $datos;
    }
    function update()
    {

    }
    function delete()
    {

    }
}