<?php
    require_once "data/person.php";
    $person = new Person();
    $person->name = "joko";
    $person->sayHello("Dede");

    $man = new Person();
    $man->name = "Hend";
    $man->sayHello(null);
    
    echo "<br>";
    $person->info();
