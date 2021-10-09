<?php
    require_once "data/person.php";

    // keyword constant
    define("APPLICATION", "OOP PHP BASIC");
    const APP_VERSION = "1.0.0";

    echo APPLICATION."<br>";
    echo APP_VERSION."<br>";
    // Pemanggilan Constan di dalam class
    echo person::AUTHOR."<br>";
    