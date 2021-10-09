<?php

namespace {
    require_once "conflict.php";
    require_once "helper.php";

    // Pemanggilan nama namespace\namaclass();
    $conflict1 = new data\one\conflict();
    $conflict2 = new data\two\conflict();

    echo helper\APPLICATION . PHP_EOL."<br>";

    helper\helpMe();
}