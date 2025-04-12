<?php



require_once "data/Person.php";

$person = new Person("akmal","Subang");
$person->country ="Indonesia";
$person->sayHello("Budi");
$person->sayHello(null);