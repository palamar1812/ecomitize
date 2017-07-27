<?php
/**
 * Created by PhpStorm.
 * User: Vladimir Palamarchuk
 * Date: 27.07.2017
 * Time: 14:16
 */

namespace Classes\boats;
use Interfaces\boats\BoatsInterface;
use Interfaces\common\CommonInterface;
use Classes\vehicle\Vehicle;

class Boat extends Vehicle implements CommonInterface,BoatsInterface {

    public function __construct($name)
    {
        parent::__construct($name);
    }

    /**
     * Method result_vehicle
     */
    public function result_vehicle(){
        $this->move();
        $this->swim();
        $this->stop();
        $this->refuel('patrol');
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
     * Method swim
     * @return string
     */
    public function swim()
    {
        return $this->name . ' swimming';
    }
}
