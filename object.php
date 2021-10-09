<?php
    require_once "data/person.php";
    $person = new Person();
    $person->name = "Dede";
    $person->address = "Surabaya";
    $person->country = "Indonesia";

    var_dump($person);

?>