<?php

/**
 * Created by PhpStorm.
 * User: Vladimir Palamarchuk
 * Date: 27.07.2017
 * Time: 12:16
 */
namespace Classes\cars;
use Interfaces\cars\CarsInterface;
use Interfaces\common\CommonInterface;
use Classes\vehicle\Vehicle;

/**
 * Class Cars
 * @package Classes\cars
 */
class Cars extends Vehicle implements CarsInterface,CommonInterface
{
    public function __construct($name)
    {
        parent::__construct($name);
    }

    /**
     * Method result_vehicle
     */
    public function result_vehicle(){
        $this->move();
        $this->musicOn();
        $this->stop();
        $this->refuel('gas');
    }

    /**
     * Method move
     * @return string
     */
    public function move()
    {
        return $this->name . ' moveing';
    }

    /**
     * Method musicOn
     * @return string
     */
    public function musicOn()
    {
        return $this->name . ' music switched on';
    }
}