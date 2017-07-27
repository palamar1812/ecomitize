<?php
/**
 * Created by PhpStorm.
 * User: Vladimir Palamarchuk
 * Date: 26.07.2017
 * Time: 21:51
 */
namespace Classes\vehicle;
/**
 * Class Vehicle
 */
abstract class Vehicle
{
    /**
     * @var
     */
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * Abstract method for output result
     * @return mixed
     */
    abstract function result_vehicle();

    /**
     * Method stop
     * @return string
     */
    public function stop() {
        echo $this->name . ' stopped';
    }

    /**
     * Method refuel
     * @param $object string
     * @return string
     */
    public function refuel($object)
    {
        echo $this->name . ' refuel' . $object;
    }

}