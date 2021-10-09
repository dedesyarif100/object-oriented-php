<?php
require_once "goodbye.php";

use data\Traits\{Person, goodbye, sayhello};

$person = new Person();
echo "<br>";
// echo $person->text."<br>";
$person->laravel();

// var_dump($person);
// echo "<br>";

// $person->run();