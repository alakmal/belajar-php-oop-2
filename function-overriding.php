<?php


require_once "data/Manager.php";

use Data\{Manager, VicePresient};


$manager = new Manager();
$manager->name = "Budi";
$manager->sayHello("Joko");

$vp = new VicePresient();
$vp->name = "Eko";
$vp->sayHello("Joko");