<?php
require_once "MathHelper.php";

use Helper\MathHelper;

echo MathHelper::$name."<br>";

MathHelper::$name = "Dede Syarifudin";
echo MathHelper::$name."<br>";

$result = MathHelper::sum(10, 10, 10, 10, 10);
echo "Result : $result";