<?php
require_once "data/Person.php";

define("APPLICATION",
 "belajar php oop");
const APP_VERSION = "1.0.0";
$person = new Person();
echo APPLICATION . PHP_EOL;
echo APP_VERSION . PHP_EOL;
echo Person::AUTHOR . PHP_EOL;

$person->info();