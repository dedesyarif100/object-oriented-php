<?php
require_once "shape.php";

$shape = new shape(92822, "Dede");
echo $shape->getNum();
echo "<br>";
echo $shape->getName();
echo "<br><br>";

$retangle = new retangle(11111, "Hend");
$retangle->retangle1();