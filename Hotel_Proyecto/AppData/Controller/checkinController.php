<?php
/**
 * Created by PhpStorm.
 * User: Luis
 * Date: 20/05/2018
 * Time: 08:10 PM
 */

namespace AppData\Controller;


class checkinController
{
    private $check_in;

    public function __construct()
    {
        $this->check_in= new \AppData\Model\Checkin();
    }

    public function index()
    {
<<<<<<< HEAD
        $datos1=$this->check_in->getAll();
        $datos2=$this->check_in->getDatos();

        $datos[0]=$datos1;
        $datos[1]=$datos2;
=======
        $datos=$this->check_in->getAll();
>>>>>>> 2cbe7d7094aa2c3c5cc40209028f757c4e7198cd
        return $datos;
    }
}