<?php
/**
 * Created by PhpStorm.
 * User: Vladimir Palamarchuk
 * Date: 27.07.2017
 * Time: 13:33
 */

namespace Classes\lorry;
use Interfaces\lorry\LorryInterface;
use Interfaces\common\CommonInterface;
use Classes\vehicle\Vehicle;

/**
 * Class Lorry
 * @package Classes\cars
 */
class Lorry extends Vehicle implements LorryInterface,CommonInterface
{
    public function __construct($name)
    {
        parent::__construct($name);
    }

    /**
     * Method result_vehicle
     */
    public function result_vehicle(){
        echo $this->move();
        echo $this->emptyLoads('200 kilometers');
        echo $this->stop();
        echo $this->refuel('diesel fuel');
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
     * Method emptyLoads
     * @param string $object
     * @return string
     */
    public function emptyLoads($object)
    {
        return $this->name . ' refuel' . $object;
    }
}