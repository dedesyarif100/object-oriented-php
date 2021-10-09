<?php
require_once "animal.php";
use Data\{Animal, Cat, Dog};

$cat = new Cat();
$cat->name = "Luna";
$cat->run();
echo "<br>";

$dog = new Dog();
$dog->name = "Doggy";
$dog->run();