<?php
require_once "programmer.php";

$company = new company();
$company->programmer = new programmer("Eko");
// var_dump($company);

$company->programmer = new BackendProgrammer("Eko");
// var_dump($company);

$company->programmer = new FrontendProgrammer("Eko");
// var_dump($company);

sayHelloProgrammer(new Programmer("Eko"));
echo "<br>";
sayHelloProgrammer(new BackendProgrammer("Eko"));
echo "<br>";
sayHelloProgrammer(new FrontendProgrammer("Eko"));
