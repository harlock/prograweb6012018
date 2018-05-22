<?php
/**
 * Created by PhpStorm.
 * User: Mutsorini
 * Date: 08/05/2018
 * Time: 02:30 PM
 */

    namespace AppData\Model;


class Habitaciones
{
     private $tabla="habitaciones";
     private $id_habitacion;
     private $num_habitacion;
     private $descripcion_hab;
     private $id_tipoh;
     private $id_estadoh;

     function __construct()
     {
         $this->conexion=new conexion();
     }

    public function set($atributo,$valor)
    {
        $this->$atributo=$valor;
    }

    public function get($atributo)
    {
        return $this->$atributo;
    }

    function add()
    {
        $sql="insert into {$this->tabla} values('0','{$this->num_habitacion}','{$this->descripcion_hab}','{$this->id_tipoh}','{$this->id_estadoh}')";
        $this->conexion->QuerySimple($sql);
    }

    function getAll()
    {
        $sql="SELECT habitaciones.id_habitacion, habitaciones.num_habitacion, habitaciones.descripcion_hab, tipos_habitacion.tipo_ha, estado_habitacion.estado_ha 
        FROM habitaciones,tipos_habitacion,estado_habitacion 
        WHERE habitaciones.id_tipoh=tipos_habitacion.id_tipoh AND habitaciones.id_estadoh=estado_habitacion.id_estadoh ORDER BY id_habitacion ASC ";
        $datos=$this->conexion->QueryResultado($sql);
        return $datos;
    }

    function getDatos()
    {
        $sql="SELECT * FROM tipos_habitacion";
        $result3=$this->conexion->QueryResultado($sql);
        return $result3;
    }

    function getDatos2()
    {
        $sql="SELECT * FROM estado_habitacion";
        $result2=$this->conexion->QueryResultado($sql);
        return $result2;
    }
}