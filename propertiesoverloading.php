<?php


require_once "data/Zero.php";

use Data\Zero;

$zero = new Zero();

// echo $zero->name . PHP_EOL;
$zero->id = 1;
echo $zero->id . PHP_EOL;

var_dump(isset($zero->hai));
unset($zero->kamu);

var_dump($zero);