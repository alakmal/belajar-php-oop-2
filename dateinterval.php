<?php


$date = new DateTime();
$date->setDate(2020, 12, 30);
$date->setTime(12, 12, 12);

$date->add(new DateInterval("P1Y"));

$dateinterval = new DateInterval("P1M");
$dateinterval->invert = 1;

$date->add($dateinterval);
var_dump($date);