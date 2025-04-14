<?php


$array = [
    "firstName" => "Eko",
    "middleName" => "Kurniawan",
    "lastName" => "Khannedy"
];

$object = (object) $array;

var_dump($object);

echo $object->firstName . PHP_EOL;
echo $object->middleName . PHP_EOL;
echo $object->lastName . PHP_EOL;