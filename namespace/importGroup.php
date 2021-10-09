<?php
require_once "conflict.php";
require_once "helper.php";

// Pemanggilan nama namespace\namaclass as aliasclass dalam satu code;
use data\one\{conflict as conf, sample as samp, dummy as dump};

// Pemanggilan nama namespace\namafunction dalam satu code;
use function helper\{helpMe, giveMe, treatMe};

// Pemanggilan class menggunakan alias;
$conflict = new conf();

// Pemanggilan class menggunakan alias;
$sample = new samp();
$sample->sample1();

// Pemanggilan class menggunakan alias;
$dummy = new dump();

// Pemanggilan function;
echo "<br>";
helpMe();
echo "<br>";
giveMe();
echo "<br>";
treatMe();