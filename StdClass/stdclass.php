<?php
$array = [
    "firstname" => "Dede",
    "middlename" => "Syarifudin",
    "lastname" => "Hidayat"
];

$object = (object) $array;

var_dump($object);
echo "<br>";

echo "First Name $object->firstname <br>";
echo "Middle Name $object->middlename <br>";
echo "Last Name $object->lastname <br>";

$arrayLog = (array) $object;
var_dump($arrayLog);
