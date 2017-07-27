<?php
/**
 * Created by PhpStorm.
 * User: Vladimir Palamarchuk
 */

use Classes\cars\Cars;
use Classes\lorry\Lorry;
use Classes\boats\Boat;
use Classes\aircraft\AirCraft;

$cars = new Classes\cars\Cars('bmw');
$car = $cars->result_vehicle();

$lorryes = new Lorry('kamaz');
$lorry = $lorryes->result_vehicle();

$boats = new Boat('boat');
$boat = $boats->result_vehicle();

$aircrafts = new AirCraft('helicopter');
$aircraft = $aircrafts->result_vehicle();