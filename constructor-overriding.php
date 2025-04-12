<?php

require_once "data/Manager.php";

use Data\VicePresient;

$vp = new VicePresient("Eko");

echo "  My Name is {$vp->name}, and my title is {$vp->title}" . PHP_EOL;