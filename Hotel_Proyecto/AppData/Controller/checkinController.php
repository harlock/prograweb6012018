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
        $datos=$this->check_in->getAll();
        return $datos;
    }
}