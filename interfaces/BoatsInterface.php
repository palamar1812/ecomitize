<?php
/**
 * Created by PhpStorm.
 * User: Vladimir Palamarchuk
 * Date: 27.07.2017
 * Time: 14:18
 */
namespace Interfaces\boats;

interface BoatsInterface {
    /**
     * Method move
     * @return string
     */
    public function move();
    /**
     * Method swim
     * @return string
     */
    public function swim();
}