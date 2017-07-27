<?php
/**
 * Created by PhpStorm.
 * User: Vladimir Palamarchuk
 * Date: 27.07.2017
 * Time: 12:55
 */
namespace Interfaces\cars;

interface CarsInterface {

    /**
     * Method move
     * @return string
     */
    public function move();

    /**
     * Method musicOn
     * @return string
     */
    public function musicOn();
}