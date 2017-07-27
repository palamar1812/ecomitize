<?php
/**
 * Created by PhpStorm.
 * User: Vladimir Palamarchuk
 * Date: 27.07.2017
 * Time: 14:30
 */
namespace Interfaces\aircraft;

interface AircraftInterface {

    /**
     * Method takeOff
     * @return string
     */
    public function takeOff();

    /**
     * Method landing
     * @return string
     */
    public function landing();

    /**
     * Method fly
     * @return string1
     */
    public function fly();

}