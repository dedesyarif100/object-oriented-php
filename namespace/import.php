<?php
require_once "conflict.php";
require_once "helper.php";

// Pemanggilan nama namespace\namaclass as aliasclass;
use data\one\conflict as Conflict1;
use data\two\conflict as Conflict2;

// Pemanggilan nama namespace\namaclass as aliasfunction;
use function helper\helpMe as help;

// Pemanggilan nama namespace\namaconstanta as aliasconstanta;
use const helper\APPLICATION as APP;

// Pemanggilan nama aliasclass;
$conflict1 = new conflict1();
$conflict2 = new conflict2();

echo ($conflict1->satu);
echo "<br>";
echo ($conflict1->dua);
echo "<br>";
$conflict1->angka1();
echo "<br>";
$conflict2->angka2();
echo "<br>";
help();
echo "<br>";
echo APP;