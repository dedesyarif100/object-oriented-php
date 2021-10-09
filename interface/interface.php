<?php
require_once "car.php";
use Data\{Avanza};

$car = new Avanza();
$car->drive();
$car->getTire();