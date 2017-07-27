<?php

/**
 * Created by PhpStorm.
 * User: Vladimir Palamarchuk
 */
require dirname(__DIR__) . '/classes/Cars.php';
use Classes\cars\Cars;
class CarsTest extends PHPUnit_Framework_TestCase
{
    public function testResultVehicle(){
        $car = new Cars('slavuta');
        $result_success = $car->result_vehicle();

        if (is_string($result_success)) {
            $success = true;
            $this->assertTrue($success);
        }else{
            $success = false;
            $this->assertFalse($success);
        }
    }

    public function testMove(){
        $car = new Cars('vaz');
        $result_success = $car->move();

        if (is_string($result_success)) {
            $success = true;
            $this->assertTrue($success);
        }else{
            $success = false;
            $this->assertFalse($success);
        }
    }

    public function musicOn(){
        $car = new Cars('mercedes');
        $result_success = $car->musicOn();

        if (is_string($result_success)) {
            $success = true;
            $this->assertTrue($success);
        }else{
            $success = false;
            $this->assertFalse($success);
        }
    }
}