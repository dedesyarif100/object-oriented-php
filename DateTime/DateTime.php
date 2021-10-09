<?php
$dateTime = new DateTime();
$dateTime->setDate(1990, 1, 20);
$dateTime->setTime(10,10,10,0);

// $dateTime->add(new DateInterval("PIY"));

// $minusOneMonth = new DateInterval("PIM");
// $minusOneMonth->invert = true;
// $dateTime->add($minusOneMonth);

var_dump($dateTime);
echo "<br>";

$now = new DateTime();
var_dump($now);
echo "<br>";

$now->setTimezone(new DateTimeZone("Asia/Jakarta"));
var_dump($now);
echo "<br>";

$string = $now->format("Y-m-d H:i:s");
echo "Waktu saat ini : $string";
echo "<br>";

$date = DateTime::createFromFormat("Y-m-d H:i:s", "2020-10-10 10:10:10", new DateTimeZone("Asia/Jakarta"));
var_dump($date);
echo "<br>";

if ($date) {
    var_dump($date);
} else {
    echo "Format Salah";
}