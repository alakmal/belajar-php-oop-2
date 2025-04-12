<?php

require_once "data/Manager.php";

$manager = new Manager();
$manager->name = "Budi";
$manager->sayHello("Joko");

$vp = new VicePresient();
$vp->name = "Eko";
$vp->sayHello("hani");