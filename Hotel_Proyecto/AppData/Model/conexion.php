<?php

namespace AppData\Model;


class conexion
{
<<<<<<< HEAD
    private $datos=array("server"=>"localhost","user"=>"root", "password"=>"", "db"=>"hotel");
=======
    private $datos=array("server"=>"localhost","user"=>"mutso", "password"=>"", "db"=>"hotel1");
>>>>>>> 2cbe7d7094aa2c3c5cc40209028f757c4e7198cd
    private $conexion;

    function __construct()
    {
        $this->conexion=new \mysqli($this->datos["server"],$this->datos["user"], $this->datos["password"],$this->datos["db"]);
        $this->conexion->set_charset("utf8");
    }

    public function QuerySimple($sql)
    {
        $this->conexion->query($sql) or die (mysqli_error($this->conexion));
    }
    public function QueryResultado($sql)
    {
        $datos=$this->conexion->query($sql) or die (mysqli_error($this->conexion));
        return $datos;
    }

    public function __destruct()
    {
        $this->conexion->close();
    }
}