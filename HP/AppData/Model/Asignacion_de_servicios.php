<?php

namespace AppData\Model;

class Asignacion_de_servicios
{
	private $id_asignaser;
	private $id_habitacion;
	private $id_servicio;
	private $id_estados;
	private $fecha_reg;

	function __construct()
	{
		$this->conexion= new conexion();
	}
	function add()
	{
		$sql="insert into Asignacion_de_servicios values (300, 1, 100, 200, sysdate)";
		$datos= $this->conexion ->querySimple($sql);
	}
	function get() 
	{
		$sql="select * from Asignacion_de_servicios";
		$datos= $this->conexion ->queryResultados($sql);
		return $datos;
	}
	function getAll()
    {
        $sql="SELECT habitaciones.num_habitacion, servicios.descripcion_ser, asignacion_servicios.fecha_reg, estado_servicios.descripcion_est FROM habitaciones, asignacion_servicios, servicios, estado_servicios WHERE habitaciones.id_habitacion=asignacion_servicios.id_habitacion AND servicios.id_servicio=asignacion_servicios.id_servicio AND estado_servicios.id_estados=asignacion_servicios.id_estados ";
        $datos=$this->conexion->QueryResultado($sql);
        return $datos;
    }

    function getDatos1()
    {
        $sql="SELECT * FROM habitaciones ";
        $returnhab=$this->conexion->QueryResultado($sql);
        return $returnhab;
    }
    function getDatos2()
    {
        $sql="SELECT * FROM servicios";
        $returnser=$this->conexion->QueryResultado($sql);
        return $returnser;
    }
    function getDatos3()
    {
        $sql="SELECT * FROM estado_servicios";
        $returnest=$this->conexion->QueryResultado($sql);
        return $returnest;
    }

    function update()
	{
		$sql="update Asignacion_de_servicios set id_habitacion = 3 where Asignacion_de_servicios.id_asignaser=300";
		$datos= $this->conexion ->querySimple($sql);
	}
	function delete() 
	{
		$sql="delete Asignacion_de_servicios where Asignacion_de_servicios.id_asignaser=300";
		$datos= $this->conexion ->querySimple($sql);
	}
}