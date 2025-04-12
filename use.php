<?php

require_once "data/Conflict.php";
require_once "data/Helper.php";

use Data\One\Conflict;
use function Helper\HelpMe;
use const Helper\APPLICATION;

$conflict1 = new Conflict();
$conflict2 = new Conflict();

HelpMe();
echo APPLICATION .  PHP_EOL;