<?php
/**
 * Created by PhpStorm.
 * User: Vladimir Palamarchuk
 * Date: 27.07.2017
 * Time: 14:28
 */

namespace Classes\aircraft;
use Interfaces\aircraft\AircraftInterface;
use Interfaces\common\CommonInterface;
use Classes\vehicle\Vehicle;

/**
 * Class AirCraft
 * @package Classes\aircraft
 */
class AirCraft extends Vehicle implements CommonInterface,AircraftInterface
{
    public function __construct($name)
    {
        parent::__construct($name);
    }

    /**
     * Method result_vehicle
     */
    public function result_vehicle(){
        echo $this->takeOff();
        echo $this->landing();
        echo $this->fly();
        echo $this->stop();
        echo $this->refuel('kerosene');
    }

    /**
     * Method takeOff
     * @return string
     */
    public function takeOff()
    {
        return $this->name . ' took off';
    }

    /**
     * Method landing
     * @return string
     */
    public function landing()
    {
        return $this->name . ' landing';
    }

    /**
     * Method fly
     * @return string
     */
    public function fly()
    {
        return $this->name . ' flying';
    }
}