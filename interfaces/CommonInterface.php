<?php
/**
 * Created by PhpStorm.
 * User: Vladimir Palamarchuk
 * Date: 27.07.2017
 * Time: 13:47
 */
namespace Interfaces\common;

interface CommonInterface {

    /**
     * Method stop
     * @return string
     */
    public function stop();

    /**
     * Method refuel
     * @param $type
     * @return mixed
     */
    public function refuel($type);
}