<?php
/**
 * Created by PhpStorm.
 * User: Vladimir Palamarchuk
 * Date: 27.07.2017
 * Time: 13:34
 */
namespace Interfaces\lorry;

interface LorryInterface {

    /**
     * Method move
     * @return string
     */
    public function move();

    /**
     * Method emptyLoads
     * @param $object string
     * @return string
     */
    public function emptyLoads($object);
}