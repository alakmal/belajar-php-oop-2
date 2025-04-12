<?php

require_once "data/Person.php";

$person = new Person();

echo " Name : {$person->name}" . PHP_EOL;
echo " Addres : {$person->addres}" . PHP_EOL;
echo " Country : {$person->country}" . PHP_EOL;
?>