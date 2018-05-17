<?php

namespace AppData\Model;

class Asigna_servicios
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
		$sql="insert into Asigna_servicios values (300, 1, 100, 200, sysdate)";
		$datos= $this->conexion ->querySimple($sql);
	}
	function get() 
	{
		$sql="select * from Asigna_servicios";
		$datos= $this->conexion ->queryResultados($sql);
		return $datos;
	}
	function update() 
	{
		$sql="update Asigna_servicios set id_habitacion = 3 where Asigna_servicios.id_asignaser=300";
		$datos= $this->conexion ->querySimple($sql);
	}
	function delete() 
	{
		$sql="delete Asigna_servicios where Asigna_servicios.id_asignaser=300";
		$datos= $this->conexion ->querySimple($sql);
	}
}